	
<?php echo $this->Html->script('calculs');?>
<?php echo $this->Html->script('graphic');?>

<div class="container mainRapport">
	<?php echo $this->Form->create('Rapport'); ?>
    <h2>1. Entrée de donnée</h2>
    <div class="row" style="margin-bottom:30px;">
        <div class="col-md-2">
            <h4>Titre</h4>
        </div>
        <div class="col-md-2" style="margin-top:21px;">
            <div class="form-group">
				<?php echo $this->Form->input('title',array('label'=>false,'required'=>'required','class'=>'toenter form-control','autofocus'=>'autofocus','value'=> (isset($rapport["title"])) ? $rapport["title"] : null)); ?>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <tbody>
                <tr>
                    <td>Prix payé</td>
                    <td>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
								<?php echo $this->Form->input('prixPaye',array('label'=>false,'required'=>'required','onkeyup'=>'autoRemb()','class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["prixPaye"])) ? $rapport["prixPaye"] : null)); ?>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Prêt</td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('pret',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pret"])) ? $rapport["pret"] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcPret',array('label'=>false,'onkeyup'=>'autoRemb()','class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcPret"])) ? $rapport["pourcPret"] : null)); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Terme</td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Ans</div>
									<?php echo $this->Form->input('terme',array('label'=>false,'onkeyup'=>'autoRemb()','class'=>'toenter form-control','placeholder'=>'Années','value'=> (isset($rapport["terme"])) ? $rapport["terme"] : null)); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Taux d'intérêt</td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('tauxInteret',array('label'=>false,'onkeyup'=>'autoRemb()','class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["tauxInteret"])) ? $rapport["tauxInteret"] : null)); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Remboursement mensuel</td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('remboursementMensuel',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["remboursementMensuel"])) ? $rapport["remboursementMensuel"] : null)); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Évaluation municipale</td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('evaluationMunicipale',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["evaluationMunicipale"])) ? $rapport["evaluationMunicipale"] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Terrain</td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('terrain',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["terrain"])) ? $rapport["terrain"] : null)); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Batîsse</td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('batisse',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["batisse"])) ? $rapport["batisse"] : null)); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Dernier prix payé</td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('dernierPrixPaye',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["dernierPrixPaye"])) ? $rapport["dernierPrixPaye"] : null)); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Prix demandé</td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('prixDemande',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["prixDemande"])) ? $rapport["prixDemande"] : null)); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="table-responsive">
		<?php if ($logements == '0'){
			?>
        <table class="table table-bordered text-center nomargin">
            <h4>REVENUS</h4>
            <button  type="button" class="btnAddLogement btn btn-sm btn-primary" onclick="addLogement()"><i class="fa fa-plus"></i>&nbsp;&nbsp;Logement</button>
            <tbody id="tableLoyerTBody">
                <tr>
                    <td>nb de Loyer</td>
                    <td>Grandeur</td>
                    <td>Revenu mensuel</td>
                    <td>% des revenus</td>
                    <td>Augmentation annuelle (%)</td>
                    <td>Total</td>
                </tr>
                <tr>
                    <td><?php                
						$numbers = range(0,9);
						shuffle($numbers);
						$digits = '';
						for($i = 0;$i < 8;$i++){
							$digits .= $numbers[$i];
						}?>
						<?php echo $this->Form->hidden('logementID',array('value'=>(isset($rapport['logementID'])) ? $rapport['logementID'] : $digits));?>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">#</div>
									<?php echo $this->Form->input('nbDeLoyer',array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'Nombre','value'=> (isset($rapport["nbDeLoyer"])) ? $rapport["nbDeLoyer"] : null)); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">U</div>
                                    	<?php echo $this->Form->input('grandeur',array('label'=>false, 'class'=>'toenter form-control', "options"=>array("1"=>"1 1/2","2"=>"2 1/2","3"=>"3 1/2","4"=>"4 1/2","5"=>"5 1/2","6"=>"6 1/2","7"=>"7 1/2","8"=>"8 1/2","9"=>"9 1/2","10"=>"Autre"))); ?>
                                                                        <?php var_dump("Ligne 202");?>

					<?php //echo $this->Form->input('grandeur',array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'Grandeur','value'=> (isset($rapport["grandeur"])) ? $rapport["grandeur"] : null)); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
					<?php echo $this->Form->input('revenuMensuel',array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'Montant')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcRevenus',array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRevenus"])) ? $rapport["pourcRevenus"] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAugmentationAnnuelle',array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'Pourcentage')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('LtotalRevenu',array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'maskMoney form-control','value'=> (isset($rapport["LtotalRevenu"])) ? $rapport["LtotalRevenu"] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- to-do boucle -->
				<?php if (isset($rapport)){
					foreach ($rapport as $key => $value) {
						if (strpos($key,'nbDeLoyer') !== false && preg_match('/[0-9]/', $key)){
							$number = substr($key, 9);
							?>
                <tr>
                    <td>
									<?php echo $this->Form->hidden('logementID'.$number,array('value'=>$rapport['logementID'.$number]))?>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">#</div>
												<?php echo $this->Form->input('nbDeLoyer'.$number,array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'Nombre','value'=>$rapport['nbDeLoyer'.$number])); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                                                                                                <?php var_dump("Ligne 273");?>

                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">U</div>
                                    	<?php echo $this->Form->input('grandeur'.$number,array('label'=>false, 'class'=>'toenter form-control', "options"=>array("1"=>"1 1/2","2"=>"2 1/2","3"=>"3 1/2","4"=>"4 1/2","5"=>"5 1/2","6"=>"6 1/2","7"=>"7 1/2","8"=>"8 1/2","9"=>"9 1/2","10"=>"Autre"))); ?>
                                    	<?php echo $this->Form->input('grandeur',array('label'=>false, 'class'=>'toenter form-control',"selected"=>$logements['Logement']['grandeur'], "empty"=>"Grandeur", "options"=>array("1"=>"1 1/2","2"=>"2 1/2","3"=>"3 1/2","4"=>"4 1/2","5"=>"5 1/2","6"=>"6 1/2","7"=>"7 1/2","8"=>"8 1/2","9"=>"9 1/2","10"=>"Autre"))); ?>

					<?php //echo $this->Form->input('grandeur'.$number,array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'Grandeur')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
												<?php echo $this->Form->input('revenuMensuel'.$number,array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'Montant')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">%</div>
												<?php echo $this->Form->input('pourcRevenus'.$number,array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRevenus".$number])) ? $rapport["pourcRevenus".$number] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">%</div>
												<?php echo $this->Form->input('pourcAugmentationAnnuelle'.$number,array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'Pourcentage')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
												<?php echo $this->Form->input('LtotalRevenu'.$number,array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'maskMoney form-control','value'=> (isset($rapport["LtotalRevenu".$number])) ? $rapport["LtotalRevenu".$number] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
							<?php
						}
					}
				}?>
                <!-- end boucle -->
            </tbody>
        </table>
		<?php } else {
			?>
        <table class="table table-bordered text-center nomargin">
            <p class="tableTitleSecond inline"><strong>REVENUS</strong></p>
            <button  type="button" class="btnAddLogement btn btn-sm btn-primary" onclick="addLogement()"><i class="fa fa-plus"></i>&nbsp;&nbsp;Logement</button>
            <tbody id="tableLoyerTBody">
                <tr>
                    <td>nb de Loyer</td>
                    <td>Grandeur</td>
                    <td>Revenu mensuel</td>
                    <td>% des revenus</td>
                    <td>Augmentation annuelle (%)</td>
                    <td>Total</td>
                </tr>
                <!-- <tr>
                   <td>
							<?php
							$numbers = range(0,9);
							shuffle($numbers);
							$digits = '';
							for($i = 0;$i < 9;$i++){
								$digits .= $numbers[$i];
							}
                                                        ?>
							<?php echo $this->Form->hidden('logementID',array('value'=>($logements[0]['Logement']['id'] != null) ? $logements[0]['Logement']['id'] : $digits));?>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">#</div>
										<?php echo $this->Form->input('nbDeLoyer',array('required'=>'required','label'=>false,'onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'Nombre','value'=> $logements[0]['Logement']['nbDeLoyer'])); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">U</div>
                                                                        	<?php //echo $this->Form->input('grandeur'.$number,array('label'=>false, 'class'=>'toenter form-control',"selected"=>$logements[$key]['Logement']['grandeur'], "empty"=>"Grandeur","options"=>array("1"=>"1 1/2","2"=>"2 1/2","3"=>"3 1/2","4"=>"4 1/2","5"=>"5 1/2","6"=>"6 1/2","7"=>"7 1/2","8"=>"8 1/2","9"=>"9 1/2","10"=>"Autre"))); ?>
					<?php //echo $this->Form->input('grandeur'.$number,array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'Grandeur')); ?>
                                    <?php var_dump("Ligne 367");?>

                                    	<?php echo $this->Form->input('grandeur',array('label'=>false, 'class'=>'toenter form-control',"selected"=>$logements['Logement']['grandeur'], "empty"=>"Grandeur", "options"=>array("1"=>"1 1/2","2"=>"2 1/2","3"=>"3 1/2","4"=>"4 1/2","5"=>"5 1/2","6"=>"6 1/2","7"=>"7 1/2","8"=>"8 1/2","9"=>"9 1/2","10"=>"Autre"))); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
										<?php echo $this->Form->input('revenuMensuel',array('required'=>'required','label'=>false,'onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'Montant','value'=>$logements[0]['Logement']['revenuMensuel'])); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">%</div>
										<?php echo $this->Form->input('pourcRevenus',array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'maskMoney form-control','value'=> $logements[0]['Logement']['pourcRevenus'],'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">%</div>
										<?php echo $this->Form->input('pourcAugmentationAnnuelle',array('required'=>'required','label'=>false,'onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'Pourcentage',"value"=>$logements[0]['Logement']['pourcAugmentationAnnuelle'])); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
										<?php echo $this->Form->input('LtotalRevenu',array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'maskMoney form-control','value'=> $logements[0]['Logement']['LtotalRevenu'],'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>-->
                <!-- to-do boucle -->
					<?php
					if (!empty($logements)){
						foreach ($logements as $key => $value) {

							//if ($key > 0){
								$number = '';
								for ($i = 0; $i<7; $i++) 
								{
									$number .= mt_rand(0,9);
								}
                                                                                            var_dump($number);

								?>
                <tr>
                    <td>
										<?php echo $this->Form->hidden('logementID'.$number,array('value'=>$logements[$key]['Logement']['id']));?>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">#</div>
													<?php echo $this->Form->input('nbDeLoyer'.$number,array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'Nombre','value'=>$logements[$key]['Logement']['nbDeLoyer'])); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">U</div>
                                    <?php var_dump("Ligne 443");?>
                                    	<?php echo $this->Form->input('grandeur'.$number,array('label'=>false, 'class'=>'toenter form-control',"selected"=>$value['Logement']['grandeur'], "empty"=>"Grandeur","options"=>array("1"=>"1 1/2","2"=>"2 1/2","3"=>"3 1/2","4"=>"4 1/2","5"=>"5 1/2","6"=>"6 1/2","7"=>"7 1/2","8"=>"8 1/2","9"=>"9 1/2","10"=>"Autre"))); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
													<?php echo $this->Form->input('revenuMensuel'.$number,array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'Montant','value'=>$logements[$key]['Logement']['revenuMensuel'])); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">%</div>
													<?php echo $this->Form->input('pourcRevenus'.$number,array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'maskMoney form-control','value'=>$logements[$key]['Logement']['pourcRevenus'],'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">%</div>
													<?php echo $this->Form->input('pourcAugmentationAnnuelle'.$number,array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=>$logements[$key]['Logement']['pourcAugmentationAnnuelle'])); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
													<?php echo $this->Form->input('LtotalRevenu'.$number,array('label'=>false,'onkeyup'=>'valueStay(this)','class'=>'maskMoney form-control','value'=>$logements[$key]['Logement']['LtotalRevenu'],'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
								<?php
							}
						//}
					}
					?>
                <!-- end boucle -->
            </tbody>
        </table>
			<?php } ?>
        <table class="table table-bordered text-center tableRevenuTotal">
            <tbody>
                <tr>
                    <td></td>
                    <td>Total grandeur</td>
                    <td>Total revenu</td>
                    <td>Total % des revenus</td>
                    <td>Total augmentation annuelle</td>
                    <td>Total</td>
                </tr>
                <tr>
                    <td>Total revenu mensuel</td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">U</div>
										<?php echo $this->Form->input('totalGrandeur',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalGrandeur"])) ? $rapport["totalGrandeur"] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
										<?php echo $this->Form->input('totalRevenuMensuel',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalRevenuMensuel"])) ? $rapport["totalRevenuMensuel"] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">%</div>
										<?php echo $this->Form->input('pourcTotalRevenu',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcTotalRevenu"])) ? $rapport["pourcTotalRevenu"] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">%</div>
										<?php echo $this->Form->input('pourcTotalAugmentationAnnuelle',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcTotalAugmentationAnnuelle"])) ? $rapport["pourcTotalAugmentationAnnuelle"] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
										<?php echo $this->Form->input('totalTotalRevenuMensuel',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalTotalRevenuMensuel"])) ? $rapport["totalTotalRevenuMensuel"] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Total revenu annuel</td>
                    <td></td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
										<?php echo $this->Form->input('totalRevenuAnnuel',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalRevenuAnnuel"])) ? $rapport["totalRevenuAnnuel"] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">%</div>
										<?php echo $this->Form->input('totalPourcRevenu',array('label'=>false,'class'=>'toenter form-control','value'=>'100','readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
										<?php echo $this->Form->input('totalPourcAugmentationAnnuelle',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalPourcAugmentationAnnuelle"])) ? $rapport["totalPourcAugmentationAnnuelle"] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
										<?php echo $this->Form->input('totalTotalRevenuAnnuel',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalTotalRevenuAnnuel"])) ? $rapport["totalTotalRevenuAnnuel"] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Mauvaise créances</td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">%</div>
										<?php echo $this->Form->input('pourcMauvaiseCreances',array('label'=>false,'class'=>'toenter maskMoney form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcMauvaiseCreances"])) ? $rapport["pourcMauvaiseCreances"] : null)); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
										<?php echo $this->Form->input('totalMauvaiseCreances',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalMauvaiseCreances"])) ? $rapport["totalMauvaiseCreances"] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Vacances</td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">%</div>
										<?php echo $this->Form->input('pourcVacances',array('label'=>false,'class'=>'toenter maskMoney form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcVacances"])) ? $rapport["pourcVacances"] : null)); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
										<?php echo $this->Form->input('totalVacances',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalVacances"])) ? $rapport["totalVacances"] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Total revenu brut effectif (RBE)</td>
                    <td></td>
                    <td>
                        <div class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
										<?php echo $this->Form->input('totalRBE',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalRBE"])) ? $rapport["totalRBE"] : null,'readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <h4>DÉPENSES D'EXPLOITATION RÉCURRENTES</h4>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Dépense annuelle</td>
                <td>% des revenus</td>
                <td>Augmentation annuelle (%)</td>
                <td>Total</td>
                <td>Poids</td>
            </tr>
            <tr>
                <td>Taxes municipale</td>
                <td></td>
                <td></td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('taxeMunicipale',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["taxeMunicipale"])) ? $rapport["taxeMunicipale"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcRevenuTaxeMunicipale',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRevenuTaxeMunicipale"])) ? $rapport["pourcRevenuTaxeMunicipale"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAugmentationAnnuelleTaxeMunicipale',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcAugmentationAnnuelleTaxeMunicipale"])) ? $rapport["pourcAugmentationAnnuelleTaxeMunicipale"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('totalTaxeMunicipale',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalTaxeMunicipale"])) ? $rapport["totalTaxeMunicipale"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcTaxeMunicipalePoids',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcTaxeMunicipalePoids"])) ? $rapport["pourcTaxeMunicipalePoids"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Taxes scolaire</td>
                <td></td>
                <td></td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('taxeScolaire',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["taxeScolaire"])) ? $rapport["taxeScolaire"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcRevenuTaxeScolaire',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRevenuTaxeScolaire"])) ? $rapport["pourcRevenuTaxeScolaire"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAugmentationAnnuelleTaxeScolaire',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcAugmentationAnnuelleTaxeScolaire"])) ? $rapport["pourcAugmentationAnnuelleTaxeScolaire"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('totalTaxeScolaire',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalTaxeScolaire"])) ? $rapport["totalTaxeScolaire"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcTaxeScolairePoids',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcTaxeScolairePoids"])) ? $rapport["pourcTaxeScolairePoids"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Assurances</td>
                <td></td>
                <td></td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('Assurances',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["Assurances"])) ? $rapport["Assurances"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcRevenuAssurances',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRevenuAssurances"])) ? $rapport["pourcRevenuAssurances"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAugmentationAnnuelleAssurances',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcAugmentationAnnuelleAssurances"])) ? $rapport["pourcAugmentationAnnuelleAssurances"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('totalAssurances',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalAssurances"])) ? $rapport["totalAssurances"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAssurancesPoids',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcAssurancesPoids"])) ? $rapport["pourcAssurancesPoids"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Électricité</td>
                <td></td>
                <td></td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('Electricite',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["Electricite"])) ? $rapport["Electricite"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcRevenuElectricite',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRevenuElectricite"])) ? $rapport["pourcRevenuElectricite"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAugmentationAnnuelleElectricite',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcAugmentationAnnuelleElectricite"])) ? $rapport["pourcAugmentationAnnuelleElectricite"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('totalElectricite',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalElectricite"])) ? $rapport["totalElectricite"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcElectricitePoids',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcElectricitePoids"])) ? $rapport["pourcElectricitePoids"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Chauffage</td>
                <td></td>
                <td></td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('Chauffage',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["Chauffage"])) ? $rapport["Chauffage"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcRevenuChauffage',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRevenuChauffage"])) ? $rapport["pourcRevenuChauffage"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAugmentationAnnuelleChauffage',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcAugmentationAnnuelleChauffage"])) ? $rapport["pourcAugmentationAnnuelleChauffage"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('totalChauffage',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalChauffage"])) ? $rapport["totalChauffage"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcChauffagePoids',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcChauffagePoids"])) ? $rapport["pourcChauffagePoids"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Déneigement</td>
                <td></td>
                <td></td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('Deneigement',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["Deneigement"])) ? $rapport["Deneigement"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcRevenuDeneigement',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRevenuDeneigement"])) ? $rapport["pourcRevenuDeneigement"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAugmentationAnnuelleDeneigement',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcAugmentationAnnuelleDeneigement"])) ? $rapport["pourcAugmentationAnnuelleDeneigement"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('totalDeneigement',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalDeneigement"])) ? $rapport["totalDeneigement"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcDeneigementPoids',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcDeneigementPoids"])) ? $rapport["pourcDeneigementPoids"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Tonte de pelouse</td>
                <td></td>
                <td></td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('TonteDePelouse',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["TonteDePelouse"])) ? $rapport["TonteDePelouse"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcRevenuTonteDePelouse',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRevenuTonteDePelouse"])) ? $rapport["pourcRevenuTonteDePelouse"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAugmentationAnnuelleTonteDePelouse',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcAugmentationAnnuelleTonteDePelouse"])) ? $rapport["pourcAugmentationAnnuelleTonteDePelouse"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('totalTonteDePelouse',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalTonteDePelouse"])) ? $rapport["totalTonteDePelouse"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcTonteDePelousePoids',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcTonteDePelousePoids"])) ? $rapport["pourcTonteDePelousePoids"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Conciergerie</td>
                <td>$/logement/mois</td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('montantConciergerie',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["montantConciergerie"])) ? $rapport["montantConciergerie"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('Conciergerie',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["Conciergerie"])) ? $rapport["Conciergerie"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcRevenuConciergerie',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRevenuConciergerie"])) ? $rapport["pourcRevenuConciergerie"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAugmentationAnnuelleConciergerie',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["montantConciergerie"])) ? $rapport["montantConciergerie"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('totalConciergerie',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalConciergerie"])) ? $rapport["totalConciergerie"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcConciergeriePoids',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcConciergeriePoids"])) ? $rapport["pourcConciergeriePoids"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Entretien et réparation</td>
                <td>$/logement/an</td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('montantEntretienEtReparation',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["montantEntretienEtReparation"])) ? $rapport["montantEntretienEtReparation"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('EntretienEtReparation',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["EntretienEtReparation"])) ? $rapport["EntretienEtReparation"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcRevenuEntretienEtReparation',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRevenuEntretienEtReparation"])) ? $rapport["pourcRevenuEntretienEtReparation"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAugmentationAnnuelleEntretienEtReparation',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcAugmentationAnnuelleEntretienEtReparation"])) ? $rapport["pourcAugmentationAnnuelleEntretienEtReparation"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('totalEntretienEtReparation',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalEntretienEtReparation"])) ? $rapport["totalEntretienEtReparation"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcEntretienEtReparationPoids',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcEntretienEtReparationPoids"])) ? $rapport["pourcEntretienEtReparationPoids"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Administration</td>
                <td>% des revenus</td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAdministration',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcAdministration"])) ? $rapport["pourcAdministration"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('Administration',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["Administration"])) ? $rapport["Administration"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcRevenuAdministration',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRevenuAdministration"])) ? $rapport["pourcRevenuAdministration"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAugmentationAnnuelleAdministration',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcAugmentationAnnuelleAdministration"])) ? $rapport["pourcAugmentationAnnuelleAdministration"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('totalAdministration',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalAdministration"])) ? $rapport["totalAdministration"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAdministrationPoids',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcAdministrationPoids"])) ? $rapport["pourcAdministrationPoids"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Frais de gestion</td>
                <td>% des revenus</td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcFraisDeGestion',array('label'=>false,'class'=>'toenter maskMoney form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcFraisDeGestion"])) ? $rapport["pourcFraisDeGestion"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('FraisDeGestion',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["FraisDeGestion"])) ? $rapport["FraisDeGestion"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcRevenuFraisDeGestion',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRevenuFraisDeGestion"])) ? $rapport["pourcRevenuFraisDeGestion"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAugmentationAnnuelleFraisDeGestion',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcAugmentationAnnuelleFraisDeGestion"])) ? $rapport["pourcAugmentationAnnuelleFraisDeGestion"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('totalFraisDeGestion',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalFraisDeGestion"])) ? $rapport["totalFraisDeGestion"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcFraisDeGestionPoids',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcFraisDeGestionPoids"])) ? $rapport["pourcFraisDeGestionPoids"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Autres (internet, cable, etc)</td>
                <td></td>
                <td></td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('Autres',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["Autres"])) ? $rapport["Autres"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcRevenuAutres',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRevenuAutres"])) ? $rapport["pourcRevenuAutres"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAugmentationAnnuelleAutres',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=> (isset($rapport["pourcAugmentationAnnuelleAutres"])) ? $rapport["pourcAugmentationAnnuelleAutres"] : null)); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('totalAutres',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalAutres"])) ? $rapport["totalAutres"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('pourcAutresPoids',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcAutresPoids"])) ? $rapport["pourcAutresPoids"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Total dépenses annuelles</td>
                <td></td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('totalDépensesMontant',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalDépensesMontant"])) ? $rapport["totalDépensesMontant"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('totalDépensesAnnuel',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalDépensesAnnuel"])) ? $rapport["totalDépensesAnnuel"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('totalPourcDépenses',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalPourcDépenses"])) ? $rapport["totalPourcDépenses"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('pourcTotalAugmentationAnnuelle',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcTotalAugmentationAnnuelle"])) ? $rapport["pourcTotalAugmentationAnnuelle"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('totalTotalDépenses',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalTotalDépenses"])) ? $rapport["totalTotalDépenses"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">%</div>
									<?php echo $this->Form->input('H56',array('label'=>false,'class'=>'maskMoney form-control','value'=>'100','readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>

            </tr>
            <tr>
                <td>Service de la dette</td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('serviceDeLaDette',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["serviceDeLaDette"])) ? $rapport["serviceDeLaDette"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Profit</td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
									<?php echo $this->Form->input('profit',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["profit"])) ? $rapport["profit"] : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <h4>DÉPENSES INITIALES</h4>
            <tr>
                <td>
                    Notaire
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
								<?php echo $this->Form->input('notaire',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["notaire"])) ? $rapport["notaire"] : null)); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Frais d'ouverture de dossier financement
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
								<?php echo $this->Form->input('fraisOuvertureDossier',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["fraisOuvertureDossier"])) ? $rapport["fraisOuvertureDossier"] : null)); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Taxe de bienvenu (droit de mutation)
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
								<?php echo $this->Form->input('taxeBienvenu',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["taxeBienvenu"])) ? $rapport["taxeBienvenu"] : null)); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Phase environnementale
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
								<?php echo $this->Form->input('phaseEnvironnementale',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["phaseEnvironnementale"])) ? $rapport["phaseEnvironnementale"] : null)); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Inspection
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
								<?php echo $this->Form->input('inspection',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["inspection"])) ? $rapport["inspection"] : null)); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Évaluation professionnel
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
								<?php echo $this->Form->input('evaluationProfessionnel',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> (isset($rapport["evaluationProfessionnel"])) ? $rapport["evaluationProfessionnel"] : null)); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Total dépenses initiales
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
								<?php echo $this->Form->input('totalDépensesInitiales',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalDépensesInitiales"])) ? $rapport["totalDépensesInitiales"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <h2>2. Évolution du rendement</h2>
            <h4>ÉVOLUTION DU REMBOURSEMENT DE LA DETTE</h4>
            <tr>
                <td>Période</td>
                <td>Solde début</td>
                <td>Paiement</td>
                <td>Capital</td>	
                <td>Intérêt</td>
                <td>Solde fin</td>
            </tr>
				<?php if (isset($rapport)){
					foreach ($rapport['arrayRendement'] as $key => $value) {
						?>
            <tr>
                <td><?php echo $value->periode; ?></td>
                <td><?php echo $value->soldeDebutDette; ?></td>
                <td><?php echo $value->paiementDette; ?></td>
                <td><?php echo $value->capitalDette; ?></td>
                <td><?php echo $value->interetDette; ?></td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
										<?php echo $this->Form->input('soldeFinDette'.($key+1),array('label'=>false,'class'=>'maskMoney form-control','value'=>$value->soldeFinDette,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
            </tr>
						<?php
					}
				}?>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <h4>ÉVOLUTION DU CASH FLOW</h4>
            <tr>
                <td>Période</td>
                <td>Solde début</td>
                <td>Investissement initial</td>
                <td>Revenu</td>	
                <td>Hypotheque</td>
                <td>Dépenses mensuel</td>
                <td>Dépenses initial</td>
                <td>Vente</td>
                <td>Remboursement hypotheque</td>
                <td>Solde cash flow</td>
                <td>Cash flow in (positif)</td>
            </tr>
				<?php if (isset($rapport)){
					foreach ($rapport["arrayRendement"] as $key => $value) {
						?>
            <tr>
                <td><?php echo $value->periode; ?></td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
										<?php echo $this->Form->input('soldeDebutCashFlow',array('label'=>false,'class'=>'maskMoney form-control','value'=>$value->soldeDebutCashFlow,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td><?php echo $value->investissementInitial; ?></td>
                <td><?php echo $value->revenu; ?></td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
										<?php echo $this->Form->input('hypothequeCashFlow'.($key+1),array('label'=>false,'class'=>'maskMoney form-control','value'=>$value->hypotheque,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td><?php echo $value->depensesMensuel; ?></td>
                <td><?php echo $value->depensesInitial; ?></td>
                <td><?php echo $value->vente; ?></td>
                <td><?php echo $value->rembHypotheque; ?></td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
										<?php echo $this->Form->input('soldeFinCashFlow'.($key+1),array('label'=>false,'class'=>'maskMoney form-control','value'=>$value->soldeFinCashFlow,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td><?php echo $value->cashFlow; ?></td>
            </tr>
						<?php
					}
				}?>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <h4>ÉVOLUTION DE LA VALEUR DE L'IMMEUBLE</h4>
            <!--
            <tr>
                    <td>
                    </td>
                    <td colspan="2">
                            Variation $ ou %
                    </td>
                    <td>
                            <div class="form-group" style="height:57px;">
						<?php /*echo $this->Form->input('variationsAll', array(
							'type' => 'radio',
							'div'=>'variations',
							'onclick'=>'togglePourc()',
							'checked'=>true,
							'id'=>'radioPourcVariation',
							'options' => array('variationPourc'=>'')));*/
							?>
                                            <div class="input-group">
                                                    <div class="input-group-addon">
                                                            %
                                                    </div>
								<?php //echo $this->Form->input('pourcVariation%',array('label'=>false,'class'=>'maskMoney form-control','value'=>'3','readonly'=>'readonly')); ?>
                                            </div>
                                    </div>
                                    <div class="form-group" style="height:57px;">
							<?php /*echo $this->Form->input('variationsAll', array(
								'type' => 'radio',
								'div'=>'variations',
								'onclick'=>'toggleMontant()',
								'id'=>'radioMontantVariation',
								'options' => array('variationMontant'=>'')));*/
								?>
                                                    <div class="input-group">
                                                            <div class="input-group-addon">
                                                                    $
                                                            </div>
									<?php //echo $this->Form->input('pourcVariation$',array('label'=>false,'class'=>'maskMoney form-control','value'=>'0','readonly'=>'readonly')); ?>
                                                    </div>
                                            </div>
                                    </td>
                            </tr>-->
            <tr>
                <td></td>
                <td><?php echo $this->Form->input('variations', array(
							'type' => 'radio',
							'div'=>'variations',
							'legend'=>'$',
							'radioMontant',
							'id'=>'radioM',
							'onclick'=>'toggleMontant()',
							'options' => array('$'=>'')));?>
                </td>
                <td><?php echo $this->Form->input('variations', array(
							'type' => 'radio',
							'div'=>'variations',
							'legend'=>'%',
							'checked'=>true,
							'id'=>'radioP',
							'onclick'=>'togglePourc()',
							'options' => array('%'=>'')));?>
                </td>
                <td>Total</td>
            </tr>
            <tr>
                <td>An 1</td>
                <td>
                    <div class="form-group" style="display:inline-flex">
								<?php echo $this->Form->input('vAn1', array(
									'type' => 'radio',
									'div'=>'variations',
									'onclick'=>'toggleMontantAn1()',
									'checked'=>(isset($rapport)) ? ($rapport['vAn1'] == 'variationAn1M') ? true : false : false,
									'id'=>'radiMAn1',
									'options' => array('variationAn1M'=>'')));
									?>
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
										<?php echo $this->Form->input('an1Montant',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=> 
											(isset($rapport)) ? (isset($rapport["an1Montant"])) ? $rapport["an1Montant"] : null : null,
											'readonly'=>
											(isset($rapport)) ? ($rapport['vAn1'] == 'variationAn1M') ? false : 'readonly' : false
											)); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group" style="display:inline-flex">
										<?php echo $this->Form->input('vAn1', array(
											'type' => 'radio',
											'div'=>'variations',
											'onclick'=>'togglePourcAn1()',
											'checked'=>(isset($rapport)) ? ($rapport['vAn1'] == 'variationAn1P') ? true : false : true,
											'id'=>'radioPAn1',
											'options' => array('variationAn1P'=>'')));
											?>
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
												<?php echo $this->Form->input('an1Pourc',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=>
													(isset($rapport)) ? (isset($rapport["an1Pourc"])) ? $rapport["an1Pourc"] : null : null,
													'readonly'=>(isset($rapport)) ? ($rapport['vAn1'] == 'variationAn1P') ? false : 'readonly' : false)); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
													<?php echo $this->Form->input('an1Total',array('label'=>false,'class'=>'maskMoney form-control','value'=> 
														(isset($rapport)) ? (isset($rapport["an1Total"])) ? $rapport["an1Total"] : null : null,
														'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>An 2</td>
                <td>
                    <div class="form-group" style="display:inline-flex">
													<?php echo $this->Form->input('vAn2', array(
														'type' => 'radio',
														'div'=>'variations',
														'onclick'=>'toggleMontantAn2()',
														'checked'=>(isset($rapport)) ? ($rapport['vAn2'] == 'variationAn2M') ? true : false : false,
														'id'=>'radiMAn2',
														'options' => array('variationAn2M'=>'')));
														?>
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
															<?php echo $this->Form->input('an2Montant',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=>(isset($rapport)) ? (isset($rapport["an2Montant"])) ? $rapport["an2Montant"] : null : null,'readonly'=>(isset($rapport)) ? ($rapport['vAn2'] == 'variationAn2M') ? false : 'readonly' : false)); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group" style="display:inline-flex">
														<?php echo $this->Form->input('vAn2', array(
															'type' => 'radio',
															'div'=>'variations',
															'onclick'=>'togglePourcAn2()',
															'checked'=>(isset($rapport)) ? ($rapport['vAn2'] == 'variationAn2P') ? true : false : true,
															'id'=>'radioPAn2',
															'options' => array('variationAn2P'=>'')));
															?>
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
																<?php echo $this->Form->input('an2Pourc',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=>(isset($rapport)) ? (isset($rapport["an2Pourc"])) ? $rapport["an2Pourc"] : null : null,'readonly'=>(isset($rapport)) ? ($rapport['vAn2'] == 'variationAn2P') ? false : 'readonly' : false)); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
																	<?php echo $this->Form->input('an2Total',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport)) ? (isset($rapport["an2Total"])) ? $rapport["an2Total"] : null : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>An 3</td>
                <td>
                    <div class="form-group" style="display:inline-flex">
															<?php echo $this->Form->input('vAn3', array(
																'type' => 'radio',
																'div'=>'variations',
																'onclick'=>'toggleMontantAn3()',
																'checked'=>(isset($rapport)) ? ($rapport['vAn3'] == 'variationAn3M') ? true : false : false,
																'id'=>'radiMAn3',
																'options' => array('variationAn3M'=>'')));
																?>
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
																	<?php echo $this->Form->input('an3Montant',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=>(isset($rapport)) ? (isset($rapport["an3Montant"])) ? $rapport["an3Montant"] : null : null,'readonly'=>(isset($rapport)) ? ($rapport['vAn3'] == 'variationAn3M') ? false : 'readonly' : false)); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group" style="display:inline-flex">
																<?php echo $this->Form->input('vAn3', array(
																	'type' => 'radio',
																	'div'=>'variations',
																	'onclick'=>'togglePourcAn3()',
																	'checked'=>(isset($rapport)) ? ($rapport['vAn3'] == 'variationAn3P') ? true : false : true,
																	'id'=>'radioPAn3',
																	'options' => array('variationAn3P'=>'')));
																	?>
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
																		<?php echo $this->Form->input('an3Pourc',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=>(isset($rapport)) ? (isset($rapport["an3Pourc"])) ? $rapport["an3Pourc"] : null : null,'readonly'=>(isset($rapport)) ? ($rapport['vAn3'] == 'variationAn3P') ? false : 'readonly' : false)); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
																			<?php echo $this->Form->input('an3Total',array('label'=>false,'class'=>'maskMoney form-control','value'=>(isset($rapport)) ? (isset($rapport["an3Total"])) ? $rapport["an3Total"] : null : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>An 4</td>
                <td>
                    <div class="form-group" style="display:inline-flex">
																	<?php echo $this->Form->input('vAn4', array(
																		'type' => 'radio',
																		'div'=>'variations',
																		'onclick'=>'toggleMontantAn4()',
																		'checked'=>(isset($rapport)) ? ($rapport['vAn4'] == 'variationAn4M') ? true : false : false,
																		'id'=>'radiMAn4',
																		'options' => array('variationAn4M'=>'')));
																		?>
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
																			<?php echo $this->Form->input('an4Montant',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=>(isset($rapport)) ? (isset($rapport["an4Montant"])) ? $rapport["an4Montant"] : null : null,'readonly'=>(isset($rapport)) ? ($rapport['vAn4'] == 'variationAn4M') ? false : 'readonly' : false)); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group" style="display:inline-flex">
																		<?php echo $this->Form->input('vAn4', array(
																			'type' => 'radio',
																			'div'=>'variations',
																			'onclick'=>'togglePourcAn4()',
																			'checked'=>(isset($rapport)) ? ($rapport['vAn4'] == 'variationAn4P') ? true : false : true,
																			'id'=>'radioPAn4',
																			'options' => array('variationAn4P'=>'')));
																			?>
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
																				<?php echo $this->Form->input('an4Pourc',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=>(isset($rapport)) ? (isset($rapport["an4Pourc"])) ? $rapport["an4Pourc"] : null : null,'readonly'=>(isset($rapport)) ? ($rapport['vAn4'] == 'variationAn4P') ? false : 'readonly' : false)); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
																					<?php echo $this->Form->input('an4Total',array('label'=>false,'class'=>'maskMoney form-control','value'=>(isset($rapport)) ? (isset($rapport["an4Total"])) ? $rapport["an4Total"] : null : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>An 5</td>
                <td>
                    <div class="form-group" style="display:inline-flex">
																			<?php echo $this->Form->input('vAn5', array(
																				'type' => 'radio',
																				'div'=>'variations',
																				'onclick'=>'toggleMontantAn5()',
																				'checked'=>(isset($rapport)) ? ($rapport['vAn5'] == 'variationAn5M') ? true : false : false,
																				'id'=>'radiMAn5',
																				'options' => array('variationAn5M'=>'')));
																				?>
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
																					<?php echo $this->Form->input('an5Montant',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Montant','value'=>(isset($rapport)) ? (isset($rapport["an5Montant"])) ? $rapport["an5Montant"] : null : null,'readonly'=>(isset($rapport)) ? ($rapport['vAn5'] == 'variationAn5M') ? false : 'readonly' : false)); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group" style="display:inline-flex">
																				<?php echo $this->Form->input('vAn5', array(
																					'type' => 'radio',
																					'div'=>'variations',
																					'onclick'=>'togglePourcAn5()',
																					'checked'=>(isset($rapport)) ? ($rapport['vAn5'] == 'variationAn5P') ? true : false : true,
																					'id'=>'radioPAn5',
																					'options' => array('variationAn5P'=>'')));
																					?>
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
																						<?php echo $this->Form->input('an5Pourc',array('label'=>false,'class'=>'toenter form-control','placeholder'=>'Pourcentage','value'=>(isset($rapport)) ? (isset($rapport["an5Pourc"])) ? $rapport["an5Pourc"] : null : null,'readonly'=>(isset($rapport)) ? ($rapport['vAn5'] == 'variationAn5P') ? false : 'readonly' : false)); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
																							<?php echo $this->Form->input('an5Total',array('label'=>false,'class'=>'maskMoney form-control','value'=>(isset($rapport)) ? (isset($rapport["an5Total"])) ? $rapport["an5Total"] : null : null,'readonly'=>'readonly')); ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <h2>3. Indicateurs financiers</h2>
<!--<tr>
<td><strong>QUANTITATIF</strong></td>
<td><strong>%</strong></td>
<td><strong>$</strong></td>
<td><strong>SCHL</strong></td>
</tr>-->
            <tr>
                <td>Revenu brut potentiel</td>
                <td>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('revenuBrutPotentiel',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["revenuBrutPotentiel"])) ? $rapport["revenuBrutPotentiel"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Mauvaise créances & Vacances</td>
                <td>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('mauvaisesCreancesEtVacances',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["mauvaisesCreancesEtVacances"])) ? $rapport["mauvaisesCreancesEtVacances"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Revenu brut effectif (RBE)</td>
                <td>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('indicateurRBE',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["indicateurRBE"])) ? $rapport["indicateurRBE"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Dépenses d'exploitation récurrentes</td>
                <td>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('dépensesExploitationRecurrente',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["dépensesExploitationRecurrente"])) ? $rapport["dépensesExploitationRecurrente"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Revenu net (avant paiement de la dette)</td>
                <td>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('revenuNet',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["revenuNet"])) ? $rapport["revenuNet"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Paiement de la dette</td>
                <td>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('paiementDeLaDette',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["paiementDeLaDette"])) ? $rapport["paiementDeLaDette"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Liquidité</td>
                <td>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('liquidite',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["liquidite"])) ? $rapport["liquidite"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Prix payé vs. Évaluation municipale</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcPrixPayeVsEvaluationMunicipale',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcPrixPayeVsEvaluationMunicipale"])) ? $rapport["pourcPrixPayeVsEvaluationMunicipale"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantPrixPayeVsEvaluationMunicipale',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantPrixPayeVsEvaluationMunicipale"])) ? $rapport["montantPrixPayeVsEvaluationMunicipale"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    Données sectorielles
                </td>
            </tr>
            <tr>
                <td>Prix payé vs. Prix précédent</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcPrixPayeVsPrixPrecedent',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcPrixPayeVsPrixPrecedent"])) ? $rapport["pourcPrixPayeVsPrixPrecedent"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantPrixPayeVsPrixPrecedent',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantPrixPayeVsPrixPrecedent"])) ? $rapport["montantPrixPayeVsPrixPrecedent"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    na
                </td>
            </tr>
            <tr>
                <td>Prix payé vs. Prix demandé</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcPrixPayeVsPrixDemande',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcPrixPayeVsPrixDemande"])) ? $rapport["pourcPrixPayeVsPrixDemande"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantPrixPayeVsPrixDemande',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantPrixPayeVsPrixDemande"])) ? $rapport["montantPrixPayeVsPrixDemande"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    na
                </td>
            </tr>
            <tr>
                <td>Nb de logements</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">#</div>
							<?php echo $this->Form->input('totalNbrLogement',array('type'=>'text','label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalNbrLogement"])) ? $rapport["totalNbrLogement"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantTotalLogement',array('type'=>'text','label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantTotalLogement"])) ? $rapport["montantTotalLogement"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    Données sectorielles
                </td>
            </tr>
            <tr>
                <td>Nb de pièces</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">#</div>
							<?php echo $this->Form->input('totalNbrPiece',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalNbrPiece"])) ? $rapport["totalNbrPiece"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantTotalLogement',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantTotalLogement"])) ? $rapport["montantTotalLogement"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    Données sectorielles
                </td>
            </tr>
            <tr>
                <td>MRB</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcMRB',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcMRB"])) ? $rapport["pourcMRB"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    Données sectorielles
                </td>
            </tr>
            <tr>
                <td>MRN</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcMRN',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcMRN"])) ? $rapport["pourcMRN"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    Données sectorielles
                </td>
            </tr>
            <tr>
                <td>RDE</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRDE',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRDE"])) ? $rapport["pourcRDE"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    Données sectorielles
                </td>
            </tr>
            <tr>
                <td>RCD</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRCD',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRCD"])) ? $rapport["pourcRCD"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    Données sectorielles
                </td>
            </tr>
            <tr>
                <td>TGA</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcTGA',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcTGA"])) ? $rapport["pourcTGA"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    Données sectorielles
                </td>
            </tr>
            <tr>
                <td>Ratio d'endettement</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRatioEndettement',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRatioEndettement"])) ? $rapport["pourcRatioEndettement"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    Données sectorielles
                </td>
            </tr>
            <tr>
                <td>TMO</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcTMO',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcTMO"])) ? $rapport["pourcTMO"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
                <td>
                    Données sectorielles
                </td>
            </tr>
            <tr>
                <td>Délai de récupération (Payback)</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('delaiDeRecup',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["delaiDeRecup"])) ? $rapport["delaiDeRecup"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Investissement de départ requis (mise de fond)</td>
                <td>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('miseDeFond',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["miseDeFond"])) ? $rapport["miseDeFond"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Évolution du cash flow (cash flow in)</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcEvolutionCashFlow',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcEvolutionCashFlow"])) ? $rapport["pourcEvolutionCashFlow"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantEvolutionCashFlow',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantEvolutionCashFlow"])) ? $rapport["montantEvolutionCashFlow"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Remboursement de la dette portion capital (Equity Built)</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcEquityBuilt',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcEquityBuilt"])) ? $rapport["pourcEquityBuilt"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantEquityBuilt',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantEquityBuilt"])) ? $rapport["montantEquityBuilt"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Prise de valeur de la propriété (plus value)</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcPlusValue',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcPlusValue"])) ? $rapport["pourcPlusValue"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantPlusValue',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantPlusValue"])) ? $rapport["montantPlusValue"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td><strong>TOTAL RENDEMENT / ANNÉE</strong></td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcTotalRendementParAnnee',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcTotalRendementParAnnee"])) ? $rapport["pourcTotalRendementParAnnee"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantTotalRendementParAnnee',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantTotalRendementParAnnee"])) ? $rapport["montantTotalRendementParAnnee"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('totalTotalRendement',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalTotalRendement"])) ? $rapport["totalTotalRendement"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <table class="table table-bordered text-center">
            <h4>Rendement en $</h4>
            <tr>
                <td></td>
                <td>An 1</td>
                <td>An 2</td>
                <td>An 3</td>
                <td>An 4</td>
                <td>An 5</td>
            </tr>
            <tr>
                <td>Évolution du cash flow (cash flow in)</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantRendementCashFlowAn1',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantRendementCashFlowAn1"])) ? $rapport["montantRendementCashFlowAn1"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantRendementCashFlowAn2',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantRendementCashFlowAn2"])) ? $rapport["montantRendementCashFlowAn2"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantRendementCashFlowAn3',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantRendementCashFlowAn3"])) ? $rapport["montantRendementCashFlowAn3"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantRendementCashFlowAn4',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantRendementCashFlowAn3"])) ? $rapport["montantRendementCashFlowAn4"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantRendementCashFlowAn5',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantRendementCashFlowAn3"])) ? $rapport["montantRendementCashFlowAn5"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Remboursement de la dette portion capital (Equity Built)</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantRendementEquityBuiltAn1',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantRendementEquityBuiltAn1"])) ? $rapport["montantRendementEquityBuiltAn1"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantRendementEquityBuiltAn2',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantRendementEquityBuiltAn2"])) ? $rapport["montantRendementEquityBuiltAn2"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantRendementEquityBuiltAn3',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantRendementEquityBuiltAn3"])) ? $rapport["montantRendementEquityBuiltAn3"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantRendementEquityBuiltAn4',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantRendementEquityBuiltAn4"])) ? $rapport["montantRendementEquityBuiltAn4"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantRendementEquityBuiltAn5',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantRendementEquityBuiltAn5"])) ? $rapport["montantRendementEquityBuiltAn5"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Prise de valeur de la propriété (plus value)</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantRendementPlusValueAn1',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantRendementPlusValueAn1"])) ? $rapport["montantRendementPlusValueAn1"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantRendementPlusValueAn2',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantRendementPlusValueAn2"])) ? $rapport["montantRendementPlusValueAn2"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantRendementPlusValueAn3',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantRendementPlusValueAn3"])) ? $rapport["montantRendementPlusValueAn3"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantRendementPlusValueAn4',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantRendementPlusValueAn4"])) ? $rapport["montantRendementPlusValueAn4"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('montantRendementPlusValueAn5',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["montantRendementPlusValueAn5"])) ? $rapport["montantRendementPlusValueAn5"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Total rendement</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('totalRendementAn1',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalRendementAn1"])) ? $rapport["totalRendementAn1"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('totalRendementAn2',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalRendementAn2"])) ? $rapport["totalRendementAn2"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('totalRendementAn3',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalRendementAn3"])) ? $rapport["totalRendementAn3"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('totalRendementAn4',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalRendementAn4"])) ? $rapport["totalRendementAn4"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
							<?php echo $this->Form->input('totalRendementAn5',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalRendementAn5"])) ? $rapport["totalRendementAn5"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <table class="table table-bordered text-center">
            <h4>Rendement en %</h4>
            <tr>
                <td></td>
                <td>An 1</td>
                <td>An 2</td>
                <td>An 3</td>
                <td>An 4</td>
                <td>An 5</td>
            </tr>
            <tr>
                <td>Évolution du cash flow (cash flow in)</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRendementCashFlowAn1',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRendementCashFlowAn1"])) ? $rapport["pourcRendementCashFlowAn1"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRendementCashFlowAn2',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRendementCashFlowAn2"])) ? $rapport["pourcRendementCashFlowAn2"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRendementCashFlowAn3',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRendementCashFlowAn3"])) ? $rapport["pourcRendementCashFlowAn3"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRendementCashFlowAn4',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRendementCashFlowAn3"])) ? $rapport["pourcRendementCashFlowAn4"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRendementCashFlowAn5',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRendementCashFlowAn3"])) ? $rapport["pourcRendementCashFlowAn5"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Remboursement de la dette portion capital (Equity Built)</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRendementEquityBuiltAn1',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRendementEquityBuiltAn1"])) ? $rapport["pourcRendementEquityBuiltAn1"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRendementEquityBuiltAn2',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRendementEquityBuiltAn2"])) ? $rapport["pourcRendementEquityBuiltAn2"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRendementEquityBuiltAn3',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRendementEquityBuiltAn3"])) ? $rapport["pourcRendementEquityBuiltAn3"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRendementEquityBuiltAn4',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRendementEquityBuiltAn4"])) ? $rapport["pourcRendementEquityBuiltAn4"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRendementEquityBuiltAn5',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRendementEquityBuiltAn5"])) ? $rapport["pourcRendementEquityBuiltAn5"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Prise de valeur de la propriété (plus value)</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRendementPlusValueAn1',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRendementPlusValueAn1"])) ? $rapport["pourcRendementPlusValueAn1"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRendementPlusValueAn2',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRendementPlusValueAn2"])) ? $rapport["pourcRendementPlusValueAn2"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRendementPlusValueAn3',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRendementPlusValueAn3"])) ? $rapport["pourcRendementPlusValueAn3"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRendementPlusValueAn4',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRendementPlusValueAn4"])) ? $rapport["pourcRendementPlusValueAn4"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('pourcRendementPlusValueAn5',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["pourcRendementPlusValueAn5"])) ? $rapport["pourcRendementPlusValueAn5"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Total rendement</td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('totalRendementAn1pourc',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalRendementAn1pourc"])) ? $rapport["totalRendementAn1pourc"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('totalRendementAn2pourc',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalRendementAn2pourc"])) ? $rapport["totalRendementAn2pourc"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('totalRendementAn3pourc',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalRendementAn3pourc"])) ? $rapport["totalRendementAn3pourc"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('totalRendementAn4pourc',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalRendementAn4pourc"])) ? $rapport["totalRendementAn4pourc"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">%</div>
							<?php echo $this->Form->input('totalRendementAn5pourc',array('label'=>false,'class'=>'maskMoney form-control','value'=> (isset($rapport["totalRendementAn5pourc"])) ? $rapport["totalRendementAn5pourc"] : null,'readonly'=>'readonly')); ?>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <table class="table table-bordered text-center qualitatif">
        <h4>QUALITATIF</h4>
        <button  type="button" class="btnAddLogement btn btn-sm btn-primary" onclick="addQuali()"><i class="fa fa-plus"></i>&nbsp;&nbsp;Qualitatif</button>
        <tbody id="tableTBodyQuali">
			<?php if (isset($qualitatifs)){
				foreach ($qualitatifs as $key => $value) {
					$numbers = range(0,9);
					shuffle($numbers);
					$digits = '';
					for($i = 0;$i < 8;$i++){
						$digits .= $numbers[$i];
					}
					?>
            <tr class="qualiRow" id="thisQuali<?php echo $digits;?>">
                <td>
							<?php echo $this->Form->hidden('qualiID'.$digits,array('value'=>$value['Qualitatif']['id']))?>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">N</div>
									<?php echo $this->Form->input('qualitatifAdd'.$digits,array('onkeyup'=>'valueStay(this)','class'=>'toenter form-control','placeholder'=>'nom','value'=>$value['Qualitatif']['nom'],'label'=>false));?>
                        </div>
                    </div>
                </td>
                <td>
							<?php echo $this->HTML->link('Supprimer','/rapports/deleteQuali/'.$value['Qualitatif']['id'],array('label'=>false));?>
                </td>
            </tr>
					<?php
				}
			}
			?>
        </tbody>
    </table>
	<?php echo $this->Form->end(array('onclick'=>'return checkThese();','class'=>'btn btn-primary btn-lg endRapport floatRight','label'=>'SOUMETTRE')); ?>
</div>

<?php if (isset($rapport))
{ 
	?>
<div class="container">
    <div class="row">
        <p class="tableTitle"><strong>4. Graphiques</strong></p>
        <div class="col-md-6 text-center">
            <h4>Rendement de la mise de fond</h4>
            <div id="graphRendement"></div>
        </div>
        <div class="col-md-6 text-center">
            <h4>Titre du graphique</h4>
            <div id="graphGraphique"></div>
        </div>
        <div class="col-md-6 text-center">
            <h4>Répartition des dépenses</h4>
            <div id="graphDepenses"></div>
        </div>
        <div class="col-md-6 text-center">
            <h4>Composition du revenu</h4>
            <div id="graphRevenu"></div>
        </div>
    </div>
</div>

	<?php 
} 
else{
	?>
<script type="text/javascript">
    togglePourcB();
</script>
	<?php
}
?>

