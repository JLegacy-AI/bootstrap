
function init() {
  new SmoothScroll(document, 120, 12)
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

// $(function () { $("#arrivalDate,#departureDate").datepicker({ minDate: 0 }) });
$(function () {
  $("#arrivalDate, #expiryDate").datepicker({
    dateFormat: 'dd/mm/yy',
    changeMonth: true,
    currentText: 'Aujourd\'hui',
    monthNames: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin',
      'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
    monthNamesShort: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jun',
      'Jul', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
    dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
    dayNamesShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
    dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
    weekHeader: 'Sm',
    yearRange: "2020:2030",
    // yearRange: new Date().getFullYear().toString() + ':' + new Date().getFullYear().toString(),
    onClose: function (selectedDate) {
      $("#departureDate").datepicker("option", "minDate", selectedDate);
    }
  });
  $("#departureDate").datepicker({
    dateFormat: 'dd/mm/yy',
    changeMonth: true,
    currentText: 'Aujourd\'hui',
    monthNames: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin',
      'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
    monthNamesShort: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jun',
      'Jul', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
    dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
    dayNamesShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
    dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
    weekHeader: 'Sm',
    yearRange: "2020:2030",
    onClose: function (selectedDate) {
      $("#arrivalDate").datepicker("option", "maxDate", selectedDate);
    }
  });
});





$("#downCar, #servicesWithUpCar, .box1, .box2, .box3, #full-blue, #downCarTitle, #serviceHeader, .during_your_trip, #pouvons_nous_wrapper").hide();

$('input[type=radio][name=car_type]').change(function () {
  $("#full-blue").show();
  $("#pouvons_nous_wrapper").show();
  $("#half-blue, #carHeader").hide();
  $("#upCar").hide();
  $("#downCar").show();

  $("#essenceError").hide();
  $(".during_your_trip").show();

  var SelectdValue = $("input[name=car_type]:checked").val();
  console.log(SelectdValue);
  // $("input[type=radio][name=cat_type][value=" + val + "]").attr('checked', 'checked');
  $('input[name=cat_type][value="' + SelectdValue + '"]').prop('checked', true);
  $('input[name=cat_type]').prop('disabled', false);
});

$('input[type=radio][name=cat_type]').change(function () {
  var SelectdValue = $("input[name=cat_type]:checked").val();
  $('input[name=car_type][value="' + SelectdValue + '"]').prop('checked', true);
});


$("#Oui_btn").click(function () {
  $("#full-blue, #downCarTitle, #serviceHeader").show();
  $("#pouvons_nous_wrapper").hide();
  $(".during_your_trip").hide();
  $("#servicesWithUpCar").show();
  $(".carousel-service").css('top', '275px');
  $("#index-btn").addClass('Oui_btn_clicked');
});
$(document).on('click', '.Oui_btn_clicked', function () {
  $(".carousel-service").css('top', '275px');
});


$(".serviceImg1").click(function () {
  $(".box2,.box3,#servicesWithUpCar").hide();
  $(".box1").show();
});

$(".page2-back-service").click(function () {
  //     alert(7777);
  //     if($("#customRadio.0").prop('checked') == false){
  //     //do something
  //     alert(8888888);
  // }
  $(".box2,.box3,.box1").hide();
  $("#servicesWithUpCar").show();

});

// $(".serviceImg2").click(function(){
//   $(".box1, .box3, #servicesWithUpCar").hide();
//   $(".box2").show();
// });

// $(".serviceImg3").click(function(){
//   $(".box1,.box2, #servicesWithUpCar").hide();
//   $(".box3").show();
// });


/* Page 1 down car handling ends*/

/* Page 2 Grey Circle show hide boxes starts here*/

// $(".box2,.box3").hide();
// $(".box1").show();

// $(".img1").click(function(){
//   $(".box1").show();
//   $(".box2,.box3").hide();
// });

// $(".img2").click(function(){
//   $(".box2").show();
//   $(".box1,.box3").hide();
// });

// $(".img3").click(function(){
//   $(".box3").show();
//   $(".box1,.box2").hide();
// });

/* Page 2 Grey Circle show hide boxes ends here*/

/* Index button css starts here */

$("#page1, #page2, #page3, #page4, #arrivalError, #departError, #essenceError, #faqs,#contact-page").hide();
$("#index").show();

$("#index-btn").click(function () {

  if ($("#arrivalDate").val() == "") {
    $("#arrivalError").show();
  }
  if ($("#departureDate").val() == "") {
    $("#departError").show();
  }
  if ($("#arrivalDate").val() != "") {
    $("#arrivalError").hide();
  }

  if ($("#departureDate").val() != "") {
    $("#departError").hide();
  }
  if ($("#departureDate").val() != "" && $("#arrivalDate").val() != "") {
    setSelectedValues();
    $("#page1").show();
    $("#page2, #page3, #index").hide();
    $("body").addClass("inner-bg");
    $("body").removeClass("bg-img");
    $(".navbar").addClass("inner-custom-navbar");
    $(".navbar").removeClass("custom-navbar");
  }
  $start = $('#arrivalDate').datepicker('getDate');
  $end = $('#departureDate').datepicker('getDate');
  $arrive_time = $("#arriveeTime").val();
  $depart_time = $("#departTime").val();
  $days = ($end - $start) / 1000 / 60 / 60 / 24;
  $days = parseInt($days);
  $arrive_time = parseInt($arrive_time.replace(/\s+/g, ''));
  $depart_time = parseInt($depart_time.replace(/\s+/g, ''));
  // alert($start < $end);
  // alert($arrive_time.replace(/\s+/g, ''));
  // alert($depart_time.replace(/\s+/g, ''));
  // alert($arrive_time <= $depart_time );
  if ($start < $end && $arrive_time <= $depart_time) {
    $days = $days + 1;
    // $parkCharges = 3.5 + (4.5 * $days);
    $parkCharges = 9.99 + (5 * $days);
  }

  if ($start < $end && $arrive_time > $depart_time) {
    $days = $days - 1;
    // $parkCharges = 8 + (4.5 * $days);
    $parkCharges = 14.99 + (5 * $days);
  }

  // alert($days);
  // if($start < $end && $arrive_time < $depart_time)
  // {
  //     $parkCharges = 15 + (3 * $days);
  //     $parkCharges = $parkCharges + 3;
  // }
  // else
  // {
  //     $parkCharges = 15 + (3 * $days);
  // }


  // console.log($start)
  // console.log($end)
  // console.log($days)

  // if($days == 0)
  // {

  //     if($arrive_time < $depart_time)
  //     {
  //         $('.total-price').html(18 + '€');
  //     }
  //     else
  //     {
  //         $('.total-price').html(15 + '€');
  //     }

  // }
  // else
  // {
  //     $('.total-price').html($parkCharges + '€');
  // }


  // console.log($start)
  // console.log($end)
  // console.log($days)

  if ($days == 0) {
    // $('.total-price').html(8.00 + '€');
    // $('.lavage_free_1').html('(15€)');
    // $('.lavage_free_2').html('15€');
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
      $('.lavage_free_text_1').html('Lavage EXTERIEUR');
      $('.lavage_free_1').html('(0€)');
      $('.lavage_free_2').html('OFFERT!');
      $('.total-price').html($parkCharges.toFixed(2) + '€');
    }
    // $('.total-price').html($parkCharges + '€');

  }




});



