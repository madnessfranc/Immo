<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class RapportsController extends AppController {

	public function home(){
		$this->set('title_for_layout','Immo');
	}

	public function listerapport(){
		if ($this->Auth->user()){
			$allrapport = $this->Rapport->find('all',array('conditions'=>array('UserID'=>$this->Auth->user('id')),'fields'=>array('title','id'),'order'=>'Rapport.created desc'));
			$this->set('allrapport',$allrapport);
		}
	}

	public function deleteQuali(){
		$qualiID = $this->request->pass[0];
		if ($this->Rapport->Qualitatif->exists($qualiID)){
			$this->Rapport->Qualitatif->delete($qualiID);
			$this->Session->setFlash('Qualitatif supprimé !','success');
			$this->redirect($this->referer());
		}
		else{
			$this->Session->setFlash('Ce qualitatif n\'existe pas','error');
			$this->redirect($this->referer());
		}
	}

	public function load(){
            if ($id = $this->request->pass[0]){
			if ($this->request->is('post') && !empty($this->request->data)){
				if ($this->Rapport->findById($id)){
					$this->Rapport->id = $id;
					$this->Rapport->set($this->request->data);
					$this->Rapport->save();
					//debug($this->request->data['Rapport']);
					foreach ($this->request->data['Rapport'] as $key => $value) {
						if (strpos($key,'nbDeLoyer') !== false){
							$number = substr($key, 9);
							if ($this->Rapport->Logement->exists($this->request->data['Rapport']['logementID'.$number])){
								$this->Rapport->Logement->id = $this->request->data['Rapport']['logementID'.$number];
								$this->Rapport->Logement->set('nbDeLoyer', $this->request->data['Rapport']['nbDeLoyer'.$number]);
								$this->Rapport->Logement->set('grandeur', $this->request->data['Rapport']['grandeur'.$number]);
								$this->Rapport->Logement->set('revenuMensuel', $this->request->data['Rapport']['revenuMensuel'.$number]);
								$this->Rapport->Logement->set('pourcAugmentationAnnuelle', $this->request->data['Rapport']['pourcAugmentationAnnuelle'.$number]);
                                                                $total = ($this->request->data['Rapport']['totalRevenuAnnuel'] > 0) ? ($this->request->data['Rapport']['revenuMensuel'.$number] > 0) ? nbr((($this->request->data['Rapport']['revenuMensuel'.$number] * $this->request->data['Rapport']['nbDeLoyer'.$number]) * 100) / $this->request->data['Rapport']['totalRevenuMensuel']) : 0 : 0;
                                                                $this->Rapport->Logement->set('pourcRevenus', $total);
								$this->Rapport->Logement->set('LtotalRevenu', $this->request->data['Rapport']['LtotalRevenu'.$number]);
								$this->Rapport->Logement->save();
							}
							else{
								$this->Rapport->Logement->create();
								$this->Rapport->Logement->set('nbDeLoyer',$this->request->data['Rapport']['nbDeLoyer'.$number]);
								$this->Rapport->Logement->set('grandeur',$this->request->data['Rapport']['grandeur'.$number]);
								$this->Rapport->Logement->set('revenuMensuel',$this->request->data['Rapport']['revenuMensuel'.$number]);
								$this->Rapport->Logement->set('pourcAugmentationAnnuelle',$this->request->data['Rapport']['pourcAugmentationAnnuelle'.$number]);
                                                                $total = ($this->request->data['Rapport']['totalRevenuAnnuel'] > 0) ? ($this->request->data['Rapport']['revenuMensuel'.$number] > 0) ? nbr((($this->request->data['Rapport']['revenuMensuel'.$number] * $this->request->data['Rapport']['nbDeLoyer'.$number]) * 100) / $this->request->data['Rapport']['totalRevenuMensuel']) : 0 : 0;
                                                                $this->Rapport->Logement->set('pourcRevenus',$total);
								$this->Rapport->Logement->set('LtotalRevenu',$this->request->data['Rapport']['LtotalRevenu'.$number]);
								$this->Rapport->Logement->set('rapportId',$id);
								$this->Rapport->Logement->save();
							}
						}
						if (strpos($key,'qualitatifAdd') !== false){
							$number = substr($key, 13);
							if ($this->Rapport->Qualitatif->exists($this->request->data['Rapport']['qualiID'.$number])){
								$this->Rapport->Qualitatif->id = $this->request->data['Rapport']['qualiID'.$number];
								$this->Rapport->Qualitatif->set('nom',$this->request->data['Rapport']['qualitatifAdd'.$number]);
								$this->Rapport->Qualitatif->set('rapportID',$id);
								$this->Rapport->Qualitatif->save();
							}
							else{
								$this->Rapport->Qualitatif->create();
								$this->Rapport->Qualitatif->set('nom',$this->request->data['Rapport']['qualitatifAdd'.$number]);
								$this->Rapport->Qualitatif->set('rapportID',$id);
								$this->Rapport->Qualitatif->save();
							}
						}
					}
					$this->set('rapport',$this->Rapport->data['Rapport']);



					$this->Session->setFlash('Rapport modifié !','success');
					//debug($this->Rapport->data['Rapport']['title']);
				}
			}
			$rapport = $this->Rapport->findById($id)['Rapport'];
			$logements = $this->Rapport->Logement->find('all',array('conditions'=>array('rapportId'=>$id)));
			$qualitatifs = $this->Rapport->Qualitatif->find('all',array('conditions'=>array('rapportID'=>$id)));
			$rapport = $this->commonRapport($rapport,$logements,$qualitatifs);
			//debug($rapport);
			$this->render('rapport');
		}
	}

	private function commonRapport($rapport,$logements = null,$qualitatifs = null, $newid = null){

		//debug($rapport);

		/* REVENUS */

		$rapport['pret'] = nbr($rapport['prixPaye'] * fromPourc($rapport['pourcPret']));
		$rapport['evaluationMunicipale'] = nbr($rapport['terrain'] + $rapport['batisse']);
		$rapport['totalRevenuMensuel'] = 0;

		if ($logements != null){
			$rapport['totalNbrLogement'] = 0;
			$rapport['totalGrandeur'] = 0;
			$rapport['totalTotalRevenuMensuel'] = 0;
			foreach ($logements as $key => $value) {
				$rapport['totalRevenuMensuel'] += nbr($value['Logement']['revenuMensuel'] * $value['Logement']['nbDeLoyer']);
				$rapport['totalNbrLogement'] += nbr($value['Logement']['nbDeLoyer']);
				$rapport['totalGrandeur'] += nbr($value['Logement']['grandeur']);
				$rapport['totalTotalRevenuMensuel'] += nbr(nbr($value['Logement']['revenuMensuel'] * (1 + fromPourc($value['Logement']['pourcAugmentationAnnuelle']))));
			}
			//debug($logements);

		}
		else{
			$totalNbrLog = 0;
			foreach ($rapport as $key => $value) {
				if (strpos($key,'nbDeLoyer') !== false){
					$rapport['totalNbrLogement'] += nbr($value);
					$totalNbrLog = $rapport['totalNbrLogement'];
				}
				if (strpos($key,'revenuMensuel') !== false){
					$rapport['totalRevenuMensuel'] += nbr($value) * $totalNbrLog;
					$number = substr($key, 13);
					$rapport['LtotalRevenu'.$number] = nbr($rapport['revenuMensuel'.$number] * (1 + fromPourc($rapport['pourcAugmentationAnnuelle'.$number])));
				}
				if (strpos($key,'grandeur') !== false){
					$rapport['totalGrandeur'] += nbr($value);
				}
				if (strpos($key,'LtotalRevenu') !== false){
					$rapport['totalTotalRevenuMensuel'] += nbr($value);
				}
			}
		}

		$rapport['totalRevenuAnnuel'] = nbr($rapport['totalRevenuMensuel'] * 12);
		$nbrmonthly = ($rapport['tauxInteret']/100)/12;

		$rapport['remboursementMensuel'] = ($rapport['terme'] > 0) ? number_format((float)($nbrmonthly / (1 - pow((1 + $nbrmonthly),($rapport['terme']*12)*-1))) * ($rapport['pret']*1),2,'.','') : 0;

		$this->set('grandeurOptions',array(
			'1-1/2',
			'2-1/2',
			'3-1/2',
			'4-1/2',
			'5-1/2',
			'6-1/2',
			'7-1/2',
			'8-1/2',
			'9-1/2'
			));

		/*
		The fixed monthly payment for a fixed rate mortgage is the amount paid by the borrower every month that 
		ensures that the loan is paid off in full with interest at the end of its term. This monthly payment c 
		depends upon the monthly interest rate r (expressed as a fraction, not a percentage, i.e., divide the 
		quoted yearly percentage rate by 100 and by 12 to obtain the monthly interest rate), the number of monthly 
		payments N called the loan's term, and the amount borrowed P known as the loan's principal; c is given by the formula:
		*/

		foreach ($rapport as $key => $value) {
			if (strpos($key,'revenuMensuel') !== false){
				$number = substr($key, 13);
				//$rapport['pourcRevenus'.$number] = ($rapport['totalRevenuAnnuel'] > 0) ? nbr(toPourc($value / $rapport['totalRevenuAnnuel'])) : 0; //here
                                $rapport['pourcRevenus'.$number] = ($rapport['totalRevenuAnnuel'] > 0) ? nbr($rapport['totalRevenuAnnuel'] / ($rapport['revenuMensuel'] * $rapport['nbDeLoyer'])) : 0;
                                $rapport['LtotalRevenu'.$number] = nbr($rapport['revenuMensuel'.$number] * (1 + fromPourc($rapport['pourcAugmentationAnnuelle'.$number])));

				$this->Rapport->Logement->create();
				$this->Rapport->Logement->set('nbDeLoyer',$rapport['nbDeLoyer'.$number]);
				$this->Rapport->Logement->set('grandeur',$rapport['grandeur'.$number]);
				$this->Rapport->Logement->set('revenuMensuel',$rapport['revenuMensuel'.$number]);
				$this->Rapport->Logement->set('pourcAugmentationAnnuelle',$rapport['pourcAugmentationAnnuelle'.$number]);
				$this->Rapport->Logement->set('pourcRevenus',$rapport['pourcRevenus'.$number]);
				$this->Rapport->Logement->set('LtotalRevenu',$rapport['LtotalRevenu'.$number]);
				$this->Rapport->Logement->set('rapportId',$newid);
				$this->Rapport->Logement->save();
			}
		}

		$rapport['pourcTotalRevenu'] = ($rapport['totalRevenuAnnuel'] > 0) ? nbr(toPourc($rapport['totalRevenuMensuel'] / $rapport['totalRevenuAnnuel'])) : 0; //here
		$rapport['pourcTotalAugmentationAnnuelle'] = ($rapport['totalRevenuAnnuel'] > 0) ? nbr(toPourc($rapport['pourcTotalRevenu']) / $rapport['totalRevenuAnnuel']) : 0; //here

		$rapport['totalRevenuAnnuel'] = nbr($rapport['totalRevenuMensuel'] * 12);
		$rapport['totalTotalRevenuAnnuel'] = nbr($rapport['totalTotalRevenuMensuel'] * 12);
		$rapport['totalPourcAugmentationAnnuelle'] = ($rapport['totalRevenuAnnuel'] > 0) ? nbr(($rapport['totalTotalRevenuAnnuel'] / $rapport['totalRevenuAnnuel']) - 1) : 0; //here
		$rapport['totalMauvaiseCreances'] = nbr($rapport['totalRevenuAnnuel'] * fromPourc($rapport['pourcMauvaiseCreances']));
		$rapport['totalVacances'] = nbr($rapport['totalRevenuAnnuel'] * fromPourc($rapport['pourcVacances']));

		$rapport['totalMauvaiseCreances'] = nbr($rapport['totalRevenuAnnuel'] * fromPourc($rapport['pourcMauvaiseCreances']));
		$rapport['totalVacances'] = nbr($rapport['totalRevenuAnnuel'] * fromPourc($rapport['pourcVacances']));

		$rapport['totalRBE'] = nbr($rapport['totalRevenuAnnuel'] - $rapport['totalMauvaiseCreances'] - $rapport['totalVacances']);

		/* end REVENUS */

		/* DÉPENSES D'EXPLOITATION RÉCURRENTES */

		$rapport['pourcRevenuTaxeMunicipale'] = ($rapport['totalRevenuAnnuel'] > 0) ? nbr(toPourc($rapport['taxeMunicipale'] / $rapport['totalRevenuAnnuel'])) : 0; //here
		$rapport['totalTaxeMunicipale'] = nbr($rapport['taxeMunicipale'] * (1 + fromPourc($rapport['pourcAugmentationAnnuelleTaxeMunicipale'])));

		$rapport['totalDépensesAnnuel'] = nbr(
			$rapport['taxeMunicipale'] +
			$rapport['taxeScolaire'] + 
			$rapport['Assurances'] +
			$rapport['Electricite'] +
			$rapport['Chauffage'] +
			$rapport['Deneigement'] +
			$rapport['TonteDePelouse'] +
			$rapport['montantConciergerie'] +
			$rapport['montantEntretienEtReparation'] +
			$rapport['pourcAdministration'] +
			$rapport['pourcFraisDeGestion'] +
			$rapport['Autres']
			);

		
                $rapport['totalTaxeScolaire'] = nbr($rapport['taxeScolaire'] * (1 + fromPourc($rapport['pourcAugmentationAnnuelleTaxeScolaire'])));
	
		$rapport['totalAssurances'] = nbr($rapport['Assurances'] * (1 + fromPourc($rapport['pourcAugmentationAnnuelleAssurances'])));

		$rapport['totalElectricite'] = nbr($rapport['Electricite'] * (1 + fromPourc($rapport['pourcAugmentationAnnuelleElectricite'])));

		$rapport['totalChauffage'] = nbr($rapport['Chauffage'] * (1 + fromPourc($rapport['pourcAugmentationAnnuelleChauffage'])));

		$rapport['totalDeneigement'] = nbr($rapport['Deneigement'] * (1 + fromPourc($rapport['pourcAugmentationAnnuelleDeneigement'])));

		$rapport['totalTonteDePelouse'] = nbr($rapport['TonteDePelouse'] * (1 + fromPourc($rapport['pourcAugmentationAnnuelleTonteDePelouse'])));

                pr($rapport['totalDépensesAnnuel']);
		
                $rapport['totalConciergerie'] = nbr($rapport['montantConciergerie'] * (1 + fromPourc($rapport['pourcAugmentationAnnuelleConciergerie'])));
		$rapport['Conciergerie'] = nbr($rapport['montantConciergerie'] * $rapport['totalNbrLogement'] * 12);

		$rapport['totalEntretienEtReparation'] = nbr($rapport['montantEntretienEtReparation'] * (1 + fromPourc($rapport['pourcAugmentationAnnuelleEntretienEtReparation'])));
		$rapport['EntretienEtReparation'] = nbr($rapport['montantEntretienEtReparation'] * $rapport['totalNbrLogement']);

		$rapport['Administration'] = nbr(fromPourc($rapport['pourcAdministration']) * $rapport['totalRBE']);

		$rapport['totalAdministration'] = nbr($rapport['pourcAdministration'] * (1 + fromPourc($rapport['pourcAugmentationAnnuelleAdministration'])));
		$rapport['Administration'] = nbr(fromPourc($rapport['pourcAdministration']) * $rapport['totalRBE']);

		$rapport['totalFraisDeGestion'] = nbr($rapport['pourcFraisDeGestion'] * (1 + fromPourc($rapport['pourcAugmentationAnnuelleFraisDeGestion'])));
		$rapport['FraisDeGestion'] = nbr(fromPourc($rapport['pourcFraisDeGestion']) * $rapport['totalRBE']);

		$rapport['totalAutres'] = nbr($rapport['Autres'] * (1 + fromPourc($rapport['pourcAugmentationAnnuelleAutres'])));

		$rapport['totalDépensesAnnuel'] = nbr(
			$rapport['taxeMunicipale'] +
			$rapport['taxeScolaire'] + 
			$rapport['Assurances'] +
			$rapport['Electricite'] +
			$rapport['Chauffage'] +
			$rapport['Deneigement'] +
			$rapport['TonteDePelouse'] +
			$rapport['Conciergerie'] +
			$rapport['EntretienEtReparation'] +
			$rapport['Administration'] +
			$rapport['FraisDeGestion'] +
			$rapport['Autres']
			);
                
                
                $rapport['pourcTaxeMunicipalePoids'] = ($rapport['totalDépensesAnnuel'] > 0) ? nbr($rapport['taxeMunicipale'] / $rapport['totalDépensesAnnuel']*100) : 0; //here
		$rapport['pourcRevenuTaxeScolaire'] = ($rapport['totalDépensesAnnuel'] > 0) ? $rapport['pourcTaxeScolairePoids'] = nbr(($rapport['taxeScolaire']*100) / $rapport['totalDépensesAnnuel']) : 0; //here
                $rapport['pourcRevenuAssurances'] = ($rapport['totalDépensesAnnuel'] > 0) ? $rapport['pourcAssurancesPoids'] = nbr(($rapport['Assurances']*100) / $rapport['totalDépensesAnnuel']) : 0;
                $rapport['pourcRevenuElectricite'] = ($rapport['totalDépensesAnnuel'] > 0) ? $rapport['pourcElectricitePoids'] = nbr(($rapport['Electricite']*100) / $rapport['totalDépensesAnnuel']) : 0;
		$rapport['pourcRevenuChauffage'] = ($rapport['totalDépensesAnnuel'] > 0) ? $rapport['pourcChauffagePoids'] = nbr(($rapport['Chauffage']*100) / $rapport['totalDépensesAnnuel']) : 0;
		$rapport['pourcRevenuDeneigement'] = ($rapport['totalDépensesAnnuel'] > 0) ? $rapport['pourcDeneigementPoids'] = nbr(($rapport['Deneigement'] * 100) / $rapport['totalDépensesAnnuel']) : 0;
		$rapport['pourcRevenuTonteDePelouse'] = ($rapport['totalDépensesAnnuel'] > 0) ? $rapport['pourcTonteDePelousePoids'] = nbr(($rapport['TonteDePelouse'] * 100) / $rapport['totalDépensesAnnuel']) : 0;
		
                $rapport['pourcRevenuConciergerie'] = ($rapport['totalDépensesAnnuel'] > 0) ? $rapport['pourcConciergeriePoids'] = nbr((($rapport['montantConciergerie'] * $rapport['totalNbrLogement'] * 12) * 100) / $rapport['totalDépensesAnnuel']) : 0;
                $rapport['pourcRevenuEntretienEtReparation'] = ($rapport['totalDépensesAnnuel'] > 0) ? $rapport['pourcEntretienEtReparationPoids'] = nbr((($rapport['montantEntretienEtReparation'] * $rapport['totalNbrLogement']) * 100) / $rapport['totalDépensesAnnuel']) : 0;
                
                $rapport['pourcRevenuAdministration'] = ($rapport['totalDépensesAnnuel'] > 0) ? $rapport['pourcAdministrationPoids'] = nbr(($rapport['Administration']*100) / $rapport['totalDépensesAnnuel']) : 0;
		$rapport['pourcRevenuFraisDeGestion'] = ($rapport['totalDépensesAnnuel'] > 0) ? $rapport['pourcFraisDeGestionPoids'] = nbr(($rapport['FraisDeGestion']*100) / $rapport['totalDépensesAnnuel']) : 0;
		$rapport['pourcRevenuAutres'] = ($rapport['totalDépensesAnnuel'] > 0) ? $rapport['pourcAutresPoids'] = nbr(($rapport['Autres']*100) / $rapport['totalDépensesAnnuel']) : 0;
		
                
                
                $rapport['totalPourcDépenses'] = nbr(
			$rapport['pourcRevenuTaxeMunicipale'] +
			$rapport['pourcRevenuTaxeScolaire'] + 
			$rapport['pourcRevenuAssurances'] +
			$rapport['pourcRevenuElectricite'] +
			$rapport['pourcRevenuChauffage'] +
			$rapport['pourcRevenuDeneigement'] +
			$rapport['pourcRevenuTonteDePelouse'] +
			$rapport['pourcRevenuConciergerie'] +
			$rapport['pourcRevenuEntretienEtReparation'] +
			$rapport['pourcRevenuAdministration'] +
			$rapport['pourcRevenuFraisDeGestion'] +
			$rapport['pourcRevenuAutres']
			);

		$rapport['totalTotalDépenses'] = nbr(
			$rapport['totalTaxeMunicipale'] +
			$rapport['totalTaxeScolaire'] + 
			$rapport['totalAssurances'] +
			$rapport['totalElectricite'] +
			$rapport['totalChauffage'] +
			$rapport['totalDeneigement'] +
			$rapport['totalTonteDePelouse'] +
			$rapport['totalConciergerie'] +
			$rapport['totalEntretienEtReparation'] +
			$rapport['totalAdministration'] +
			$rapport['totalFraisDeGestion'] +
			$rapport['totalAutres']
			);

		$rapport['totalDépensesInitiales'] = nbr(
			$rapport['notaire'] +
			$rapport['fraisOuvertureDossier'] +
			$rapport['taxeBienvenu'] +
			$rapport['phaseEnvironnementale'] +
			$rapport['inspection'] +
			$rapport['evaluationProfessionnel']
			);
		$rapport['pourcTotalAugmentationAnnuelle'] = ($rapport['totalDépensesAnnuel'] > 0) ? nbr(toPourc(($rapport['totalTotalDépenses'] / $rapport['totalDépensesAnnuel']) - 1)) : 0;

		$rapport['arrayRendement'] = array();

		for ($i = 0; $i < 60; $i++) {
			if ($i == 0){
				$rapport['arrayRendement'][$i] = new Rendement($rapport,true);
			}
			else{
				$rapport['arrayRendement'][$i] = new Rendement($rapport,false);
				$rapport['arrayRendement'][$i]->initializeApresRendement($rapport['arrayRendement'][$i-1],$rapport);
			}
		}

		$rapport['paiementDeLaDette'] = 0;
		$ii = 0;

		foreach ($rapport['arrayRendement'] as $key => $value) {
			if ($ii < 12){
				$rapport['paiementDeLaDette'] += $value->hypotheque;
			}
			$ii++;
		}

		$rapport['revenuBrutPotentiel'] = nbr($rapport['totalRevenuAnnuel']);

		$rapport['serviceDeLaDette'] = ($rapport['revenuBrutPotentiel'] > 0) ? nbr($rapport['paiementDeLaDette'] / $rapport['revenuBrutPotentiel']) : 0;

		$rapport['profit'] = nbr(100 - 
			(
				$rapport['pourcRevenuTaxeMunicipale'] +
				$rapport['pourcRevenuTaxeScolaire'] + 
				$rapport['pourcRevenuAssurances'] +
				$rapport['pourcRevenuElectricite'] +
				$rapport['pourcRevenuChauffage'] +
				$rapport['pourcRevenuDeneigement'] +
				$rapport['pourcRevenuTonteDePelouse'] +
				$rapport['pourcRevenuConciergerie'] +
				$rapport['pourcRevenuEntretienEtReparation'] +
				$rapport['pourcRevenuAdministration'] +
				$rapport['pourcRevenuFraisDeGestion'] +
				$rapport['pourcRevenuAutres'] +
				$rapport['serviceDeLaDette']
				)
			);


		$rapport['totalDépensesMontant'] = nbr(
			$rapport['montantConciergerie'] +
			$rapport['montantEntretienEtReparation']
			);

		/* end DÉPENSES D'EXPLOITATION RÉCURRENTES */

		/* évolution du rendement */

		/* cash flow */


		/* évolution de la valeur de l'immeuble */


		for ($i=1; $i < 6; $i++) { 
			$vM = 'variationAn'.$i.'M';
			$vP = 'variationAn'.$i.'P';

			if ($rapport['vAn'.$i] == $vM){
							//debug($rapport['prixPaye']);
							//debug(nbr($rapport['prixPaye'] * (1 + fromPourc(toPourc($rapport['an' . $i . 'Montant'] / $rapport['prixPaye'])))));
				$rapport['an' . $i . 'Total'] = nbr($rapport['prixPaye'] * (1 + fromPourc(toPourc($rapport['an' . $i . 'Montant'] / $rapport['prixPaye']))));
							//debug($rapport['an1Total']);
			}
			else if ($rapport['vAn'.$i] == $vP){
				if ($i > 1){
					$rapport['an' . $i . 'Montant'] = nbr(fromPourc($rapport['an' . $i . 'Pourc']) * $rapport['an' . ($i-1) . 'Total']);
					$rapport['an' . $i . 'Total'] = nbr($rapport['an' . ($i-1) . 'Total'] * (1 + fromPourc($rapport['an' . $i . 'Pourc'])));
				}
				else{
								//debug($rapport['an' . $i . 'Montant']);
					$rapport['an' . $i . 'Montant'] = nbr(fromPourc($rapport['an' . $i . 'Pourc']) * $rapport['an' . $i . 'Total']);
					$rapport['an' . $i . 'Total'] = nbr($rapport['an' . $i . 'Total'] * (1 + fromPourc($rapport['an' . $i . 'Pourc'])));
								//debug($rapport['an1Total']);
				}
			}
			else{
				$rapport['an' . $i . 'Total'] = ($rapport['prixPaye'] > 0) ? nbr($rapport['prixPaye'] * (1 + fromPourc(toPourc($rapport['an' . $i . 'Montant'] / $rapport['prixPaye'])))) : 0;
			}
		}


		/* indicateurs financiers */


		$rapport['mauvaisesCreancesEtVacances'] = nbr($rapport['totalVacances'] + $rapport['totalMauvaiseCreances']) * -1;
		$rapport['indicateurRBE'] = nbr($rapport['revenuBrutPotentiel'] + $rapport['mauvaisesCreancesEtVacances']);
		$rapport['dépensesExploitationRecurrente'] = nbr($rapport['totalDépensesAnnuel']);
		$rapport['revenuNet'] = $rapport['indicateurRBE'] - nbr($rapport['dépensesExploitationRecurrente']);
		$rapport['liquidite'] = $rapport['revenuNet'] - nbr($rapport['paiementDeLaDette']);
		$rapport['pourcPrixPayeVsEvaluationMunicipale'] = ($rapport['evaluationMunicipale'] > 0) ?  nbr(toPourc($rapport['prixPaye'] / $rapport['evaluationMunicipale'] - 1)) : 0;
		$rapport['montantPrixPayeVsEvaluationMunicipale'] = nbr($rapport['prixPaye'] - $rapport['evaluationMunicipale']);
		$rapport['pourcPrixPayeVsPrixPrecedent'] = ($rapport['dernierPrixPaye'] > 0) ? nbr(toPourc($rapport['prixPaye'] / $rapport['dernierPrixPaye'] - 1)) : 0;
		$rapport['montantPrixPayeVsPrixPrecedent'] = nbr($rapport['prixPaye'] - $rapport['dernierPrixPaye']);
		$rapport['pourcPrixPayeVsPrixDemande'] = ($rapport['prixDemande'] > 0) ? nbr(toPourc($rapport['prixPaye'] / $rapport['prixDemande'] - 1)) : 0;
		$rapport['montantPrixPayeVsPrixDemande'] = nbr($rapport['prixPaye'] - $rapport['prixDemande']);
		$rapport['montantTotalLogement'] = ($rapport['totalNbrLogement'] > 0) ? nbr($rapport['prixPaye'] / $rapport['totalNbrLogement']) : 0;

		if ($logements != null){
			$rapport['totalNbrPiece'] = 0;
			foreach ($logements as $key => $value) {
				$rapport['totalNbrPiece'] += nbr($value['Logement']['nbDeLoyer'] * $value['Logement']['grandeur']);
			}
		}
		else{
			$rapport['totalNbrPiece'] = 0;
			foreach ($rapport as $key => $value) {
				if (strpos($key,'nbDeLoyer') !== false){
					$loyer = nbr($value);
				}
				if (strpos($key,'grandeur') !== false){
					$grandeur = nbr($value);
					$rapport['totalNbrPiece'] += nbr($loyer * $grandeur);
				}
			}
		}

		$rapport['montantTotalPiece'] = ($rapport['totalNbrPiece'] > 0) ? nbr($rapport['prixPaye'] / $rapport['totalNbrPiece']) : 0;
		$rapport['pourcMRB'] = ($rapport['totalRBE'] > 0) ? nbr(toPourc($rapport['prixPaye'] / $rapport['totalRBE'])) : 0;
		$rapport['pourcMRN'] = ($rapport['revenuNet'] > 0) ? nbr(toPourc($rapport['prixPaye'] / $rapport['revenuNet'])) : 0;
		$rapport['pourcRDE'] = ($rapport['totalRBE'] > 0) ? nbr(toPourc($rapport['totalDépensesAnnuel'] / $rapport['totalRBE'])) : 0;
		$rapport['pourcRCD'] = ($rapport['paiementDeLaDette'] > 0) ? nbr(toPourc($rapport['revenuNet'] / $rapport['paiementDeLaDette'])) : 0;
		$rapport['pourcTGA'] = ($rapport['prixPaye'] > 0) ? nbr(toPourc($rapport['revenuNet'] / $rapport['prixPaye'])) : 0;
		$rapport['pourcRatioEndettement'] = ($rapport['prixPaye'] > 0 && $rapport['totalDépensesInitiales'] > 0) ? nbr(toPourc($rapport['pret'] / ($rapport['prixPaye'] + $rapport['totalDépensesInitiales']))) : 0;
		$rapport['pourcTMO'] = nbr(78.32); /* pas de formule */
		$rapport['delaiDeRecup'] = '4 ans et 10 mois'; /* pas de formule */
		$rapport['miseDeFond'] = nbr($rapport['arrayRendement'][0]->soldeDebutCashFlow);
		$rapport['montantEvolutionCashFlow'] = nbr($rapport['liquidite']);
		$rapport['pourcEvolutionCashFlow'] = ($rapport['miseDeFond'] > 0) ? nbr(toPourc($rapport['montantEvolutionCashFlow'] / $rapport['miseDeFond'])) : 0;
		$rapport['pourcEquityBuilt'] = ($rapport['miseDeFond'] > 0) ? nbr(toPourc(($rapport['pret'] - $rapport['arrayRendement'][11]->soldeFinDette) / $rapport['miseDeFond'])) : 0;
		$rapport['montantEquityBuilt'] = nbr($rapport['pret'] - $rapport['arrayRendement'][11]->soldeFinDette);
		$rapport['pourcPlusValue'] = ($rapport['miseDeFond'] > 0) ? nbr(toPourc(($rapport['an1Total'] - $rapport['prixPaye']) / $rapport['miseDeFond'])) : 0;
		$rapport['montantPlusValue'] = nbr($rapport['an1Total'] - $rapport['prixPaye']);
		$rapport['pourcTotalRendementParAnnee'] = nbr($rapport['pourcEvolutionCashFlow'] + $rapport['pourcEquityBuilt'] + $rapport['pourcPlusValue']);
		$rapport['montantTotalRendementParAnnee'] = nbr($rapport['montantEvolutionCashFlow'] + $rapport['montantEquityBuilt'] + $rapport['montantPlusValue']);
		$rapport['totalTotalRendement'] = nbr($rapport['arrayRendement'][59]->soldeFinCashFlow - $rapport['arrayRendement'][0]->soldeDebutCashFlow);

		/* rendement */

		$n = 11;

		for ($i=1; $i < 6; $i++) { 
			if ($i < 5){
				$rapport['montantRendementCashFlowAn'.$i] = nbr($rapport['arrayRendement'][$n]->soldeFinCashFlow);
			}
			else{
				$rapport['montantRendementCashFlowAn'.$i] = nbr($rapport['arrayRendement'][$n]->soldeFinCashFlow + $rapport['arrayRendement'][$n]->cashFlow);
			}
			$rapport['montantRendementEquityBuiltAn'.$i] = nbr($rapport['pret'] - $rapport['arrayRendement'][$n]->soldeFinDette);
			$rapport['totalRendementAn'.$i] = nbr($rapport['montantRendementCashFlowAn'.$i] + $rapport['montantRendementEquityBuiltAn'.$i] + $rapport['montantRendementPlusValueAn'.$i]);
			$rapport['pourcRendementCashFlowAn'.$i] = ($rapport['miseDeFond'] > 0) ? nbr(toPourc($rapport['montantRendementCashFlowAn'.$i] / $rapport['miseDeFond'])) : 0;
			$rapport['pourcRendementEquityBuiltAn'.$i] = ($rapport['miseDeFond'] > 0 && $rapport['pourcRendementCashFlowAn'.$i] > 0) ? nbr(toPourc($rapport['montantRendementEquityBuiltAn'.$i] / ($rapport['miseDeFond'] + fromPourc($rapport['pourcRendementCashFlowAn'.$i])))) : 0;
			$rapport['pourcRendementPlusValueAn'.$i] = ($rapport['miseDeFond'] > 0 && $rapport['pourcRendementEquityBuiltAn'.$i] > 0) ? nbr(toPourc($rapport['montantRendementPlusValueAn'.$i] / ($rapport['miseDeFond'] + fromPourc($rapport['pourcRendementEquityBuiltAn'.$i])))) : 0;
			$rapport['totalRendementAn'.$i.'pourc'] = nbr($rapport['pourcRendementCashFlowAn'.$i] + $rapport['pourcRendementEquityBuiltAn'.$i] + $rapport['pourcRendementPlusValueAn'.$i]);
			$n += 12;
		}

		for ($i=1; $i < 6; $i++) { 

			$vM = 'variationAn'.$i.'M';
			$vP = 'variationAn'.$i.'P';
			if ($rapport['vAn'.$i] == $vM){
				$rapport['montantRendementPlusValueAn'.$i] = nbr($rapport['an'.$i.'Montant']);
			}
			else if ($rapport['vAn'.$i] == $vP){
				$rapport['montantRendementPlusValueAn'.$i] = nbr($rapport['an'.$i.'Montant'] + $rapport['montantRendementPlusValueAn'.$i]);
			}
		}

		if ($qualitatifs == null){
			foreach ($rapport as $key => $value) {
				if (strpos($key,'qualitatifAdd') !== false){
					$number = substr($key, 13);
					$this->Rapport->Qualitatif->create();
					$this->Rapport->Qualitatif->set('nom',$rapport['qualitatifAdd'.$number]);
					$this->Rapport->Qualitatif->set('rapportID',$newid);
					$this->Rapport->Qualitatif->save();
				}
			}
		}


		
		if ($rapport['title'] == ''){
			$rapport['title'] = 'Pas de titre';
		}
		$this->set('rapport',$rapport);
		$this->set('logements',$logements);
		$this->set('qualitatifs',$qualitatifs);
		return $rapport;
	}

	public function rapport(){
		$this->set('title_for_layout','Rapport');
		if ($this->Auth->user()){
			if ($this->request->is('post')) {
				$rapport = $this->data['Rapport'];
				//if ($this->Rapport->findById)
				$this->Rapport->create();
				$this->Rapport->set($this->data);
				$newid = $this->generateRandomString();
				$this->Rapport->set('id',$newid);

				if ($this->Rapport->validates()) {
					$rapport = $this->commonRapport($rapport,null,null,$newid);
					$this->Rapport->set($rapport);
					$this->Rapport->set('userID',$this->Auth->user('id'));
					$this->Rapport->save();
					$this->Session->setFlash('Rapport créé !','success');
					$this->redirect('/listerapport');
				}
			}
			$this->set('logements',null);
			$this->set('qualitatifs',null);
		}
		else{
			$this->Session->setFlash('Vous devez d\'abord vous connecter!','info');
			$this->redirect('/login');
		}
	}

	public function delete(){
		$id = $this->request->params['pass'][0];
		if ($this->Rapport->exists($id)){
			$this->Rapport->delete($id);
			$this->Session->setFlash('Rapport supprimé !','success');
			$this->redirect('/listerapport');
		}
		else{
			$this->Session->setFlash('Ce rapport n\'existe pas','error');
			$this->redirect('/');
		}
	}
}

