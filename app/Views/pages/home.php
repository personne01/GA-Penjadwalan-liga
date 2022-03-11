<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div>
    <div class="mx-auto d-flex flex-lg-row flex-column hero">
        <!-- Left Column -->
        <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <p class="text-caption">Sistem Penjadwalan Liga menggunakan Algoritma Genetika (Liga Ftusal Pro Indonesia)</p>
            <h1 class="title-text-big">
                Cara terbaik<br class="d-lg-block d-none" />
                Penjadwalan Liga Futsal
            </h1>
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
                <button class="btn d-inline-flex mb-md-0 btn-try text-white">
                    Try it free
                </button>
                <button class="btn btn-outline">
                    <div class="d-flex align-items-center">
                        <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.9293 7.99988L6.66668 5.15788V10.8419L10.9293 7.99988ZM12.9173 8.27722L5.85134 12.9879C5.80115 13.0213 5.74283 13.0404 5.6826 13.0433C5.62238 13.0462 5.5625 13.0327 5.50934 13.0042C5.45619 12.9758 5.41175 12.9334 5.38075 12.8817C5.34976 12.83 5.33337 12.7708 5.33334 12.7105V3.28922C5.33337 3.22892 5.34976 3.16976 5.38075 3.11804C5.41175 3.06633 5.45619 3.02398 5.50934 2.99552C5.5625 2.96706 5.62238 2.95355 5.6826 2.95644C5.74283 2.95932 5.80115 2.97848 5.85134 3.01188L12.9173 7.72255C12.963 7.75299 13.0004 7.79423 13.0263 7.84261C13.0522 7.89099 13.0658 7.94501 13.0658 7.99988C13.0658 8.05475 13.0522 8.10878 13.0263 8.15716C13.0004 8.20553 12.963 8.24678 12.9173 8.27722Z" fill="#555B61" />
                        </svg>
                        Watch the video
                    </div>
                </button>
            </div>
        </div>
        <!-- Right Column -->
        <div class="right-column text-center d-flex justify-content-lg-end justify-content-center pe-0">
            <img id="img-fluid" class="h-auto mw-100" src="/assets/hero-sport.webp" alt="" />
        </div>
    </div>
