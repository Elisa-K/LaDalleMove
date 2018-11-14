$(document).ready(function(){
    if ($('#modal-help-carte').length > 0)
        $('#modal-help-carte').modal('show');

    $('a.notClick').click(function(){
        alert("Il faut avoir testé au moins 3 sport avant de terminer le parcours");
    });
    if ($('#modal-sport-avis').length > 0)
        $('#modal-sport-avis').modal('show');

});
