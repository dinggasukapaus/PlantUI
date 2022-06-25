<!-- Navbar  -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light p-md-3">
    <div class="container">
        <a class="navbar-brand text-primary fw-bold" href="/">
            <img src="{{asset('images/icons/icon.svg')}}" alt="" width="30" height="24">
            plant
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav fw-bold">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="#">OurPlant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="#">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="/contact">Contact</a>
                </li>

            </ul>
            <div class="mx-auto"></div>
            <ul class="navbar-nav text-primary fw-bold">
                <li class="nav-item mx-lg-5">
                    <img src="{{asset('images/icons/call.svg')}}" alt="" width="24" height="13">
                    +62 885-2812-2893
                </li>
                <li class="nav-item">
                    <img src="{{asset('images/icons/mail.svg')}}" alt="" width="24" height="13">
                    hello@plants.co
                </li>

            </ul>
        </div>
    </div>
</nav>
