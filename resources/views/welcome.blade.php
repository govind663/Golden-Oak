<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A23 Website - Recreated</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="wrapper">
        <div id="mobileOverlay" class="mobile-overlay-sm signup-card-bg d-none d-md-block">
            <img alt="A23.com" width="36" height="26" class="logo mobile_view" src="/assets/images/common/a23-logo.svg" />
        </div>

        <div id="menuOverlay" class="d-none d-lg-block"></div>

        <header class="header container-fluid py-3">
            <div class="container h-100">
                <div class="d-flex justify-content-between align-items-center h-100">

                    <div class="d-flex d-lg-none align-items-center">
                        <button class="btn btn-link menu-toggle me-3" type="button" id="hamburgerMenu">
                            <img alt="menu" title="Online Rummy" width="16" height="14" src="/assets/images/header/hamburger-menu-white.svg" />
                        </button>
                        <a class="d-block" href="https://www.a23.com">
                            <img alt="A23.com" title="A23" width="36" height="26" class="a23-logo" src="/assets/images/common/a23-logo.svg" />
                        </a>
                    </div>

                    <nav class="d-none d-lg-block">
                        <ul class="nav">
                            <li class="nav-item dropdown h-100">
                                <button class="btn btn-link nav-link dropdown-toggle menu-items h-100" type="button" id="rummyDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>Rummy</span>
                                    <i class="fas fa-angle-down ms-1"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="rummyDropdown">
                                    <li><a class="dropdown-item" href="https://www.a23.com/rummy.html">Rummy Game</a></li>
                                    <li><a class="dropdown-item" href="https://www.a23.com/rummy/download-rummy.html">Rummy App</a></li>
                                    <li><a class="dropdown-item" href="https://www.a23.com/tourneyInfo.html">Rummy Tourneys</a></li>
                                    <li><a class="dropdown-item" href="https://www.a23.com/rummybonus.html">Rummy Bonus &amp;Offers</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="learnRummyDropdown" data-bs-toggle="dropdown">Learn Rummy</a>
                                        <ul class="dropdown-menu" aria-labelledby="learnRummyDropdown">
                                            <li><a class="dropdown-item" href="https://www.a23.com/rummy/how-to-play-rummy.html">How to Play Rummy</a></li>
                                            <li><a class="dropdown-item" href="https://www.a23.com/rummy/rummy-rules.html">Rummy Rules</a></li>
                                            <li><a class="dropdown-item" href="https://www.a23.com/rummy/rummy-tutorial.html">Rummy Tutorial</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="rummyVariantsDropdown" data-bs-toggle="dropdown">Rummy Variants</a>
                                        <ul class="dropdown-menu" aria-labelledby="rummyVariantsDropdown">
                                            <li><a class="dropdown-item" href="https://www.a23.com/rummy/points-rummy.html">Points Rummy</a></li>
                                            <li><a class="dropdown-item" href="https://www.a23.com/rummy/deals-rummy.html">Deals Rummy</a></li>
                                            <li><a class="dropdown-item" href="https://www.a23.com/rummy/pool-rummy.html">Pool Rummy</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item link-separator"><span></span></li>
                            <li class="nav-item dropdown h-100">
                                <button class="btn btn-link nav-link dropdown-toggle menu-items h-100" type="button" id="pokerDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>Poker</span>
                                    <i class="fas fa-angle-down ms-1"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="pokerDropdown">
                                    <li><a class="dropdown-item" href="https://www.a23.com/poker.html">Poker Game</a></li>
                                    <li><a class="dropdown-item" href="https://www.a23.com/poker/poker-for-pc.html">Poker for Desktop</a></li>
                                    <li><a class="dropdown-item" href="https://www.a23.com/poker/download-poker.html">Poker App</a></li>
                                    <li><a class="dropdown-item" href="https://www.a23.com/poker/tourney.html">Poker Tourneys</a></li>
                                    <li><a class="dropdown-item" href="https://www.a23.com/poker/offers.html">Poker Offers</a></li>
                                    <li><a class="dropdown-item" href="https://www.a23.com/poker/how-to-play-poker.html">How To Play Poker</a></li>
                                    <li><a class="dropdown-item" href="https://www.a23.com/poker/rake.html">Rake</a></li>
                                </ul>
                            </li>
                            <li class="nav-item link-separator"><span></span></li>
                            <li class="nav-item h-100"><button type="button" class="btn btn-link nav-link menu-items h-100"><span>More</span><i class="fas fa-angle-down ms-1"></i></button></li>
                            <li class="nav-item link-separator"><span></span></li>
                            <li class="nav-item h-100"><button type="button" class="btn btn-link nav-link menu-items h-100"><span>The Company</span><i class="fas fa-angle-down ms-1"></i></button></li>
                        </ul>
                    </nav>

                    <div class="d-flex align-items-center app-signup-download">
                        <a class="btn btn-outline-success btn-radius logout me-3" role="button" href="javascript:void(0)">
                            <span>Logout</span>
                        </a>

                        <div class="download-links-icons d-none d-lg-flex align-items-center me-3">
                            <a href="https://www.a23.com/rummy/download-rummy.html" class="me-2">
                                <img alt="download a23 app for android" width="24" height="24" src="/assets/images/header/android-solid-white.svg" />
                            </a>
                            <a href="https://apps.apple.com/in/app/a23-rummy-indian-card-game/id1027731385">
                                <img alt="download a23 app for ios" width="24" height="24" src="/assets/images/header/apple-solid-white.svg" />
                            </a>
                        </div>

                        <div class="btn-login-signup d-none d-lg-flex">
                            <a href="https://ip.a23.com/ephu/4tc6xhsr" class="btn btn-outline-success btn-radius" role="button">
                                <span>Poker for Desktop</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="leftMenu" class="leftmenu d-none d-lg-block">
            <nav class="relative navigations h-100">
                <div class="menu-content px-4 py-4">
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between align-items-center mb-3">
                            <a href="https://www.a23.com">
                                <img src="/assets/images/common/a23-logo.svg" alt="A23.com" height="24" width="33.23" class="a23-logo" />
                            </a>
                            <button type="button" class="btn btn-link menu-close" id="closeMobileMenu">
                                <i class="fas fa-times text-white"></i>
                            </button>
                        </li>
                        <li class="menu-item py-2">
                            <div class="d-flex align-items-center mobile-menubutton" data-bs-toggle="collapse" data-bs-target="#mobileRummySubmenu" aria-expanded="false" aria-controls="mobileRummySubmenu">
                                <div class="link-icon me-2">
                                    <img class="mobile-menu-icon" src="/assets/images/header/game-controller-white.svg" alt="Rummy" width="24" height="24" />
                                </div>
                                <div class="text me-auto">Rummy</div>
                                <i class="fas fa-angle-down"></i>
                            </div>
                            <ul class="collapse list-unstyled ps-4" id="mobileRummySubmenu">
                                <li><a class="py-2 d-block" href="https://www.a23.com/rummy.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>Rummy Game</a></li>
                                <li><a class="py-2 d-block" href="https://www.a23.com/rummy/download-rummy.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>Rummy App</a></li>
                                <li><a class="py-2 d-block" href="https://www.a23.com/tourneyInfo.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>Rummy Tourneys</a></li>
                                <li><a class="py-2 d-block" href="https://www.a23.com/rummybonus.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>Rummy Bonus &amp; Offers</a></li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center mobile-menubutton" data-bs-toggle="collapse" data-bs-target="#mobileLearnRummySubmenu" aria-expanded="false" aria-controls="mobileLearnRummySubmenu">
                                        <div class="text me-auto">Learn Rummy</div>
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <ul class="collapse list-unstyled ps-4" id="mobileLearnRummySubmenu">
                                        <li><a class="py-2 d-block" href="https://www.a23.com/rummy/how-to-play-rummy.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>How to Play Rummy</a></li>
                                        <li><a class="py-2 d-block" href="https://www.a23.com/rummy/rummy-rules.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>Rummy Rules</a></li>
                                        <li><a class="py-2 d-block" href="https://www.a23.com/rummy/rummy-tutorial.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>Rummy Tutorial</a></li>
                                    </ul>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center mobile-menubutton" data-bs-toggle="collapse" data-bs-target="#mobileRummyVariantsSubmenu" aria-expanded="false" aria-controls="mobileRummyVariantsSubmenu">
                                        <div class="text me-auto">Rummy Variants</div>
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <ul class="collapse list-unstyled ps-4" id="mobileRummyVariantsSubmenu">
                                        <li><a class="py-2 d-block" href="https://www.a23.com/rummy/points-rummy.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>Points Rummy</a></li>
                                        <li><a class="py-2 d-block" href="https://www.a23.com/rummy/deals-rummy.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>Deals Rummy</a></li>
                                        <li><a class="py-2 d-block" href="https://www.a23.com/rummy/pool-rummy.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>Pool Rummy</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item py-2">
                            <div class="d-flex align-items-center mobile-menubutton" data-bs-toggle="collapse" data-bs-target="#mobilePokerSubmenu" aria-expanded="false" aria-controls="mobilePokerSubmenu">
                                <div class="link-icon me-2">
                                    <img class="mobile-menu-icon" src="/assets/images/header/game-controller-white.svg" alt="Poker" width="24" height="24" />
                                </div>
                                <div class="text me-auto">Poker</div>
                                <i class="fas fa-angle-down"></i>
                            </div>
                            <ul class="collapse list-unstyled ps-4" id="mobilePokerSubmenu">
                                <li><a class="py-2 d-block" href="https://www.a23.com/poker.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>Poker Game</a></li>
                                <li><a class="py-2 d-block" href="https://www.a23.com/poker/poker-for-pc.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>Poker for Desktop</a></li>
                                <li><a class="py-2 d-block" href="https://www.a23.com/poker/download-poker.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>Poker App</a></li>
                                <li><a class="py-2 d-block" href="https://www.a23.com/poker/tourney.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>Poker Tourneys</a></li>
                                <li><a class="py-2 d-block" href="https://www.a23.com/poker/offers.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>Poker Offers</a></li>
                                <li><a class="py-2 d-block" href="https://www.a23.com/poker/how-to-play-poker.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>How To Play Poker</a></li>
                                <li><a class="py-2 d-block" href="https://www.a23.com/poker/rake.html"><i class="fas fa-circle-dot me-2 icon-solid-dot"></i>Rake</a></li>
                            </ul>
                        </li>
                        <li class="menu-item py-2"><a class="d-flex align-items-center" href="https://www.a23.com/acepoints.html"><div class="link-icon me-2"><img class="mobile-menu-icon" src="/assets/images/header/heart-solid-white.svg" alt="Loyalty Program" width="24" height="14" /></div><div class="text">Loyalty Program</div></a></li>
                        <li class="menu-item py-2"><a class="d-flex align-items-center" href="https://www.a23.com/responsiblegaming.html"><div class="link-icon me-2"><img class="mobile-menu-icon" src="/assets/images/header/rg-white.svg" alt="Responsible Gaming" width="24" height="24" /></div><div class="text">Responsible Gaming</div></a></li>
                        <li class="menu-item py-2"><a class="d-flex align-items-center" href="https://www.a23.com/referAndEarn.html"><div class="link-icon me-2"><img class="mobile-menu-icon" src="/assets/images/header/refer-user.svg" alt="Refer &amp; Earn" width="24" height="24" /></div><div class="text">Refer &amp;Earn</div></a></li>
                        <li class="menu-item py-2"><a class="d-flex align-items-center" href="https://www.a23.com/tds.html"><div class="link-icon me-2"><img class="mobile-menu-icon" src="/assets/images/header/scissor.svg" alt="TDS" width="24" height="24" /></div><div class="text">TDS</div></a></li>
                        <li class="menu-item py-2"><a class="d-flex align-items-center" href="https://www.a23.com/gst.html"><div class="link-icon me-2"><img class="mobile-menu-icon" src="/assets/images/header/scissor.svg" alt="GST" width="24" height="24" /></div><div class="text">GST</div></a></li>
                        <li class="menu-item py-2"><a class="d-flex align-items-center" href="https://www.a23.com/aboutus.html"><div class="link-icon me-2"><img class="mobile-menu-icon" src="/assets/images/header/speak-us.svg" alt="About Us" width="24" height="24" /></div><div class="text">About Us</div></a></li>
                        <li class="menu-item py-2"><a class="d-flex align-items-center" href="https://www.a23.com/blog/" target="_blank"><div class="link-icon me-2"><img class="mobile-menu-icon" src="/assets/images/header/bulb.svg" alt="Blog" width="24" height="24" /></div><div class="text">Blog</div></a></li>
                        <li class="menu-item py-2"><a class="d-flex align-items-center" href="https://www.a23.com/faqs.html"><div class="link-icon me-2"><img class="mobile-menu-icon" src="/assets/images/header/question-mark-white.svg" alt="FAQs" width="24" height="24" /></div><div class="text">FAQs</div></a></li>
                        <li class="menu-item py-2"><a class="d-flex align-items-center" href="https://www.a23.com/contactus.html"><div class="link-icon me-2"><img class="mobile-menu-icon" src="/assets/images/header/tel-white.svg" alt="Contact Us" width="24" height="24" /></div><div class="text">Contact Us</div></a></li>
                    </ul>
                </div>
                <div class="download-btn position-absolute bottom-0 w-100 p-3">
                    <button type="button" id="A23GamesApp" class="btn btn-primary btn-download-a23 w-100 d-flex justify-content-center align-items-center">
                        <img src="https://www.a23.com/assets/images/header/download_icon.png" alt="A23.com" class="donwload-icon me-2" width="18" height="14" />
                        <span>Download Now</span>
                    </button>
                </div>
            </nav>
        </div>

        <section id="homeBanner" class="home-banner container-fluid p-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background:#07225c;">
                        <picture>
                            <source media="(min-width: 768px)" srcset="https://www.a23.com/assets/images/main-body/rummy/rummy-boss/rummy-boss-jul-d.webp">
                            <img src="https://www.a23.com/assets/images/main-body/rummy/rummy-boss/rummy-boss-jul-d.webp" class="d-block w-100" alt="Rummy Boss Series">
                        </picture>
                    </div>
                    <div class="carousel-item" style="background:#0c2042;">
                        <picture>
                            <source media="(min-width: 768px)" srcset="https://www.a23.com/assets/images/main-body/rummy/a23-rummy-welcome-bonus-d.webp">
                            <img src="https://www.a23.com/assets/images/main-body/rummy/a23-rummy-welcome-bonus-d.webp" class="d-block w-100" alt="Online Rummy Games, get welcome bonus">
                        </picture>
                    </div>
                    <div class="carousel-item" style="background:#0c2042;">
                        <picture>
                            <source media="(min-width: 768px)" srcset="https://www.a23.com/assets/images/main-body/rummy/a23-rummy-welcome-bonus-d.webp">
                            <img src="https://www.a23.com/assets/images/main-body/rummy/a23-rummy-welcome-bonus-d.webp" class="d-block w-100" alt="rummy refer and earn">
                        </picture>
                    </div>
                    <div class="carousel-item" style="background:#0c2043;">
                        <picture>
                            <source media="(min-width: 768px)" srcset="https://www.a23.com/assets/images/main-body/rummy/a23-rummy-free-entry-tourney-d.webp">
                            <img src="https://www.a23.com/assets/images/main-body/rummy/a23-rummy-free-entry-tourney-d.webp" class="d-block w-100" alt="Play Rummy freerole tourney">
                        </picture>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section id="gameCards" class="game-cards sm:game-cards-sm md:game-cards-md lg:game-cards-lg xl:game-cards-xl">
            <div class="container mx-auto">
                <div class="my-container mx-auto px-[15px]">
                    <h1 class="section-heading relative underline-class lg:mx-auto sm:heading-size-1-sm md:heading-size-1-md lg:heading-size-1-lg leading-loose">
                        Play Cash Games on A23.com
                    </h1>
                    <div class="grid grid-cols-2 sm:gap-x-3 md:gap-x-6 lg:max-w-[650px] lg:mx-auto">
                        <div class="game-card">
                            <div class="img">
                                <a href="">
                                    <img src="https://www.a23.com/assets/images/main-body/home/icon-game-card-a23-rummy.svg"
                                        alt="a23.com" class="w-[86px] h-[87px]" />
                                </a>
                            </div>
                            <div class="text-center min-h-[60px]">
                                <div class="heading sm:text-size-3 md:text-size-5 lg:text-size-5">RUMMY</div>
                                <div class="caption mx-auto sm:text-size-1 md:text-size-3 lg:text-size-3">Choose and
                                    play from the many variants of rummy.</div>
                            </div>
                            <div class="footer sm:pt-[10px]">
                                <a class="gtm_games_top_dwn_btn btn-download btn-radius sm:text-size-1 md:text-size-3 lg:text-size-3"
                                    href="https://a23.onelink.me/LuGW/v2nri2un">
                                    <div>Download</div>
                                </a>
                            </div>
                        </div>
                        <div class="game-card relative">
                            <div class="img">
                                <a target="_blank" href="https://p.a23.com/ephu/a23pkrog">
                                    <img src="https://www.a23.com/assets/images/main-body/home/icon-game-card-a23-poker.svg"
                                        alt="a23 poker" class="w-[86px] h-[87px]" />
                                </a>
                            </div>
                            <div class="text-center min-h-[60px]">
                                <div class="heading sm:text-size-3 md:text-size-5 lg:text-size-5">POKER</div>
                                <div class="caption mx-auto sm:text-size-1 md:text-size-3 lg:text-size-3">High risk,
                                    higher rewards. Play high stakes Poker.</div>
                            </div>
                            <div class="footer sm:pt-[10px]">
                                <a class="gtm_poker_top_dwn_btn btn-download btn-radius sm:text-size-1 md:text-size-3 lg:text-size-3"
                                    target="_blank" href="">
                                    <div>Download</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>