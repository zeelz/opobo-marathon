<!DOCTYPE html>
<html lang="en">

<?php $page = 'about'; ?>

<head>
    <title>About Us - Opobo Marathon 2023</title>
    <?php include('../partials/head.php'); ?>
</head>

<body>
    <!-- Header Start -->
    <?php include('../partials/top-banner.php'); ?>
    <!-- Header End -->

    <!-- navigation -->
    <?php include('../partials/nav.php'); ?>

    <!-- Page Header Start -->
    <?php include('../partials/page-header.php'); ?>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid py-lg-5 my-3 my-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">About Opobo Marathon</h6> -->
                    <h1 class="mb-4 text-primary">About Opobo Marathon</h1>

                    <p>Hosted in the Ancient town of Opobo Kingdom and the land of the famous King Jaja in Rivers State, Nigeria; Opobo Marathon is held every first week of January. Conceived in 2018, the idea was inspired by the Lagos Marathon, Nigeria and Singapore Marathon. The main purpose is to showcase Opobo and her rich cultural heritage to the world. The race started as 5km walk in 2019 and in 2020, it was increased to 10km. <br>
                        In the year 2021 and 2022, the marathon was stretched to a 17km race, running from Nkoro to the popular St Paul's Open field in Opobo Kingdom.</p>

                    <p>In the years to come, Opobo Marathon hopes to become an IAAF label road race, targeting the full 42.1km course. The race is organised by Connect Opobo Ltd, headed by a team of young people who thought it wise to use the marathon as an avenue to showcase the rich cultural heritage, while attracting people from all over the world to Opobo. </p>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid bg-opobo-cta py-3 py-lg-5">
        <div class="container py-3 py-lg-5">
            <div class="row align-items-center py-3 py-lg-5">
                <div class="row" style="gap: 35px;">
                    <div class="col-lg-10 px-4 py-3 py-lg-5">
                        <h1 class="text-secondary mb-2 mb-lg-4">Experience the ancient town of Opobo Kingdom and its rich cultural heritage</h1>

                        <a href="see-opobo.html" class="btn border border-secondary text-secondary btn-pulse"><span>See Opobo</span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- About Start -->
    <div class="container-fluid py-3 py-lg-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg pb-lg-5">
                    <!-- <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">About Opobo Marathon</h6> -->
                    <h1 class="mb-4 text-primary">Sponsorship and Marketing</h1>
                    <p class="text-muted font-weight-normal mb-3">Since the start of the marathon in 2019 the Opobo Marathon has enjoyed sponsorship from notable brands in Nigeria. The two major sponsors are <span class="font-weight-semi-bold">Heritage Bank Plc</span> and <span class="font-weight-semi-bold">Nigerian Maritime Administration and Safety Agency (NIMASA)</span>.</p>

                    <p>Other brands that have sponsored Opobo Marathon are; Vino Impreum, a luxury wine shop in Nigeria, Osemoserve Limited, Dynasty perfumes, and GiftHub, a gifting brand operating in Lagos State. </p>

                    <div class="d-flex align-items-center pt-4">
                        <a href="contact.html" class="btn btn-primary text-white btn-pulse"><span>Contact Us for Sponsorship</span></a>

                        <!-- <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/watch?v=VJ3u9Hv97YE" data-target="#videoModal">
                            <span></span>
                        </button> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <?php include('../partials/footer.php'); ?>

</body>

</html>