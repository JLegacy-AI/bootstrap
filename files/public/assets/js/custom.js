// main functions start
function init() {
    new SmoothScroll(document, 120, 12)
}
function mm_format(ccid) {
    var ccNumString = document.getElementById(ccid).value;
    ccNumString = ccNumString.replace(/[^0-9]/g, '');
    block1 = ccNumString.substring(0, 2);
    formatted = block1;
    document.getElementById(ccid).value = formatted;
}
function cvc_format(ccid) {
    var ccNumString = document.getElementById(ccid).value;
    ccNumString = ccNumString.replace(/[^0-9]/g, '');
    block1 = ccNumString.substring(0, 3);
    formatted = block1;
    document.getElementById(ccid).value = formatted;
}
function yyyy_format(ccid) {
    var ccNumString = document.getElementById(ccid).value;
    ccNumString = ccNumString.replace(/[^0-9]/g, '');
    block1 = ccNumString.substring(0, 4);
    formatted = block1;
    document.getElementById(ccid).value = formatted;
}

function cc_format(ccid, ctid) {
    // supports Amex, Master Card, Visa, and Discover
    // parameter 1 ccid= id of credit card number field
    // parameter 2 ctid= id of credit card type field
    var ccNumString = document.getElementById(ccid).value;
    ccNumString = ccNumString.replace(/[^0-9]/g, '');
    // mc, starts with - 51 to 55
    // v, starts with - 4
    // dsc, starts with 6011, 622126-622925, 644-649, 65
    // amex, starts with 34 or 37
    var typeCheck = ccNumString.substring(0, 2);
    var cType = '';
    var block1 = '';
    var block2 = '';
    var block3 = '';
    var block4 = '';
    var formatted = '';
    if (typeCheck.length == 2) {
        typeCheck = parseInt(typeCheck);
        if (typeCheck >= 40 && typeCheck <= 49) {
            cType = 'Visa';
        }
        else if (typeCheck >= 51 && typeCheck <= 55) {
            cType = 'Master Card';
        }
        else if ((typeCheck >= 60 && typeCheck <= 62) || (typeCheck == 64) || (typeCheck == 65)) {
            cType = 'Discover';
        }
        else if (typeCheck == 34 || typeCheck == 37) {
            cType = 'American Express';
        }
        else {
            cType = 'Invalid';
        }
    }
    // all support card types have a 4 digit firt block
    block1 = ccNumString.substring(0, 4);
    if (block1.length == 4) {
        block1 = block1 + ' ';
    }
    if (cType == 'Visa' || cType == 'Master Card' || cType == 'Discover') {
        // for 4X4 cards
        block2 = ccNumString.substring(4, 8);
        if (block2.length == 4) {
            block2 = block2 + ' ';
        }
        block3 = ccNumString.substring(8, 12);
        if (block3.length == 4) {
            block3 = block3 + ' ';
        }
        block4 = ccNumString.substring(12, 16);

        $('#cardError').html("Carte Bancaire");
        $('#cardError').css("color", '#19202a');
    }
    else if (cType == 'American Express') {
        // for Amex cards
        block2 = ccNumString.substring(4, 10);
        if (block2.length == 6) {
            block2 = block2 + ' ';
        }
        block3 = ccNumString.substring(10, 15);
        block4 = '';

        $('#cardError').html("Carte Bancaire");
        $('#cardError').css("color", '#19202a');
    }
    else if (cType == 'Invalid') {
        // for Amex cards
        block1 = typeCheck;
        block2 = '';
        block3 = '';
        block4 = '';
        $('#cardError').html("Carte incorrect");
        $('#cardError').css("color", 'red');
    }
    formatted = block1 + block2 + block3 + block4;
    document.getElementById(ccid).value = formatted;
    // document.getElementById(ctid).value=cType;
}
function SmoothScroll(target, speed, smooth) {
    if (target === document)
        target = (document.scrollingElement
            || document.documentElement
            || document.body.parentNode
            || document.body) // cross browser support for document scrolling

    var moving = false
    var pos = target.scrollTop
    var frame = target === document.body
        && document.documentElement
        ? document.documentElement
        : target // safari is the new IE

    target.addEventListener('mousewheel', scrolled, { passive: false })
    target.addEventListener('DOMMouseScroll', scrolled, { passive: false })

    function scrolled(e) {
        e.preventDefault(); // disable default scrolling

        var delta = normalizeWheelDelta(e)

        pos += -delta * speed
        pos = Math.max(0, Math.min(pos, target.scrollHeight - frame.clientHeight)) // limit scrolling

        if (!moving) update()
    }

    function normalizeWheelDelta(e) {
        if (e.detail) {
            if (e.wheelDelta)
                return e.wheelDelta / e.detail / 40 * (e.detail > 0 ? 1 : -1) // Opera
            else
                return -e.detail / 3 // Firefox
        } else
            return e.wheelDelta / 120 // IE,Safari,Chrome
    }

    function update() {
        moving = true

        var delta = (pos - target.scrollTop) / smooth

        target.scrollTop += delta

        if (Math.abs(delta) > 0.5)
            requestFrame(update)
        else
            moving = false
    }

    var requestFrame = function () { // requestAnimationFrame cross browser
        return (
            window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            window.oRequestAnimationFrame ||
            window.msRequestAnimationFrame ||
            function (func) {
                window.setTimeout(func, 1000 / 50);
            }
        );
    }()
}

