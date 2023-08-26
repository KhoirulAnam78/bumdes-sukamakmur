<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>BUMDES SUKAMAKMUR</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/homepage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/homepage/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/homepage/assets/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/homepage/assets/css/owl.css') }}">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-light navbar-expand-lg" style="background-color: rgb(253, 148, 0)">
            <div class="container">
                <a class="navbar-brand" href="">
                    <h2>BUMDES SUKAMAKMUR</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#produk">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kontak">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01"
                style="background-image: url('{{ asset('assets/homepage/assets/images/bumdes-1.jpeg') }}')">
                <div class="text-content" style="background-color: orange">
                    <h3 class="mt-3" style="color:white">SELAMAT DATANG</h3>
                    <h6 class="mb-3" style="color:white">BUMDES SUKAMAKMUR memiliki produk olahan dari kunyit dan jahe
                    </h6 style="color:white">
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products" id="produk">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Produk</h2>
                    </div>
                </div>
                @foreach ($produk as $item)
                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="#"><img src="{{ asset('storage/' . $item->image) }}" alt=""></a>
                            <div class="down-content">
                                <a href="#">
                                    <h3 style="color:orangered">{{ $item->nama }}</h3>
                                </a> <br>
                                <h4 style="color:orange">{{ $item->berat }}</h4>
                                <h4 style="color:orange">Rp. {{ $item->harga }}</h4>
                                <p>{{ $item->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="best-features" id="tentang">
        <div class="container">
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
    </div>


    <div class="call-to-action" id="kontak">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-md-8">
                                <h2>Kunjungi Kami</h2>
                                <p>BUMDES Sukamakmur Desa Ibru, Kecamatan Mestong, Kabuopaten Muaro Jambi, Jambi</p>
                                <p>Kontak : 082278652402</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright &copy; 2023 BUMDES SUKAMAKMUR.

                            - Design: <a rel="nofollow noopener" href="https://templatemo.com"
                                target="_blank">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/homepage/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/homepage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('assets/homepage/assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/homepage/assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/homepage/assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/homepage/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/homepage/assets/js/accordions.js') }}"></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>


</body>

</html>
