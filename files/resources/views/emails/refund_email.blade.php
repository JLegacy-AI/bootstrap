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

          <h1 class="main-heading" style="font-weight: 700; text-align: center; font-size: 35px;"><span style="color: #fff!important;">RÉSERVATION</span> <br><br><span style="color: #000000;">TERMINÉ</span></h1>

        </div>

        <div class="row" style="background-color: #f2f2f2; text-align: center;">

          <img style="margin: auto;" src="{{ asset('public/assets/images/parkme-email-logo.png') }}">

        </div>

        <div class="row text-center text-white" style="background-color: #000000; color: #ffffff; text-align: center; padding: 15px 0;">

                <p class="heading-style-css m-auto pt-4">Réservation terminé !</p>
        </div>


    </div>



  </body>



</html>