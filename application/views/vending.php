<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title><?= $title; ?></title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="<?php echo base_url('asset/img/favicon.png'); ?> " rel="icon" />
    <link href="<?php echo base_url('asset/img/apple-touch-icon.png'); ?> " rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link href="<?php echo base_url('asset/assets/bootstrap-icons/bootstrap-icons.css'); ?> " rel="stylesheet" />
    <link href="<?php echo base_url('asset/assets/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('asset/css/main.css'); ?>" rel="stylesheet" />

    <!---Client Key Payment gateway---->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-kgRuLFm1MthIVBuw">
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="vending.php" class="logo d-flex align-items-center me-auto me-lg-0">
                <h1>Fresh Coke<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <!-- .navbar -->

            <a class="btn-book-a-table" href="#book-a-table">Buy A Coke</a>
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Enjoy Your Fresh<br />Coke</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Coke From Heaven Pastinya Segar dan Manis Dari yang
                        terbaik dari gunung :3
                    </p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#book-a-table" class="btn-book-a-table">Buy A Coke</a>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="<?php echo base_url('asset/img/coke3.jpg'); ?>" class="img-fluid" alt=""
                        data-aos="zoom-out" data-aos-delay="300" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Our Menu</h2>
                    <p>Check Our <span>Fresh Coke Menu</span></p>
                </div>

                <div class="tab-content" data-aos="fade-up">
                    <div class="tab-pane fade active show" id="menu-starters">
                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Starters</h3>
                        </div>

                        <div class="row gy-5">
                            <div class="col-lg-4 menu-item">
                                <a href="<?php echo base_url('asset/img/coke5.jpg'); ?>" class="glightbox"><img
                                        src="<?php echo base_url('asset/img/coke5.jpg'); ?>" class="menu-img img-fluid"
                                        alt="" /></a>
                                <h4>Coca Cola</h4>
                                <p class="ingredients">Fresh From Heaven</p>
                                <p class="price">Rp. 5000</p>
                            </div>
                            <!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="<?php echo base_url('asset/img/fanta.jpg'); ?>" class="glightbox"><img
                                        src="<?php echo base_url('asset/img/fanta.jpg'); ?>" class="menu-img img-fluid"
                                        alt="" /></a>
                                <h4>Fanta</h4>
                                <p class="ingredients">Comming Soon</p>
                                <p class="price">Rp. 6000</p>
                            </div>
                            <!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="<?php echo base_url('asset/img/pepsi.jpg'); ?>" class="glightbox"><img
                                        src="<?php echo base_url('asset/img/pepsi.jpg'); ?>" class="menu-img img-fluid"
                                        alt="" /></a>
                                <h4>Pepsi</h4>
                                <p class="ingredients">Comming Soon</p>
                                <p class="price">Rp. 7000</p>
                            </div>
                            <!-- Menu Item -->
                        </div>
                    </div>
                    <!-- End Starter Menu Content -->

                    <!-- ======= Book A Table Section ======= -->
                    <section id="book-a-table" class="book-a-table">
                        <div class="container" data-aos="fade-up">
                            <div class="section-header">
                                <h2>Buy Coke</h2>
                                <p>Buy <span>Your Fresh Coke</span> With Us</p>
                            </div>

                            <div class="row g-0">
                                <div class="col-lg-4 reservation-img"
                                    style="background-image: url(<?php echo base_url('asset/img/coke4.jpg'); ?>)"
                                    data-aos="zoom-out" data-aos-delay="200"></div>
                                <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                                    <form id="payment-form" action="<?= site_url() ?>/snap/finish" method="post"
                                        role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-floating">
                                                    <h5>Jenis Minuman</h5>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="coca cola">Coca Cola</option>
                                                        <option value="fanta">Fanta</option>
                                                        <option value="pepsi">Pepsi</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control" name="harga" id="harga">
                                                        <option value="6500">6500</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                        <br><br>
                                        <div class="text-center"><button id="pay-button" type="submit">Checkout</button>
                                        </div>
                                        <div class="row">
                                            <div class="col"></div>
                                            <br><br>
                                            <p>Payment method</p>
                                            <p><img src="<?php echo base_url('asset/img/visa.jpg'); ?>" width="80px"
                                                    height="50px"> <img
                                                    src="<?php echo base_url('asset/img/mastercard.jpg'); ?>"
                                                    width="80px" height="50px"> <img
                                                    src="<?php echo base_url('asset/img/ovo.png'); ?>" width="80px"
                                                    height="50px"> <img
                                                    src="<?php echo base_url('asset/img/qris.png'); ?>" width="80px"
                                                    height="50px"></p>
                                        </div>
                                        <input type="hidden" name="result_type" id="result-type" value="">
                                </div>
                                <input type="hidden" name="result_data" id="result-data" value="">
                            </div>
                            </form>
                        </div>
                        <!-- End Reservation Form -->
                </div>
            </div>
        </section>
        <!-- End Book A Table Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Contact</h2>
                    <p>Need Help? <span>Contact Us</span></p>
                </div>

                <div class="mb-3">
                    <iframe style="border: 0; width: 100%; height: 350px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.090722034232!2d112.4257796143987!3d-7.115484871750311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77fb5639db7bbf%3A0x38f9dbc7075722fa!2sPoliteknik%20Elektronika%20Negeri%20Surabaya%20(PENS)%20PSDKU%20Lamongan!5e0!3m2!1sid!2sid!4v1662050222298!5m2!1sid!2sid"
                        frameborder="0" allowfullscreen></iframe>
                </div>
                <!-- End Google Maps -->

                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-map flex-shrink-0"></i>
                            <div>
                                <h3>Our Address</h3>
                                <p>Jl. Panglima Sudirman No.125, Deket Kulon, Kec. Deket, Kabupaten Lamongan, Jawa Timur
                                    62212</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>contact@example.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>085334312475</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-share flex-shrink-0"></i>
                            <div>
                                <h3>Opening Hours</h3>
                                <div><strong>Mon-Fri:</strong> 8AM - 4.30PM</div>
                            </div>
                        </div>
                    </div>
                    <!-- End Info Item -->
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url('asset/assets/glightbox/js/glightbox.min.js'); ?> "></script>


    <!-- Template Main JS File -->

    <script src="<?php echo base_url('asset/js/main.js'); ?>"></script>
    <script type="text/javascript">
    $('#pay-button').click(function(event) {
        event.preventDefault();
        $(this).attr("disabled", "disabled");

        var minuman = $("#minuman").val();
        var harga = $("#harga").val();

        $.ajax({
            type: 'POST',
            url: '<?= site_url() ?>/snap/token',
            data: {
                minuman: minuman,
                harga: harga
            },
            cache: false,



            success: function(data) {
                //location = data;

                console.log('token = ' + data);

                var resultType = document.getElementById('result-type');
                var resultData = document.getElementById('result-data');



                function changeResult(type, data) {
                    $("#result-type").val(type);
                    $("#result-data").val(JSON.stringify(data));
                    //resultType.innerHTML = type;
                    //resultData.innerHTML = JSON.stringify(data);
                }

                snap.pay(data, {

                    onSuccess: function(result) {
                        changeResult('success', result);
                        console.log(result.status_message);
                        console.log(result);
                        $("#payment-form").submit();
                    },
                    onPending: function(result) {
                        changeResult('pending', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    },
                    onError: function(result) {
                        changeResult('error', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    }
                });
            }
        });
    });
    </script>
</body>

</html>