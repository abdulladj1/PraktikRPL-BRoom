<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Broom</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        @include('pages.header')
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(engine/resources/views/pages/img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Hotels</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('hotels') }}">Hotels</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('junior') }}">Junior</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Grand Vista</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

<!-- order start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h6 class="section-title text-start text-primary text-uppercase">BOOKING</h6>
                <h1 class="mb-4">Grand Vista <span class="text-primary text-uppercase">Hotel</span></h1>
                <p class="mb-4">Jl. Melati Indah No. 123, Kota Bahagia</p>
                <p class="mb-4">Nikmati ketenangan Grand Vista Hotel, Fasilitas termasuk spa mewah, kolam renang infinity, dan restoran gourmet dengan menu beragam.</p>
                <div class="row g-3 pb-4">
                    <div class="ps-2">
                    <?php
                        $totalStars = 5;
                        $selectedStars = 4;

                        for ($i = 1; $i <= $totalStars; $i++) {
                            if ($i <= $selectedStars) {
                                echo '<small class="fa fa-star text-primary"></small>';
                            } else {
                                echo '<small class="fa fa-star"></small>';
                            }
                        }
                        ?>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-bed fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">2</h2>
                                <p class="mb-0">Beds</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-bath fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">1</h2>
                                <p class="mb-0">Bath</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-wifi fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1">Free</h2>
                                <p class="mb-0">Wifi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-12 text-center">
                        <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.1s" src="engine/resources/views/pages/img/1.jpeg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- order end -->

<!-- Booking Form Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="section-title text-center text-primary mb-4">Book Your Stay</h2>
                <form action="{{ route('checkout') }}" method="post">
                    @csrf <!-- Tambahkan CSRF token untuk keamanan form -->

                    <div class="mb-3">
                        <input type="number" class="form-control" id="harga" name="harga" value="350000" hidden>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="type" name="type" value="Junior" hidden>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="type1" name="type1" value="junior" hidden>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="type2" name="type2" value="JUNIOR" hidden>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="hotelName" name="hotelName" value="Grand Vista Hotel" hidden>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="hotelName1" name="hotelName1" value="bookgv" hidden>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="hotelName2" name="hotelName2" value="GRAND VISTA" hidden>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your fullname" required>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Rooms</label>
                        <input type="number" class="form-control" id="amount" name="amount" value="1" min="1" required>
                    </div>
                    <div class="mb-3">
                        <label for="checkInDate" class="form-label">Check-in Date</label>
                        <input type="date" class="form-control" id="checkInDate" name="checkInDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="checkOutDate" class="form-label">Check-out Date</label>
                        <input type="date" class="form-control" id="checkOutDate" name="checkOutDate" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit Booking</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Booking Form End -->



        <div class="mb-5"></div>


        <!-- Testimonial Start -->
        @include('pages.testi')
        <!-- Testimonial End -->


        <!-- Newsletter Start -->
        @include('pages.newlett')
        <!-- Newsletter Start -->
        

        <!-- Footer Start -->
        <@include('pages.footer')
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