/* Index button css ends here */

function setSelectedValues() {
  $sDateArr = $("#arrivalDate").val().split('/');
  $sDateArr = $sDateArr[0] + "/" + $sDateArr[1];
  $eDateArr = $("#departureDate").val().split('/');
  $eDateArr = $eDateArr[0] + "/" + $eDateArr[1];

  $arrive_time = $("#arriveeTime").val();
  $arrive_time = $arrive_time.replace(" ", "h");
  $arrive_time = $arrive_time.replace(/\s/g, '');

  $depart_time = $("#departTime").val();
  $depart_time = $depart_time.replace(" ", "h");
  $depart_time = $depart_time.replace(/\s/g, '')
  $('.sdate').html($sDateArr);
  $('.stime').html($arrive_time);
  $('.edate').html($eDateArr);
  $('.etime').html($depart_time);

  // $('.setServiceType').html($("input[name='service_type']:checked").val());
  //For Parking Charges
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
    // $parkCharges = 3.5 + (4.5 * $days);
    $parkCharges = 9.99 + (5 * $days);
  }

  if ($start < $end && $arrive_time > $depart_time) {
    $days = $days - 1;
    // $parkCharges = 8 + (4.5 * $days);
    $parkCharges = 14.99 + (5 * $days);
  }


  //  alert($days);

  if ($days == 0) {
    //  $parkCharges = 8;
    $parkCharges = 14.99;
  }

  if ($days < 7) {
    $('.lavage_free_text_1').html('');
    $('.lavage_free_1').html('');
    $('.lavage_free_2').html('(15€)');

    $parkCharges = $parkCharges;

  }
  else {
    $('.lavage_free_text_1').html('Lavage EXTERIEUR');
    $('.lavage_free_1').html('(0€)');
    $('.lavage_free_2').html('OFFERT!');
    // $('.total-price').html($parkCharges.toFixed(2) + '€');
  }

  //  $('#parking_charges').val($parkCharges);
  $('#parking_charges').val($parkCharges.toFixed(2));
  //  else
  //  {
  //      $parkCharges = 3.5 + (4.5 * $days);
  //  }
  $serviceType = "";
  $price = 0;
  $counter = 0
  $("input[name='service[]'][type=radio]").each(function () {
    if (this.checked) {
      $counter++;
      $split = $(this).val().split('-');
      $('.final_sevice').html($split[0]);
      $serviceType += $split[0] + "<span style='float:right;margin-right: 21px;'> (" + $split[1] + "€)</span><br>";
      $('.setServiceType').html($serviceType);
      $sp = $split[1];
      $price = Number($sp) + Number($price);
      $price = $price.toFixed(2);
    }
  });

  if ($counter == 0) {
    $('.setServiceType').html('<span style="padding-left: 70px; font-weight:bold;">--</span>');
  }
  //   alert($price);
  $('#services_charges').val($price);


  $price = Number($price) + Number($parkCharges);
  $('.total-price').html($price.toFixed(2) + '€');
  $('.final_sevice_price').html($price.toFixed(2) + '€');
  $('#total_amt').val($price.toFixed(2));

  $('#days_difference').val($days);



  // $price = $("input[name='service']:checked").val();
  // if($price){
  //   $('.final_sevice').html($price.split('-')[0]);
  //   $('.setServiceType').html($price.split('-')[0]);
  //   $price = $price.split('-')[1];
  //   $price = Number($price)+Number($parkCharges);
  // 	$('.total-price').html($price + '€');
  //   $('.final_sevice_price').html($price + '€');
  //   $('#total_amt').val($price);

  // }

}


