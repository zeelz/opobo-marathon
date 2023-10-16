<!DOCTYPE html>
<html lang="en">

<?php $page = 'gallery'; ?>

<head>
    <title>Gallery - Opobo Marathon 2023</title>
    <?php include('../partials/head.php'); ?>
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="row bg-dark">
                    <div class="col-lg-6 text-left text-white d-none d-lg-flex">
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


    <!-- Portfolio Start -->
    <div class="container-fluid py-3 py-lg-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Past Marathons</h6>
                    <h1 class="mb-3">Photo Gallery</h1>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <ul class="list-inline mb-2" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".2022">2022</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".2021">2021</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".2020">2020</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".2019">2019</li>
                    </ul>
                </div>
            </div>
            <div class="row m-0 portfolio-container">
                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2022">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2runners.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2runners.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2022">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/runner-finisher.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/runner-finisher.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2022">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/carousel-2.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/carousel-2.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2022">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/carousel-3.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/carousel-3.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2022">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/carousel-222.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/carousel-222.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2022">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/runners.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/runners.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2022">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2022/_DSC3710.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2022/_DSC3710.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2022">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2022/_DSC3720.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2022/_DSC3720.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2022">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2022/_DSC3723.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2022/_DSC3723.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2022">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2022/_DSC4248.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2022/_DSC4248.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2021">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2021/IPP_3255.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2021/IPP_3255.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2021">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2021/IPP_3267.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2021/IPP_3267.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2021">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2021/IPP_3281.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2021/IPP_3281.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2021">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2021/IPP_3295.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2021/IPP_3295.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2021">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2021/IPP_3298.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2021/IPP_3298.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2021">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2021/IPP_3513.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2021/IPP_3513.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2021">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2021/IPP_3759.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2021/IPP_3759.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2021">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2021/IPP_3802.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2021/IPP_3802.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2021">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2021/IPP_3818.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2021/IPP_3818.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2021">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2021/IPP_3830.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2021/IPP_3830.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2020">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2020/DSC_0156.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2020/DSC_0156.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2020">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2020/DSC_0173.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2020/DSC_0173.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2020">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2020/DSC_0175.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2020/DSC_0175.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2020">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2020/DSC_0189.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2020/DSC_0189.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2020">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2020/DSC_0204.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2020/DSC_0204.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2020">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2020/DSC_0395.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2020/DSC_0395.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2020">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2020/DSC_0409.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2020/DSC_0409.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2020">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2020/DSC_0412.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2020/DSC_0412.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2020">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2020/DSC_0100.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2020/DSC_0100.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2020">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2020/DSC_0198.jpg" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2020/DSC_0198.jpg" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2019">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2019/DSC_0026.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2019/DSC_0026.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2019">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2019/DSC_0054.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2019/DSC_0054.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2019">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2019/DSC_0057.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2019/DSC_0057.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2019">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2019/DSC_0061.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2019/DSC_0061.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2019">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2019/DSC_0070.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2019/DSC_0070.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2019">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2019/DSC_0087.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2019/DSC_0087.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2019">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2019/DSC_0105.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2019/DSC_0105.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2019">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2019/DSC_0111.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2019/DSC_0111.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2019">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2019/DSC_0117.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2019/DSC_0117.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-6 p-1 portfolio-item 2019">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a class="position-relative gallery" href="img/2019/DSC_0128.JPG" data-lightbox="portfolio">
                                <img class="img-fluid w-100" src="img/2019/DSC_0128.JPG" alt="" />
                                <div class="gallery-icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Portfolio End -->

    <?php include('../partials/footer.php'); ?>

</body>

</html>