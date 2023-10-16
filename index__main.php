<!DOCTYPE html>
<html lang="en">

<?php $page = 'home'; ?>

<head>
    <title>Home - Opobo Marathon 2023</title>
    <?php include('./partials/head.php'); ?>
</head>

<body>

    <!-- Carousel Start -->
    <div class="container-fluid p-0">


        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">


            <ol class="carousel-indicators d-none d-md-flex">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
                <li data-target="#header-carousel" data-slide-to="3"></li>
            </ol>

            <div class="carousel-inner">

                <!-- navigation -->
                <?php // include('./partials/nav.php'); 
                ?>

                <p>Lorem ipsum dolor sit amet.</p>

                <div class="carousel-item active">
                    <img class="img-fluid" src="img/runners.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h2 class="text-secondary text-uppercase">Opobo Marathon</h2>
                            <h1 class="display-3 text-white mb-md-4">Race for Unity</h1>
                            <a href="register.html" class="btn btn-secondary text-dark btn-pulse">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h2 class="text-secondary text-uppercase">Opobo Marathon</h2>
                            <h1 class="display-3 text-white mb-md-4">Run for Peace</h1>
                            <a href="register.html" class="btn btn-secondary text-dark btn-pulse">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h2 class="text-secondary text-uppercase">Opobo Marathon</h2>
                            <h1 class="display-3 text-white mb-md-4">Run for Health</h1>
                            <a href="register.html" class="btn btn-secondary text-dark btn-pulse">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h2 class="text-secondary text-uppercase">Opobo Marathon</h2>
                            <h1 class="display-3 text-white mb-md-4">Run for Environment</h1>
                            <a href="register.html" class="btn btn-secondary text-dark btn-pulse">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Contact Info Start -->
    <div class="container-fluid pb-lg-5 contact-info">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-dark text-white py-4 py-lg-0">
                    <!-- <i class="fa fa-3x fa-map-marker-alt text-secondary mr-4"></i> -->
                    <i class="fas fa-2x fa-user-plus text-secondary mr-2"></i>
                    <div class="">
                        <h5 class="mb-2 text-secondary text-uppercase">
                            <a href="register" class="text-secondary">Register to Run</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                    <!-- <i class="fa fa-3x fa-envelope-open"></i> -->
                    <i class="fas fa-2x fa-hands-helping text-dark mr-2"></i>
                    <div class="">
                        <h5 class="mb-2 text-uppercase">
                            <a href="register?type=volunteer#form" class="text-dark">Volunteer with Us</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0">
                    <!-- <i class="fa fa-3x fa-circle-dollar-to-slot text-white mr-2"></i> -->
                    <!-- <i class="fal fa-donate"></i> -->
                    <i class="fas fa-2x fa-donate text-dark mr-2"></i>
                    <div class="">
                        <h5 class="mb-2 text-uppercase">
                            <a href="donate" class="text-dark">Support Us</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->


    <!-- About Start -->
    <div class="container-fluid py-3 py-lg-5 mb-lg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg pb-lg-5">
                    <!-- <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">About Opobo Marathon</h6> -->
                    <h1 class="mb-4 section-title">Opobo Marathon</h1>
                    <h5 class="text-muted font-weight-normal mb-3">The Opobo Marathon is an annual marathon race started in 2018. The Marathon is held every first week of January in Opobo Kingdom, Opobo/Nkoro Local Government Area of Rivers State Nigeria. </h5>

                    <div class="d-flex align-items-center pt-4">
                        <a href="about.html" class="btn btn-primary text-white mr-5 btn-pulse"><span>See More</span></a>

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


    <!-- Services Start -->
    <div class="container-fluid bg-service py-5">
        <div class="container py-5">
            <div class="row align-items-center py-5">
                <div class="col-md-12">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Quick Info</h6>
                    <div class="row" style="gap: 35px;">
                        <div class="col-lg-3 border border-secondary p-4">
                            <h5 class="text-light">Date</h5>
                            <p class="text-secondary">First Week of January </p>
                        </div>
                        <div class="col-lg-3 border border-secondary p-4">
                            <h5 class="text-light">Location</h5>
                            <p class="text-secondary">Opobo Town</p>
                        </div>
                        <div class="col-lg-3 border border-secondary p-4">
                            <h5 class="text-light">Distance</h5>
                            <p class="text-secondary">Half marathon (10K Run)</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Features Start -->
    <div class="container-fluid py-lg-5">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-3">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3"></h6>
                    <h1 class="mb-4 section-title">An Annual Experience</h1>
                    <p class="mb-4">4 years in a row, Opobo Marathon became an experience to look out for runners and marathon enthusiasts in the South-south of Nigeria.</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">2000</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Runners</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">150</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Happy Volunteers</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">25</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Partners & Sponsors</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pb-3" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/runners.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Team Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Meet Our Team</h6>
                    <h1 class="section-title mb-3">Meet Our Highly Experienced Cleaners</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel position-relative">
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                                </div>
                                <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">Full Name</h5>
                                <p class="text-white m-0">Designation</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                                </div>
                                <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">Full Name</h5>
                                <p class="text-white m-0">Designation</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                                </div>
                                <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">Full Name</h5>
                                <p class="text-white m-0">Designation</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                                </div>
                                <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold">Full Name</h5>
                                <p class="text-white m-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 py-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Testimonials</h6>
                    <h1 class="section-title text-white mb-5">Past Runners</h1>
                    <div class="owl-carousel testimonial-carousel position-relative">
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column text-white">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="">
                                        <h5 class="text-secondary">Amayanabo of Opobo, King Dandeson Douglas Jaja, Jeki V</h5>
                                    </div>
                                </div>
                                <p>“The marathon is a well thought out event aimed at showcasing Opobo to the world as it will attract many people. It will also give visibility to the kingdom and identity to the people. “It will help to arouse the consciousness of our people in exercising, as everybody needs to exercise. Marathon will test your strength and spirit of sportsmanship.”</p>
                            </div>

                            <div class="col-lg-6">
                                <img class="rounded-lg w-100 h-100" src="img/king.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column text-white">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="">
                                        <h5 class="text-secondary mb-0">Hon. Enyiada Cookey-Gam</h5>
                                        <p class="text-primary">Chairman of Opobo/Nkoro Local Government Area</p>
                                    </div>
                                </div>
                                <p>“We are committed to anything that will bring peace, unity and development to the LGA. The marathon gives us the opportunity to unite our people, create happiness while also advocating for healthy living.”</p>
                            </div>

                            <div class="col-lg-6">
                                <img class="rounded-lg w-100 h-100" src="img/enyiada-cookey-gam.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column text-white">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="">
                                        <h5 class="text-secondary">Akintomide Abayomi Winner 2022 Opobo Marathon</h5>
                                    </div>
                                </div>
                                <p>“I thank the organisers of the marathon for keeping to their words in redeeming the prize to them. I came all the way from Osun to Opobo to participate in the run”</p>
                            </div>

                            <div class="col-lg-6">
                                <img class="rounded-lg w-100 h-100" src="img/runner-finisher2.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Testimonial End -->



    <div class="container-fluid text-white mt-5 py-lg-5">

        <h1 class="mb-0 text-primary text-center">Our Awesome Sponsors</h1>

        <div class="col-lg-8 d-flex flex-wrap justify-content-center offset-lg-2 py-3 py-lg-5" style="gap: 10px">

            <div class="sponsor-logo">
                <a href="https://www.hbng.com/">
                    <img class="img-fluid" src="img/sponsors/heritage-bank.png" />
                </a>
            </div>
            <div class="sponsor-logo">
                <a href="https://nimasa.gov.ng/">
                    <img class="img-fluid" src="img/sponsors/nimasa.png" />
                </a>
            </div>
            <div class="sponsor-logo">
                <a href="https://starzs-group.com/">
                    <img class="img-fluid" src="img/sponsors/starz-invest.png" />
                </a>
            </div>
            <div class="sponsor-logo">
                <a href="https://app.gifthub.ng/">
                    <img class="img-fluid" src="img/sponsors/gift-hub-logo.png" />
                </a>
            </div>
            <div class="sponsor-logo">
                <a href="https://www.osmoserve-global.com/">
                    <img class="img-fluid" src="img/sponsors/osmoserve.png" />
                </a>
            </div>
            <div class="sponsor-logo">
                <a href="">
                    <img class="img-fluid" src="img/sponsors/Dynasty.jpg" />
                </a>
            </div>
            <div class="sponsor-logo">
                <a href="">
                    <img class="img-fluid" src="img/sponsors/vino-imperium.jpeg" />
                </a>
            </div>

        </div>

        <div class="container-fluid text-white">

            <h1 class="mb-0 text-primary text-center">Partners</h1>

            <div class="col-lg-8 d-flex flex-wrap justify-content-center offset-lg-2 py-3 py-lg-5" style="gap: 10px">
                <div class="sponsor-logo">
                    <a href="">
                        <img class="img-fluid" src="img/sponsors/fiafia-logo.png" />
                    </a>
                </div>
                <div class="sponsor-logo">
                    <a href="">
                        <img class="img-fluid" src="img/sponsors/MHOA.png" />
                    </a>
                </div>
                <div class="sponsor-logo">
                    <a href="">
                        <img class="img-fluid" src="img/sponsors/give-back.jpeg" />
                    </a>
                </div>
                <div class="sponsor-logo">
                    <a href="">
                        <img class="img-fluid" src="img/sponsors/budr.png" />
                    </a>
                </div>
                <div class="sponsor-logo justify-content-center">
                    <a href="">
                        <img class="img-fluid" src="img/sponsors/GIBBY-LOGO.png" style="height: 120px;" />
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Blog Start -->
    <div class="container-fluid py-5" style="background-color: rgba(0, 136 ,205, 0.2);">
        <div class="container pt-5">
            <div class="row align-items-end mb-4">
                <div class="col-12">
                    <h6 class="text-primary font-weight-semi-bold text-uppercase mb-3">Latest Blog</h6>
                    <h1 class="section-title mb-3">Latest Articles From Our Blog Post</h1>
                </div>
            </div>
            <div class="row" id="postsContainer"></div>
        </div>
    </div>
    <!-- Blog End -->

    <?php include('./partials/footer.php'); ?>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <script>
        const postsContainer = document.querySelector('#postsContainer')

        const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];


        function blogCard(date, month, title, body, img, link) {
            const post = document.createElement('div')
            post.classList.add(...['col-lg-4', 'col-md-6', 'mb-5'])

            let content = ''
            content += '<div class="position-relative mb-4">'
            content += `<img class="img-fluid rounded w-100" src="${img}" alt="">`
            content += '<div class="blog-date">'
            content += `<h4 class="font-weight-bold mb-n1">${date}</h4><small class="text-white text-uppercase">${month}</small>`
            content += '</div>'
            content += '</div>'

            content += `<h5 class="mb-2">${title}</h5>`
            content += `<p class="mb-2">${body}</p>`
            content += `<a class="btn btn-sm btn-secondary text-dark py-2" href="${link}" target="_blank">Read More</a>`

            post.innerHTML = content

            return post
        }


        // console.log('categories', posts[0].categories);
        // console.log('body', posts[0].content.rendered);
        // console.log('link', posts[0].link);
        // console.log('image', posts[0].jetpack_featured_media_url);
        // console.log('title', posts[0].title.rendered);
        // console.log('date', posts[0].date);

        // const url = 'js/articles.js'
        const url = 'https://opobomarathon.com/blog/wp-json/wp/v2/posts?_embed&per_page=3&page=1'


        fetch(url)
            .then((res) => res.json())
            .then((posts) => {
                for (let i = 0; i < posts.length; i++) {

                    console.log(posts[i].categories);
                    const date = new Date(posts[i].date)
                    const paddedDate = date.getDate().toString().padStart(2, 0)
                    const img = posts[i]._embedded['wp:featuredmedia']['0'].source_url

                    postsContainer.appendChild(blogCard(paddedDate, months[date.getMonth()], posts[i].title.rendered, posts[i].excerpt.rendered, img, posts[i].link))
                };
            })

        // for(let i = 0; i <= posts.length; i++){           
        //     postsContainer.appendChild(blogCard(posts[i].title.rendered, posts[i].excerpt.rendered))
        // };


        // <div class="col-lg-4 col-md-6 mb-5">
        // <div class="position-relative mb-4">
        //     <img class="img-fluid rounded w-100" src="img/2runners.jpg" alt="">
        //     <div class="blog-date">
        //         <h4 class="font-weight-bold mb-n1">01</h4>
        //         <small class="text-white text-uppercase">Jan</small>
        //     </div>
        // </div>
        // <div class="d-flex mb-2">
        //     <a class="text-uppercase" href="">Admin</a>
        //     <span class="text-primary px-2">|</span>
        //     <a class="text-uppercase" href="">Cleaning</a>
        // </div>
        // <h5 class="mb-2">Rebum lorem eos ipsum diam</h5>
        // <p class="mb-4">Dolor justo sea kasd lorem clita justo no diam amet. Kasd magna dolor amet</p>
        // <a class="btn btn-sm btn-primary py-2" href="">Read More</a>
        // </div>
    </script>

</body>

</html>