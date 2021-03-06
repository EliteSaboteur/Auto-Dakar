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
    if($('#persoana-fizica').hasClass('cta-primary')){
        setTimeout(function(){
            $('#reprezentant').val($('#denumire').val());
        }, 100);
    }

});

// init floating options for elements with only one child - opens to the right - increase both xy radius to increase distange from center
$('.service-option.one-child .float-trigger').float(0, 0, 60, 60, 0, 180, 0, 'build', 'bug_report');

// init floating options for elements with only two children (change 0,180 to 90,-90 to open them vertically)
$('.service-option.two-children .float-trigger').float(0, 0, 100, 100, 0, 180, 1, 'build', 'bug_report');

// init floating options for elements with only three children - they open in triangle
$('.service-option.three-children .float-trigger').float(0, 0, 80, 80, 0, 360, 0, 'build', 'bug_report');

// init floating options for elements with four or more
$('.service-option.four-children .float-trigger').float(0, 0, 80, 80, -45, 225, 1, 'build', 'bug_report');

if ($('.service-option').length > 0 ) {
    $(document).click(function(event){
        if (!($(event.target).closest(".service-option").length)) {
            $(".service-option.opened .float-trigger").trigger('click');
        }
    });
}

$('.share-items .floating-item').on('click', function () {
    var content = $.trim($('#optiune-lucrare').val()) + " " + $.trim($(this).parent().siblings().text()) + " " + $.trim($(this).text());
    $('#optiune-lucrare').val(content.trim());
    $(this).parent().siblings().trigger('click');
    $("#adauga").trigger('click');
});

//adauga lucrare from input
$("#adauga").on("click", function () {
    if ($('#optiune-lucrare').val() != "") {
        var content = $('#optiune-lucrare').val().toLowerCase();
        if ($('#adauga-manopera').is(':checked')) {
            $('#manopera').append('<div class="estimated-option is-numbered-item">' + content.charAt(0).toUpperCase()+ content.slice(1) + '<span class="rem">Șterge <span class="material-icons close"></span></span></div>');
            $('#adauga-manopera').trigger('click');
        } else {
            $('#piese').append('<div class="estimated-option is-numbered-item">' + content.charAt(0).toUpperCase()+ content.slice(1) + '<span class="rem">Șterge <span class="material-icons close"></span></span></div>');
            $('#adauga-piese').trigger('click');
        }
        $('#lucrari').append('<div class="estimated-option is-numbered-item">' + content.charAt(0).toUpperCase() + content.slice(1) + '<span class="rem">Șterge <span class="material-icons close"></span></span></div>');
        $('#optiune-lucrare').val("");
        $("input[name='add-manopera']").prop('checked', false);
    }
});
//sterge input button
$('#sterge').on('click', function () {
    $('#optiune-lucrare').val("");
    if ($('#adauga-manopera').is(':checked')) {
        $('#adauga-manopera').trigger('click');
        $("input[name='add-manopera']").prop('checked', false);
    } else {
        $('#adauga-piese').trigger('click');
    }
});

//sterge lucrare button
$(".canBeErased").on("click", '.rem', function () {
    $(this).parent().remove();
});
//scrols so that all options are visible
            function scrollToInput(){
                $('html,body').animate({
                    scrollTop: $('#input-lucrare').offset().top
                }, 500);
            }
//initiates the addition process
$("#adauga-manopera").on("click", function () {
    $('#alege-manopera').removeClass('d-none').addClass('zoomIn');
    $('#alege-piese').addClass('zoomOut');
    setTimeout(function () {
        $('#alege-manopera').removeClass('zoomIn');
        $('#alege-piese').addClass('d-none').removeClass('zoomOut');
    }, 700);
//                scrollToInput();
});
//initiates the addition process
$("#adauga-piesa").on("click", function () {
    $('#alege-manopera').addClass('zoomOut');
    $('#alege-piese').removeClass('d-none').addClass('zoomIn');
    setTimeout(function () {
        $('#alege-manopera').addClass('d-none').removeClass('zoomOut');
        $('#alege-piese').removeClass('zoomIn');
    }, 700);
//                scrollToInput();
});
//            for manopera field
$(".manopera-field label").on("click", function () {
    $('#optiune-lucrare').val($.trim($(this).text()));
    $('#alege-manopera').addClass('zoomOut');
    $('#alege-piese').removeClass('d-none').addClass('zoomIn');
    setTimeout(function () {
        $('#alege-manopera').addClass('d-none').removeClass('zoomOut');
        $('#alege-piese').removeClass('zoomIn')
    }, 700);
//                scrollToInput();
});