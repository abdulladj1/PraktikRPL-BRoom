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

    <script>
        // Mencegah kembali ke halaman sebelumnya
        history.pushState(null, null, document.URL);
        window.addEventListener('popstate', function () {
            history.pushState(null, null, document.URL);
        });
    </script>
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

        <!-- Page Header End -->

        <!-- SUKSES START-->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">SUCCESS!</h6>
                    <h1 class="mb-5">Pemesanan <span class="text-primary text-uppercase">SUKSES </span></h1>
                </div>
                <div class="col-12 text-center">
                    <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.1s" src="engine/resources/views/pages/img/check.png" width="100" height="100">
                </div>
                <br>
                <br>
                <br>
                 <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex justify-content-center"> <!-- Use flexbox to align buttons horizontally -->
                        <button class="btn w-25 me-2" style="border: 2px solid cyan; color: cyan;"><a href="{{ route('orders') }}" style="color: grey; text-decoration: none;">Go to Orders</a></button>
                        <button class="btn btn-primary w-25"><a href="{{ route('home') }}" style="color: white; text-decoration: none;">Home</a></button>
                    </div>
                </div>

            </div>
        </div>
        <div class="mb-5"></div>

        <!-- SUKSES END -->
        <div class="mb-5"></div>
  

        <!-- Footer Start -->
        <div class="mb-5"></div>

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