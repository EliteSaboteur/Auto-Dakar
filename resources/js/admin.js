/**
 * Created by Intern on 12/10/2018.
 */
$('ul > li a[href="' + window.location.pathname + '"]').addClass('active');

$('#persoana-fizica').on('click',function(){
    $('#regcom').parent().parent().addClass('zoomOut');
    setTimeout(function () {
        $('#regcom').parent().parent().addClass('d-none').removeClass('zoomOut');
    }, 700);
    $('#cnp-placeholder').html('CNP');
    $('#denumire-placeholder').html('Nume și Prenume');
    $(this).removeClass('cta-default').addClass('cta-primary');
    $('#persoana-juridica').removeClass('cta-primary').addClass('cta-default');
});

$('#persoana-juridica').on('click',function(){
    if($(this).hasClass('cta-default')){
        $('#regcom').parent().parent().removeClass('d-none').addClass('zoomIn');
        setTimeout(function(){
            $('#regcom').parent().parent().removeClass('zoomIn');
        }, 700);
    }
    $('#cnp-placeholder').html('CUI');
    $('#denumire-placeholder').html('Denumire societate');

    $(this).removeClass('cta-default').addClass('cta-primary');
    $('#persoana-fizica').removeClass('cta-primary').addClass('cta-default');
});

$('#denumire').on('keypress',function(){
    setTimeout(function(){
        $('#reprezentant').val($('#denumire').val());
    }, 100);
});
