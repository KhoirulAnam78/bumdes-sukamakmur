<!DOCTYPE html>
<html>

<head>
    <title>Bumdes Sukamakmur</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--
    Smoothy Template
    https://templatemo.com/tm-396-smoothy
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{ url('') }}/assets/new/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('') }}/assets/new/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ url('') }}/assets/new/css/templatemo_style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('') }}/assets/new/css/templatemo_misc.css">

    <link rel="stylesheet" href="{{ url('') }}/assets/new/css/nivo-slider.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/new/css/slimbox2.css" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{ url('') }}/assets/new/js/jquery.min.js"></script>
    <script type="text/JavaScript" src="{{ url('') }}/assets/new/js/slimbox2.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.{{ url('') }}/assets/new/js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/new/css/ddsmoothmenu.css" />
    <script type="text/javascript" src="{{ url('') }}/assets/new/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ url('') }}/assets/new/js/ddsmoothmenu.js"></script>

    <!--/***********************************************
    * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
    * This notice MUST stay intact for legal use
    * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
    ***********************************************/

    -->


    <script type="text/javascript">
        ddsmoothmenu.init({
            mainmenuid: "templatemo_flicker", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })
    </script>

</head>

<body>
    <header>
        <!-- start menu -->
        <div id="home">
            <div class="templatemo_top">
                <div class="container templatemo_container">
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            {{-- <div class="logo"> --}}
                            <a href="" style="color: #D4A328; font-weight:bold">
                                <h3>BUMDES Suka Makmur</h3>
                            </a>
                            {{-- </div> --}}
                        </div>
                        <div class="col-sm-9 col-md-9 templatemo_col9">
                            <div id="top-menu">
                                <nav class="mainMenu">
                                    <ul class="nav">
                                        <li><a class="menu" href="#home">Home</a></li>
                                        <li><a class="menu" href="#produk">Produk</a></li>
                                        <li><a class="menu" href="#about">Tentang</a></li>
                                        <li><a class="menu" href="#kontak">Kontak</a></li>
                                        <li><a class="menu" href="/login">Login</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <!-- end menu -->

        <div id="slider" class="nivoSlider templatemo_slider">
            <a href="#"><img src="{{ asset('assets/homepage/assets/images/jahe.jpg') }}" alt="slide 1" /></a>
            <a href="#"><img src="{{ asset('assets/homepage/assets/images/kunyit.jpg') }}" alt="slide 2" /></a>
        </div>

    </header>

    <div class="templatemo_lightgrey_about" id="produk">
        {{-- <div class="container">
            <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
                <div class="item project-post">
                    <div class="templatemo_about_box">
                        <div class="square_coner">
                            <span class="texts-a"><i class="fa fa-bell-o"></i></span>
                        </div>
                        Pixel Perfect Design
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 hover-box">
                        <div class="inner-hover-box">
                            <p>Nunc sed ullamcorper massa, vitae tristique lectus. Curabitur ultricies, nunc ac
                                tincidunt sollicitudin, neque leo commodo nisl.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
                <div class="item project-post">
                    <div class="templatemo_about_box">
                        <div class="square_coner">
                            <span class="texts-a"><i class="fa fa-tablet"></i></span>
                        </div>
                        Responsive Layout
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 hover-box">
                        <div class="inner-hover-box">
                            <p>You are NOT allowed to redistribute this template on any download website. However, you
                                are allowed to use this template for your websites.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12 templatemo_margintop10">
                <div class="item project-post">
                    <div class="templatemo_about_box">
                        <div class="square_coner">
                            <span class="texts-a"><i class="fa fa-lock"></i></span>
                        </div>
                        Secured Website
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 hover-box">
                        <div class="inner-hover-box">
                            <p>Please mention templatemo to your friends to support us. Vivamus neque eros, sollicitudin
                                a ligula quis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12 templatemo_margintop10">
                <div class="item project-post">
                    <div class="templatemo_about_box">
                        <div class="square_coner">
                            <span class="texts-a"><i class="fa fa-rocket"></i></span>
                        </div>
                        Quick Service
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 hover-box">
                        <div class="inner-hover-box">
                            <p>Vestibulum convallis leo vel tortor ultricies aliquam. Nullam faucibus urna vel volutpat
                                ornare. Donec molestie accumsan ante.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading" style="margin:50px 0px">
                        <h2>Produk</h2>
                    </div>
                </div>
                @foreach ($produk as $item)
                    <div class="col-md-4">
                        <div class="card" style="margin: 20px 0px; background-color: white; padding:10px">
                            <div class="card-body">
                                <div class="product-item">
                                    <a href="#">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="">
                                    </a>
                                    <div class="down-content">

                                        <h3 style="color:orangered">{{ $item->nama }}</h3>
                                        <h4 style="color:orange">{{ $item->berat }}</h4>
                                        <h4 style="color:orange">Rp. {{ $item->harga }}</h4>
                                        <p>{{ $item->deskripsi }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="clear"></div>
    <div class="clear"></div>
    <!--Our Portfolio Start-->
    <div class="about py-5" id="templatemo_portfolio">
        {{-- <h2>BUMDES Sukamakmur</h2> --}}

        <div class="container" style="margin-top:50px; margin-bottom:50px" id="about">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Tentang</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4 style="color:orange">BUMDES SUKAMAKMUR</h4>
                        <p>BUMDES Sukamakmur merupakan badan usaha milik desa yang teletak di desa Ibru, Kecamatan
                            Mestong, Kabupaten Muaro Jambi, Jambi. BUMDES sukamakmur memiliki berbagai produk, salah
                            satunya berbahan dasar kunyit dan jahe yaitu bubuk kunyit dan jahe yang berkualitas. <br>
                            BUMDES Sukamakmur dipipimpin oleh bapak Muhammad Anggoro Kasih.
                        </p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{ asset('assets/homepage/assets/images/bumdes-2.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!--Our Portfolio End-->
    <div class="clear"></div>
    <!--Our Blog Start-->
    <div class="kontak" id="templatemo_blog">


    </div>
    <!--Our Blog End-->
    <div class="clear" id="kontak"></div>
    <!--Our Client End-->
    <!--Contact Start -->
    <div class="templatemo_lightgrey" id="templatemo_contact">
        <div class="templatemo_paracenter">
            <h2>Hubungi Kami</h2>
        </div>
        <div class="clear"></div>
        <div class="container">
            <div class="col-md-8">
                <h2>Kunjungi Kami</h2>
                <p>BUMDES Sukamakmur Desa Ibru, Kecamatan Mestong, Kabuopaten Muaro Jambi, Jambi</p>
                <p>Kontak : 082278652402</p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- Bottom Start -->
    <div class="templatemo_bottom">
        <div class="container">
            <div class="row">
                <div class="left">
                    <span>Copyright © 2020 <a href="#">Bumdes Sukamakmur</a>

                        . Design: <a rel="nofollow" href="#">Template Mo</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom End -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="{{ url('') }}/assets/new/js/jquery-1.10.2.min.js"></script>
    <script src="{{ url('') }}/assets/new/js/jquery.cookie.js"></script>
    <script src="{{ url('') }}/assets/new/js/bootstrap.min.js"></script>
    <script src="{{ url('') }}/assets/new/js/jquery.cycle2.min.js"></script>
    <script src="{{ url('') }}/assets/new/js/jquery.cycle2.carousel.min.js"></script>
    <script src="{{ url('') }}/assets/new/js/jquery.nivo.slider.pack.js"></script>
    <script>
        $.fn.cycle.defaults.autoSelector = '.slideshow';
    </script>
    <script type="text/javascript">
        $(function() {
            var default_view = 'grid';
            if ($.cookie('view') !== 'undefined') {
                $.cookie('view', default_view, {
                    expires: 7,
                    path: '/'
                });
            }

            function get_grid() {
                $('.list').removeClass('list-active');
                $('.grid').addClass('grid-active');
                $('.prod-cnt').animate({
                    opacity: 0
                }, function() {
                    $('.prod-cnt').removeClass('dbox-list');
                    $('.prod-cnt').addClass('dbox');
                    $('.prod-cnt').stop().animate({
                        opacity: 1
                    });
                });
            }

            function get_list() {
                $('.grid').removeClass('grid-active');
                $('.list').addClass('list-active');
                $('.prod-cnt').animate({
                    opacity: 0
                }, function() {
                    $('.prod-cnt').removeClass('dbox');
                    $('.prod-cnt').addClass('dbox-list');
                    $('.prod-cnt').stop().animate({
                        opacity: 1
                    });
                });
            }
            if ($.cookie('view') == 'list') {
                $('.grid').removeClass('grid-active');
                $('.list').addClass('list-active');
                $('.prod-cnt').animate({
                    opacity: 0
                });
                $('.prod-cnt').removeClass('dbox');
                $('.prod-cnt').addClass('dbox-list');
                $('.prod-cnt').stop().animate({
                    opacity: 1
                });
            }

            if ($.cookie('view') == 'grid') {
                $('.list').removeClass('list-active');
                $('.grid').addClass('grid-active');
                $('.prod-cnt').animate({
                    opacity: 0
                });
                $('.prod-cnt').removeClass('dboxlist');
                $('.prod-cnt').addClass('dbox');
                $('.prod-cnt').stop().animate({
                    opacity: 1
                });
            }

            $('#list').click(function() {
                $.cookie('view', 'list');
                get_list()
            });

            $('#grid').click(function() {
                $.cookie('view', 'grid');
                get_grid();
            });

            /* filter */
            $('.menuSwitch ul li').click(function() {
                var CategoryID = $(this).attr('category');
                $('.menuSwitch ul li').removeClass('cat-active');
                $(this).addClass('cat-active');

                $('.prod-cnt').each(function() {
                    if (($(this).hasClass(CategoryID)) == false) {
                        $(this).css({
                            'display': 'none'
                        });
                    };
                });
                $('.' + CategoryID).fadeIn();

            });
        });
    </script>
    <script src="{{ url('') }}/assets/new/js/jquery.singlePageNav.js"></script>

    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
                prevText: '',
                nextText: '',
                controlNav: false,
            });
        });
    </script>
    <script>
        $(document).ready(function() {

            // hide #back-top first
            $("#back-top").hide();

            // fade in #back-top
            $(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $('#back-top').fadeIn();
                    } else {
                        $('#back-top').fadeOut();
                    }
                });

                // scroll body to 0px on click
                $('#back-top a').click(function() {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });

        });
    </script>
    <script type="text/javascript">
        <!--
        function toggle_visibility(id) {
            var e = document.getElementById(id);
            if (e.style.display == 'block') {
                e.style.display = 'none';
                $('#togg').text('show footer');
            } else {
                e.style.display = 'block';
                $('#togg').text('hide footer');
            }
        }
        //
        -->
    </script>

    <script type="text/javascript">
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location
                    .hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>
    <script src="{{ url('') }}/assets/new/js/stickUp.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        //initiating jQuery
        jQuery(function($) {
            $(document).ready(function() {
                //enabling stickUp on the '.navbar-wrapper' class
                $('.mWrapper').stickUp();
            });
        });
    </script>
    <script>
        $('a.menu').click(function() {
            $('a.menu').removeClass("active");
            $(this).addClass("active");
        });
    </script>

    <script>
        <!-- scroll to specific id when click on menu 
        -->
        //
        Cache
        selectors
        var
        lastId,
        topMenu
        =
        $("#top-menu"),
        topMenuHeight
        =
        topMenu.outerHeight()
        +
        15,
        //
        All
        list
        items
        menuItems
        =
        topMenu.find("a"),
        //
        Anchors
        corresponding
        to
        menu
        items
        scrollItems
        =
        menuItems.map(function()
        {
        var
        item
        =
        $($(this).attr("href"));
        if
        (item.length)
        {
        return
        item;
        }
        });
        //
        Bind
        click
        handler
        to
        menu
        items
        //
        so
        we
        can
        get
        a
        fancy
        scroll
        animation
        menuItems.click(function(e)
        {
        var
        href
        =
        $(this).attr("href"),
        offsetTop
        =
        href
        ===
        "#"
        ?
        0
        :
        $(href).offset().top
        -
        topMenuHeight
        +
        1;
        $('html,
        body
        ').stop().animate({
        scrollTop:
        offsetTop
        },
        300);
        e.preventDefault();
        });
        //
        Bind
        to
        scroll
        $(window).scroll(function()
        {
        //
        Get
        container
        scroll
        position
        var
        fromTop
        =
        $(this).scrollTop()
        +
        topMenuHeight;
        //
        Get
        id
        of
        current
        scroll
        item
        var
        cur
        =
        scrollItems.map(function()
        {
        if
        ($(this).offset().top
    < fromTop) return this; }); // Get the id of the current element cur=cur[cur.length-1]; var id=cur && cur.length ?
        cur[0].id : "" ; if (lastId !==id) { lastId=id; // Set/remove active class menuItems .parent().removeClass("active")
        .end().filter("[href=#"+id+"]").parent().addClass("active"); } }); </script>
</body>

</html>
