<?php
if (isset($_POST['submit'])) {
    $to = "unilabportal@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your Message with Subject: " . $_POST['subject'];
    $message = $first_name . " " . $last_name . " " . "(" . $from . " / " . $phone . ")" . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . ":" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2);
}
?>
<!-- HTML Header -->
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us - Unilab</title>

    <!-- Default Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Unilab for medicine issues, reports on fake medicines and others." />
    <meta name="keyword" content="Contact Us - Unilab" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:url" content="https://www.unilab.com.ph/contact-us" />
    <meta property="og:title" content="Contact Us - Unilab" />
    <meta property="og:description" content="Contact Unilab for medicine issues, reports on fake medicines and others." />
    <meta property="og:site_name" content="Unilab - Trusted Quality Healthcare" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:image" content="{image}" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="720">
    <meta property="og:type" content="article" />
    <meta property="fb:app_id" content="831562003986924" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Contact Unilab for medicine issues, reports on fake medicines and others." />
    <meta name="twitter:title" content="Contact Us - Unilab" />
    <meta name="twitter:site" content="@unilab_ph" />
    <meta name="twitter:domain" content="Unilab" />
    <meta name="twitter:image" content="{image}" />

    <!-- Use preconnect/dns-prefetch for important 3rd party links -->
    <link rel="preconnect" href="https://www.facebook.com">
    <link rel="preconnect" href="https://appier.net">

    <link rel="icon" type="image/png" href="https://assets.unilab.com.ph/uploads/validator.png" />
    <link rel="preload" href="https://assets.unilab.com.ph/assets/assets/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://assets.unilab.com.ph/assets/assets/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://assets.unilab.com.ph/assets/assets/css/header.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://assets.unilab.com.ph/assets/assets/css/footer.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://assets.unilab.com.ph/assets/assets/css/sidebar.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://assets.unilab.com.ph/assets/assets/css/common.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://assets.unilab.com.ph/assets/assets/css/slick.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" type="text/css" href="https://assets.unilab.com.ph/assets/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://assets.unilab.com.ph/assets/assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://assets.unilab.com.ph/assets/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="https://assets.unilab.com.ph/assets/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="https://assets.unilab.com.ph/assets/assets/css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="https://assets.unilab.com.ph/assets/assets/css/common.css">
    <link rel="stylesheet" type="text/css" href="https://assets.unilab.com.ph/assets/assets/css/slick.css">

    <link rel="preload" href="https://assets.unilab.com.ph/assets/assets/css/contactus.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" type="text/css" href="https://assets.unilab.com.ph/assets/assets/css/contactus.css">

    <script type="text/javascript">
        ! function(q, g, r, a, p, h, js) {
            if (q.qg) return;
            js = q.qg = function() {
                js.callmethod ? js.callmethod.call(js, arguments) : js.queue.push(arguments);
            };
            js.queue = [];
            p = g.createElement(r);
            p.async = !0;
            p.src = a;
            h = g.getElementsByTagName(r)[0];
            h.parentNode.insertBefore(p, h);
            qg("event", '', );
        }(window, document, 'script', 'https://cdn.qgr.ph/qgraph.43d183c1ac9cf273ff71.js');
    </script>
    <script src="https://cdn.qgraph.io/dist/aiqua-wp.js"></script>

    <script>
        AIQUA.init({
            appId: '43d183c1ac9cf273ff71',
            timeout: 5000
        });
    </script>

    <!-- Appier Media Tags -->
    <script type="text/javascript">
        window.appier_q = window.appier_q || [];
        window.appier_q.push({
            "t": "register",
            "content": {
                "id": "6e27",
                "site": "unilab.com.ph"
            }
        }, {
            "t": "pv_track",
            "action_id": "PageView_20fd",
            "track_id": "6cb9e429a712ef2",
            "isCountReload": true,
            "counter": 0
        }, {
            "t": "pv_track",
            "action_id": "ViewTwoPages_99c8",
            "track_id": "6cb9e429a712ef2",
            "isCountReload": false,
            "counter": 1
        });
    </script>
    <script src="//jscdn.appier.net/aa.js?id=unilab.com.ph" async></script>


    <!-- Site Information FB and GTM Tags -->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KCQ922C');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-65221887-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-65221887-1');
        gtag('config', 'AW-617038423');
    </script>

    <!-- Hotjar Tracking Code for unilab.com.ph -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 2011506,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 816676648 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-816676648"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-816676648');
    </script>
    <script>
    </script>


    <script>
        gtag('set', {
            'user_id': 'USER_ID'
        }); // Set the user ID using signed-in user_id
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('set', 'userId', 'USER_ID'); // Set the user ID using signed-in user_id.
    </script>

    <!-- "Please increase the version of the file if there are any changes and updates done. Ex. ?v=2 to ?v=3" -->
    <script type="text/javascript" src="https://assets.unilab.com.ph/assets/assets/js/jquery-3.4.1.min.js?v=2"></script>
    <link rel="canonical" href="https://www.unilab.com.ph/contact-us" />
    <link rel="alternate" hreflang="en-PH" href="https://www.unilab.com.ph/contact-us" />
    <link rel="alternate" hreflang="tl-PH" href="https://www.unilab.com.ph/contact-us" />