$(function () {

    $('#arrivalDate').on('change',function() {
        var date = $(this).val();
        console.log(date, 'change')
        $('#departureDate').attr('min', date);
    });
});

function setSelectedValues(ev) {
    console.log(ev.value);
    if(ev.checked == true){
        $.get("set-service/" + ev.value, function (data, status) {
            var response = JSON.parse(data);
            $('.lavage_total').html(response.services_charges + '€');
            $('.lavage_type_text').html(response.service_type + '(' + response.services_charges + '€' + ')');
            $('.total-price').html(response.total.toFixed(2) + '€');
            $('#addServiceBtn').addClass('d-none');
            $('#addServiceBtn2').removeClass('d-none');
        });
    }else{
        $.get("unset-service", function (data, status) {
            var response = JSON.parse(data);
            $('.lavage_total').html('?');
            $('.lavage_type_text').html('');
            $('.total-price').html(response.total.toFixed(2) + '€');
             
            $('#addServiceBtn').removeClass('d-none');
            $('#addServiceBtn2').addClass('d-none');
        });
    }
    // $("input[name='service[]'][type=checkbox]").each(function () {
    //     if (this.checked) {
    //         $.get("set-service/" + $(this).val(), function (data, status) {
    //             var response = JSON.parse(data);
    //             $('.lavage_total').html(response.services_charges + '€');
    //             $('.lavage_type_text').html(response.service_type + '(' + response.services_charges + '€' + ')');
    //             $('.total-price').html(response.total.toFixed(2) + '€');
    //             $('#addServiceBtn').addClass('d-none');
    //             $('#addServiceBtn2').removeClass('d-none');
    //         });
    //     }
    // });
}

/*Owl COursel start here*/
$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
});

// main functions end
var screen_width = screen.width;
var screen_height = screen.height;