</div>
</div>
</section>
<section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .content-2-2 .btn:focus,
        .content-2-2 .btn:active {
            outline: none !important;
        }

        .content-2-2 .title-text {
            padding-top: 5rem;
            margin-bottom: 3rem;
        }

        .content-2-2 .text-title {
            font: 600 2.25rem/2.5rem Poppins, sans-serif;
            color: #121212;
            margin-bottom: 0.625rem;
        }

        .content-2-2 .text-caption {
            color: #121212;
            font-weight: 300;
        }

        .content-2-2 .column {
            padding: 2rem 2.25rem;
        }

        .content-2-2 .icon {
            margin-bottom: 1.5rem;
        }

        .content-2-2 .icon-title {
            font: 500 1.5rem/2rem Poppins, sans-serif;
            margin-bottom: 0.625rem;
            color: #121212;
        }

        .content-2-2 .icon-caption {
            font: 400 1rem/1.625 Poppins, sans-serif;
            letter-spacing: 0.025em;
            color: #565656;
        }

        .content-2-2 .card-block {
            padding: 1rem 1rem 5rem;
        }

        .content-2-2 .card {
            padding: 1.75rem;
            background-color: #eef6f4;
            border-radius: 0.75rem;
            border: 1px solid #27c499;
        }

        .content-2-2 .card-title {
            font: 600 1.5rem/2rem Poppins, sans-serif;
            margin-bottom: 0.625rem;
            color: #000000;
        }

        .content-2-2 .card-caption {
            font: 300 1rem/1.5rem Poppins, sans-serif;
            color: #565656;
            letter-spacing: 0.025em;
            margin-bottom: 0;
        }

        .content-2-2 .btn-card {
            font: 700 1rem/1.5rem Poppins, sans-serif;
            background-color: #27c499;
            padding-top: 1rem;
            padding-bottom: 1rem;
            width: 100%;
            border-radius: 0.75rem;
            margin-bottom: 1.25rem;
        }

        .content-2-2 .btn-card:hover {
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .content-2-2 .btn-outline {
            font: 400 1rem/1.5rem Poppins, sans-serif;
            color: #979797;
            border: 1px solid #979797;
            padding-top: 1rem;
            padding-bottom: 1rem;
            width: 100%;
            border-radius: 0.75rem;
        }

        .content-2-2 .btn-outline:hover {
            border: 1px solid #27c499;
            color: #27c499;
        }

        .content-2-2 .card-text {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .content-2-2 .grid-padding {
            padding: 0rem 1rem 3rem;
        }

        @media (min-width: 576px) {
            .content-2-2 .grid-padding {
                padding: 0rem 2rem 3rem;
            }

            .content-2-2 .card-block {
                padding: 3rem 2rem 5rem;
            }
        }

        @media (min-width: 768px) {
            .content-2-2 .grid-padding {
                padding: 0rem 4rem 3rem;
            }

            .content-2-2 .card-block {
                padding: 3rem 4rem 5rem;
            }
        }

        @media (min-width: 992px) {
            .content-2-2 .grid-padding {
                padding: 1rem 6rem 3rem;
            }

            .content-2-2 .card-block {
                padding: 3rem 6rem 5rem;
            }

            .content-2-2 .column {
                padding: 0rem 2.25rem;
            }
        }

        @media (min-width: 1200px) {
            .content-2-2 .grid-padding {
                padding: 1rem 10rem 3rem;
            }

            .content-2-2 .card-block {
                padding: 3rem 6rem 5rem;
            }

            .content-2-2 .card-btn-space {
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .content-2-2 .btn-card,
            .content-2-2 .btn-outline {
                width: 95%;
                float: right;
            }
        }

        @media (max-width: 980px) {
            .content-2-2 .card-btn-space {
                width: 100%;
            }
        }
    </style>
    <div class="content-2-2 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
        <div class="text-center title-text">
            <h1 class="text-title">3 Keys Benefit</h1>
            <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
                You can easily manage your business with a powerful tools
            </p>
        </div>

        <div class="grid-padding text-center">
            <div class="row">
                <div class="col-lg-4 column">
                    <div class="icon">
                        <img src="/assets/img/Content-2-5.png" alt="" />
                    </div>
                    <h3 class="icon-title">Easy to Operate</h3>
                    <p class="icon-caption">
                        This can easily help you to<br />
                        grow up your business fast
                    </p>
                </div>
                <div class="col-lg-4 column">
                    <div class="icon">
                        <img src="/assets/img/Content-2-6.png" alt="" />
                    </div>
                    <h3 class="icon-title">Real-Time Analytic</h3>
                    <p class="icon-caption">
                        With real-time analytics, you<br />
                        can check data in real time
                    </p>
                </div>
                <div class="col-lg-4 column">
                    <div class="icon">
                        <img src="/assets/img/Content-2-7.png" alt="" />
                    </div>
                    <h3 class="icon-title">Very Full Secured</h3>
                    <p class="icon-caption">
                        With real-time analytics, we<br />
                        will guarantee your data
                    </p>
                </div>
            </div>
        </div>

        <div class="card-block">
            <div class="card">
                <div class="d-flex flex-lg-row flex-column align-items-center">
                    <div class="me-lg-3">
                        <img src="assets/img/Content-2-1.png" alt="" />
                    </div>
                    <div class="flex-grow-1 text-lg-start text-center card-text">
                        <h3 class="card-title">
                            Fast Business Management in 30 minutes
                        </h3>
                        <p class="card-caption">
                            Our tools for business analysis helps an organization
                            understand<br class="d-none d-lg-block" />
                            market or business development.
                        </p>
                    </div>
                    <div class="card-btn-space">
                        <button class="btn btn-card text-white">Buy Now</button>
                        <button class="btn btn-outline">Demo Version</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>