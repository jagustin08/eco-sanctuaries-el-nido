<header id="header">
    <nav class="navbar navbar-expand-lg fixed-top bg-dark fs-7 fw-medium" aria-label="Offcanvas navbar large" data-bs-theme="dark">
        <div class="container">
            <a href="https://www.ecosanctuarieselnido.com/" class="navbar-brand mx-auto me-lg-auto">
                <img src="src/images/logo.png" alt="Eco Sanctuaries logo" class="img-fluid">
            </a>
            <button class="navbar-toggler shadow-none border-0 position-absolute" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation" style="right: 12px">
                <span class="navbar-icon d-block bg-white opacity-50" style="height: 2px; width: 25px"></span>
                <span class="navbar-icon d-block bg-white opacity-50 my-1" style="height: 2px; width: 25px"></span>
                <span class="navbar-icon d-block bg-white opacity-50" style="height: 2px; width: 25px"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header position-relative">
                    <a href="https://www.ecosanctuarieselnido.com/" class="mx-auto" style="width: 80px;"><img src="src/images/logo.png" alt="Eco Sanctuaries logo" class="img-fluid"></a>
                    <button type="button" class="btn-close btn-close-white m-0 shadow-none position-absolute" data-bs-dismiss="offcanvas" aria-label="Close" style="right: 16px"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 gap-lg-4">
                        <li class="nav-item <?php echo ($currentPage == "home" ? "active" : "") ?>">
                            <a class="nav-link text-beige-hover" href="https://www.ecosanctuarieselnido.com/">Home</a>
                        </li>
                        <li class="nav-item <?php echo ($currentPage == "about" ? "active" : "") ?>">
                            <a class="nav-link text-beige-hover" href="about.php">About</a>
                        </li>
                        <li class="nav-item <?php echo ($currentPage == "nature_lodges" ? "active" : "") ?>">
                            <a class="nav-link text-beige-hover" href="nature_lodges.php">Nature Lodges</a>
                        </li>
                        <li class="nav-item <?php echo ($currentPage == "experiences" ? "active" : "") ?>">
                            <a class="nav-link text-beige-hover" href="experiences.php">Experiences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-beige-hover" href="#contact-us">Contact us</a>
                        </li>
                    </ul>
                    <a class="btn btn-beige text-uppercase fs-7 fw-bold rounded-0 font-cormorant border-0 px-4" href="https://staahmax.staah.net/be/index_be?propertyId=NTY5OQ==&individual=true" style="height: 35px;" target="_blank">Book now</a>
                </div>
            </div>
        </div>
    </nav>
</header>