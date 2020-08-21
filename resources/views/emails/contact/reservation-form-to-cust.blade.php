<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body
    style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color:#f0f2ea; margin:0; padding:0; color:#333333;">

<table width="100%" bgcolor="#f0f2ea" cellpadding="0" cellspacing="0" border="0">
    <tbody>
    <tr>
        <td style="padding:40px 0;">
            <!-- begin main block -->
            <table cellpadding="0" cellspacing="0" width="608" border="0" align="center">
                <tbody>
                <tr>
                    <td>
                        <a style="display:block; width:338px; height:400px; margin:0 auto 30px;">
                            <img src="https://i.ibb.co/NCSVT7r/logo.jpg" width="338" height="400"
                                 style="display:block; border:0; margin:0;">
                        </a>
                        <p style="margin:0 0 36px; text-align:center; font-size:14px; line-height:20px; text-transform:uppercase; color:#626658;">
                            Bonjour,
                        </p>
                        <!-- begin wrapper -->
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                            <tbody>
                            <tr>
                                <td width="4" height="4"
                                    style="background:url(http://demo.artlance.ru/email/shadow-left-top.png) no-repeat 100% 0;">
                                    <p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                <td colspan="3" rowspan="3" bgcolor="#FFFFFF" style="padding:0 0 30px;">
                                    <!-- begin content -->
                                    <a style="display:block; margin:0 0 14px;"><img
                                            src="https://i.ibb.co/TtZYF5B/img-bg-4.jpg" width="600" height="400"
                                            alt="More"
                                            style="display:block; margin:0; border:0; background:#eeeeee;"></a>
                                    <p style="margin:0 30px 33px; text-align:center; text-transform:uppercase; font-size:14px; line-height:30px; font-weight:bold; color:#484a42;">
                                        Nous confirmons votre réservation {{$data['Surname']}} {{$data['Name']}}
                                    </p>
                                    <!-- begin articles -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                        <tbody>
                                        <tr valign="top">
                                            <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">
                                                    &nbsp;</p></td>
                                            <td colspan="3">
                                                <p style="margin:0 30px 33px; text-align:center; text-transform:uppercase; font-size:14px; line-height:30px; font-weight:bold; color:#484a42;">
                                                    Rendez-vous à Pont Caffino le {{$myDateTime = DateTime::createFromFormat('Y-m-d', $data['Location_Date'])->format('d-m-Y')}}
                                                    à {{$data['Start_Time']}} !
                                                </p>
                                                <p style="margin:0 30px 33px; text-align:center; text-transform:uppercase; font-size:14px; line-height:30px; font-weight:bold; color:#484a42;">
                                                    Cordialement, <br>
                                                    ALCKCT
                                                </p>
                                            </td>
                                            <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">
                                                    &nbsp;</p></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>

                        </table>
                        <!-- end wrapper-->
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- end main block -->
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>



