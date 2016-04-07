/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function autoPret() {
    var i = (document.getElementById('RapportPourcPret').value > 0) ? document.getElementById('RapportPrixPaye').value * (document.getElementById('RapportPourcPret').value / 100) : 0;
    document.getElementById('RapportPret').value = (i > 0) ? i.toFixed(2) : 0;
}
function autoRemb() {
    autoPret();
    var t = (document.getElementById('RapportTerme').value > 0) ? document.getElementById('RapportTerme').value : 0;
    var m = (document.getElementById('RapportTauxInteret').value / 100) / 12;
    var r = (t > 0) ? ((m / (1 - Math.pow((1 + m), (t * 12) * -1))) * (document.getElementById('RapportPret').value)).toFixed(2) : 0;
    document.getElementById('RapportRemboursementMensuel').value = r;
}
function randomNbr()
{
    var text = "";
    var possible = "0123456789";
    for (var i = 0; i < 8; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    return text;
}
function addLogement() {
    var r = randomNbr();
    document.getElementById("tableLoyerTBody").innerHTML += '<tr><td><input type="hidden" name="data[Rapport][logementID' + r + ']" value="' + r + '" id="RapportLogementID' + r + '"><div class="form-group"><div class="input-group"><div class="input-group-addon">#</div><input onkeyup="valueStay(this)" name="data[Rapport][nbDeLoyer' + r + ']" class="toenter form-control" placeholder="Nombre" type="text" id="RapportNbDeLoyer' + r + '"></div></div></td><td><div class="form-group"><div class="input-group"><div class="input-group-addon">U</div>\n\
<select name="data[Rapport][grandeur' + r + ']" class="toenter form-control" \n\
<option value="">Grandeur</option> \n\
<option value="1">1 1/2</option> \n\
option value="2">2 1/2</option> \n\
<option value="3">3 1/2</option> \n\
<option value="4">4 1/2</option> \n\
<option value="5">5 1/2</option> \n\
<option value="6">6 1/2</option> \n\
<option value="7">7 1/2</option> \n\
<option value="8">8 1/2</option> \n\
<option value="9">9 1/2</option> type="text" id="RapportGrandeur' + r + '"></select</div></div></td><td><div class="form-group"><div class="input-group"><div class="input-group-addon">$</div><input onkeyup="valueStay(this)" name="data[Rapport][revenuMensuel' + r + ']" class="toenter form-control" placeholder="Montant" type="text" id="RapportRevenuMensuel' + r + '"></div></div></td><td><div class="form-group"><div class="input-group"><div class="input-group-addon">%</div><input onkeyup="valueStay(this)" name="data[Rapport][pourcRevenus' + r + ']" class="maskMoney form-control" value="0" readonly="readonly" type="text" id="RapportPourcRevenus' + r + '"></div></div></td><td><div class="form-group"><div class="input-group"><div class="input-group-addon">%</div><input onkeyup="valueStay(this)" name="data[Rapport][pourcAugmentationAnnuelle' + r + ']" class="toenter form-control" placeholder="Pourcentage" type="text" id="RapportPourcAugmentationAnnuelle' + r + '"></div></div></td><td><div class="form-group"><div class="input-group"><div class="input-group-addon">$</div><input onkeyup="valueStay(this)" name="data[Rapport][LtotalRevenu' + r + ']" class="maskMoney form-control" value="0" readonly="readonly" type="text" id="RapportTotalRevenu' + r + '"></div></div></td></tr>';
}
function addQuali() {
    var r = randomNbr();
    document.getElementById("tableTBodyQuali").innerHTML += '<tr class="qualiRow" id="thisQuali' + r + '"><td><input type="hidden" name="data[Rapport][qualiID' + r + ']" id="RapportQualiID' + r + '"><div class="form-group"><div class="input-group"><div class="input-group-addon">N</div><input onkeyup="valueStay(this)" name="data[Rapport][qualitatifAdd' + r + ']" class="toenter form-control" placeholder="Nom" type="text" id="RapportQualitatifAdd' + r + '"></div></div></td><td><a onclick="this.parentNode.parentNode.remove()">Supprimer</a></td></tr>';
}
function valueStay(i) {
    $(i).attr('value', i.value);
    var revenu = $(i).parents('tr:first').find($('[id*="RapportRevenuMensuel"]')).val();
    var augmentation = $(i).parents('tr:first').find($('[id*="RapportPourcAugmentationAnnuelle"]')).val();
    var total = Math.floor(parseInt(revenu) + ((revenu * augmentation) / 100));
    $(i).parents('tr:first').find($('[id*="RapportLtotalRevenu"]')).val(total);
}
function togglePourcB() {
    $('#RapportAn1Montant').attr('readonly', 'readonly');
    $('#RapportAn2Montant').attr('readonly', 'readonly');
    $('#RapportAn3Montant').attr('readonly', 'readonly');
    $('#RapportAn4Montant').attr('readonly', 'readonly');
    $('#RapportAn5Montant').attr('readonly', 'readonly');

    $('#RapportAn1Pourc').attr('readonly', false);
    $('#RapportAn2Pourc').attr('readonly', false);
    $('#RapportAn3Pourc').attr('readonly', false);
    $('#RapportAn4Pourc').attr('readonly', false);
    $('#RapportAn5Pourc').attr('readonly', false);

    $('#radioP').prop('checked', true);
    $('#radioPourcVariationVariationPourc').prop('checked', true);
}
function togglePourc() {
    $('#RapportAn1Montant').attr('readonly', 'readonly');
    $('#RapportAn2Montant').attr('readonly', 'readonly');
    $('#RapportAn3Montant').attr('readonly', 'readonly');
    $('#RapportAn4Montant').attr('readonly', 'readonly');
    $('#RapportAn5Montant').attr('readonly', 'readonly');

    $('#RapportAn1Pourc').attr('readonly', false);
    $('#RapportAn2Pourc').attr('readonly', false);
    $('#RapportAn3Pourc').attr('readonly', false);
    $('#RapportAn4Pourc').attr('readonly', false);
    $('#RapportAn5Pourc').attr('readonly', false);

    $('#radioP').prop('checked', true);
    $('#radioPourcVariationVariationPourc').prop('checked', true);

    togglePourcAn1();
    togglePourcAn2();
    togglePourcAn3();
    togglePourcAn4();
    togglePourcAn5();
}
function toggleMontant() {
    $('#RapportAn1Pourc').attr('readonly', 'readonly');
    $('#RapportAn2Pourc').attr('readonly', 'readonly');
    $('#RapportAn3Pourc').attr('readonly', 'readonly');
    $('#RapportAn4Pourc').attr('readonly', 'readonly');
    $('#RapportAn5Pourc').attr('readonly', 'readonly');

    $('#RapportAn1Montant').attr('readonly', false);
    $('#RapportAn2Montant').attr('readonly', false);
    $('#RapportAn3Montant').attr('readonly', false);
    $('#RapportAn4Montant').attr('readonly', false);
    $('#RapportAn5Montant').attr('readonly', false);

    $('#radioM').prop('checked', true);
    $('#radioMontantVariationVariationMontant').prop('checked', true);

    toggleMontantAn1();
    toggleMontantAn2();
    toggleMontantAn3();
    toggleMontantAn4();
    toggleMontantAn5();
}
function toggleMontantAn1() {
    $('#RapportAn1Montant').attr('readonly', false);
    $('#RapportAn1Pourc').attr('readonly', 'readonly');
    $('#radiMAn1VariationAn1M').prop('checked', true);
}
function togglePourcAn1() {
    $('#RapportAn1Pourc').attr('readonly', false);
    $('#RapportAn1Montant').attr('readonly', 'readonly');
    $('#radioPAn1VariationAn1P').prop('checked', true);
}
function toggleMontantAn2() {
    $('#RapportAn2Montant').attr('readonly', false);
    $('#RapportAn2Pourc').attr('readonly', 'readonly');
    $('#radiMAn2VariationAn2M').prop('checked', true);
}
function togglePourcAn2() {
    $('#RapportAn2Pourc').attr('readonly', false);
    $('#RapportAn2Montant').attr('readonly', 'readonly');
    $('#radioPAn2VariationAn2P').prop('checked', true);
}
function togglePourcAn3() {
    $('#RapportAn3Pourc').attr('readonly', false);
    $('#RapportAn3Montant').attr('readonly', 'readonly');
    $('#radioPAn3VariationAn3P').prop('checked', true);
}
function toggleMontantAn3() {
    $('#RapportAn3Montant').attr('readonly', false);
    $('#RapportAn3Pourc').attr('readonly', 'readonly');
    $('#radiMAn3VariationAn3M').prop('checked', true);
}
function togglePourcAn4() {
    $('#RapportAn4Pourc').attr('readonly', false);
    $('#RapportAn4Montant').attr('readonly', 'readonly');
    $('#radioPAn4VariationAn4P').prop('checked', true);
}
function toggleMontantAn4() {
    $('#RapportAn4Montant').attr('readonly', false);
    $('#RapportAn4Pourc').attr('readonly', 'readonly');
    $('#radiMAn4VariationAn4M').prop('checked', true);
}
function togglePourcAn5() {
    $('#RapportAn5Pourc').attr('readonly', false);
    $('#RapportAn5Montant').attr('readonly', 'readonly');
    $('#radioPAn5VariationAn5P').prop('checked', true);
}
function toggleMontantAn5() {
    $('#RapportAn5Montant').attr('readonly', false);
    $('#RapportAn5Pourc').attr('readonly', 'readonly');
    $('#radiMAn5VariationAn5M').prop('checked', true);
}

$('#RapportLoadForm').submit(function (evt) {
        alert("allo");
        evt.preventDefault();
        window.history.back();
    });
function checkThese() {
    var submit = false;
    
    if (
            document.getElementById('RapportTaxeMunicipale').value == 0 &&
            document.getElementById('RapportPourcAugmentationAnnuelleTaxeMunicipale').value == 0 &&
            document.getElementById('RapportTaxeScolaire').value == 0 &&
            document.getElementById('RapportPourcAugmentationAnnuelleTaxeScolaire').value == 0 &&
            document.getElementById('RapportAssurances').value == 0 &&
            document.getElementById('RapportPourcAugmentationAnnuelleAssurances').value == 0 &&
            document.getElementById('RapportElectricite').value == 0 &&
            document.getElementById('RapportPourcAugmentationAnnuelleElectricite').value == 0 &&
            document.getElementById('RapportChauffage').value == 0 &&
            document.getElementById('RapportPourcAugmentationAnnuelleChauffage').value == 0 &&
            document.getElementById('RapportDeneigement').value == 0 &&
            document.getElementById('RapportPourcAugmentationAnnuelleDeneigement').value == 0 &&
            document.getElementById('RapportTonteDePelouse').value == 0 &&
            document.getElementById('RapportPourcAugmentationAnnuelleTonteDePelouse').value == 0 &&
            document.getElementById('RapportMontantConciergerie').value == 0 &&
            document.getElementById('RapportPourcAugmentationAnnuelleConciergerie').value == 0 &&
            document.getElementById('RapportMontantEntretienEtReparation').value == 0 &&
            document.getElementById('RapportPourcAugmentationAnnuelleEntretienEtReparation').value == 0 &&
            document.getElementById('RapportPourcAdministration').value == 0 &&
            document.getElementById('RapportPourcAugmentationAnnuelleAdministration').value == 0 &&
            document.getElementById('RapportPourcFraisDeGestion').value == 0 &&
            document.getElementById('RapportPourcAugmentationAnnuelleFraisDeGestion').value == 0 &&
            document.getElementById('RapportAutres').value == 0 &&
            document.getElementById('RapportPourcAugmentationAnnuelleAutres').value == 0
            )
    {
        event.preventDefault();
        $('#dialog-confirm').text('Êtes-vous certain que vous ne voulez pas mettre de valeur dans la section Dépenses d\'exploitation récurrentes?');
        $(function() {
            
            $( "#dialog-confirm" ).dialog({
              resizable: false,
              height:140,
              modal: true,
              buttons: {
                "Oui": function() {
                    $('#RapportLoadForm').submit();
                    $(this).dialog( "close" );
                },
                "Non": function() {
                    submit = false;
                    $(this).dialog( "close" );
                }
              }
            });
        });
          
        //if (!window.confirm('Êtes-vous certain que vous ne voulez pas mettre de valeur dans la section Dépenses d\'exploitation récurrentes?'))
        //{
           // return false;
        //}
    }
    if (
            document.getElementById('RapportNotaire').value == 0 &&
            document.getElementById('RapportFraisOuvertureDossier').value == 0 &&
            document.getElementById('RapportTaxeBienvenu').value == 0 &&
            document.getElementById('RapportPhaseEnvironnementale').value == 0 &&
            document.getElementById('RapportInspection').value == 0 &&
            document.getElementById('RapportEvaluationProfessionnel').value == 0 
            )
    {
        event.preventDefault();
        $('#dialog-confirm').text('Êtes-vous certain que vous ne voulez pas mettre de valeur dans la section Dépenses initiales?');
        $(function() {
            $( "#dialog-confirm" ).dialog({
              resizable: false,
              height:140,
              modal: true,
              buttons: {
                "Oui": function() {
                    $('#RapportLoadForm').submit();
                    $(this).dialog( "close" );
                },
                "Non": function() {
                    submit = false;
                    $(this).dialog( "close" );
                }
              }
            });
        });
    }
        
    if (submit){
        $('#RapportLoadForm').submit();
    }
    //if (!window.confirm('Êtes-vous certain que vous ne voulez pas mettre de valeur dans la section Dépenses initiales?'))
    //{
        //return false;
    //}
}

    //return true;


