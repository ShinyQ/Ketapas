@extends('template.navigation')

@section('konten')
    <!-- Hero Landing-->
    <section class="hero">
        <div class="hero-overlay">
            <span></span>
            <span></span>
        </div>
        <div class="hero-slanted">
            <span></span>
            <span></span>
        </div>

        <div class="hero-content d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="header">
                            <h1>Ketapas</h1>
                            <h4 style="margin-top: -10px">(Ketempat Wisata Pasanggrahan)</h4>
                            <br>
                            <p>
                                Temukan dan Jelajahi Beragam Tempat Wisata Nan Indah Dan Menarik <br>
                                Di <strong>Wisata Desa Pasanggrahan</strong> <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing city">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Desa Pasanggrahan <br>Purwakarta</h2>
                    <p style="margin-top: -25px">
                        Sensasi panorama alam yang eksotik, hawa yang sejuk dan suasana pedesaan yang khas
                        merupakan salah satu ciri khas yang unik <br>dari <b>Desa Pasanggrahan, Purwakarta.</b>
                        Berada pada ketinggian 900 dpl menjadikan destinasi wisata pada Desa Pasanggrahan sangatlah indah.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="mapDesa" id="mapDesa"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing features">
        <div class="container features-content">
            <div class="row ">
                <div class="col-md-4">
                    <img src="{{url('assets/images/highlight/kuliner.png')}}" width="120px" alt="">
                    <h3>Kuliner</h3>
                    <p>
                        Kuliner enak dan murah meriah memang identik dengan kota yang satu ini, kuliner jajanan yang unik dan legendaris menggoyang lidah pun ada disini. Temui dan rasakan bedanya.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{url('assets/images/highlight/wisata.png')}}" width="120px" alt="">
                    <h3>Wisata</h3>
                    <p>
                        Destinasi wisata serta pemandangan alam yang di gemari wisatawan lokal maupun mancanegara sangatlah beraneka ragam dan cocok untuk dikunjungi untuk berlibur dan bersantai.
                    </p>

                </div>
                <div class="col-md-4">
                    <img src="{{url('assets/images/highlight/sejarah.png')}}" width="120px" alt="">
                    <h3>Pedesaan</h3>
                    <p>
                        Selain memiliki berbagai destinasi wisata alamnya, Desa Pasanggrahan turut dihuni banyak bangunan adat khas sunda yang dapat kita gunakan selama berwisata disana.
                    </p>

                </div>
            </div>
        </div>
        <div id="news"></div>
    </section>

    <section class="landing news">
        <div class="container">
            <h2>Galeri Desa</h2>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/galeri/G2.jpg') }}" class="fancybox" rel="ligthbox">
                        <img  src="{{ asset('assets/images/galeri/G2.jpg') }}" class="zoom img-fluid"  alt="Desa Pasanggrahan">

                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/galeri/G4.png') }}" class="fancybox" rel="ligthbox">
                        <img  src="{{ asset('assets/images/galeri/G4.png') }}" class="zoom img-fluid"  alt="Desa Pasanggrahan">
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/galeri/G5.jpeg') }}" class="fancybox" rel="ligthbox">
                        <img  src="{{ asset('assets/images/galeri/G5.jpeg') }}" class="zoom img-fluid"  alt="Desa Pasanggrahan">
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/galeri/G1.jpg') }}" class="fancybox" rel="ligthbox">
                        <img  src="{{ asset('assets/images/galeri/G1.jpg') }}" class="zoom img-fluid"  alt="Desa Pasanggrahan">
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/galeri/G6.jpeg') }}" class="fancybox" rel="ligthbox">
                        <img  src="{{ asset('assets/images/galeri/G6.jpeg') }}" class="zoom img-fluid"  alt="Desa Pasanggrahan">
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/galeri/G3.png') }}"  class="fancybox" rel="ligthbox">
                        <img  src="{{ asset('assets/images/galeri/G3.png') }}" class="zoom img-fluid"  alt="Desa Pasanggrahan">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="landing wisata" id="wisata">
        <div style="padding-top: 60px" class="container">
            <div style="text-align: center;"><h2 style="margin-top:10px">Wisata Desa Pasanggrahan</h2></div>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach($wisata as $data)
                <div class="item">
                    <a href="/wisata/{{ $data->id }}">
                        <div class="item-image">
                            <img class="item-image " src="{{asset('assets/images/wisata')}}/{{ $data->background }}"  width="auto"  alt="">
                        </div>
                        <div class="item-text">
                            <span class="item-kicker">{{ $data->name }}</span>
                            <h3 class="item-title">{{ $data->address }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="features-slanted"></div>
        <br><br>
    </section>

    <section class="landing news">
        <div class="container">
            <h2>Kerajinan Desa</h2>
            <p style="margin-top: -1%">
                Desa pasanggrahan tak hanya memiliki tempat wisata alam yang menarik tetapi juga memiliki
                berbagai macam bentuk kerajinan yang menarik seperti pembuatan abon sapi, pembuatan tikar
                dari hasil daur ulang barang bekas (sachet kopi) dan mangkok dari koran sebagai bahan daur ulang.
            </p>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/kerajinan/ker3.jpg') }}" class="fancybox" rel="ligthbox">
                        <img  src="{{ asset('assets/images/kerajinan/ker3.jpg') }}" class="zoom img-fluid"  alt="Kerajinan Desa Pasanggrahan">
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/kerajinan/ker1.jpg') }}" class="fancybox" rel="ligthbox">
                        <img  src="{{ asset('assets/images/kerajinan/ker1.jpg') }}" class="zoom img-fluid"  alt="Kerajinan Desa Pasanggrahan">

                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/kerajinan/ker2.jpg') }}" class="fancybox" rel="ligthbox">
                        <img  src="{{ asset('assets/images/kerajinan/ker2.jpg') }}" class="zoom img-fluid"  alt="Kerajinan Desa Pasanggrahan">
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/kerajinan/ker4.jpg') }}" class="fancybox" rel="ligthbox">
                        <img  src="{{ asset('assets/images/kerajinan/ker4.jpg') }}" class="zoom img-fluid"  alt="Kerajinan Desa Pasanggrahan">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="landing news">
        <div class="container">
            <h2>Berita Wisata Desa</h2>
            <div class="row" id="newsContainer"></div>
        </div>
    </section>

    <!-- Footer  -->
    <section style="margin-top:0!important" class="footer">
        <div class="container">
            <div style="text-align: center;">
                <img src="{{url('assets/images/logo/KetapangLogo-White.png')}}" width="150px" alt="Logo">
                <font color="#f5f5f5" class="font-segoe text-center nopadding">&#8212; &nbsp; Copyright&copy;2020 - Ketapas - Innovillage Telkom University</font>
            </div>
        </div>
    </section>
    <!-- End of Footer  -->
    </body>
    <script src="{{url('assets/scripts/jquery.min.js')}}"></script>
    <script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/scripts/owl.carousel.min.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbwv-bQnK_aRuSAm7tjKb2CMpl28S0Ppo&callback=initMap"
            async defer></script>
    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById("mapDesa"), {
                center: { lat: -6.586254, lng: 107.3287043 },
                zoom: 16
            });

            const geocoder = new google.maps.Geocoder();

            geoLocation(geocoder, map);
        }

        function geoLocation(geocoder, mapResults) {
            const address = "Pasanggrahan, Tegal Waru, Kabupaten Purwakarta, Jawa Barat 41165"
            geocoder.geocode({ address: address }, function(res, status) {
                if (status == "OK") {
                    mapResults.setCenter(res[0].geometry.location);
                    const marker = new google.maps.Marker({
                        map: mapResults,
                        position: res[0].geometry.location
                    });
                } else {
                    console.log(status);
                }
            });
        }

        $(document).ready(function(){
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function(){

                $(this).addClass('transition');
            }, function(){

                $(this).removeClass('transition');
            });
        });

        // Owl Carousel
        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            dots: false,
            nav: false,
            autoplay:false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    margin: 2,
                    stagePadding: 10,
                },
                600: {
                    items: 3,
                    margin: 10,
                    stagePadding: 40,
                },
                1000: {
                    items: 4
                }
            }
        });

        // Fetch News API
        const newsUrl =
            "https://newsapi.org/v2/everything?apiKey=f8fd87d48cf746e0a817a4f7a21bafe4&q=wisata%20desa&language=id";
        axios.get(newsUrl).then(resp => {
            for (let i = 0; i < 6; i++) {
                var d = new Date(resp.data.articles[i].publishedAt);
                d = d.getDate()+'-'+(d.getMonth()+1)+'-'+d.getFullYear()+' '+(d.getHours() > 12 ? d.getHours() - 12 : d.getHours())+':'+d.getMinutes()+' '+(d.getHours() >= 12 ? "PM" : "AM");
                $("#newsContainer").append(`
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="${resp.data.articles[i].url}" target="_blank">
                        <div class="news-card" style='background-image:url("${
                                        resp.data.articles[i].urlToImage
                                    }")'>
                            <div class="news-content">
                                    <h5>${resp.data.articles[i].title}</h5>
                                    <p>${ d }</p>
                            </div>
                        </div>
                    </a>
                </div>
                `);
            }
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

    </script>
@endsection
