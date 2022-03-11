<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .header-4-2 .modal-item.modal {
        top: 2rem;
    }

    .header-4-2 .navbar,
    .header-4-2 .hero {
        padding: 3rem 2rem;
    }

    .header-4-2 .navbar-light .navbar-nav .nav-link {
        font: 300 18px/1.5rem Poppins, sans-serif;
        color: #1d1e3c;
        transition: 0.3s;
    }

    .header-4-2 .navbar-light .navbar-nav .nav-link:hover {
        font: 600 18px/1.5rem Poppins, sans-serif;
        color: #1d1e3c;
        transition: 0.3s;
    }

    .header-4-2 .navbar-light .navbar-nav .active>.nav-link,
    .header-4-2 .navbar-light .navbar-nav .nav-link.active,
    .header-4-2 .navbar-light .navbar-nav .nav-link.show,
    .header-4-2 .navbar-light .navbar-nav .show>.nav-link {
        font-weight: 600;
        transition: 0.3s;
    }

    .header-4-2 .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .header-4-2 .btn:focus,
    .header-4-2 .btn:active {
        outline: none !important;
    }

    .header-4-2 .btn-fill {
        font: 600 18px / normal Poppins, sans-serif;
        background-color: #27c499;
        border-radius: 12px;
        padding: 12px 32px;
        transition: 0.3s;
    }

    .header-4-2 .btn-fill:hover {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
            0 4px 6px -2px rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
            var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
    }

    .header-4-2 .btn-no-fill {
        font: 300 18px/1.75rem Poppins, sans-serif;
        color: #1d1e3c;
        padding: 12px 32px;
        transition: 0.3s;
    }

    .header-4-2 .modal-item .modal-dialog .modal-content {
        border-radius: 8px;
        transition: 0.3s;
    }

    .header-4-2 .responsive li a {
        padding: 1rem;
        transition: 0.3s;
    }

    .header-4-2 .text-caption {
        font: 600 0.875rem/1.625 Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #27c499;
    }

    .header-4-2 .left-column {
        margin-bottom: 2.75rem;
        width: 100%;
    }

    .header-4-2 .right-column {
        width: 100%;
    }

    .header-4-2 .title-text-big {
        font: 600 2.25rem/2.5rem Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #272e35;
    }

    .header-4-2 .btn-try {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: #27c499;
        transition: 0.3s;
    }

    .header-4-2 .btn-try:hover {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
            0 4px 6px -2px rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
            var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
    }

    .header-4-2 .btn-outline {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        border: 1px solid #555b61;
        color: #555b61;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: transparent;
        transition: 0.3s;
    }

    .header-4-2 .btn-outline:hover {
        border: 1px solid #27c499;
        color: #27c499;
        transition: 0.3s;
    }

    .header-4-2 .btn-outline:hover div path {
        fill: #27c499;
        transition: 0.3s;
    }

    @media (min-width: 576px) {
        .header-4-2 .modal-item .modal-dialog {
            max-width: 95%;
            border-radius: 12px;
        }

        .header-4-2 .navbar {
            padding: 3rem 2rem;
        }

        .header-4-2 .hero {
            padding: 3rem 2rem 5rem;
        }

        .header-4-2 .title-text-big {
            font-size: 3rem;
            line-height: 1.2;
        }
    }

    @media (min-width: 768px) {
        .header-4-2 .navbar {
            padding: 3rem 4rem;
        }

        .header-4-2 .hero {
            padding: 3rem 4rem 5rem;
        }

        .header-4-2 .left-column {
            margin-bottom: 3rem;
        }
    }

    @media (min-width: 992px) {
        .header-4-2 .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 1.25rem;
            padding-left: 1.25rem;
        }

        .header-4-2 .navbar {
            padding: 3rem 6rem;
        }

        .header-4-2 .hero {
            padding: 3rem 6rem 5rem;
        }

        .header-4-2 .left-column {
            width: 50%;
            margin-bottom: 0;
        }

        .header-4-2 .right-column {
            width: 50%;
        }

        .header-4-2 .title-text-big {
            font-size: 3.75rem;
            line-height: 1.2;
        }
    }
</style>
<div class="header-4-2 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="#">
            <img style="margin-right: 0.75rem" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png" alt="" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-white border-0">
                    <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                        <a class="modal-title" id="targetModalLabel">
                            <img style="margin-top: 0.5rem" src="/assets/img/Header-2-5.png" alt="" />
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                        <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Feature</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                        <a href="/login"><button class="btn btn-default btn-no-fill">Log In</button></a>
                        <button class="btn btn-fill text-white">Try Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Feature</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <div class="gap-3">
                <a href="/login"><button class="btn btn-default btn-no-fill">Log In</button></a>
                <button class="btn btn-fill text-white">Try Now</button>
            </div>
        </div>
    </nav>