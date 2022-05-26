<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

</head>


<body style="font-family: 'Roboto', sans-serif; color: #000;">
    <style>
        .email_temp1_header {
            position: relative;
            background-image: url(http://dev.parkme.fr/public/assets/images/email_strip.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 40px;
        }

        .email_temp1_logo {
            width: 15%;
            position: absolute;
            top: 35%;
            right: 5%;
        }

        .email_temp1_headingpd {
            padding: 10em 1em 1em 1em;
        }

        .email_temp1_heading {
            font-size: 32px;
            font-weight: 500;
        }

        .email_temp1_ppd {
            padding: 1em 1em 2em 1em;
        }

        .email_temp1_p {
            font-size: 16px;
            font-weight: 400;
        }

        .email_temp1_btnpd {
            padding: 3em 1em 5em 1em;
        }

        .email_temp1_btn,
        .email_temp1_btn:hover,
        .email_temp1_btn:focus {
            background: #000;
            color: #fff !important;
            text-align: center;
            font-weight: 500;
            font-size: 18px;
            padding: 15px 35px;
            border-radius: 2px;
            border: 1px solid #000;
            text-decoration: none;
            outline: none;
        }

        .email_temp1_footer {
            width: 100%;
            height: 40vh;
            background: rgb(0 0 0 / 10%);
        }

        @media (max-width: 767px) and (orientation:portrait) {
            .email_temp1_header {
                height: 100px;
            }

            .email_temp1_logo {
                width: 20%;
            }

            .email_temp1_heading {
                font-size: 50px;
            }

            .email_temp1_p {
                font-size: 30px;
            }

            .email_temp1_btn {
                font-size: 30px;
                padding: 25px 35px;
            }

            .email_temp1_btnpd {
                padding: 1em 1.5em 5em 1.5em;
            }

            .email_temp1_headingpd {
                padding: 10em 1.5em 1em 1.5em;
            }

            .email_temp1_ppd {
                padding: 4em 1.5em 3em 1.5em;
            }
        }
    </style>
    <div class="">
        <table width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td valign="center">
                        <table width="600" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td align="left">
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                    <td class="email_temp1_header" align="center">
                                                        <img class="email_temp1_logo" src="http://dev.parkme.fr/public/assets/images/email_logo.png" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="email_temp1_headingpd" align="left">
                                                        <h1 class="email_temp1_heading">Mot de passe oublié</h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="email_temp1_ppd" align="left">
                                                        <p class="email_temp1_p">Utilisez le bouton ci-dessous pour réinitialiser votre mot de passe</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="email_temp1_btnpd" align="left">
                                                        <a href="#" class="email_temp1_btn">Réinitialiser mot de passe</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left">
                                                        <div class="email_temp1_footer"></div>
                                                    </td>
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