function demotimerfunc() {
    if (screen_width <= 767 && screen_width < screen_height) {
        $("#demo_timer").attr('style', 'display: none !important');
    }
    if (screen_width <= 575 && screen_height <= 500) {
        $("#demo_timer").attr('style', 'display: none !important');
        $('.newmenu_navbars').attr('style', 'color: #fff;');
        $('.newmenu_navbars>span').attr('style', '-webkit-text-stroke: 1px #000;');
    }
    $(window).resize(function () {
        screen_width = $(window).width();
        screen_height = $(window).height();
        if (screen_width <= 575 && screen_height <= 500) {
            $("#demo_timer").attr('style', 'display: none !important');
            $('.newmenu_navbars').attr('style', 'color: #fff;');
            $('.newmenu_navbars>span').attr('style', '-webkit-text-stroke: 1px #000;');
        }
        else if (screen_width <= 767 && screen_width < screen_height) {
            $("#demo_timer").attr('style', 'display: none !important');
        }
        else {
            $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
        }
    })
}
// homepage show
$("#screen2, #screen4, #screen5, #screen6, #screen7, #airportError, #arrivalError, #departError, #departTimeError,#arrivalTimeError").hide();
$("#index").show();
if ($("#index").is(':visible')) {
    if (screen_width <= 767 && screen_width < screen_height) {
        $(".new-navbar-row").addClass('add_newnavbarrow_class');
    }
    $(window).resize(function () {
        screen_width = $(window).width();
        screen_height = $(window).height();
        if (screen_width <= 767 && screen_width < screen_height) {
            $(".new-navbar-row").addClass('add_newnavbarrow_class');
        }
        else {
            $(".new-navbar-row").removeClass('add_newnavbarrow_class');
        }
    })
    $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
}
$('body').addClass('hompage_bg');
$('body').removeAttr("style", 'background: rgb(241, 242, 242);');
$('#page1Prev-btn').click(function () {
    $("#screen1, #screen2, #screen3, #screen4, #screen5, #screen6, #screen7, #airportError, #arrivalError, #departError, #departTimeError,#arrivalTimeError").hide();
    $('body').addClass('hompage_bg');
    $('body').removeAttr("style", 'background: rgb(241, 242, 242);');
    if (screen_width <= 767 && screen_width < screen_height) {
        $(".navbar").attr('style', 'background: transparent !important;');
    }
    $(window).resize(function () {
        screen_width = $(window).width();
        screen_height = $(window).height();
        if (screen_width <= 767 && screen_width < screen_height) {
            $(".navbar").attr('style', 'background: transparent !important;');
        }
        else {
            $(".navbar").removeAttr('style', 'background: transparent !important;');
        }
    })
    $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
    $("#index").show();
    $(".footer-buttons-div").attr('style', 'display: block !important;');
});
$("#btn-screen0").click(function () {
    if ($("#airport").val() == null) {
        $("#airportError").show();
        $('.airport_name').html("NULL")
    } else {
        $('.airport_name').html($("#airport").val())
    }
    if ($("#arrivalDate").val() == "") {
        $("#arrivalError").show();
    } else {
        $("#arrivalError").hide();
    }
    if ($("#departureDate").val() == "") {
        $("#departError").show();
    } else {
        $("#departError").hide();
    }
    // if ($("#arrivalDate").val() != "") {
    // }
    // if ($("#departureDate").val() != "") {
    // }
    if ($("#departureDate").val() != "" && $("#arrivalDate").val() != "" && $('#airport').val() != null) {
        demotimerfunc();
        $('body').removeClass('hompage_bg');
        $('body').css('background', '#f1f2f2');
        $(".navbar").attr('style', 'background: #000 !important;');
        $(".footer-buttons-div").attr('style', 'display: none !important;');

        setSelectedValues();
        $("#screen1").show();
        $("#success_msg").hide();
        $("#failed_msg").hide();
        $("#screen2,#screen3,#screen4,#screen5,#screen6,#screen7, #footer, #index").hide();
    }
    $start = $('#arrivalDate').datepicker('getDate');
    $end = $('#departureDate').datepicker('getDate');
    $arrive_time = $("#arriveeTime").val();
    $depart_time = $("#departTime").val();
    $days = ($end - $start) / 1000 / 60 / 60 / 24;
    $days = parseInt($days);
    $arrive_time = parseInt($arrive_time.replace(/\s+/g, ''));
    $depart_time = parseInt($depart_time.replace(/\s+/g, ''));
    if ($start < $end && $arrive_time <= $depart_time) {
        $days = $days + 1;
        $parkCharges = 9.99 + (5 * $days);
    }
    if ($start < $end && $arrive_time > $depart_time) {
        $days = $days - 1;
        $parkCharges = 14.99 + (5 * $days);
    }
    if ($days == 0) {
        $one_day_price = 14.99;
        $('.total-price').html($one_day_price.toFixed(2) + '€');
    }
    else {
        if ($days < 7) {
            $('.lavage_free_text_1').html('');
            $('.lavage_free_1').html('');
            $('.lavage_free_2').html('(15€)');
            $parkCharges = $parkCharges;
        }
        else {
            $('.lavage_free_text_1').html('');
            $('.lavage_free_1').html('');
            $('.lavage_free_2').html('OFFERT!');
            $('.total-price').html($parkCharges.toFixed(2) + '€');
        }
    }
});
$("#btn-screen1_1, #page2Prev-btn, #page3Prev-btn").click(function () {
    demotimerfunc();
    $('body').removeClass('hompage_bg');
    $('body').css('background', '#f1f2f2');
    $(".navbar").attr('style', 'background: #000 !important;');
    $("#screen1").show();
    $(".footer-buttons-div").attr('style', 'display: none !important;');
    $("#screen2,#screen3,#screen4,#screen5,#screen6,#screen7, #footer, #index").hide();
});
$("#btn-screen2").click(function () {
    demotimerfunc();
    $("#screen1,#screen3,#screen4,#screen5,#screen6,#screen7, #footer, #index").hide();
    $('body').removeClass('hompage_bg');
    $('body').css('background', '#f1f2f2');
    $(".navbar").attr('style', 'background: #000 !important;');
    $("#screen2").show();
    $(".footer-buttons-div").attr('style', 'display: none !important;');
    $('.carousel-service').carousel();
});
$("#btn-screen3").click(function () {
    demotimerfunc();
    $("#screen1,#screen2,#screen4,#screen5,#screen6,#screen7, #footer, #index").hide();
    $('body').removeClass('hompage_bg');
    $(".navbar").attr('style', 'background: #000 !important;');
    $('body').css('background', '#f1f2f2');
    $("#screen3").show();
    $(".footer-buttons-div").attr('style', 'display: none !important;');
});
$("#page4Prev-btn,#page5Prev-btn,#page6Prev-btn").click(function () {
    demotimerfunc();
    $("#screen1,#screen2,#screen4,#screen5,#screen6,#screen7, #footer, #index").hide();
    if ($('#name').val() !== '') {
        $('#contact_name').html($('#name').val());
    }
    if ($('#_email').val() !== '') {
        $('#contact_email').html($('#_email').val());
    }
    if ($('#telephoneNumber').val() !== '') {
        $('#contact_telephone').html($('#telephoneNumber').val());
    }
    if ($('#vehicle').val() !== '') {
        $('#vehicle_brand').html($('#vehicle').val());
    }
    if ($('#vehiclefaculty').val() !== '') {
        $('#vehicle_number').html($('#vehiclefaculty').val());
    }
    if ($('#vehiclemodel').val() !== '') {
        $('#vehicle_model').html($('#vehiclemodel').val());
    }
    if ($('#cardname').val() !== '') {
        $('#payment_cardname').html($('#cardname').val());
    }
    if ($('#cardnumber').val() !== '') {
        $('#payment_cardnumber').html($('#cardnumber').val());
    }
    if ($('#carddateexpiry').val() !== '') {
        $('#payment_cardexpiry').html($('#carddateexpirymonth').val() + '/' + $('#carddateexpiry').val());
    }
    if ($('#cardcvc').val() !== '') {
        $('#payment_cardcvc').html($('#cardcvc').val());
    }
    $('body').removeClass('hompage_bg');
    $('body').css('background', '#f1f2f2');
    $(".navbar").attr('style', 'background: #000 !important;');
    $("#screen3").show();
    $(".footer-buttons-div").attr('style', 'display: none !important;');
});

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

