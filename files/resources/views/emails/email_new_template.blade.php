<!DOCTYPE html>
<html lang="en">

<head>
    <title>PARKME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

</head>

<body style="font-family: 'Roboto', sans-serif; color: #000;">
    <div class="" style="background: #fff;">
        <table width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td valign="center">
                        <table width="600" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td align="left">
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                            <tbody style="vertical-align:top;">
                                                <tr style="background: #ffea98;">
                                                    <td colspan="2" align="center">
                                                        <img src="http://dev.parkme.fr/public/assets/images/email_strip.png" style="width: 100%;" />
                                                    </td>
                                                </tr>
                                                <tr style="background: #ffea98;">
                                                    <td colspan="2" align="left" style="padding: 5em 2em 2em 2em;">
                                                        <h1 style="font-size: 38px; font-weight: 500; margin-bottom: 15px; margin-top:0; line-height: 1.2; color:#000;">Merci d’avoir<br />réservé parkme,<br />
                                                        @php 
                                                        $name = explode(' ', $booking->name);
                                                        @endphp

                                                        {{ $name[0] }}</h1>
                                                        <p style="font-size: 24px; font-weight: 400; margin-top:0; margin-bottom:0; line-height: 1.2; color:#000;">Voici un récapitulatif de votre<br />réservation #{{ $booking->id }}.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="center">
                                                        <img src="http://dev.parkme.fr/public/assets/images/email_booking2.png" style="width: 100%;" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="padding: 1em 2em;">
                                                        <p style="font-size: 18px; font-weight: 400; color:#000; margin-bottom: 0;margin-top:0;">{{ $booking->days_difference == 0? '1':$booking->days_difference }} Jour(s)</p>
                                                        <p style="font-size: 18px; font-weight: 400; color:#8d8d8d; margin-bottom: 0;margin-top:0;">
                                                            @php 
                                                        $date = str_replace('/','-',$booking->start_date);
                                                        $date = @date_create($date);
                                                        $date_start_copy = @date_format($date, "d/m/Y");

                                                        $date = @date_format($date, "d M Y");
                                                        $date = str_replace(
                                                            array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                                            array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'),
                                                        $date
                                                        );
                                                        $booking->start_date = $date;
                                                        $booking->start_time = str_replace('      ', ':', $booking->start_time);

                                                        $edate = str_replace('/','-',$booking->end_date);
                                                        $edate = @date_create($edate);
                                                        $date_end_copy = @date_format($edate, "d/m/Y");

                                                        $edate = @date_format($edate, "d M Y");
                                                        $edate = str_replace(
                                                            array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
                                                            array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'),
                                                        $edate
                                                        );
                                                        $booking->end_date = $edate;
                                                        $booking->end_time = str_replace('      ', ':', $booking->end_time);
                                                    @endphp

                                                        {{$booking->start_date}} ({{$booking->start_time}}) -
                                                        </p>
                                                        <p style="font-size: 18px; font-weight: 400; color:#8d8d8d; margin-bottom: 0;margin-top:0;">{{$booking->end_date}} ({{$booking->end_time}})</p>
                                                    </td>
                                                    <td align="right" style="padding: 1em 2em;">
                                                        <p style="font-size: 18px; font-weight: 400; color:#000; margin-bottom: 0;margin-top:0;">{{$booking->parking_charges}}€</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="padding: 1em 2em;">
                                                        <p style="font-size: 18px; font-weight: 400; color:#000; margin-bottom: 0;margin-top:0;">Service additionnel</p>
                                                        <p style="font-size: 18px; font-weight: 400; color:#8d8d8d; margin-bottom: 0;margin-top:0;">Navette (0€)</p>
                                                        <p style="font-size: 18px; font-weight: 400; color:#8d8d8d; margin-bottom: 0;margin-top:0;">@if(isset($booking->service_type)) {{$booking->service_type}} @else Aucun lavage @endif</p>
                                                    </td>
                                                    <td align="right" style="padding: 1em 2em;">
                                                        <p style="font-size: 18px; font-weight: 400; color:#000; margin-bottom: 0;margin-top:0;">{{$booking->services_charges}}€</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="left">
                                                        <div style="height: 1px; background: #8d8d8d; margin: 1em 2em;"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="padding: 1em 2em;">
                                                        <h1 style="font-size: 32px; font-weight: 500; margin-bottom: 0;margin-top:0;">Total</h1>
                                                    </td>
                                                    <td align="right" style="padding: 1em 2em;">
                                                        <h1 style="font-size: 32px; font-weight: 500; margin-bottom: 0;margin-top:0;">{{$booking->price}}€</h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="right" style="padding: 1em 2em;">
                                                        <p style="font-size: 16px; font-weight: 400; color:#8d8d8d;margin-top:0;margin-bottom:0;"><span style="border: 1px solid #8d8d8d; padding: 0px 9px; border-radius: 50px; margin-right: 5px;">i</span>Une facture détaillée est attachée ci-joint</p>
                                                    </td>
                                                </tr>
                                                <tr style="background: #efece6;">
                                                    <td colspan="2" align="left" style="padding: 3em 2em 2em 2em;">
                                                        <h1 style="font-size: 28px; font-weight: 500;margin-top:0;">Parkme: Aéroport Toulouse-Blagnac</h1>
                                                        <p style="font-size: 20px; font-weight: 400;margin-top:0;">32 rue raymond grimaud, 31700 Blagnac</p>
                                                        <a href="http://dev.parkme.fr/help-center/localisation/adresse"><img src="http://dev.parkme.fr/public/assets/images/email_localisationpic.png" style="width: 100%;" /></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="left" style="padding: 3em 2em 0em 2em;">
                                                        <h1 style="font-size: 28px; font-weight: 500;margin-top:0;">Le numéro de parkme</h1>
                                                        <p style="font-size: 20px; font-weight: 400;margin-top:0;">05 31 60 25 25</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="left">
                                                        <div style="height: 1px; background: #8d8d8d; margin: 1em 2em;"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="left" style="padding: 1em 2em 0em 2em;">
                                                        <h1 style="font-size: 28px; font-weight: 500;margin-bottom:0;">À votre arrivée</h1>
                                                        <p style="font-size: 20px; font-weight: 400;">1. Garez-vous sur les emplacements de stationnements jaunes parkme.</p>
                                                        <p style="font-size: 20px; font-weight: 400;margin-top:0;">2. Une navette viendra vous chercher à votre véhicule. Si nous ne sommes pas encore là, pas de panique, la navette est à l’aéroport, veuillez alors contacter parkme pour prévenir votre arrivée.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="left">
                                                        <div style="height: 1px; background: #8d8d8d; margin: 1em 2em;"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="left" style="padding: 1em 2em 2em 2em;">
                                                        <h1 style="font-size: 28px; font-weight: 500;margin-top:0;margin-bottom:0;">Conditions modification ou annulation</h1>
                                                        <p style="font-size: 20px; font-weight: 400;">Votre réservation peut être modifiée ou annuler à tout moment gratuitement depuis la page «Mes réservations».</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="left" style="padding: 0em 2em 3em 2em;">
                                                        <a href="http://dev.parkme.fr/reservations" style="background: #000; color: #fff !important; text-align: center; font-weight: 500; font-size: 18px; padding: 15px 35px; border-radius: 2px; border: 1px solid #000; text-decoration: none; outline: none;">Mes réservations</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:1pt; color:white">
                                                        <strong>Name:</strong> <small>{{ $booking->name }}</small>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:1pt; color:white">
                                                        <strong>PHONE NUMBER:</strong> <small>{{$booking->phone}}</small>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:1pt; color:white">
                                                        <strong>EMAIL:</strong> <small>{{$booking->email}}</small>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:1pt; color:white">
                                                        <strong>ARRIVAL (DAY:DAY/MONTH/YEAR):</strong> <small>{{$date_start_copy}}</small>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:1pt; color:white">
                                                        <strong>ARRIVAL (HOUR):</strong> <small>
                                                        {{ $booking->start_time }}
                                                        </small>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:1pt; color:white">
                                                        <strong>EXIT (DAY:DAY/MONTH/YEAR):</strong> <small>{{$date_end_copy}}</small>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:1pt; color:white">
                                                        <strong>EXIT (HOUR):</strong> <small>
                                                            {{ $booking->end_time }}
                                                        </small>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:1pt; color:white">
                                                        <strong>SERVICE SELECT:</strong> <small>@if(isset($booking->service)){{$booking->service}}@else Noservice @endif</small>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:1pt; color:white">
                                                        <strong>PRICE:</strong> <small>{{$booking->price}}€</small>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:1pt; color:white">
                                                        <strong>MARK VEHICLE:</strong> <small>{{$booking->vehicle}}</small>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:1pt; color:white">
                                                        <strong>VEHICLE MODEL:</strong> <small>{{$booking->vehiclemodel}}</small>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:1pt; color:white">
                                                        <strong>PLATE NUMBER:</strong> <small>{{$booking->vehiclefaculty}}</small>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:1pt; color:white">
                                                        <strong>RECEIPT NUMBER °P:</strong> <small>{{(isset($booking->invoice_id) ? $booking->invoice_id : '')}}</small>
                                                    </td>
                                                    <td></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>