class Rendement extends RapportsController{
	public function Rendement($rapport,$ini){
		if ($ini){
			$this->setAll($rapport,1,nbr($rapport['pret']),nbr($rapport['prixPaye'] - $rapport['pret'] + $rapport['totalDépensesInitiales']),nbr($rapport['pret'] - $rapport['prixPaye']),nbr($rapport['totalRBE'] / 12),nbr($rapport['totalDépensesInitiales'] * -1),0);
		}
	}

	public function initializeApresRendement($precRendement,$rapport){
		$this->setAll($rapport,$precRendement->periode + 1,$precRendement->soldeFinDette,$precRendement->soldeFinCashFlow,0,$precRendement->revenu,0,nbr($this->soldeFinCashFlow - $precRendement->soldeFinCashFlow));
	}

	private function setAll($rapport,$periode,$soldeDebutDette,$soldeDebutCashFlow,$investissementInitial,$revenu,$depensesInitial,$cashFlow){
		$this->periode = $periode;

		/* évolution de la dette */

		$this->soldeDebutDette = $soldeDebutDette;
		$this->paiementDette = 0;
		$this->interetDette = nbr($this->soldeDebutDette * (fromPourc($rapport['tauxInteret']) / 12));
		$this->capitalDette = nbr($rapport['remboursementMensuel'] - $this->interetDette);
		$this->soldeFinDette = nbr($this->soldeDebutDette - $this->capitalDette);

		/* évolution du cash flow */

		$this->soldeDebutCashFlow = $soldeDebutCashFlow;
		$this->investissementInitial = $investissementInitial;
		$this->revenu = $revenu;
		$this->hypotheque = nbr(($this->capitalDette + $this->interetDette) * -1);
		$this->depensesMensuel = nbr(($rapport['totalDépensesAnnuel'] / 12) * -1);
		$this->depensesInitial = $depensesInitial;
		$this->vente = 0;
		$this->rembHypotheque = 0;
		$this->soldeFinCashFlow = nbr($this->soldeDebutDette + $this->investissementInitial + $this->revenu + $this->hypotheque + $this->depensesMensuel + $this->depensesInitial + $this->vente + $this->rembHypotheque);
		$this->cashFlow = $cashFlow;
	}
}