</head>
<header>

    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div id="sidebarDismiss">
            <i class="fas fa-arrow-left fa-lg"></i>
        </div>
        <div class="sidebarOptions">
            <ul class="list-unstyled components">
                <li></li>
                <li>
                    <a href="../our-purpose-our-values" target=_self>Our Company</a>
                    <a href="#" id="sidemenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdowntoggle"><i class="fas fa-caret-right"></i></a>
                    <ul class="dropdown-menu dropdown-menu-left" aria-labelledby="sidemenu1">
                        <li><a href="../our-purpose-our-values#subnavigation">Our Purpose and
                                Values</a></li>
                        <li><a href="../our-humble-beginnings#subnavigation">Our Humble
                                Beginnings</a></li>
                        <li><a href="../our-leaders#subnavigation">Our Leaders</a></li>
                        <li><a href="../our-commitment-to-quality#subnavigation">Our Commitment
                                to Quality</a></li>
                        <li><a href="../our-subsidiaries#subnavigation">Our Subsidiaries</a></li>
                    </ul>
                </li>

                <li class="active">
                    <a href="../contact-us" target=_self>Contact Us</a>
                </li>

                <li>
                    <a href="../portal.php">Unilab Portal</a>
                </li>
            </ul>

            <div class="label">Follow us on</div>
            <div class="detail">
                <a href="https://www.facebook.com/Unilab" target="_blank"><i class="fab fa-facebook-square m-10-r"></i></a>
                <a href="https://twitter.com/unilab_ph" target="_blank"><i class="fab fa-twitter m-10-r"></i></a>
                <a href="https://instagram.com/unilab/" target="_blank"><i class="fab fa-instagram  m-10-r"></i></a>
                <a href="https://www.youtube.com/user/unilabph" target="_blank"><i class="fab fa-youtube "></i></a>
            </div>
        </div>
    </nav>
    <div id="sidenavoverlay"></div>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" id="sidebarCollapse" class="navbar-toggle collapsed">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand" href="../"><img src="https://assets.unilab.com.ph/assets/assets/images/logo-unilab-header.png" alt="Unilab"></a>
        </div>


        <div id="ulnavbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li></li>
                <li>
                    <a href="../our-purpose-our-values" target=_self>Our Company</a>

                    <ul class="dropdown-menu dropdown-menu-left">
                        <li><a href="../our-purpose-our-values#subnavigation">Our Purpose and
                                Values</a></li>
                        <li><a href="../our-humble-beginnings#subnavigation">Our Humble
                                Beginnings</a></li>
                        <li><a href="../our-leaders#subnavigation">Our Leaders</a></li>
                        <li><a href="../our-commitment-to-quality#subnavigation">Our Commitment
                                to Quality</a></li>
                        <li><a href="../our-subsidiaries#subnavigation">Our Subsidiaries</a></li>
                    </ul>
                </li>

                <li class="active">
                    <a href="../contact-us" target=_self>Contact Us</a>
                </li>

                <li>
                    <a href="../portal.php">Unilab Portal</a>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </nav>
