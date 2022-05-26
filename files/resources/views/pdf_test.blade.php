<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <style type="text/css">
    	html, body{
    		margin: 0;
    		padding: 0;
    	}
      @page {  margin: 0px 0px 0px 0px !important;
            padding: 0px 0px 0px 0px !important; }

      .table th {
      padding: 0 20px;
      vertical-align: top!important;
      border: none!important;
      }
 
    </style>
</head>
 
  <body style="font-family: 'Open Sans', sans-serif;
        color: #000;">

    <section>
      <img src="https://parkme.fr/public/img/top-pdf.jpg" style="width: 95%;" />
      <div class="parkme-email" style="margin-left: 50px; margin-right: 40px; padding-top: 100px;">
        <div class="container">
          <table style="border:0;width: 100%;">
              <tr>
                <td style="width:33.3333333333%;">
                  <div class="parkme-email-box" style="margin-top: -100px;">
                    <h3 style="font-size: 24px; color: #000;font-weight: 600; text-transform: uppercase; margin-bottom: 20px;">park me</h3>  
                                <p style="font-weight: 600;
                        font-size: 14px;
                        margin: 0; line-height: 1.1;">32 rue Raymond Grimaud<br>
                                   31700, Blagnac<br>
                                   07 86 28 86 71<br>
                                   SAS CHAMAMA</p>
                  </div>
                </td>
                <td style="width:33.3333333333%;">
                  <div class="parkme-email-box text-center">
                    <img src="https://parkme.fr/public/img/black_logo.png" style="width: 300px;" />
                  </div> 
                </td>
                <td style="width:33.3333333333%;">
                  <div class="parkme-email-box text-right" style="margin-top: -125px;">
                     <h3 style="font-size: 24px; color: #000; font-weight: 600; text-transform: uppercase; margin-bottom: 20px;">{{$booking->name}}</h3> 
                <p style="font-weight: 600;
                font-size: 14px;
                margin: 0; line-height: 1.1;">{{date('d/m/Y')}}</p>
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
                        font-weight: 700;
                        
                        margin: 0;">Facture n°P{{(isset($booking->invoice_id) ? $booking->invoice_id : '')}}</h3>
                        <!-- <p style="font-weight: 300;
                        font-size: 14px;">{{$booking->phone}}</p> -->
                  </div>
                </td>
              </tr>
          </table>

          <div class="row">
            <div class="col-sm-12 col-12">
              <div class="parkmetable">
                <table class="table table-bordered" style="border:0; width: 100%; margin-bottom: 0;">
                  <thead>
                    <tr>
                      <th style="background-color: rgb(77, 77, 77); 
                        color: #fff;font-size:16px;     padding-top: 8px;">Detail de la prestation</th>
                      <th style="background-color: rgb(77, 77, 77);
                        color: #fff;font-size:16px;     padding-top: 8px;">Type</th>
                      <th style="background-color: rgb(77, 77, 77);
                        color: #fff;font-size:16px; text-align: right;padding-right: 25px;padding-left: 10px;">

                        <div style="margin-top: 4px; padding-bottom: 20px; text-align: right; line-height: .8;">Prix unitaire<br>(HT)</div>

                      </th>
                      <th style="background-color: rgb(77, 77, 77);
                        color: #fff;font-size:16px;"><div style="margin-top: -7px;">Remise</div></th>
                      <th style="background-color: rgb(77, 77, 77);
                        color: #fff;font-size:16px; text-align: right;"><div style="margin-top: -7px;">Total (TTC)</div></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>  
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: 0px .75rem 15px .75rem; height: 50px;">
                         <div style="float: left; width: 80px; line-height: 1.1;"> 
                          <b>ARRIVÉE:<br>RETOUR:</b>
                        </div>
                        <div style="float: left; width: 152px; line-height: 1.1;"> 
                      	@php 
		                    preg_match_all('!\d+!', $booking->start_time, $start_time);
		                    $start_tim = implode($start_time[0]);
		                @endphp
		                	{{$booking->start_date}}|{{ substr_replace($start_tim, 'h', (strlen($start_tim) - 2), 0) }}
		                	  
		                @php 
		                    preg_match_all('!\d+!', $booking->end_time, $end_time);
		                    $end_tim = implode($end_time[0]);
		                @endphp
		                  {{$booking->end_date}}|{{ substr_replace($end_tim, 'h', (strlen($end_tim) - 2), 0) }}
                      <div>
                    </td>
 	                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: 0px .75rem 15px .75rem;">{{$booking->car_type}}</td>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: 0px .75rem 15px .75rem; text-align: center;">@if(isset($booking->parking_ht)){{$booking->parking_ht}}&euro; @else 0&euro; @endif </td>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: 0px .75rem 15px .75rem; text-align: center;">--</td>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: 0px .75rem 15px .75rem; text-align: right;">{{$booking->parking_charges}} &euro;</td>
                    </tr>
                    <tr>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: 0px .75rem 15px .75rem; height:60px;">
                        <div style="float: left; width: 80px; line-height: 1.1;"> 
                          <b>SERVICE:</b>
                        </div>
                        <div style="float: left; width: 200px; line-height: 1.1;"> 
                        @if(isset($booking->service)){{$booking->service}}@else Noservice @endif
                        </div>
                       </td> 
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: 0px .75rem 15px .75rem;">{{$booking->service_type}}</td> 
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: 0px .75rem 15px .75rem; text-align: center;"> @if(isset($booking->service_ht)){{$booking->service_ht}}&euro; @else 0&euro; @endif </td>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: 0px .75rem 15px .75rem; text-align: center;">--</td>
                      <td style="background-color: rgb(221, 221, 221);font-size:16px;padding: 0px .75rem 15px .75rem; text-align: right;">@if(isset($booking->services_charges)){{$booking->services_charges}} &euro; @else 0&euro; @endif</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <table style="border:0;width: 100%; margin-top: -10px; margin-bottom: 560px;">
              <tr>
                <td style="width: 50%;"></td>
                <td style="width: 50%;">
                  <div class="table-bottom" style="text-align: right; ">
                    <p style="font-size:16px;"><b>Mode de Paiement:</b> Carte Bancaire / E-Transactions</p><br />
                    <table style="border:0;width: 200px; float: right;">
                        <tr>
                          <td>
                            <h6 style="font-weight: 500;margin:0;font-size:16px;text-align: right;"><b>Total HT</b></h6>
                            <h6 style="font-weight: 500;margin:0;font-size:16px;text-align: right;"><b>TVA</b></h6>
                            <h6 style="font-weight: 500;margin:0;font-size:16px;text-align: right;"><b>Remise</b></h6>
                            <h6 style="font-weight: 500;margin:0;font-size:16px;text-align: right;"><b>Total TTC</b></h6>
                          </td>
                          <td>
                            <h6 style="font-weight: 500;font-size:16px;text-align: right; margin-top: 15px;"> {{(isset($booking->ht) ? $booking->ht : '')}} &euro;</h6>
                            <h6 style="font-weight: 500;font-size:16px;text-align: right;">{{(isset($booking->tva) ? $booking->tva : '')}} &euro;</h6>
                            <h6 style="font-weight: 500;font-size:16px;text-align: right;">-- E </h6>
                            <h6 style="font-weight: 500;font-size:16px;text-align: right;">{{(isset($booking->price) ? $booking->price : '')}} &euro;</h6>
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
          <p style="font-weight: 600; font-size: 14px;margin: 0; line-height: 1.1;">
            PARKME ● France ● SAS CHAMAMA ● 32 Rue Raymond Grimaud ● 31700 Blagnac<br />
                RCS Toulouse 853845931000015 | FR23 853 845 93<br />
                SAS au capital de 12000 euros | APE 6820B<br /><br />
                Pour toute assistance, merci de nous contacter:<br />
                contact@parkme.fr ou 0786288671</p>
                <p style="font-weight: 700; font-size: 15px;margin: 30px 0 0 0; line-height: 1.1;">Pour des informations supplementaries rdv sur notre F.A.Q onglet "vos questions" sur www.parkme.fr</hp>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>


  </body>

</html>