$("#btn-screen3_1").click(function () {
    demotimerfunc();
    $(".navbar").attr('style', 'background: #000 !important;');
    $(".footer-buttons-div").attr('style', 'display: none !important;');
    var submitForm = false;
    if ($('#name').val() == '') {
        submitForm = false;
        $('#nameError').css('display', 'inline-block');
        $('#contact_name').html('Nom');
    } else {
        submitForm = true;
        $('#contact_name').css('color', '#19202a');
        $('#nameError').css('display', 'none');
    }
    if ($('#telephoneNumber').val() == '') {
        submitForm = false;
        $('#telephoneError').css('display', 'inline-block');
        $('#contact_telephone').html('NUMÉRO DE TÉLÉPHONE');
    } else {
        submitForm = true;
        $('#contact_telephone').css('color', '#19202a');
        $('#telephoneError').css('display', 'none');
    }
    if ($('#_email').val() == '') {
        submitForm = false;
        $('#emailError').css('display', 'inline-block');
        $('#contact_email').html('MAIL');
    } else {
        if (validateEmail($('#_email').val())) {
            submitForm = true;
            $('#contact_email').css('color', '#19202a');
            $('#emailError').css('display', 'none');
        } else {
            submitForm = false;
            $('#emailError').css('display', 'inline-block');
            $('#contact_email').html('MAIL');
        }
    }
    if (submitForm) {

        //  
        $.post("create-session-contact",{ 
            name: $('#name').val(),
            email: $('#_email').val(),
            phone: $('#telephoneNumber').val()
        }, function (data, status) {
            console.log('sessions updated');
        });
        $('#contact_name').html($('#name').val());
        $('#contact_email').html($('#_email').val());
        $('#contact_telephone').html($('#telephoneNumber').val());
        $('#submitFormError').css('display', 'none');
        $("#screen1,#screen2,#screen4,#screen5,#screen6,#screen7, #footer, #index").hide();
        $('body').removeClass('hompage_bg');
        $('body').css('background', '#f1f2f2');
        $("#screen3").show();
    }
});
$("#btn-screen3_2").click(function () {
    demotimerfunc();
    $(".navbar").attr('style', 'background: #000 !important;');
    $(".footer-buttons-div").attr('style', 'display: none !important;');
    var submitForm = false;
    if ($('#vehicle').val() == '') {
        submitForm = false;
        $('#vehicleError').css('display', 'inline-block');
        $('#vehicle_brand').html('Marque véhicule');
    } else {
        submitForm = true;
        $('#vehicle_brand').css('color', '#19202a');
        $('#vehicleError').css('display', 'none');
    }
    if ($('#vehiclemodel').val() == '') {
        submitForm = false;
        $('#vehiclemodelError').css('display', 'inline-block');
        $('#vehicle_model').html('');
    } else {
        submitForm = true;
        $('#vehicle_model').css('color', '#19202a');
        $('#vehiclemodelError').css('display', 'none');
    }
    // if($('#vehiclefaculty').val() == ''){
    //     submitForm = false;
    //     $('#vehiclefacultyError').css('display','inline-block');
    //     $('#vehicle_number').html('Plaque immatriculation');
    // }else{
    //     submitForm = true;
    //     $('#vehicle_number').css('color','#19202a');
    //     $('#vehiclefacultyError').css('display','none');
    // }
    if (submitForm) {
        //  
        $.post("create-session-vehicle",{ 
            vehicle: $('#vehicle').val(),
            number: $('#vehiclefaculty').val(),
            model: $('#vehiclemodel').val()
        }, function (data, status) {
            console.log('sessions updated');
        });
        $('#vehicle_brand').html($('#vehicle').val());
        $('#vehicle_number').html($('#vehiclefaculty').val());
        $('#vehicle_model').html($('#vehiclemodel').val());
        $('#submitFormError').css('display', 'none');
        $("#screen1,#screen2,#screen4,#screen5,#screen6,#screen7, #footer, #index").hide();
        $('body').removeClass('hompage_bg');
        $('body').css('background', '#f1f2f2');
        $("#screen3").show();
    }
});
$("#btn-screen3_3").click(function () {
    demotimerfunc();
    $(".navbar").attr('style', 'background: #000 !important;');
    $(".footer-buttons-div").attr('style', 'display: none !important;');
    var submitForm = false;
    if ($('#cardname').val() == '') {
        submitForm = false;
        $('#cardnameError').css('display', 'inline-block');
        $('#payment_cardname').html('NOM SUR LA CARTE');
    } else {
        submitForm = true;
        $('#payment_cardname').css('color', '#19202a');
        $('#cardnameError').css('display', 'none');
    }
    if ($('#cardnumber').val() == '') {
        submitForm = false;
        $('#cardnumberError').css('display', 'inline-block');
        $('#payment_cardnumber').html('NUMÉRO SUR LA CARTE');
    } else {
        submitForm = true;
        $('#payment_cardnumber').css('color', '#19202a');
        $('#cardnumberError').css('display', 'none');
    }
    if ($('#carddateexpiry').val() == '') {
        submitForm = false;
        $('#carddateexpiryError').css('display', 'inline-block');
        $('#payment_cardexpiry').html('DATE EXPIRATION');
    } else {
        submitForm = true;
        $('#payment_cardexpiry').css('color', '#19202a');
        $('#carddateexpiryError').css('display', 'none');
    }
    if ($('#cardcvc').val() == '') {
        submitForm = false;
        $('#cardcvcError').css('display', 'inline-block');
        $('#payment_cardcvc').html('CVC');
    } else {
        submitForm = true;
        $('#payment_cardcvc').css('color', '#19202a');
        $('#cardcvcError').css('display', 'none');
    }
    if (submitForm) {

        //  
        $.post("create-session-card",{ 
            cardholder: $('#cardname').val(),
            cardnumber: $('#cardnumber').val(),
            cardexpirymonth: $('#carddateexpirymonth').val(),
            cardexpiryyear: $('#carddateexpiry').val(),
            cardsecurity: $('#cardcvc').val()
        }, function (data, status) {
            console.log('sessions updated');
        });
        $('#payment_cardname').html($('#cardname').val());
        $('#payment_cardnumber').html($('#cardnumber').val());
        $('#payment_cardexpiry').html($('#carddateexpirymonth').val() + '/' + $('#carddateexpiry').val());
        $('#payment_cardcvc').html($('#cardcvc').val());
        $('#submitFormError').css('display', 'none');
        $("#screen1,#screen2,#screen4,#screen5,#screen6,#screen7, #footer, #index").hide();
        $('body').removeClass('hompage_bg');
        $('body').css('background', '#f1f2f2');
        $("#screen3").show();
    }
});
$("#btn-screen4").click(function () {
    demotimerfunc();
    $("#screen1,#screen2,#screen3,#screen5,#screen6,#screen7, #footer, #index").hide();
    $('body').removeClass('hompage_bg');
    $('body').css('background', '#f1f2f2');
    $(".navbar").attr('style', 'background: #000 !important;');
    $("#screen4").show();
    $(".footer-buttons-div").attr('style', 'display: none !important;');
});
$("#btn-screen5").click(function () {
    demotimerfunc();
    $("#screen1,#screen2,#screen3,#screen4,#screen6,#screen7, #footer, #index").hide();
    $('body').removeClass('hompage_bg');
    $('body').css('background', '#f1f2f2');
    $(".navbar").attr('style', 'background: #000 !important;');
    $("#screen5").show();
    $(".footer-buttons-div").attr('style', 'display: none !important;');
});
$("#btn-screen6").click(function () {
    demotimerfunc();
    $("#screen1,#screen2,#screen3,#screen4,#screen5,#screen7, #footer, #index").hide();
    $('body').removeClass('hompage_bg');
    $('body').css('background', '#f1f2f2');
    $(".navbar").attr('style', 'background: #000 !important;');
    $("#screen6").show();
    $(".footer-buttons-div").attr('style', 'display: none !important;');
});
$("#btn-screen7").click(function () {
    demotimerfunc();
    $(".navbar").attr('style', 'background: #000 !important;');
    $(".footer-buttons-div").attr('style', 'display: none !important;');
    var submitForm = false;
    if ($('#name').val() == '') {
        submitForm = false;
        $('#contact_name').css('color', 'red');
    } else {
        submitForm = true;
        $('#contact_name').css('color', '#19202a');
    }
    if ($('#telephoneNumber').val() == '') {
        submitForm = false;
        $('#contact_telephone').css('color', 'red');
    } else {
        submitForm = true;
        $('#contact_telephone').css('color', '#19202a');
    }
    if ($('#_email').val() == '') {
        submitForm = false;
        $('#contact_email').css('color', 'red');
    } else {
        submitForm = true;
        $('#contact_email').css('color', '#19202a');
    }

    if ($('#vehicle').val() == '') {
        submitForm = false;
        $('#vehicle_brand').css('color', 'red');
    } else {
        submitForm = true;
        $('#vehicle_brand').css('color', '#19202a');
    }
    if ($('#cardname').val() == '') {
        submitForm = false;
        $('#payment_cardname').css('color', 'red');
    } else {
        submitForm = true;
        $('#payment_cardname').css('color', '#19202a');
    }
    if ($('#cardnumber').val() == '') {
        submitForm = false;
        $('#payment_cardnumber').css('color', 'red');
    } else {
        submitForm = true;
        $('#payment_cardnumber').css('color', '#19202a');
    }
    if ($('#carddateexpiry').val() == '') {
        submitForm = false;
        $('#payment_cardexpiry').css('color', 'red');
    } else {
        submitForm = true;
        $('#payment_cardexpiry').css('color', '#19202a');
    }
    if ($('#cardcvc').val() == '') {
        submitForm = false;
        $('#payment_cardcvc').css('color', 'red');
    } else {
        submitForm = true;
        $('#payment_cardcvc').css('color', '#19202a');
    }

    if ($('#name').val() !== '' && $('#telephoneNumber').val() !== '' &&
        $('#_email').val() !== '' && $('#vehicle').val() !== '' &&
        $('#cardname').val() !== '' &&
        $('#cardnumber').val() !== '' && $('#carddateexpiry').val() !== '' && $('#cardcvc').val() !== '') {
        event.preventDefault();
        $(this).prop("disabled", true);
        $(this).css({
            // "opacity": ".2",
            "background": "rgb(36 174 119 / 20%)",
            "border": "1px solid rgb(36 174 119 / 0%)",
            // "cursor": "progress"
        });
        $("#btn-screen7-loader").css({
            "display": "block"
        });
        $('#stripe-form').submit();
    }
});

/* Pages */
$("#home-btn").click(function () {
    $(window).scrollTop(0);
    $('body').addClass('hompage_bg');
    $('body').removeAttr("style", 'background: rgb(241, 242, 242);');
    $(".navbar").attr('style', 'background: transparent !important;');
    $("#index, section#footer").show();
    $("#screen1,#screen2,#screen3,#screen4,#screen5,#screen6,#screen7,#confirmation").hide();
});


/*Credit Card Form Validation start here*/
// Disable form submissions if there are invalid fields
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
/*Credit card form validation ends here*/


/*Owl Coursel ends here*/


$("#servicesWithUpCar input.custom-control-input").on('click', function () {
    var $box = $(this);
    if ($box.is(":checked")) {
        var group = "input:checkbox[name='" + $box.attr("name") + "']";
        $(group).prop("checked", false);
        $box.prop("checked", true);
    } else {
        $box.prop("checked", false);
    }
});

$(".carousel-service input.custom-control-input").on('click', function () {
    var $box = $(this);
    if ($box.is(":checked")) {
        var group = "input:checkbox[name='" + $box.attr("name") + "']";
        $(group).prop("checked", false);
        $box.prop("checked", true);
    } else {
        $box.prop("checked", false);
    }
});