</header>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KCQ922C" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '387887815028286');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=387887815028286&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
    <div class="container-fluid">
        <div class="row">

        </div>


        <div class="row banner pullback">
            <div class="col-sm-6 col-md-5 banner-text">
                <img src="https://assets.unilab.com.ph/uploads/Unilab/Contact_us/img-contactusnumbers.png" class="hidden-xs img-responsive">
            </div>
        </div>

        <style scoped>
            .banner {
                background-image: url(https://assets.unilab.com.ph/uploads/Unilab/Contact_us/banner-contactus-main-mobile.jpg);
            }

            @media (min-width: 768px) {
                .banner {
                    background-image: url(https://assets.unilab.com.ph/uploads/Unilab/Contact_us/banner-contactus-main.jpg);
                }


            }
        </style>
        <form action="" method="POST">
            <div class="row bg-lightgray pullback">
                <div class="col-sm-push-6 col-sm-6" id="contactusforms">
                    <div id="contactusform">

                        <div class="headline">Do you have a question for us?</div>
                        <div class="m-20-b">We would like to hear from you. Please fill out the form below to send us a
                            message and we will respond to you as soon as possible.</div>

                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" required>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" required>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="" required>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="" pattern="[0][9][0-9]{9}" required>
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="subject">Select Inquiry</label>
                                <select class="form-control" id="inquiry" name="subject" required>
                                    <option disabled selected>Select Inquiry...</option>

                                    <option>Product-Related</option>

                                    <option>Business Partnerships</option>

                                    <option>Sponsorship / Medical Mission</option>

                                    <option>Unilab Portal Registration</option>

                                    <option>Lost Unilab Portal Password</option>

                                    <option>Others</option>

                                </select>
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="message">Message</label>
                                <textarea class="form-control" rows="3" id="message" name="message" required></textarea>
                            </div>

                            <div class="col-xs-12 m-20-t">
                                <input type="submit" class="btn btn-primary bluebtn btn_submit" name="submit" value="Submit">
                            </div>
                        </div>
        </form>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
        </script>
    </div>
    <a href="../" id="backtohome" class="btn btn-primary bluebtn" role="button">Back
        to Unilab Homepage</a>
    </div>
    <div class="col-sm-pull-6 col-sm-6" id="contactusimage">

        <div>
            <div class="headline">Contact Us</div>
            <p><b>Landline:</b> (02) 8-864522-1</p>
            <p><b>Provincial Toll-free:</b> 1-800-10-864522-1</p>
            <p><b>Email:</b> info@unilab.com.ph</p>
            <p><b>SMS:</b> +63917 864522-1</p>
            <div id="contactmedia">
                <p>You can also message us on:</p>
                <a href="https://m.me/Unilab" target="_blank">
                    <div class="fb"><i class="fab fa-facebook-messenger"></i> Facebook</div>
                </a>
                <a href="viber://chat?number=%2B639178645221" target="_blank">
                    <div class="viber"><i class="fab fa-viber"></i> Viber</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=639178645221" target="_blank">
                    <div class="whatsapp"><i class="fab fa-whatsapp"></i> WhatsApp</div>
                </a>
                <p class="m-10-t">We are available from Monday to Saturday, 8:00 am to 5:00 pm.</p>
            </div>

            <p class="m-10-t"><small>
                    <p>Unilab provides an outline on how your personal information will be processed while we
                        work on your report. Click <a class="trigger-link" href="/privacy-statement/" title="Privacy Statement">here</a> for more information about Unilab&rsquo;s Privacy
                        Statement</p>
                </small></p>
        </div>
    </div>


    </div>
    <div class="row footer pullback">
        <footer>
            <div class="col-xs-12 footer-details">
                <ul>
                    <li class="hidden-xs">
                        <span class="label">Follow us on</span>
                        <span class="detail">
                            <a id="footer-facebook-link" href="https://www.facebook.com/Unilab" target="{fb_link}"><i class="fab fa-facebook-square m-5-r"></i></a>
                            <a id="footer-twitter-link" href="https://twitter.com/unilab_ph" target="_blank"><i class="fab fa-twitter m-5-r"></i></a>
                            <a id="footer-instagram-link" href="https://instagram.com/unilab/" target="_blank"><i class="fab fa-instagram m-5-r"></i></a>
                            <a id="footer-youtube-link" href="https://www.youtube.com/user/unilabph" target="_blank"><i class="fab fa-youtube m-5-r"></i></a>
                        </span>

                    <li class="visible-xs"><span class="label"><a class="btn" href="/contact.php">Contact Us</a></span>
                    </li>
                    <li class="hidden-xs"><span class="label">Call us at</span><span class="detail">(02)
                            8-864522-1</span></li>
                    <li class="hidden-xs"><span class="label">Email us at</span><span class="detail"><a href="mailto: info@unilab.com.ph">info@unilab.com.ph</a></span></li>
                    <li class="hidden-xs"><span class="label">Visit us at</span><span class="detail">
                            <p>66 United St., Mandaluyong City, Philippines 1550</p>
                        </span></li>

                </ul>
            </div>
            <div class="col-xs-12">
                <div class="footer-reserved"><span>2021 All Rights Reserved &copy; Unilab, Inc. </span> | <span><a id="footer-privacy-statement-link" href="../privacy-statement">Privacy Statement</a></span>
                </div>
            </div>
        </footer>
    </div>

    <div class="modal fade" id="ascModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="p-15">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body text-center">
                    <h4 class="modal-title m-10-b"> ASC Ref Codes</h4>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-default btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        var url = "https://www.unilab.com.ph/";
        var assets_url = "https://assets.unilab.com.ph/";
        var site_name = "contact-us";
    </script>
    <!-- "Please increase the version of the file if there are any changes and updates done. Ex. ?v=2 to ?v=3" -->
    <script type="text/javascript" src="https://assets.unilab.com.ph/assets/assets/js/bootstrap.min.js?v=2"></script>
    <script type="text/javascript" src="https://assets.unilab.com.ph/assets/assets/js/slick.min.js?v=2"></script>
    <script type="text/javascript" src="https://assets.unilab.com.ph/assets/assets/js/moment.min.js?v=2"></script>
    <script type="text/javascript" src="https://assets.unilab.com.ph/assets/assets/js/sidebar.js?v=2"></script>
    <script type="text/javascript" src="https://assets.unilab.com.ph/assets/assets/js/contactus.js?v=2"></script>
    <script type="text/javascript" src="https://assets.unilab.com.ph/assets/sites/js/contactus.js?v=2"></script>
    <script type="text/javascript" src="https://assets.unilab.com.ph/assets/sites/js/sub_nav_pages/uhp.js?v=2"></script>
    <script type="text/javascript" src="https://assets.unilab.com.ph/assets/assets/js/banner.js?v=2"></script>
    <script type="text/javascript" src="https://assets.unilab.com.ph/assets/assets/js/captcha.js?v=2"></script>
    <script data-main="https://assets.unilab.com.ph/assets/assets/js/config" src="https://assets.unilab.com.ph/assets/assets/js/require-2.3.6.js"></script>
    <script>
        require(['config'], function() {
            require(['backtotop', 'modernizr', 'func']);
        });
    </script>
    <!-- container-fluid -->
    <!-- Disables right clicking for the whole page -->
    <script type="text/javascript">
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script>
</body>

</html>