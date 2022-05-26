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
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <img src="http://dev.parkme.fr/public/assets/images/email_header.png" style="width: 100%;" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="padding: 5em 1em 1em 1em;">
                                                        <h1 style="font-size: 24px; font-weight: 500;">
                                                        {{-- Intro Lines --}}
                                                        @foreach ($introLines as $line)
                                                        {{ $line }}
                                                        @endforeach
                                                        </h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="padding: 1em 1em 2em 1em;">
                                                        <p style="font-size: 16px; font-weight: 400;">
                                                        {{-- Outro Lines --}}
                                                        @foreach ($outroLines as $line)
                                                        {{ $line }}
                                                        @endforeach
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="padding: 3em 1em 5em 1em;">
                                                        <a href="{{ $actionUrl }}" style="background: #000; color: #fff !important; text-align: center; font-weight: 500; font-size: 18px; padding: 15px 35px; border-radius: 2px; border: 1px solid #000; text-decoration: none; outline: none;">{{ $actionText }}</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left">
                                                        <div style="width: 100%; height: 40vh; background: rgb(0 0 0 / 10%);">
                                                        {{-- Subcopy --}}
                                                        @isset($actionText)
                                                        @slot('subcopy')
                                                        @lang(
                                                            "If you’re having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
                                                            'into your web browser: [:actionURL](:actionURL)',
                                                            [
                                                                'actionText' => $actionText,
                                                                'actionURL' => $actionUrl,
                                                            ]
                                                        )
                                                        @endslot
                                                        @endisset
                                                        </div>
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