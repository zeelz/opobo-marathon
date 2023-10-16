<!DOCTYPE html>
<html lang="en">

<?php $page = 'donate'; ?>

<head>
    <title>Donation - Opobo Marathon 2023</title>
    <?php include('../partials/head.php'); ?>
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="row bg-dark">
                    <div class="col-lg-6 text-left text-white d-none d-lg-flex">
                        <!-- <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>info@example.com</small>
                        </div> -->
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <span class="pr-2">Sponsorship</span>
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+234 906 345 6789</small>
                        </div>
                    </div>

                    <div class="col-lg-6 text-center text-lg-right text-secondary">
                        <div id="countdown">
                            <ul class="m-0 p-0">
                                <li><span id="days"></span>days</li>
                                <li><span id="hours"></span>Hr</li>
                                <li><span id="minutes"></span>Min</li>
                                <li><span id="seconds"></span>Sec</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- navigation -->
    <?php include('../partials/nav.php'); ?>

    <!-- Page Header Start -->
    <?php include('../partials/page-header.php'); ?>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 p-3 p-lg-5">

                <div class="container p-lg-5">
                    <div class="row align-items-end">
                        <div class="col-12">
                            <h4 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Opobo Marathon</h4>
                            <h1 class="section-title mb-3">Donate to Support</h1>
                            <p>Voluntary donations and corporate sponsorship is how Opobo Marathon is funded. Please support us with a kind donation.</p>
                        </div>
                    </div>

                    <div class="row mt-lg-3">
                        <div class="col-12 mb-5 my-lg-0">
                            <div class="donate-form">
                                <div id="messageContainer" class="p-2 d-none rounded-pill p-lg-3"></div>
                                <form name="sentMessage" id="donateForm" novalidate="novalidate">
                                    <div class="form-row">

                                        <div class="col-sm-8 offset-sm-0 control-group mt-4">

                                            <button class="rounded-pill bg-secondary border px-3 py-2 m-1">5,000</button>
                                            <button class="rounded-pill bg-secondary border px-3 py-2 m-1">10,000</button>
                                            <button class="rounded-pill bg-secondary border px-3 py-2 m-1">15,000</button>
                                            <button class="rounded-pill bg-secondary border px-3 py-2 m-1">20,000</button>
                                            <button class="rounded-pill bg-secondary border px-3 py-2 m-1">50,000</button>
                                            <button class="rounded-pill bg-secondary border px-3 py-2 m-1">100,000</button>
                                            <button class="rounded-pill bg-secondary border px-3 py-2 m-1">500,000</button>
                                            <button class="rounded-pill bg-secondary border px-3 py-2 m-1">1,000,000</button>

                                            <input type="number" class="rounded-pill px-3 py-2 border-warning" id="setAmount" placeholder="Enter own amount" />

                                            <input type="email" required class="form-control p-4 my-2" id="email" placeholder="Email address" />

                                            <div class="mt-3">
                                                <input value="Donate" class="btn btn-primary py-3 px-5 text-white" type="submit" id="registerButton" />
                                                <!-- </button> -->
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- bg col -->
            <div class="col-lg-5 donate-bg">
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Thank you Modal Start -->
    <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <div class="">
                        <div class="modal-head-bg"></div>
                        <div class="p-4">
                            <h4 class="text-primary">Donation Sent</h4>
                            <p>Thank you for supporting Opobo Marathon.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include('../partials/footer.php'); ?>

    <!-- Paystack Inline -->
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="js/donate.script.js"></script>

</body>

</html>