<!DOCTYPE html>
<html lang="en">

<?php $page = 'registrations'; ?>

<head>
    <title>Registrations - Opobo Marathon 2023</title>
    <?php include('../partials/head.php'); ?>
</head>

<body>
    <!-- Header Start -->
    <?php // include('../partials/top-banner.php'); 
    ?>
    <!-- Header End -->

    <!-- navigation -->
    <?php // include('../partials/nav.php'); 
    ?>

    <!-- Page Header Start -->
    <?php // include('../partials/page-header.php'); 
    ?>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid">
        <div class="row">
            <!-- bg col -->
            <div class="col-lg-5 register-bg">

                <div class="row align-items-end">
                    <div id="form" class="col-12 vertically-center px-md-5 py-4">
                        <h4 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Opobo Marathon 2024!</h4>

                        <!-- temporary -->
                        <!-- <p>Registration for the next marathon hasn't began. Watch this space.</p> -->

                        <h1 class="text-white mb-3">Volunteer Registration</h1>
                        <!-- <p class="text-white">Do you want to be part of Opobo Marathon team? Good news for you! Volunteer at the 2023 Opobo Marathon to ensure the event runs smoothly for all participants. Sign up here!</p> -->

                        <!-- <p class="text-white">Volunteer positions include bag stuffing, assisting with bib and t-shirt pick up, fun zone assistant, helping in the official merchandise area, gear check, volunteer check-in, people moving, start and finish line assistant, awards ceremonies, clothing collection, handing out Gatorade and water, handing out heat sheets, handing our refreshments, and more!</p> -->

                        <p class="text-white fs-4">Join us as an Opobo Marathon volunteer. It's going to be amazing having you on board Opobo Marathon. We need your support to make this event a success! Join us in creating History!</p>

                    </div>
                </div>

            </div>

            <div class="col-lg-7 d-flex align-items-center">

                <div class="container p-lg-5">

                    <!-- remove style="display: none;" later -->
                    <div class="row mt-lg-3 d-none" data-reg="runner" style="display: none;">
                        <div class="col-12 mb-5 my-lg-0">

                            <div class="row align-items-end">
                                <div class="col-12">
                                    <h4 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Runners Registration</h4>

                                    <!-- temporary -->
                                    <!-- <p>Registration for the next marathon hasn't began. Watch this space.</p> -->

                                    <h1 class="section-title mb-3">Opobo Marathon 2023</h1>

                                    <h5 class="text-primary">Runner's Entitlements</h5>
                                    <p>OM2023 Running Singlet, Running Belt, and Finisher Medal, Marathon Finisher T-shirt <strong>(for official finishers only)</strong></p>

                                    <h5 class="text-primary">Results</h5>
                                    <p>Crossing the Opobo Marathon finish line is an experience like no other, an experience that no one can ever take away from you. Whatever the outcome, <strong>YOU ARE A FINISHER</strong>.</p>

                                </div>
                            </div>

                            <div class="contact-form">
                                <form name="sentMessage" class="runnersRegForm" data-form="runner" novalidate="novalidate">
                                    <div class="output d-none text-white rounded p-2 p-lg-3 my-2 my-lg-3"></div>

                                    <div class="form-row">
                                        <div class="col-sm-6 control-group mt-3">
                                            <input type="text" class="form-control p-4" id="firstName" placeholder="First Name" autofocus required data-validation-required-message="Please enter your first name" />
                                            <small class="help-block text-danger"></small>
                                        </div>
                                        <div class="col-sm-6 control-group mt-3 mb-2">
                                            <input type="text" class="form-control p-4" id="lastName" placeholder="Last Name" required data-validation-required-message="Please enter your last name" />
                                            <small class="help-block text-danger"></small>
                                        </div>

                                        <div class="col-sm-6 control-group mt-0">
                                            <label for="date" class="m-0"><small>Date of Birth</small></label>
                                            <input type="date" class="form-control p-4" id="date" required data-validation-required-message="Please select your Date of Birth" />
                                            <small class="help-block text-danger"></small>
                                        </div>

                                        <div class="col-sm-6 control-group mt-4">
                                            <div class="form-control" style="height: 3rem;">
                                                <select class="w-100 border-0 p-1 rounded-pill" id="sex" required>
                                                    <option>Sex</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>

                                            </div>
                                            <small class="help-block text-danger"></small>
                                        </div>

                                        <div class="col-sm-6 control-group mt-3">
                                            <div class="form-control" style="height: 3rem;">
                                                <select class="w-100 border-0 p-1 rounded-pill" id="country">
                                                </select>
                                            </div>
                                            <small class="help-block text-danger"></small>
                                        </div>

                                        <div class="col-sm-6 control-group mt-3">
                                            <input type="text" class="form-control p-4" id="state" placeholder="State or Region" required data-validation-required-message="Please enter your state or region" />
                                            <small class="help-block text-danger"></small>
                                        </div>
                                        <div class="col-sm-12 control-group mt-3">
                                            <textarea class="form-control p-4" rows="6" id="address" placeholder="Address" required data-validation-required-message="Please enter your address"></textarea>
                                            <small class="help-block text-danger"></small>
                                        </div>
                                        <div class="col-sm-6 control-group mt-3">
                                            <input type="text" class="form-control p-4" id="phone" placeholder="Phone Number" required data-validation-required-message="Please enter your Phone Number" />
                                            <small class="help-block text-danger"></small>
                                        </div>

                                        <div class="col-sm-6 control-group mt-3">
                                            <input type="email" class="form-control p-4" id="email" placeholder="Email" required data-validation-required-message="Please enter your email" />
                                            <small class="help-block text-danger"></small>
                                        </div>

                                        <div class="col-sm-6 control-group mt-3">
                                            <div class="form-control" style="height: 3rem;">
                                                <select class="w-100 border-0 p-1 rounded-pill" id="raceChoice">
                                                    <option>Race choice?</option>
                                                    <option>Elite Runner</option>
                                                    <option>Leisure Runner</option>
                                                </select>
                                            </div>
                                            <small class="help-block text-danger"></small>
                                        </div>


                                        <div class="col-sm-6 control-group mt-3">
                                            <div class="form-control" style="height: 3rem;">
                                                <select class="w-100 border-0 p-1 rounded-pill" id="visitedOpobo">
                                                    <option>Visited Opobo before?</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 control-group mt-3">
                                            <input type="text" class="form-control p-4" id="contactPhone" placeholder="Contact Person's Phone" required data-validation-required-message="Please enter contact person's phone" />
                                            <small class="help-block text-danger"></small>
                                            <small class="text-dark">For case of emergency situation?</small>
                                        </div>
                                        <div class="mt-2">
                                            <h6 class="text-secondary">Disclaimer</h6>
                                            <small class="text-muted">By submitting this form, I hereby attest that I am medically and physically fit for this Marathon. Thus, I hereby indemnify the organisers, sponsors or its associates from any form of liability arising from my participation in the Opobo Marthon 2023.</small>
                                            <div class="mt-2">
                                                <input type="checkbox" id="acceptTerms" value="accepted">
                                                <label for="">I have read and accept the <a href="terms">Waiver and Release of Liability</a> terms
                                                </label>
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="registerButton">Submit</button>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- put back d-none later -->
                    <div class="row mt-lg-3 __d-none" data-reg="volunteer">
                        <div class="col-12 mb-5 my-lg-0">

                            <div class="contact-form">

                                <form name="sentMessage" class="runnersRegForm volunteer-form" data-form="volunteer" novalidate="novalidate">
                                    <div class="output d-none text-white rounded p-2 p-lg-3 my-2 my-lg-3"></div>

                                    <div class="form-row__">
                                        <div class="control-group mt-3">
                                            <input type="text" class="form-control p-4" id="firstName" placeholder="First Name" autofocus required data-validation-required-message="Please enter your first name" />
                                            <small class="help-block text-danger"></small>
                                        </div>
                                        <div class="control-group mt-3 mb-2">
                                            <input type="text" class="form-control p-4" id="lastName" placeholder="Last Name" required data-validation-required-message="Please enter your last name" />
                                            <small class="help-block text-danger"></small>
                                        </div>
                                        <div class="control-group mt-3">
                                            <div class="form-control" style="height: 3rem;">
                                                <select class="w-100 border-0 p-1 rounded-pill" id="ageRange">
                                                    <option selected disabled>Age</option>
                                                    <option>18 - 25</option>
                                                    <option>26 - 30</option>
                                                    <option>31 - 39</option>
                                                    <option>40 and above</option>
                                                </select>
                                            </div>
                                            <small class="help-block text-danger"></small>
                                        </div>
                                        <div class="control-group mt-3">
                                            <input type="text" class="form-control p-4" id="phone" placeholder="Phone Number" required data-validation-required-message="Please enter your Phone Number" />
                                            <small class="help-block text-danger"></small>
                                        </div>
                                        <div class="control-group mt-3">
                                            <input type="email" class="form-control p-4" id="email" placeholder="Email" required data-validation-required-message="Please enter your email" />
                                            <small class="help-block text-danger"></small>
                                        </div>

                                        <div class="control-group mt-3">
                                            <textarea class="form-control p-4" rows="2" id="address" placeholder="Address" required data-validation-required-message="Please enter your address"></textarea>
                                            <small class="help-block text-danger"></small>
                                        </div>

                                        <div class="control-group mt-3">
                                            <div class="form-control" style="height: 3rem;">
                                                <select class="w-100 border-0 p-1 rounded-pill" id="department">
                                                    <option selected disabled>What team would you like to participate in?</option>
                                                    <option>Race management</option>
                                                    <option>Operation</option>
                                                    <option>Event Experience</option>
                                                    <option>Media and Communication</option>
                                                    <option>Medical</option>
                                                </select>
                                            </div>
                                            <small class="help-block text-danger"></small>
                                        </div>

                                        <div class="control-group mt-3">
                                            <div class="form-control" style="height: 3rem;">
                                                <select class="w-100 border-0 p-1 rounded-pill" id="tshirtSize">
                                                    <option selected disabled>What is your T-shirt size?</option>
                                                    <option>Small</option>
                                                    <option>Medium</option>
                                                    <option>Lagos</option>
                                                </select>
                                            </div>
                                            <small class="help-block text-danger"></small>
                                        </div>

                                        <div class="control-group mt-3">
                                            <p class="font-weight-bold text-dark">Have you visited Opobo Kingdom before?</p>
                                            <div>
                                                <input type="radio" value="yes" name="visitedOpobo" id="yes"><label for="yes" class="ml-2">Yes</label>
                                            </div>
                                            <div>
                                                <input type="radio" value="no" name="visitedOpobo" id="no"><label for="no" class="ml-2">No</label>
                                            </div>
                                        </div>

                                        <div class="control-group mt-3">
                                            <p class="font-weight-bold text-dark">Do you have a social media account?</p>
                                            <div>
                                                <input type="radio" value="yes" name="hasSocial" id="yes"><label for="yes" class="ml-2">Yes</label>
                                            </div>
                                            <div>
                                                <input type="radio" value="no" name="hasSocial" id="no"><label for="no" class="ml-2">No</label>
                                            </div>
                                        </div>

                                        <div class="control-group mt-3">
                                            <textarea class="form-control p-4" rows="3" id="whyVolunteer" placeholder="Why are you interested in volunteering at Opobo Marathon 2024?" required data-validation-required-message="State your reason"></textarea>
                                            <small class="help-block text-danger"></small>
                                        </div>

                                        <div class="control-group mt-3 d-flex align-items-start">
                                            <input type="checkbox" value="yes" name="consent" class="mt-1 mr-2">
                                            <p class="text-dark m-0"><em>I consent and agree to abide by the rules and regulations of Opobo Marathon during the 2024 edition and will be willing to sign any other documentation, should I be selected as a volunteer for Opobo Marathon 2024</em></p>
                                        </div>

                                        <div class="mt-3">
                                            <button class="form-control btn btn-blue btn-block h-auto text-white py-3" type="submit" id="registerButton">Submit</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <div class="row mt-lg-3 d-none" data-reg="vendor">
                        <div class="col-12 mb-5 my-lg-0">

                            <div class="row align-items-end">
                                <div class="col-12">
                                    <h4 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Registration</h4>
                                    <h1 class="section-title mb-3">Vendor Registration</h1>

                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rerum illum quo.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, necessitatibus obcaecati esse asperiores tempora dignissimos, perferendis ex quam consequuntur dolor nobis ducimus eum impedit fugiat eius repudiandae, illum mollitia earum?</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Contact End -->

    <?php // include('../partials/footer.php'); 
    ?>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.min.js" integrity="sha512-OdkysyYNjK4CZHgB+dkw9xQp66hZ9TLqmS2vXaBrftfyJeduVhyy1cOfoxiKdi4/bfgpco6REu6Rb+V2oVIRWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Contact Javascript File -->
    <script src="/mail/jqBootstrapValidation.min.js"></script>
    <!-- <script src="mail/contact.js"></script> -->
    <script src="/js/countries.js"></script>
    <script src="/mail/submit.script.js" type="module"></script>

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