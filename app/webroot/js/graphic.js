/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
var data = [{
		values: [
		document.getElementById('RapportPourcTaxeMunicipalePoids').value, 
		document.getElementById('RapportPourcTaxeScolairePoids').value, 
		document.getElementById('RapportPourcAssurancesPoids').value,
		document.getElementById('RapportPourcElectricitePoids').value,
		document.getElementById('RapportPourcChauffagePoids').value,
		document.getElementById('RapportPourcDeneigementPoids').value,
		document.getElementById('RapportPourcTonteDePelousePoids').value,
		document.getElementById('RapportPourcConciergeriePoids').value,
		document.getElementById('RapportPourcEntretienEtReparationPoids').value,
		document.getElementById('RapportPourcAdministrationPoids').value,
		document.getElementById('RapportPourcFraisDeGestionPoids').value,
		document.getElementById('RapportPourcAutresPoids').value
		],
		labels: ['Taxes munipale','Taxes scolaire','Assurances','Électricité','Chauffage','Déneigement','Tonte de pelouse','Conciergerie','Entretien et réparation','Administration','Frais de gestion','Autres'],
		type: 'pie'
	}];

	var layout = {
		height: 500,
		width: 500,
                font:{
                    color:'blue'
                }
                        
                
	};

	Plotly.newPlot('graphDepenses', data, layout);

	var data = [{
		values: [
		document.getElementById('RapportPourcRevenuTaxeMunicipale').value, 
		document.getElementById('RapportPourcRevenuTaxeScolaire').value, 
		document.getElementById('RapportPourcRevenuAssurances').value,
		document.getElementById('RapportPourcRevenuElectricite').value,
		document.getElementById('RapportPourcRevenuChauffage').value,
		document.getElementById('RapportPourcRevenuDeneigement').value,
		document.getElementById('RapportPourcRevenuTonteDePelouse').value,
		document.getElementById('RapportPourcRevenuConciergerie').value,
		document.getElementById('RapportPourcRevenuEntretienEtReparation').value,
		document.getElementById('RapportPourcRevenuAdministration').value,
		document.getElementById('RapportPourcRevenuFraisDeGestion').value,
		document.getElementById('RapportPourcRevenuAutres').value,
		document.getElementById('RapportServiceDeLaDette').value,
		document.getElementById('RapportProfit').value
		],
		labels: ['Taxes munipale','Taxes scolaire','Assurances','Électricité','Chauffage','Déneigement','Tonte de pelouse','Conciergerie','Entretien et réparation','Administration','Frais de gestion','Autres','Service de la dette','Profit'],
		type: 'pie',
		hole: .5
	}];
    

	Plotly.newPlot('graphRevenu', data, layout);

	var cashFlowStat = {
		x: ['an 1', 'an 2', 'an 3', 'an 4','an 5'],
		y: [
		document.getElementById('RapportMontantRendementCashFlowAn1').value, 
		document.getElementById('RapportMontantRendementCashFlowAn2').value, 
		document.getElementById('RapportMontantRendementCashFlowAn3').value, 
		document.getElementById('RapportMontantRendementCashFlowAn4').value,
		document.getElementById('RapportMontantRendementCashFlowAn5').value
		],
		type: 'scatter',
		name:'Cash Flow'
	};

	var equityBuiltStat = {
		x: ['an 1', 'an 2', 'an 3', 'an 4','an 5'],
		y: [
		document.getElementById('RapportMontantRendementEquityBuiltAn1').value, 
		document.getElementById('RapportMontantRendementEquityBuiltAn2').value, 
		document.getElementById('RapportMontantRendementEquityBuiltAn3').value, 
		document.getElementById('RapportMontantRendementEquityBuiltAn4').value,
		document.getElementById('RapportMontantRendementEquityBuiltAn5').value
		],
		type: 'scatter',
		name:'Equity Built'
	};

	var plusValueStat = {
		x: ['an 1', 'an 2', 'an 3', 'an 4','an 5'],
		y: [
		document.getElementById('RapportMontantRendementPlusValueAn1').value, 
		document.getElementById('RapportMontantRendementPlusValueAn2').value, 
		document.getElementById('RapportMontantRendementPlusValueAn3').value, 
		document.getElementById('RapportMontantRendementPlusValueAn4').value,
		document.getElementById('RapportMontantRendementPlusValueAn5').value
		],
		type: 'scatter',
		name:'Plus Value'
	};

	var data = [cashFlowStat, equityBuiltStat,plusValueStat];
        
        var Layout = {
                xaxis: {
                    tickfont: {
                        color: '#ffffff',
                        tickangle: 45,
                    }
                },
                yaxis: {
                    tickfont: {
                        color: '#ffffff'
                    }
                }
            }

	Plotly.newPlot('graphRendement', data, Layout);

	var cf = {
		x: ['an 1', 'an 2', 'an 3', 'an 4','an 5'],
		y: [
		document.getElementById('RapportMontantRendementCashFlowAn1').value, 
		document.getElementById('RapportMontantRendementCashFlowAn2').value, 
		document.getElementById('RapportMontantRendementCashFlowAn3').value,
		document.getElementById('RapportMontantRendementCashFlowAn4').value,
		document.getElementById('RapportMontantRendementCashFlowAn5').value
		],
		name: 'Cash Flow',
		type: 'bar'
	};

	var eb = {
		x: ['an 1', 'an 2', 'an 3', 'an 4','an 5'],
		y: [
		document.getElementById('RapportMontantRendementEquityBuiltAn1').value, 
		document.getElementById('RapportMontantRendementEquityBuiltAn2').value, 
		document.getElementById('RapportMontantRendementEquityBuiltAn3').value,
		document.getElementById('RapportMontantRendementEquityBuiltAn4').value,
		document.getElementById('RapportMontantRendementEquityBuiltAn5').value
		],
		name: 'Equity Built',
		type: 'bar'
	};

	var pv = {
		x: ['an 1', 'an 2', 'an 3', 'an 4','an 5'],
		y: [
		document.getElementById('RapportMontantRendementPlusValueAn1').value, 
		document.getElementById('RapportMontantRendementPlusValueAn2').value, 
		document.getElementById('RapportMontantRendementPlusValueAn3').value,
		document.getElementById('RapportMontantRendementPlusValueAn4').value,
		document.getElementById('RapportMontantRendementPlusValueAn5').value
		],
		name: 'Plus Value',
		type: 'bar'
	};

	var data = [cf, eb, pv];

	var layout3 = {
            barmode: 'stack',
            xaxis: {
                tickfont: {
                    color: '#ffffff',
                    tickangle: 45,
                }
            },
            yaxis: {
                tickfont: {
                    color: '#ffffff'
                }
            }
        };

	Plotly.newPlot('graphGraphique', data, layout3);
        
});