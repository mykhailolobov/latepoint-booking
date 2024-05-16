<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="Bollore" />
    <meta name="format-detection" content="Bollore" />
    <meta name="format-detection" content="Bollore" />
    <meta name="x-apple-disable-message-reformatting" />
    <title>::Welcome::</title>
    <style type="text/css">
        * {
            box-sizing: border-box;
        }        
        @font-face {
            font-family: 'Multicolore';
            src: url("{{ asset('assets/emails/fonts/Multicolore.eot')}}");
            src: url("{{ asset('assets/emails/fonts/Multicolore.eot?#iefix')}}") format('embedded-opentype'),
                url("{{ asset('assets/emails/fonts/Multicolore.woff2')}}") format('woff2'),
                url("{{ asset('assets/emails/fonts/Multicolore.woff')}}") format('woff'),
                url("{{ asset('assets/emails/fonts/Multicolore.ttf')}}") format('truetype'),
                url("{{ asset('assets/emails/fonts/Multicolore.svg#Multicolore')}}") format('svg');
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Proxima Nova Regular';
            src: url("{{ asset('assets/emails/fonts/ProximaNovaRegular.eot')}}");
            src: url("{{ asset('assets/emails/fonts/ProximaNovaRegular.eot?#iefix')}}") format('embedded-opentype'),
                url("{{ asset('assets/emails/fonts/ProximaNovaRegular.woff2')}}") format('woff2'),
                url("{{ asset('assets/emails/fonts/ProximaNovaRegular.woff')}}") format('woff'),
                url("{{ asset('assets/emails/fonts/ProximaNovaRegular.ttf')}}") format('truetype'),
                url("{{ asset('assets/emails/fonts/ProximaNovaRegular.svg#ProximaNovaRegular')}}") format('svg');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Proxima Nova Bold';
            src: url("{{ asset('assets/emails/fonts/ProximaNova-Bold.eot')}}");
            src: url("{{ asset('assets/emails/fonts/ProximaNova-Bold.eot?#iefix')}}") format('embedded-opentype'),
                url("{{ asset('assets/emails/fonts/ProximaNova-Bold.woff2')}}") format('woff2'),
                url("{{ asset('assets/emails/fonts/ProximaNova-Bold.woff')}}") format('woff'),
                url("{{ asset('assets/emails/fonts/ProximaNova-Bold.ttf')}}") format('truetype'),
                url("{{ asset('assets/emails/fonts/ProximaNova-Bold.svg#ProximaNova-Bold')}}") format('svg');
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }


        /* Responsive CSS */
        @media screen and (max-width: 599px) {
            table {
                width: 100% !important;
            }

            .w-20 {
                width: 10px !important;
            }

            .logo-table span {
                font-size: 18px !important;
                line-height: 22px !important;
            }

            .btn {
                font-size: 13px !important;
            }

            .copyright span {
                padding: 0 10px;
                font-size: 14px !important;
                line-height: 18px !important;
            }
        }

        @media screen and (max-width: 349px) {
            table {
                background-size: contain !important;
                background-position: 0 0 !important;
            }

            .h-20 {
                height: 20px !important;
            }
        }
    </style>
</head>

<body style="padding: 0; margin: 0; box-sizing: border-box; background: #ffffff; font-family: 'Proxima Nova Regular';">
    <center>
        <table cellpadding="0" cellspacing="0" border="0" bgcolor="#fbfbfb" style="width: 600px;">
            <tr>
                <td>
                    <table style="background: url({{asset('assets/emails/images/header-bg.svg')}}) no-repeat 0 100%; background-size: cover;"
                        width="100%">
                        <tr colspan="3">
                            <td class="w-20" width="40"></td>
                            <td>
                                <table width="100%" class="logo-table">
                                    <tr>
                                        <td height="10"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="color:#fff; font-family:Arial; font-size:15pt;">
                                            IMPORTANT, verification of your email address
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="h-100" height="130"></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="w-20" width="40"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td class="w-20" width="35"></td>
                            <td>
                                <table>
                                    <tr>
                                        <td height="40"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="font-family:Arial; font-size:13pt;">
                                            Hello {{$details['firstname']}} {{$details['lastname']}}
                                            <p>
                                            The aim of this message is to verify that the email address linked to your future account is valid. It is indeed crucial that this data is reliable so that you can be contacted you or notified you in the context of the use of the Appointment service.
                                            <p>
                                            To answer to our verification request and confirm the validity of the email address linked to your futur account, please click on the below link :
                                                </p>
                                        </td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <td class="h-20" height="30"></td>
                                    </tr>
                                    <td>
                                        <a href="{{ route('verify',$details['token'])}}" class="btn" style="background:#1D0A59; border-radius: 28px; font-size: 16px; line-height: 18px; font-family:'Arial'; color: #fff; width: 100%; display: block; text-align: center; padding: 19px 10px; text-decoration: none;">{{ __('Click here to continue registration') }}
                                        </a>
                                    </td>
                        </tr>
                        <tr>
                            <td class="h-20" height="30"></td>
                        </tr>
                        <tr>
                            <td>
                            We advise that you do it as soon as possible, as the link is only valid for 48 hours.
                            <p >


                            Best regards,
                            <br/>
                            Customer Service
                            </td>
                        </tr>
                        <tr>
                            <td height="40"></td>
                        </tr>
                    </table>
                </td>
                <td class="w-20" width="35"></td>
            </tr>
        </table>
        </td>
        </tr>
        <tr>
            <td>
                <table width="100%" bgcolor="#fff">
                    <tr>
                        <td height="15"></td>
                    </tr>
                    <tr>
                        <td class="copyright" align="center">
                            <p style="font-family:Arial; font-size:13pt;">
                                © 2022 <b style="font-family: 'Multicolore';">{{ config('app.name', 'Appointment') }} -</b> {{ __('All rights reserved')}}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td height="15"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%" bgcolor="#E9E9E9">
                    <tr>
                        <td height="12"></td>
                    </tr>
                    <tr>
                        <td class="w-20" width="38"></td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td class="w-20" width="38"></td>
                    </tr>
                    <tr>
                        <td height="12"></td>
                    </tr>
                </table>
            </td>
        </tr>
        </table>
    </center>
</body>

</html>
