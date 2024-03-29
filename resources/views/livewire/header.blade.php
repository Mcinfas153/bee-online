<div>
    <header id="site-header" class="header header-2">
        <div id="header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo" href="https://beeonline.xyz">
                                <img id="logo-white-img" class="img-fluid" src="{{ asset('assets/images/logo.png') }}" alt="">
                                <img id="logo-img" class="img-fluid sticky-logo" src="{{ asset('assets/images/logo.png') }}" alt="">
                            </a>
                            <button class="navbar-toggler rounded" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation"> 
                                <i class="fas fa-align-right" style="color: white"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav mx-auto position-relative">
                                    <!-- Home -->
                                    <li class="nav-item">
                                        <a class="nav-link active text-dark" href="https://beeonline.xyz">
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark aboutNavLink" href="{{ URL::to('/about') }}">
                                            About us
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark productsNavLink" href="{{ URL::to('/projects') }}">
                                            Projects
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark contactNavLink" href="{{ URL::to('/contact') }}">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="right-nav align-items-center d-flex justify-content-end">
                                <div class="search">
                                    <div class="search-content">
                                        <div class="search-button"> <i class="fas fa-search text-dark"></i>
                                        </div>
                                        <form id="search-form" class="search-form">
                                            <input type="search" class="search-input" placeholder="Search Here...">
                                        </form>
                                    </div>
                                </div> <a href="#" class="ht-nav-toggle text-dark"><span></span></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>