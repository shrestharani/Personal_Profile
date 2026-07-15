<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Personal Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Strive Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="assests/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="assests/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- nav -->
    <link href="assests/css/menufullpage.css" rel="stylesheet">
    <!-- font-awesome icons -->
    <link href="assests/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Fira+Sans+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <header>
        <a href="#menu" class="menu-link">
            <span>toggle menu</span>
        </a>
        <nav id="menu" class="panel">
            <ul>
                <li><a href="index" class="active">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="skills">Skills</a></li>
                <li><a href="services">Experience</a></li>
                <li><a href="portfolio">Portfolio</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </nav>
        <div class="logo_wthree">
            <a href="index" style="text-decoration:none;">
                <span style="display:inline-flex;align-items:center;justify-content:center;width:54px;height:54px;border-radius:14px;overflow:hidden;box-shadow:0 8px 20px rgba(15,23,42,0.28);border:1px solid rgba(255,255,255,0.08);background:#000;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" width="100%" height="100%">
                        <defs>
                            <linearGradient id="blackBackground" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#1c1c1c"/>
                                <stop offset="50%" stop-color="#0d0d0d"/>
                                <stop offset="100%" stop-color="#000000"/>
                            </linearGradient>
                            <linearGradient id="shiningGold" x1="0%" y1="100%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#9A7B36"/>
                                <stop offset="25%" stop-color="#EAC775"/>
                                <stop offset="50%" stop-color="#BE9648"/>
                                <stop offset="75%" stop-color="#FDF1A9"/>
                                <stop offset="100%" stop-color="#A1813C"/>
                            </linearGradient>
                            <linearGradient id="darkGold" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#EAC775"/>
                                <stop offset="100%" stop-color="#8A662D"/>
                            </linearGradient>
                            <filter id="dropShadow" x="-10%" y="-10%" width="130%" height="130%">
                                <feDropShadow dx="0" dy="8" stdDeviation="6" flood-color="#000000" flood-opacity="0.6"/>
                            </filter>
                            <filter id="goldGlow" x="-20%" y="-20%" width="140%" height="140%">
                                <feGaussianBlur stdDeviation="2" result="blur"/>
                                <feComposite in="SourceGraphic" in2="blur" operator="over"/>
                            </filter>
                        </defs>
                        <rect x="50" y="50" width="300" height="300" rx="65" fill="url(#blackBackground)" stroke="url(#shiningGold)" stroke-width="8" filter="url(#dropShadow)"/>
                        <text x="200" y="225" font-family="System-UI, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif" font-weight="900" font-size="95" letter-spacing="2" text-anchor="middle" fill="url(#shiningGold)" stroke="url(#darkGold)" stroke-width="1.5" filter="url(#goldGlow)">SSK</text>
                    </svg>
                </span>
            </a>
        </div>
    </header>

    <section class="slide-wrapper">
        <div class="agile_banner bg1">
            <div class="layer">
                <div class="container">
                    <div class="banner_text_wthree">
                        <div class="d-flex">
                            <h1>Welcome to </h1>
                            <h2>&nbsp;my portfolio</h2>
                        </div>
                        <div id="text" class="banner_text_w3ls my-md-5 my-3"></div>
                        <ul class="list-inline bnr_list_w3">
                            <li class="list-inline-item">
                                <a class="btn text-white scroll" href="portfolio">View my work</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn text-white bg-dark scroll" href="contact">Contact me</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="cpy-right text-center py-4">
            <p class="text-white">© 2026 Kondabathini Shrestharani. All rights reserved.</p>
        </div>
    </footer>

    <script src="assests/js/jquery-2.2.3.min.js"></script>
    <script src="assests/js/strive.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var dataText = [
                "I am Kondabathini Shrestharani, an Associate Software Engineer.",
                "I build web applications using ASP.NET Core, ASP.NET MVC, Web API, Node.js and React.js.",
                "My experience includes REST APIs, SQL Server, Entity Framework Core, Azure basics, and clean MVC architecture."
            ];

            function typeWriter(text, i, fnCallback) {
                if (i < text.length) {
                    document.getElementById("text").innerHTML = text.substring(0, i + 1) +
                        '<span aria-hidden="true" class="banner_text_w3ls"></span>';
                    setTimeout(function () {
                        typeWriter(text, i + 1, fnCallback)
                    }, 40);
                } else if (typeof fnCallback == 'function') {
                    setTimeout(fnCallback, 800);
                }
            }

            function StartTextAnimation(index) {
                if (index < dataText.length) {
                    typeWriter(dataText[index], 0, function () {
                        StartTextAnimation(index + 1);
                    });
                }
            }

            StartTextAnimation(0);
        });
    </script>
    <script src="assests/js/menuFullpage.min.js"></script>
    <script src="assests/js/SmoothScroll.min.js "></script>
    <script src="assests/js/bootstrap.js"></script>
</body>

</html>
