<!DOCTYPE html>

<html lang="fr">

<head>

  <title>Park Me</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <style type="text/css">

      .main-content-area{

        max-width: 500px;  

      } 

      .second-wrapper-st{

        padding: 50px 122px;

      }

      @media all and (max-width: 600px) {

       .main-content-area{

          max-width: 100% !important;

          padding-top: 50px !important;

          padding-bottom: 50px !important;

          padding-left: 0 !important;

          padding-right: 0 !important;

        }

        .main-heading {

          margin: auto !important;

          font-size: 25px !important;

        }

        .second-wrapper-st{

          padding: 50px 0!important;

        }

      }

    </style>

</head>  

  <body> 



    <div class=" main-content-area container mt-4 " style=" margin: auto; background-color: #f2f2f2;">

        <div class=" second-wrapper-st row text-center" style="background-color: #ffba03;">

          <h1 class="main-heading" style="font-weight: 700; text-align: center; font-size: 35px;"><span style="color: #fff!important;">RÉSERVATION</span> <br><br><span style="color: #000000;">CONFIRMÉE</span></h1>

        </div>

        <div class="row" style="background-color: #f2f2f2; text-align: center;">

          <img style="margin: auto;" src="{{ asset('public/assets/images/parkme-email-logo.png') }}">

        </div>

        <div class="row text-center text-white" style="background-color: #000000; color: #ffffff; text-align: center; padding: 15px 0;">

                <p class="heading-style-css m-auto pt-4">Réservation confirmée <strong>{{$booking->name}}</strong> !</p>

                <p class="m-auto pt-4">Votre réservation du <strong>

                  @php 

                    preg_match_all('!\d+!', $booking->start_time, $start_time);

                    $start_tim = implode($start_time[0]);

                  @endphp

                  {{$booking->start_date}}|{{ substr_replace($start_tim, 'h', (strlen($start_tim) - 2), 0) }}

                </strong> au <strong>

                  @php 

                    preg_match_all('!\d+!', $booking->end_time, $end_time);

                    $end_tim = implode($end_time[0]);

                  @endphp

                  {{$booking->end_date}}|{{ substr_replace($end_tim, 'h', (strlen($end_tim) - 2), 0) }}

                </strong> est <br>confirmée.</p>

                <p class="m-auto pt-3 pb-4"><strong>La facture</strong> est attachée <strong>ci-joint.</strong></p>

        </div>

 

        <div class="row" style="background-color: #f2f2f2; padding-left: 15px;">

              <p class="m-auto pt-4 pb-4" style="font-style: italic; text-align: center;margin-top: 40px;margin-bottom: 40px;">5 choses à savoir:</p>

              <p class="pl-2"><strong>LOCALISATION:</strong> 32 rue Raymond Grimaud, 31700, BLAGNAC.</p>

              <p class="pl-2"><strong>À SAVOIR:</strong> Les clefs doivent être laissées à votre arrivée.</p>

              <p class="pl-2"><strong>CONTACT NUMÉRO NAVETTE / PARKME:<span style="color: #38761d;"> 07 86 28 86 71</span></strong></p>

              <p class="pl-2"><strong>SERVICE:</strong> Vos services sélectionnés sont réalisés.</p>

              <p class="pl-2 pb-2"><strong>POINT DE RETOUR:</strong> La navette vous attendra au hall D2.</p>



                

                <p class="mb-0 w-100 pl-2" style="font-size:1px; color: #f2f2f2; margin: 0;"><strong>NAME:</strong> <small>{{$booking->name}}</small></p>

                <p class="mb-0 w-100 pl-2"  style="font-size:1px; color: #f2f2f2; margin: 0;"><strong>PHONE NUMBER:</strong> <small>{{$booking->phone}}</small></p> 

                <p class="mb-0 w-100 pl-2"  style="font-size:1px; color: #f2f2f2; margin: 0;"><strong>ARRIVAL (DAY:DAY/MONTH/YEAR):</strong> <small>{{$booking->start_date}}</small></p>

                <p class="mb-0 w-100 pl-2"  style="font-size:1px; color: #f2f2f2; margin: 0;"><strong>ARRIVAL (HOUR):</strong> <small>

                  @php

                  $start_timz = trim(substr($booking->start_time, 0,2));





                   echo (strlen($start_timz) == 2 ? $start_timz : '0'.$start_timz).':'.substr($booking->start_time, -2);

                  @endphp

                </small>

                 <p class="mb-0 w-100 pl-2"  style="font-size:1px; color: #f2f2f2; margin: 0;"><strong>EXIT (DAY:DAY/MONTH/YEAR):</strong> <small>{{$booking->end_date}}</small></p>

                <p class="mb-0 w-100 pl-2"  style="font-size:1px; color: #f2f2f2; margin: 0;"><strong>EXIT (HOUR):</strong> <small>

                  @php

                  $end_timz = trim(substr($booking->end_time, 0,2));

                  echo (strlen($end_timz) == 2 ? $end_timz : '0'.$end_timz).':'.substr($booking->end_time, -2); 

                  @endphp 

                </small></p>

                <p class="mb-0 w-100 pl-2" style="font-size:1px; color: #f2f2f2; margin: 0;"><strong>SERVICE SELECT:</strong> <small>@if(isset($booking->service)){{$booking->service}}@else Noservice @endif</small></p>

                <p class="mb-0 w-100 pl-2" style="font-size:1px; color: #f2f2f2; margin: 0;"><strong>PRICE:</strong> <small>{{$booking->price}}€</small></p>

                <p class="mb-0 w-100 pl-2" style="font-size:4px; color: #f2f2f2; margin: 0;"><strong>Facture n°P:</strong> <small>{{(isset($booking->invoice_id) ? $booking->invoice_id : '')}}</small></p>



                 

              <p class="mt-5 pt-4 m-auto" style="font-size: 13px; color: #38761d; margin: 40px auto;"><strong>VOICI LE NUMÉRO DU PARKING SI VOUS RENCONTREZ UN PROBLÊME:<br>

               07 86 28 86 71</strong>

              </p>

 

              <p style="text-align: center; margin-bottom: 50px;" class="pt-5 m-auto">Retrouvez-nous au<br> 

              32 rue Raymond Grimaud, Blagnac, 31700.<br>

              ou sur <a href="http://www.parkme.fr/">parkme.fr</a></p>

 

        </div>

        <div class="row text-center" style="background-color: #f2f2f2; padding-left: 15px;">

        <p style="padding-bottom: 20px;" class="pl-2 pt-3 pb-5">À bientot !</p>

        </div>

    </div>



  </body>



</html>