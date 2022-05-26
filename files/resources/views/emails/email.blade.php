<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    
</head>

  <body style="font-family: 'Open Sans', sans-serif;
        color: #000;">

    <section>
      <div class="parkme-email" style="padding: 50px 0;">
        <div class="container">
          <table style="border:0;width: 100%;">
              <tr>
                <td style="width:33.3333333333%;">
                  <div class="parkme-email-box">
                    <h3 style="font-size: 24px;
                        color: #000;
                        font-weight: 600;
                        text-transform: uppercase;">park me</h3>
                                <p style="font-weight: 300;
                        font-size: 14px;
                        margin: 0;">32 rue Raymond Grimaud</p>
                                <p style="font-weight: 300;
                        font-size: 14px;
                        margin: 0;">31700, Blagnac</p>
                                <p style="font-weight: 300;
                        font-size: 14px;
                        margin: 0;">07 86 28 86 71</p>
                                <p style="font-weight: 300;
                        font-size: 14px;
                        margin: 0;">SAS CHAMAMA</p>
                  </div>
                </td>
                <td style="width:33.3333333333%;">
                  <div class="parkme-email-box text-center">
                    <img src="https://parkme.fr/public/img/black_logo.png" width="100" class="img-fluid" alt="img" />
                  </div> 
                </td>
                <td style="width:33.3333333333%;">
                  <div class="parkme-email-box text-right">
                    <h3 style="font-size: 24px;color: #000;font-weight: 600;text-transform: uppercase;"></h3>
                    <h5 style="font-size: 18px;
            color: rgb(165, 165, 165);">{{date('d/m/Y')}}</h5>
                    <h5 style="font-size: 18px;
            color: rgb(165, 165, 165);">Facture n°P{{$booking->invoice_id}}</h5>
                  </div>
                </td>
              </tr>
          </table>

          <table style="border:0;width: 100%;">
              <tr>
                <td style="width: 100%;text-align:center;">
                  <div class="parkmemiddle" style="text-align: center;
                    margin: 50px 0;">
                        <h3 style="font-size: 24px;
                        color: #000;
                        font-weight: 600;
                        text-transform: uppercase;
                        margin: 0;">{{$booking->name}}</h3>
                        <p style="font-weight: 300;
                        font-size: 14px;">{{$booking->phone}}</p>
                  </div>
                </td>
              </tr>
          </table>

          <div class="row">
            <div class="col-sm-12 col-12">
              <div class="parkmetable">
                <table class="table table-bordered" style="border:0; width: 100%;">
                  <thead>
                    <tr>
                      <th style="background-color: rgb(77, 77, 77);
                        color: #fff;font-size:16px;padding: .75rem;">Detail de la prestation</th>
                                      <th style="background-color: rgb(77, 77, 77);
                        color: #fff;font-size:16px;padding: .75rem;">Type</th>
                                      <th style="background-color: rgb(77, 77, 77);
                        color: #fff;font-size:16px;padding: .75rem;">Prix unitaire (HT)</th>
                                      <th style="background-color: rgb(77, 77, 77);
                        color: #fff;font-size:16px;padding: .75rem;">Remise</th>
                                      <th style="background-color: rgb(77, 77, 77);
                        color: #fff;font-size:16px;padding: .75rem;">Total (TTC)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: .75rem;">{{$booking->start_date}}|{{$booking->start_time}} a {{$booking->end_date}}|{{$booking->end_time}}</td>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: .75rem;">{{$booking->car_type}}</td>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: .75rem;">{{$booking->parking_ht}} €</td>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: .75rem;">--</td>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: .75rem;">{{$booking->parking_charges}} €</td>
                    </tr>
                    <tr>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: .75rem;">NAVETTE <br> LAVAGE</td>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: .75rem;">@if(isset($booking->service)){{$booking->service}}@else Noservice @endif</td>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: .75rem;">@if(isset($booking->service)){{$booking->service_ht}}€ @else 0€ @endif</td>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: .75rem;">--</td>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: .75rem;">@if(isset($booking->service)){{$booking->services_charges}} € @else 0€ @endif</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <table style="border:0;width: 100%;">
              <tr>
                <td style="width: 50%;"></td>
                <td style="width: 50%;">
                  <div class="table-bottom" style="text-align: right;">
                    <p style="font-size:16px;"><b>Mode de Paiement:</b> Carte Bancaire / E-Transactions</p><br />
                    <table style="border:0;width: 100%;">
                        <tr>
                          <td style="width:66.6666666667%;">
                            <h6 style="font-weight: 500;margin:0;font-size:16px;"><b>Total HT</b></h6>
                            <h6 style="font-weight: 500;margin:0;font-size:16px;"><b>TVA</b></h6>
                            <h6 style="font-weight: 500;margin:0;font-size:16px;"><b>Remise</b></h6>
                            <h6 style="font-weight: 500;margin:0;font-size:16px;"><b>Total TTC</b></h6>
                          </td>
                          <td style="width:33.3333333333%;">
                            <h6 style="font-weight: 500;margin:0;font-size:16px;">{{$booking->ht}} €</h6>
                            <h6 style="font-weight: 500;margin:0;font-size:16px;">{{$booking->tva}} €</h6>
                            <h6 style="font-weight: 500;margin:0;font-size:16px;">-- E </h6>
                            <h6 style="font-weight: 500;margin:0;font-size:16px;">{{$booking->price}} €</h6>
                          </td>
                        </tr>
                    </table>
                  </div>
                </td>
              </tr>
          </table>

          <div class="row">
            <div class="col">
              <div class="parkmebottomemail" style="text-align: center;
        margin-top: 50px;">
                <p style="font-weight: 300;
        font-size: 14px;
        margin: 0;">PARKME - France - SAS CHAMAMA - 32 Rue Raymond Grimaud - 31700 Blagnac</p>
                <p style="font-weight: 300;
        font-size: 14px;
        margin: 0;">RCS Toulouse 853845931000015 | FR23 853 845 93</p>
                <p style="font-weight: 300;
        font-size: 14px;
        margin: 0;">SAS au capital de 12000 euros | APE 6820B</p><br />
                <p style="font-weight: 300;
        font-size: 14px;
        margin: 0;">Pour toute assistance, merci de nous contacter:</p>
                <p style="font-weight: 300;
        font-size: 14px;
        margin: 0;">contact@parkme.fr ou 0786288671</p>
                <h5 style="font-weight: 700;font-size: 1.25rem;">Pour des informations supplementaries rdv sur notre F.A.Q onglet "vos questions" sur www.parkme.fr</h5>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>


  </body>

</html>
