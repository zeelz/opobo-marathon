<div class="container-fluid px-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="row d-flex w-100 align-items-center m-0 position-absolute__" style="z-index: 10">

            <div class="col-lg-3 d-none d-lg-block p-3">
                <a href="/" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <img src="img/opobomarathon_logo.png" alt="Opobo Marathon Logo" class="w-50 img-fluid">
                </a>
            </div>

            <div class="col-lg-9 p-0">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <a href="/" class="navbar-brand d-block d-lg-none">
                        <img src="img/opobomarathon_logo.png" alt="Opobo Marathon Logo" class="d-lg-none" style="width:10rem">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="/" class="nav-item nav-link <?php echo $page === 'home' ? 'active' : ''; ?>">Home</a>
                            <a href="register" class="nav-item nav-link <?php echo $page === 'registrations' ? 'active' : ''; ?>">Registrations</a>
                            <a href="about" class="nav-item nav-link <?php echo $page === 'about' ? 'active' : ''; ?>">About</a>
                            <a href="gallery" class="nav-item nav-link <?php echo $page === 'gallery' ? 'active' : ''; ?>">Gallery</a>
                            <a href="see-opobo" class="nav-item nav-link <?php echo $page === 'see opobo' ? 'active' : ''; ?>">See Opobo</a>
                            <a href="contact" class="nav-item nav-link <?php echo $page === 'contact' ? 'active' : ''; ?>">Contact</a>
                        </div>

                        <div class="text-center text-lg-right pb-2 d-lg-none">
                            <div class="d-inline-flex align-items-center pr-2">
                                <a href="#" class="btn btn-primary">Donate</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>