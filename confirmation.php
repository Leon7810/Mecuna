<?php 

session_start();

$totaal = $_SESSION['tickets'] * 17;

$number = random_int(0, 1000000);
$datum = date("l jS \of F Y")


?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--[if !mso]><!-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Event Brite Order Confirmation Clone">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    

    <style>
        a.sm-link:hover {
            opacity:.5;
            transition: all 0.3s linear;
        }
    </style>
</head>
<body style="background-color:#eeedf2; overflow-wrap:break-word;">
    <table border="0" cellpadding="0" cellspacing="0" style="width:600px; border:none; border-collapse:collapse; margin:20px auto 0 auto; padding:0; font-family:Arial, Helvetica, sans-serif; color:#1e0a3c;" role="presentation">
        <tbody>
        <!--TOP-->
            <tr>
                <td>
                    <table role="presentation">
                        <tbody> 
                            <tr>
                                <td width="600" style="margin:0 auto; text-align:center;">
                                    <a href="#"><img src="images/14_6GC_Leon_GIP_3.2_Logo_RGB.png" alt="mecuna logo" width="140"/></a>
                                    <p style="font-family:'Roboto Medium'; font-size:30px; margin-top:30px; line-height:40px; letter-spacing:-0.2px;"><strong><?php echo $_SESSION['name']?>,</strong><br>you're good to go!</p>
                                    <img src="https://cdn.evbstatic.com/s3-build/perm_001/4c3492/django/images/emails_2018_rebrand/header-icon@2x.png" alt="header icon" width="115" style="margin-bottom:30px;"/>

                                    <!-- CTA BPBUTTON: GET THE APP -->
                                    <div align="center" style="text-align:center; margin-bottom:30px;">
                                        <a href="ticket_order_3847292O.pdf" download="<?php echo "order_ticket_" . $number ?>" style="background-color:#f05537; border-radius:4px; color:#ffffff; display:inline-block; font-size:14px; line-height:40px; text-align:center; text-decoration:none; width:130px;-webkit-text-size-adjust:none;">Download ticket(s)</a>
                                    </div>
                                    <!-- /END CTA BPBUTTON -->

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <!-- ORDER CONFIRMATION SECTION  -->
            <tr>
                <td>
                    <table style="width:100%; background-color:#ffffff;" role="presentation">
                        <tbody>
                            <tr><td colspan="3" height="5">&nbsp;</td></tr>
                            <tr>
                                <td width="30">&nbsp;</td>
                                <td>
                                    <p style="font-size:24px; text-align:center;">Mechelse Cultuur <strong>Nacht 7 November 2022</strong></p>
                                    <img src="images/bg (6).jpg" alt="Virtual Self Care Sunday with Togehter Digital LA, April 5, 2020" width="540"/>
                                </td>
                                <td width="30">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="30">&nbsp;</td>
                                <td width="540" style="font-size:16px; border-bottom:1px solid #f2f2f2;">
                                    <p style="margin-top: 3%;"><img src="https://egid-github.s3-us-west-1.amazonaws.com/tdla_eventbrite/ticket-icon.png" alt="ticket icon" width="12" valign="middle"/>&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['tickets'] ?> x Ticket(s)</p>
                                    <p style="margin-left:24px; margin-top:-5px; margin-bottom:20px; color:#6f7287;">Totale bestelling: €<?php echo $totaal; ?></p>
                                    <p><img src="https://egid-github.s3-us-west-1.amazonaws.com/tdla_eventbrite/clock-icon.png" alt="clock icon" width="18" valign="middle"/>&nbsp;&nbsp;&nbsp;Maandag, 7 November, 2022 van 21:00u tot 7:00u</p>
                                    <p style="margin-left:30px; margin-top:-5px; color:#6f7287;">Voeg toe aan &nbsp;&bull;&nbsp;<a href="#" style="color:#3f60e7;">Google</a>&nbsp;&bull;&nbsp;<a href="#" style="color:#3f60e7;">Outlook</a>&nbsp;&bull;&nbsp;<a href="#" style="color:#3f60e7;">iCal</a>&nbsp;&bull;&nbsp;<a href="#" style="color:#3f60e7;">Yahoo</a></p>
                                    <p style="text-align:center; font-size:14px; margin-top:30px; margin-bottom:30px;"><a href="#" style="color:#3f60e7; text-decoration:none;">Bekijk event details</a></p>
                                </td>
                                <td widht="30">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="30">&nbsp;</td>
                                <td style="text-align:center;">
                                    <p>Stad Mechelen</p>
                                    <!-- CTA BPBUTTON: FOLLOW -->
                                    <div align="center" style="text-align:center; margin-bottom:30px;">
                                        <!--[if mso]>
                                        <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.eventbrite.com/o/los-angeles-together-digital-11258915557" style="height:40px;v-text-anchor:middle;width:100px;" arcsize="10%" stroke="f" fillcolor="#ffffff">
                                          <w:anchorlock/>
                                          <center>
                                        <![endif]-->
                                        <a href="#" style="background-color:#ffffff; border-radius:4px; color:#1e0a3c; border:2px solid #e7e6ea;  display:inline-block; font-size:14px; line-height:40px; text-align:center; text-decoration:none; width:100px;-webkit-text-size-adjust:none;">Volg ons</a>
                                        <!--[if mso]>
                                          </center>
                                        </v:roundrect>
                                      <![endif]-->
                                    </div>
                                    <!-- /END CTA BPBUTTON -->
                                    <p>Vragen over dit evenementt?</p>
                                    <p style="font-size:14px; margin-bottom:40px;"><a href="#" style="color:#3f60e7; text-decoration:none;">Contacteer de organistor</a></p>
                                </td>
                                <td width="30">&nbsp;</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr><td colspan="3" height="10">&nbsp;</td></tr>
            <!-- ORDER SUMMARY SECTION -->
            <tr>
                <td>
                    <table style="background:#ffffff;" role="presentation">
                        <tbody>
                            <tr>
                                <td colspan="3" height="10">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="30">&nbsp;</td>
                                <td width="540" style="color:#6f7287;">
                                    <p style="font-size:24px; color:#1e0a3c;">Overzicht van de bestelling</p>
                                    <p>Bestelling <a href="#" style="color:#3f60e7;">#<?php echo $number; ?></a> - <?php echo $datum ?></p>
                                    <p style="font-size:14px;"><?php echo $_SESSION['name'] ?><span style="padding-left:50px;"><?php echo $_SESSION['tickets'] ?> x</span>&nbsp;<span style="color:#000000;"><strong>Mecuna Ticket</strong></span><span style="padding-left:100px;">€<?php echo $totaal ?></span></p>
                                    <p style="font-size:14px;">Betaling via <?php echo $_SESSION['methode'] ?>.</p>
                                    <p style="color:#1e0a3c; font-size:12px; margin-top:30px;"><a href="#" style="text-decoration:none; color:#3f60e7"><strong>Bekijk en beheer</a> uw bestelling online</strong></p>
                                    <p style="font-size:12px; margin-bottom:30px;">Deze bestelling is onderhevig aan Eventbrite <a href="#" style="text-decoration:none; color:#3f60e7">Terms of Service</a>, <a href="#" style="text-decoration:none; color:#3f60e7">Privacy Policy</a>, en <a href="#" style="text-decoration:none; color:#3f60e7">Cookie Policy</a>.</p>
                                </td>
                                <td width="30">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr><td colspan="3" height="10">&nbsp;</td></tr>
            <!-- TICKET SECTION -->
            <tr>
                <td>
                    <table style="background:#ffffff;" role="presentation">
                        <tbody>
                            <tr style="height: 100px">
                                <td width="30">&nbsp;</td>
                                <td width="540" style="color:#1e0a3c; font-size:14px;">
                                    <p style="font-size:24px;">Jouw Tickets</p>
                                    <p><strong><?php echo $_SESSION['tickets'] ?> x eTicket</strong></p>
                                </td>
                                <td width="30">&nbsp;</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </td>
            </tr>
            <!--FOOTER-->
            <tr>
                <td>
                    <table style="background-color:#eeedf2;" role="presentation">
                        <tbody>
                            <tr>
                                <td colspan="3" height="50">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="30">&nbsp;</td>
                                <td width="540" style="font-size:12px; margin:0 auto; text-align:center; color:#6f7287;">
                                    <img src="https://cdn.evbstatic.com/s3-build/perm_001/de0b06/django/images/emails_2018_rebrand/EB-logo@2x.png" alt="eventbrite logo" width="140"/>
                                    <p>This email was sent to <a href="#" style="color:#f05537;"><?php echo $_SESSION['email'] ?></a></p>
                                    <p><a href="http://eventbrite.com" target="_blank" style="color:#f05537;">Eventbrite</a> | 155 5th St, 7th Floor | San Francisco, CA 94103</p>
                                    <p>Copyright &copy; 20202 Eventbrite. All rights reserved.</p>
                                </td>
                                <td width="30">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="3" height="50">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>      
                </td>
            </tr>
        </tbody>
    </table>
    <!--[if mso]>
        </td>
        </tr>
        </table>
    <![endif]-->
</body>