// $("input:radio").change(function (e) {
//  e.preventDefault();
//  $("input:radio[name='service[]'").each(function(i) {
//    this.checked = false;
//  });
//   //alert();
//  // return true;
//       //if(this.checked){

//       //}
//      });


$('#clearCheck').click(function () {

  $("input:radio[name=service[]]").each(function (i) {
    this.checked = false;
  });
  setSelectedValues();
});

/* Page 1 button css starts here */

$("#page1Next-btn").click(function () {
  setSelectedValues();
  $("#page3").show();
  $("#index,#page1,#page2,#faqs,#contact-page,#confirmation").hide();
});

$("#page1Prev-btn,#home-btn,#reserver_btn,.footerhome-btn,.footerreserver_btn").click(function () {
  $(window).scrollTop(0);
  $("#index").show();
  $("#page1,#page2,#page3,#faqs,#contact-page,#confirmation").hide();
  $(".carousel-service").css('top', '-1000px');
  $("body").removeClass("inner-bg");
  $("body").addClass("bg-img");

  $(".navbar").removeClass("inner-custom-navbar");
  $(".navbar").addClass("custom-navbar");
});

/* Page 1 button css ends here */

/* Page 2 button css starts here */

// $("#page2Next-btn").click(function(){
// 	setSelectedValues();
//   $("#page3").show();
//   $("#index,#page1,#page2").hide();
// });

