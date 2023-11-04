<!DOCTYPE html>
<html lang="en">

<?php $page = 'contact'; ?>

<head>
    <title>Contact Us - Opobo Marathon 2024</title>
    <?php include('../partials/head.php'); ?>
</head>

<body>
    <!-- Header Start -->
    <?php include('../partials/top-banner.php');
    ?>
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

                    <div class="row mt-lg-3 d-none" data-reg="runner">
                        <div class="col-12 mb-5 my-lg-0">

                            <div class="row align-items-end mb-3 mb-lg-5">
                                <div class="col-12">
                                    <h4 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Get in touch</h4>
                                    <h1 class="section-title mb-3">Contact Us Today</h1>

                                </div>
                            </div>


                            <div class="contact-form">
                                <form name="sentMessage" class="runnersRegForm" data-form="contact" novalidate="novalidate">
                                    <div class="messageContainer d-none rounded-pill p-2 p-lg-3 my-2 my-lg-3"></div>

                                    <div class="form-row">
                                        <div class="col-sm-6 control-group">
                                            <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="col-sm-6 control-group">
                                            <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- bg col -->
            <div class="col-lg-5 contact-bg">
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <?php include('../partials/footer.php'); ?>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <!-- <script src="mail/contact.js"></script> -->
    <script src="js/countries.js"></script>
    <script src="mail/submit.script.js" type="module"></script>

    <script>
        const params = new URLSearchParams(location.search)
        const regType = params.get('type')

        const regElements = document.querySelectorAll('[data-reg]')

        // " data-reg="runners"

        if (regType === 'runner' || regType === 'volunteer' || regType === 'vendor') {
            regElements.forEach((element) => {
                if (element.dataset['reg'] === regType) {
                    element.classList.remove('d-none')
                }
            });
        } else {
            regElements[0].classList.remove('d-none')
        }
    </script>

</body>

</html>