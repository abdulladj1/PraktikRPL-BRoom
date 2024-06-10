<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                    <h1 class="mb-5">Jenis  <span class="text-primary text-uppercase">KAMAR <h1 class="mb-5">Kami</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="engine/resources/views/pages/img/room-1.jpg" alt="">
                                <!-- <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small> -->
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5>
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
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Kamar ini menawarkan suasana yang hangat dan dekorasi yang modern. Dengan ruang tamu yang luas, tempat tidur yang nyaman, dan fasilitas terkini, Junior Suite cocok untuk mereka yang mencari pengalaman menginap yang istimewa. </p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('junior') }}">View Detail</a>
                                    <!-- <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="engine/resources/views/pages/img/room-2.jpg" alt="">
                                <!-- <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small> -->
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Executive Suite</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Ruang ini menawarkan kombinasi sempurna antara kenyamanan modern dan layanan eksklusif. Dilengkapi dengan ruang tamu yang luas, tempat tidur mewah, dan fasilitas canggih, Executive Suite menciptakan suasana yang ideal untuk para eksekutif.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('exec') }}">View Detail</a>
                                    <!-- <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="engine/resources/views/pages/img/room-3.jpg" alt="">
                                <!-- <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small> -->
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Super Deluxe</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Super Deluxe adalah pilihan terbaik bagi mereka yang mencari kenyamanan luar biasa dengan sentuhan kemewahan. Kamar ini menampilkan desain elegan yang dipadukan dengan fasilitas modern.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('super') }}">View Detail</a>
                                    <!-- <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>