$("#page2Next-btn").click(function () {

  if ($('input:radio[name=service[]]').is(':not(:checked)')) {
    $("#essenceError").show();
  }

  if ($('input:radio[name=service_type[]]').is(':not(:checked)')) {
    $("#essenceError").html('Service type is not selected');
    $("#essenceError").show();
  }

  if ($('input:radio[name=service[]]').is(':checked') && $('input:radio[name=service_type[]]').is(':checked')) {
    setSelectedValues();
    $("#page3").show();
    console.log($('.setServiceType').text($("input[name='service_type[]']:checked").val()));
    $("#index,#page1,#page2,#faqs,#contact-page,#confirmation").hide();
  }
});

$("#page2Prev-btn").click(function () {
  $("#page1").show();
  $("#index,#page2,#page3,#faqs,#contact-page,#confirmation").hide();
});

/* Page 2 button css starts here */


/* Non link  */

$("#Non_btn").click(function () {

  if ($('input:radio[name=car_type]').is(':checked')) {

    $("#page4").show();
    $("#index,#page1,#page2,#page3,#faqs,#contact-page,#confirmation").hide();
  } else {

    $("#essenceError").show("slow");
  }
});

/* Page 3 button css starts here */

$("#page3Next-btn").click(function () {

  if ($('input:radio[name=car_type]').is(':checked')) {

    $("#page4").show();
    $(".carousel-service").css('top', '-1000px');

    $("#index,#page1,#page2,#page3,#faqs,#contact-page,#confirmation").hide();
  } else {

    $("#essenceError").show("slow");
  }
});

$("#page3Prev-btn").click(function () {
  //   $("#essenceError").hide();
  //   $("#page2").show();
  //   $("#index,#page1,#page3").hide();
  $("#essenceError").hide();
  $("#page1").show();
  $("#index,#page2,#page3,#faqs,#contact-page,#confirmation").hide();
});

/* Page 3 button css ends here */

/* Page 4 button css starts here */

$("#page4Prev-btn").click(function () {
  $("#page1").show();
  if ($("#index-btn").hasClass('Oui_btn_clicked')) {
    $(".carousel-service").css('top', '275px');
  }
  $("#index,#page3,#page2,#page4,#essenceError,#faqs,#contact-page,#confirmation").hide();
});

/* Page 4 button css ends here */

/* FAQs Page css starts here */

$("#faqs-btn,.footerfaqs-btn").click(function () {
  $(window).scrollTop(0);
  $("#faqs").show();
  $("#contact-page,#confirmation").hide();
  $("#index,#page1,#page3,#page2,#page4,#essenceError").hide();
  $("body").addClass("inner-bg");
  $("body").removeClass("bg-img");
  $(".navbar").addClass("inner-custom-navbar");
  $(".navbar").removeClass("custom-navbar");
  $("#collapsibleNavbar ul li:last-child").addClass("active");
});

$('#contact-btn, .footercontact-btn').click(function () {
  $(window).scrollTop(0);
  $("#contact-page").show();
  $("#faqs,#confirmation").hide();
  $("#index,#page1,#page3,#page2,#page4,#essenceError").hide();
  $("body").addClass("inner-bg");
  $("body").removeClass("bg-img");
  $(".navbar").addClass("inner-custom-navbar");
  $(".navbar").removeClass("custom-navbar");
  $("#collapsibleNavbar ul li:last-child").removeClass("active");
});

//PRIX btn
$('#prix_btn').click(function () {

  $(window).scrollTop(0);
  $('#prix_section').show();
  $("#index,#page1,#page3,#page2,#page4,#essenceError, #contact-page, #faqs,#confirmation").hide();

  $("body").addClass("inner-bg");
  $("body").removeClass("bg-img");
  $(".navbar").addClass("inner-custom-navbar");
  $(".navbar").removeClass("custom-navbar");
  $("#collapsibleNavbar ul li:last-child").removeClass("active");
});

/* FAQs page button javascript ends here */


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
        items: 2
      },
      1000: {
        items: 2
      }
    }
  })
});

/*Owl Coursel ends here*/
