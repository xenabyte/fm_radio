<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ env('APP_DESCRIPTION') }}">
    <meta name="keywords"
        content="Radio, Music, Podcasts, Live Stream, Online Radio, FM Radio, Music Player, Audio Streaming">
    <meta name="author" content="KoderiaNg">

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/camera.css')}}" rel="stylesheet">
    <link href="{{asset('css/mediaelementplayer.css')}}" rel="stylesheet">
    <link href="{{asset('css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="onepage front" data-spy="scroll" data-target="#top1" data-offset="92">

    <div id="load"></div>

    <div id="main">

        <div id="home">
            <div class="logo3_wrapper">
                <a href="#home" class="logo3 scroll-to">
                    <img src="images/logo3.png" alt="" class="img-responsive">
                </a>
            </div>
            <div class="add1 add2 clearfix">
                <div class="icon-search"><a href="#"></a></div>
                <div class="dropdown dropdown1">
                    <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true">EN
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="javascript:void(0);">FR</a></li>
                        <li><a href="javascript:void(0);">DE</a></li>
                        <li><a href="javascript:void(0);">ES</a></li>
                    </ul>
                </div>
            </div>
            <div id="slider_wrapper">
                <div class="go-down"><a href="#featured" class="scroll-to"></a></div>
                <div class="">
                    <div id="slider_inner" class="clearfix">
                        <div id="slider" class="clearfix">
                            <div id="camera_wrap">
                                <div data-src="images/12.png">
                                    <div class="camera_caption fadeFromLeft nav1">
                                        <div class="txt1 txt">TAU RADIO</div>
                                        <div class="txt2 txt">WE ARE</div>
                                        <div class="txt3 txt">LIVE</div>
                                        <div class="txt4">06:00 - 23:59</div>
                                    </div>
                                </div>
                                <div data-src="images/13.png">
                                    <div class="camera_caption fadeFromRight nav2">
                                        <div class="txt1 txt">TAU RADIO</div>
                                        <div class="txt2 txt">WE ARE</div>
                                        <div class="txt3 txt">LIVE</div>
                                        <div class="txt4">06:00 - 23:59</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="song1_wrapper">
                <div class="container">
                    <div class="song1_inner clearfix">
                        <div class="song1 clearfix">
                            <div class="left clearfix">
                                <figure><img src="images/11.png" alt="" height="90px"></figure>
                                <div class="caption">
                                    <div class="txt1">Radio channel: TAU FM</div>
                                    <div class="txt2">Live</div>
                                </div>
                            </div>
                            <div class="right">
                                <div class="audio1">
                                    <audio id="tau-radio" class="audio" controls muted preload="auto" style="width: 100%;">
                                        <source src="{{ url('/radio-proxy') }}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="top1">
            <div class="top2_wrapper" id="top2">
                <div class="container">

                    <div class="top2 clearfix">

                        <header>
                            <div class="logo_wrapper">
                                <a href="#home" class="logo scroll-to">
                                    <img src="images/logo.png" alt="" class="img-responsive">
                                </a>
                            </div>
                        </header>

                        <div class="menu_wrapper">
                            <div class="add1 clearfix">
                                <div class="icon-search"><a href="#"></a></div>
                                <div class="dropdown dropdown1">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">EN
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="javascript:void(0);">FR</a></li>
                                        <li><a href="javascript:void(0);">DE</a></li>
                                        <li><a href="javascript:void(0);">ES</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="navbar navbar_ navbar-default">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="navbar-collapse navbar-collapse_ collapse">
                                    <ul class="nav navbar-nav sf-menu clearfix">
                                        <li><a href="#home">Home</a></li>
                                        <li><a href="#featured">Featured</a></li>
                                        <li><a href="#collection">Collection</a></li>
                                        {{-- <li class="sub-menu sub-menu-1"><a href="javascript:void(0);">pages<em></em></a>
                                            <ul>
                                                <li><a href="about.html">ABOUT US PAGE</a></li>
                                                <li><a href="artists.html">ARTISTS PAGE</a></li>
                                                <li><a href="mobile-aplication.html">MOBILE APPLICATION</a></li>

                                                <li><a href="blog.html">BLOG PAGE</a></li>
                                                <li><a href="post.html">BLOG POST PAGE</a></li>
                                                <li><a href="channel.html">CHANNEL PAGE</a></li>
                                                <li><a href="styles.html">STYLES PAGE</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li><a href="#testimonial">Testimonial</a></li> --}}
                                        <li><a href="mailto:{{ env('MAIL_FROM_ADDRESS') }}">{{env('MAIL_FROM_ADDRESS')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>


        <div class="bot2_wrapper">
            <div class="container">Copyright © {{ date('Y') }} {{ env('APP_NAME') }} Designed by: <a
                    href="http://www.tau.edu.ng" target="_blank"><b>TAU ICT</b></a>
            </div>
        </div>


    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/superfish.js') }}"></script>

    <script src="{{ asset('js/camera.js') }}"></script>

    <script src="{{ asset('js/mediaelement-and-player.js') }}"></script>
    <script src="{{ asset('js/mep-feature-playlist.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>

    <script src="{{ asset('js/jquery.jrumble.1.3.min.js') }}"></script>

    <script src="{{ asset('js/jquery.sticky.js') }}"></script>

    <script src="{{ asset('js/jquery.queryloader2.js') }}"></script>

    <script src="{{ asset('js/jquery.appear.js') }}"></script>

    <script src="{{ asset('js/jquery.ui.totop.js') }}"></script>
    <script src="{{ asset('js/jquery.equalheights.js') }}"></script>

    <script src="{{ asset('js/jquery.caroufredsel.js') }}"></script>
    <script src="{{ asset('js/jquery.touchSwipe.min.js') }}"></script>

    <script src="{{ asset('js/SmoothScroll.js') }}"></script>

    <script src="{{ asset('js/cform.js') }}"></script>

    <script src="{{ asset('js/scripts.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const audioElement = document.getElementById('tau-radio');

            if (audioElement) {
                new MediaElementPlayer(audioElement, {
                    // Initial volume set to 0 to try and bypass browser blocks
                    startVolume: 0, 
                    features: ['playpause', 'current', 'progress', 'duration', 'volume', 'fullscreen'],
                    success: function (media, node, player) {
                        
                        // 1. Ensure it is muted immediately
                        media.setMuted(true);

                        // 2. Try to play (Muted Autoplay)
                        var playPromise = media.play();

                        // 3. Handle the "NotAllowedError" gracefully
                        if (playPromise !== undefined) {
                            playPromise.then(_ => {
                                console.log("Autoplay started successfully (muted).");
                            }).catch(error => {
                                console.log("Autoplay was blocked by the browser. Waiting for user interaction.");
                                // We don't do anything here. The player simply stays paused 
                                // and the user will click the Play button when ready.
                            });
                        }
                        
                        // 4. Global listener: Unmute on the FIRST click anywhere on the page
                        // This is a common trick to get audio working as soon as the user touches the site
                        function enableAudio() {
                            if (media.muted) {
                                media.setMuted(false);
                                media.setVolume(1.0); // Restore volume
                                console.log("User interacted: Audio unmuted.");
                            }
                            // Remove this listener so it doesn't fire on every click
                            document.removeEventListener('click', enableAudio);
                            document.removeEventListener('keydown', enableAudio);
                            document.removeEventListener('touchstart', enableAudio);
                        }

                        // Listen for any interaction
                        document.addEventListener('click', enableAudio);
                        document.addEventListener('keydown', enableAudio);
                        document.addEventListener('touchstart', enableAudio);
                    }
                });
            }
        });
    </script>
</body>

</html>