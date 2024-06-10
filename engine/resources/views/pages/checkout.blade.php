<?php
// Tambahkan perhitungan total berdasarkan perbedaan tanggal dan harga per hari
$checkInDate = new DateTime($request->input('checkInDate'));
$checkOutDate = new DateTime($request->input('checkOutDate'));
$nightCount = $checkInDate->diff($checkOutDate)->days;
$amount = (int) $request->input('amount');
$harga = (int) $request->input('harga');

$totalAmount = $nightCount * $harga * $amount; // Ganti 150000 dengan harga yang sesuai
$formattedTotalAmount = number_format($totalAmount, 0, ',', '.'); // Format nominal dengan titik pemisah ribuan
?>



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
                            <li class="breadcrumb-item"><a href="{{ route($request->input('type1')) }}">{{ $request->input('type2') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route($request->input('hotelName1')) }}">{{ $request->input('hotelName2') }}</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">CheckOut</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

<!-- CO start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
            <form action="{{ route('checkout.store') }}" method="post">
            @csrf
                <h6 class="section-title text-start text-primary text-uppercase">BOOKING</h6>
                <h1 class="mb-4">ORDER DETAILS</h1>
                <h2 class="mb-4">{{ $request->input('type') }}</h2>
                <p class="mb-4">Thank you for choosing our services. Below are the details of your purchase:</p>
                <div class="row g-3 pb-4">
                    <!-- Menampilkan detail yang diterima dari form -->
                    <div class="col-12">
                        <p><strong>Hotel:</strong> {{ $request->input('hotelName') }}</p>
                        <p><strong>Rooms:</strong> {{ $request->input('amount') }}</p>
                        <p><strong>Full Name:</strong> {{ $request->input('name') }}</p>
                        <p><strong>Check-in Date:</strong> {{ $request->input('checkInDate') }}</p>
                        <p><strong>Check-out Date:</strong> {{ $request->input('checkOutDate') }}</p>
                        <h2><strong>Total:</strong> Rp{{ $formattedTotalAmount }}</h2>
                        <input type="text" class="form-control" id="hotelName" name="hotelName" value="{{ $request->input('hotelName') }}" hidden>
                        <input type="date" class="form-control" id="check_in_date" name="check_in_date" value="{{ $request->input('checkInDate') }}" hidden>
                        <input type="date" class="form-control" id="check_out_date" name="check_out_date" value="{{ $request->input('checkOutDate') }}" hidden>
                        <input type="number" name="rooms" id="rooms" value="{{ $request->input('amount') }}" hidden>
                        <input type="text" name="full_name" value="{{ $request->input('name') }}" hidden>
                        <input type="number" name="total_amount" value="{{ $totalAmount }}" hidden>
                        <!-- <input type="hidden" name="hotel_name" id="hotel_name" value="{{ $request->input('hotelName') }}">
                        <input type="hidden" name="rooms" id="rooms" value="{{ $request->input('amount') }}">
                        <input type="hidden" name="full_name" value="{{ $request->input('name') }}">
                        <input type="hidden" name="check_in_date" id="check_in_date" value="{{ $request->input('checkInDate') }}">
                        <input type="hidden" name="check_out_date" id="check_out_date" value="{{ $request->input('checkOutDate') }}">
                        <input type="hidden" name="total_amount" value="{{ $totalAmount }}"> -->
                        <!-- Tambahkan detail lainnya sesuai kebutuhan -->
                    </div>
                </div>
                <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a> -->
                <button class="btn btn-primary w-75"><a href="{{ route('end') }}" style="color: white; text-decoration: none;">Checkout Booking</a></button><br><br><br><br><br>
            </form>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-12 text-center">
                        <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.1s" src="engine/resources/views/pages/img/co.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CO end -->


        <div class="mb-5"></div>
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