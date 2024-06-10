<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Broom</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="engine/resources/views/pages/img/logohed.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="engine/resources/views/pages/lib/animate/animate.min.css" rel="stylesheet">
    <link href="engine/resources/views/pages/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="engine/resources/views/pages/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="engine/resources/views/pages/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="engine/resources/views/pages/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('pages.spinner')
        <!-- Spinner End -->

        <!-- Header Start -->
        @include('pages.header')
        <!-- Header End -->


        <!-- Carousel Start -->
        @include('pages.carousel')
        <!-- Carousel End -->


        <!-- Booking Start -->
        @include('pages.book')
        <!-- Booking End -->


        <!-- About Start -->
        @include('pages.about')
        <!-- About End -->


        <!-- Room Start -->
        @include('pages.room')
        <!-- Room End -->

        <!-- Team Start -->
        @include('pages.team')
        <!-- Team End -->

        <!-- Video Start -->
        @include('pages.video')
        <!-- Video Start -->


        <!-- Service Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-hotel fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Rooms & KOS</h5>
                            <p class="text-body mb-0">Pilih kamar yang nyaman atau Kos yang luas, dan nikmati kombinasi sempurna antara gaya dan fungsionalitas.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-utensils fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Food & Restaurant</h5>
                            <p class="text-body mb-0">Komitmen kami terhadap bahan berkualitas dan pelayanan luar biasa menjamin pengalaman makan yang luar biasa setiap saat.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-spa fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Spa & Fitness</h5>
                            <p class="text-body mb-0">Fasilitas kebugaran canggih kami dirancang untuk memenuhi kebutuhan kesehatan Anda, menjamin pengalaman seimbang dan menyegarkan.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-swimmer fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Sports & Gaming</h5>
                            <p class="text-body mb-0">Nikmati berbagai aktivitas yang akan membuat Anda tetap bertenaga dan terhibur sepanjang menginap.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Event & Party</h5>
                            <p class="text-body mb-0">Mulai dari pertemuan kecil hingga acara besar, ruang serbaguna kami dan tim perencana acara yang ahli menjamin setiap kesempatan berjalan dengan lancar. </p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-dumbbell fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">GYM & Yoga</h5>
                            <p class="text-body mb-0">Beri energi pada tubuh Anda dengan latihan di gym lengkap kami atau temukan kedamaian dalam sesi yoga yang menyegarkan. </p>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Service End -->


        <!-- Testimonial Start -->
        @include('pages.testi')
        <!-- Testimonial End -->

        <!-- Newsletter Start -->
        @include('pages.newlett')
        <!-- Newsletter Start -->
        

        <!-- Footer Start -->
        @include('pages.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="engine/resources/views/pages/lib/wow/wow.min.js"></script>
    <script src="engine/resources/views/pages/lib/easing/easing.min.js"></script>
    <script src="engine/resources/views/pages/lib/waypoints/waypoints.min.js"></script>
    <script src="engine/resources/views/pages/lib/counterup/counterup.min.js"></script>
    <script src="engine/resources/views/pages/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="engine/resources/views/pages/lib/tempusdominus/js/moment.min.js"></script>
    <script src="engine/resources/views/pages/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="engine/resources/views/pages/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="engine/resources/views/pages/js/main.js"></script>
</body>

</html>