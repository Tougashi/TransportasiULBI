@extends('layouts.main')
@section('main')
    <div>
        {{-- <div class="preloader bg-orange flex-column justify-content-center align-items-center">
            <svg id="loader-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 78.4">
                <img src="{{ asset('assets/img/carousel/image-1.jpg') }}" style="margin-bottom: 25%;" id="loader-logo-image"
                    alt="">
            </svg>
        </div> --}}
        <section class="section-header overflow-hidden pt-7 pt-lg-8 pb-9 pb-lg-12 bg-orange text-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="bootstrap-big-icon d-none d-lg-block">
                            <img class="" src="{{asset('assets/img/brand/Fakultas _ S1 Manajemen Transportasi.png')}}" alt=""/>
                        </div>
                        <h1 class="fw-bolder display-2">Transportasi ULBI</h1>
                        <h2 class="lead fw-normal text-muted mb-4 px-lg-10">Free Bootstrap 5 UI Kit without jQuery
                            that
                            will help you prototype and design beautiful, creative and modern websites</h2>
                        <div class="d-flex justify-content-center flex-column mb-6 mb-lg-5">
                            <a href="https://themesberg.com" class="d-block text-center mx-auto" target="_blank">
                                <img src="./assets/img/themesberg.svg" class="d-block mx-auto mb-3" height="25"
                                    width="25" alt="Themesberg Logo">
                                <span class="text-muted font-small">A Themesberg production</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2"><svg class="fill-white"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                    <path d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
                </svg></figure>
        </section>
        <div class="section py-0">
            <div class="container mt-n10 mt-lg-n12 z-2">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10"><img src="./assets/img/presentation-mockup.png" alt="Pixel Free Mockup">
                    </div>
                </div>
            </div>
        </div>

        <section class="section section-lg">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-lg-6">
                    <div class="col-6 col-md-3 text-center mb-4">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                            <span class="fas fa-puzzle-piece text-tertiary"></span>
                        </div>
                        <h3 class="fw-bolder">80</h3>
                        <p class="text-gray">Bootstrap 5 elements</p>
                    </div>
                    <div class="col-6 col-md-3 text-center mb-4">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                            <span class="fas fa-pager text-tertiary"></span>
                        </div>
                        <h3 class="fw-bolder">5</h3>
                        <p class="text-gray">Example Pages</p>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                            <span class="fab fa-sass text-tertiary"></span>
                        </div>
                        <h3 class="fw-bolder">Workflow</h3>
                        <p class="text-gray">Sass & Gulp</p>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                            <span class="fab fa-js-square text-tertiary"></span>
                        </div>
                        <h3 class="fw-bolder">Vanilla</h3>
                        <p class="text-gray">Javascript</p>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center mb-5 mb-lg-7">
                    <div class="col-12 col-lg-5 mb-5 mb-lg-0 order-lg-2">
                        <h2 class="h1">Bootstrap 5</h2>
                        <p class="mb-4 lead fw-bold">Latest version of Bootstrap without jQuery</p>
                        <p class="mb-4">Pixel is built using the latest version of Bootstrap 5 and we only used
                            Vanilla
                            Javascript for everything including the plugins</p>
                        <a href="https://themesberg.com/docs/pixel-bootstrap/components/accordions/" target="_blank"
                            class="btn btn-outline-primary"><span class="fas fa-book me-2"></span> Getting started</a>
                    </div>
                    <div class="col-12 col-lg-6 order-lg-1">
                        <img src="./assets/img/illustrations/bs5-illustrations.svg" alt="Front pages overview">
                    </div>
                </div>
                <div class="row justify-content-between align-items-center mb-5 mb-lg-7">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <h2 class="h1 d-flex align-items-center">Modular sections <span
                                class="badge-md ms-3 mb-0 fs-6 badge rounded-pill text-white bg-tertiary">Pro</span>
                        </h2>
                        <p class="mb-4 lead fw-bold">More than 50 website sections</p>
                        <p class="mb-4">Using the sections in Pixel Pro you can easily build new pages by adding
                            them
                            together</p>
                        <a href="https://demo.themesberg.com/pixel-pro/v5/html/sections/all-sections.html" target="_blank"
                            class="btn btn-primary mt-2 animate-up-2">
                            <span class="fas fa-th-large me-2"></span>
                            Explore sections
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <img src="./assets/img/sections-mockup.jpg" alt="MapBox Leaflet.js Custom Integration Mockup">
                    </div>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-lg-5 order-lg-2 mb-5 mb-lg-0">
                        <h2 class="h1 d-flex align-items-center">User Dashboard <span
                                class="badge-md ms-3 mb-0 fs-6 badge rounded-pill text-white bg-tertiary">Pro</span>
                        </h2>
                        <p class="mb-4 lead fw-bold">9 dashboard pages</p>
                        <p class="mb-4">Quickly set up a user settings panel with the advanced dashboard pages
                            including
                            billing, settings, messaging</p>
                        <a href="https://demo.themesberg.com/pixel-pro/v5/html/dashboard/account.html" target="_blank"
                            class="btn btn-tertiary animate-up-2"><span class="fas fa-chart-line me-2"></span> Explore
                            dashboard</a>
                    </div>
                    <div class="col-12 col-lg-6 order-lg-1">
                        <img src="./assets/img/presentation-mockup-dashboard.png" alt="Dashboard Preview">
                    </div>
                </div>
            </div>
        </section>

        <div class="section section-sm pb-0 mb-n4" id="components">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Accordions</h3>
                </div>
            </div>
        </div>

        @include('components.accordions')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Alerts</h3>
                </div>
            </div>
        </div>

        @include('components.alerts')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Badges</h3>
                </div>
            </div>
        </div>

        @include('components.badges')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Cards</h3>
                </div>
            </div>
        </div>

        @include('components.cards')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Carousels</h3>
                </div>
            </div>
        </div>

        @include('components.carousels')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Breadcrumbs</h3>
                </div>
            </div>
        </div>

        @include('components.breadcrumbs')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Buttons</h3>
                </div>
            </div>
        </div>

        @include('components.buttons')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Dropdowns</h3>
                </div>
            </div>
        </div>

        @include('components.dropdowns')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Forms</h3>
                </div>
            </div>
        </div>

        @include('components.forms')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Modals</h3>
                </div>
            </div>
        </div>

        @include('components.modals')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Navs</h3>
                </div>
            </div>
        </div>

        @include('components.navs')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Pagination</h3>
                </div>
            </div>
        </div>

        @include('components.pagination')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Popovers</h3>
                </div>
            </div>
        </div>

        @include('components.popovers')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Progress bars</h3>
                </div>
            </div>
        </div>

        @include('components.progress-bar')


        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Tabs</h3>
                </div>
            </div>
        </div>

        @include('components.tabs')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Toasts</h3>
                </div>
            </div>
        </div>

        @include('components.toasts')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Tooltips</h3>
                </div>
            </div>
        </div>

        @include('components.tooltips')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Typography</h3>
                </div>
            </div>
        </div>

        @include('components.typography')

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="text-center">Tables</h3>
                </div>
            </div>
        </div>

        @include('components.tables')

        <section class="section section-md bg-soft">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-lg-6">
                    <div class="col-12 text-center">
                        <h2 class="h1 px-lg-5">5 hand-crafted example pages</h2>
                    </div>
                </div>

                @include('components.pages-preview')
            </div>
        </section>
        <section class="section section-lg bg-tertiary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center text-white">
                        <h2 class="h1 font-weight-light">Notable <span class="font-weight-bold">features</span>
                        </h2>
                        <p class="lead">You get all Bootstrap components fully customized. Besides, you receive
                            numerous
                            plugins out of the box and ready to use</p>
                    </div>
                </div>
                <div class="row mt-6 text-white">
                    <div class="col-md-4">
                        <!-- Icon box -->
                        <div class="icon-box text-center mb-5">
                            <div class="icon">
                                <span class="fab fa-bootstrap"></span>
                            </div>
                            <h3 class="h5 my-3">Bootstrap 5</h3>
                            <p>A responsive and mobile-first theme built with the world's most popular CSS framework
                            </p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-md-4">
                        <!-- Icon box -->
                        <div class="icon-box text-center mb-5">
                            <div class="icon">
                                <span class="fab fa-sass"></span>
                            </div>
                            <h3 class="h5 my-3">Build with Sass</h3>
                            <p>Change one variable and the theme adapts. Colors, fonts, sizes, buttons... you name
                                it
                            </p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-md-4">
                        <!-- Icon box -->
                        <div class="icon-box text-center mb-5">
                            <div class="icon">
                                <span class="fas fa-mobile-alt"></span>
                            </div>
                            <h3 class="h5 my-3">Responsive Design</h3>
                            <p>Did you know 53% of the world web traffic is mobile? Pixel is fully responsive and
                                mobile
                                first</p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-md-4">
                        <!-- Icon box -->
                        <div class="icon-box text-center mb-5">
                            <div class="icon">
                                <span class="fas fa-puzzle-piece"></span>
                            </div>
                            <h3 class="h5 my-3">Modular approach</h3>
                            <p>Nicely customized components that can be reused anytime and anywhere in your project
                            </p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-md-4">
                        <!-- Icon box -->
                        <div class="icon-box text-center mb-5">
                            <div class="icon">
                                <span class="fab fa-gulp"></span>
                            </div>
                            <h3 class="h5 my-3">Gulp & BrowserSync</h3>
                            <p>With our custom Gulp commands & BrowserSync we offer a seemless and fast workflow for
                                your project</p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-md-4">
                        <!-- Icon box -->
                        <div class="icon-box text-center mb-5">
                            <div class="icon">
                                <span class="fas fa-file-alt"></span>
                            </div>
                            <h3 class="h5 my-3">Well documented</h3>
                            <p>Our kit is delivered with very detailed documentation, describing all components,
                                styles
                                and usages</p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-md-4">
                        <!-- Icon box -->
                        <div class="icon-box text-center">
                            <div class="icon">
                                <span class="fas fa-tachometer-alt"></span>
                            </div>
                            <h3 class="h5 my-3">Google PageSpeed</h3>
                            <p>Pixel has 80+ scores on Google PageSpeed Insights to offer you and your clients a
                                fast
                                website
                            </p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-md-4">
                        <!-- Icon box -->
                        <div class="icon-box text-center mb-5">
                            <div class="icon">
                                <span class="fas fa-image"></span>
                            </div>
                            <h3 class="h5 my-3">SVG illustrations</h3>
                            <p>Photography and Illustration SVGs are included in the download package and are free
                                to
                                use
                            </p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-md-4">
                        <!-- Icon box -->
                        <div class="icon-box text-center mb-5">
                            <div class="icon">
                                <img class="navbar-brand-dark" style="height: 37px;"
                                    src="{{ asset('/assets/img/brand/light.svg') }}" alt="Pixel logo">
                            </div>
                            <h3 class="h5 my-3">Every pixel matters</h3>
                            <p>We crafted each component with great care so that no rouge pixel is left behind</p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg line-bottom-soft">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-lg-6">
                    <div class="col-12 text-center">
                        <h2 class="h1 px-lg-5">What's inside?</h2>
                        <p class="lead px-lg-8">We have carefully crafted the perfect folder structure to ensure
                            that
                            finding the files you're looking for are easily reachable and well organized.</p>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-6 mb-4">
                        <div class="d-none d-lg-block mt-5">
                            <h3 class="text-center">You need only HTML, CSS and Javascript?</h3>
                            <p class="lead mb-4">Don't worry, we got you covered. We have a folder called <code
                                    class="text-danger">html&css</code> which includes only the basic HTML5, CSS3
                                and
                                Javascript technologies.</p>
                            <a href="https://themesberg.com/docs/pixel-bootstrap/getting-started/file-structure/"
                                target="_blank" class="btn btn-md btn-secondary animate-up-2"><span
                                    class="fas fa-book me-2"></span> Docs v5.3</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-lg-first d-flex justify-content-center">
                        <ul class="d-block fmw-100 list-style-none folder-structure">
                            <li data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Main folder that you will be working with"><span
                                    class="fas fa-folder me-2"></span>src</li>
                            <li>
                                <ul class="list-style-none ps-4">
                                    <li data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="CSS, Images, Fonts and Javascript"><span class="fas fa-folder me-2"></span>
                                        assets</li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="left" title="HTML templates">
                                        <span class="fas fa-folder me-2"></span> html
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Partials are HTML snippets that are included in multiple pages, such as the menu or footer">
                                        <span class="fas fa-folder me-2"></span> partials
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="left" title="Sass source files">
                                        <span class="fas fa-folder me-2"></span> scss
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="The page you're looking at right now. Call it inception."><span
                                            class="fab fa-html5 me-2 text-secondary"></span> index.html</li>
                                </ul>
                            </li>
                            <li data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Pixel with only HTML, CSS and Javascript"><span
                                    class="fas fa-folder me-2 text-muted"></span> html&css</li>
                            <li data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Temporary folder that is created when serving files with BrowserSync"><span
                                    class="fas fa-folder text-muted me-2"></span>.temp</li>
                            <li data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Minified version of the project"><span
                                    class="fas fa-folder me-2 text-muted"></span> dist</li>
                            <li data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Project dependencies from package.json"><span
                                    class="fas fa-folder text-muted me-2"></span> node_modules
                            </li>
                            <li data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Development workflow commands. We have them well documented."><span
                                    class="fab fa-js-square me-2 text-warning"></span> gulpfile.js</li>
                            <li data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Project details and dependencies."><span
                                    class="fas fa-file-code me-2 text-tertiary"></span> package.json</li>
                            <li data-bs-toggle="tooltip" data-bs-placement="left"
                                title="No project can miss a README :)"><span
                                    class="fas fa-file-code me-2 text-tertiary"></span> README.md</li>
                            <li data-bs-toggle="tooltip" data-bs-placement="left"
                                title="This file ensures that generated files and folder are ignored by Git. (eg. node_modules)">
                                <span class="fas fa-file-code me-2 text-tertiary"></span> .gitignore
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 mt-5 d-lg-none">
                        <h3 class="h5">You need only HTML, CSS and Javascript?</h3>
                        <p>Don't worry, we got you covered. We have a folder called <code
                                class="text-danger">html&css</code> which includes only the basic HTML5, CSS3 and
                            Javascript technologies.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg bg-secondary">
            <div class="container">
                <div class="row justify-content-center text-center text-white">
                    <div class="col-lg-10 col-xl-12">
                        <h2 class="fw-light mb-4">WCAG 2.1 accessible <span class="fw-bold">color scheme</span>
                        </h2>
                        <p class="lead">
                            We've enhanced Bootstrap’s color settings <br> to comply with the latest accessibility
                            standards
                        </p>
                    </div>
                </div>
                <div class="row mt-4 mt-lg-6">
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card shadow-soft border-soft bg-gray-200 p-5 text-center mb-4">
                            <div class="color-shape rounded bg-primary m-auto"></div>
                            <div class="mt-4">
                                <h2 class="h5 text-dark">Primary:</h2>
                                <span class="fw-bold text-primary">#174F84</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card shadow-soft border-soft bg-gray-200 p-5 text-center mb-4">
                            <div class="color-shape rounded bg-secondary m-auto"></div>
                            <div class="mt-4">
                                <h2 class="h5 text-dark">Secondary:</h2>
                                <span class="fw-bold text-secondary">#10AB7C</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card shadow-soft border-dark bg-primary p-5 text-center mb-4">
                            <div class="color-shape rounded bg-tertiary m-auto"></div>
                            <div class="mt-4 text-white">
                                <h2 class="h5">Tertiary:</h2>
                                <span class="fw-bold text-white">#FF7F66</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card shadow-soft border-dark bg-primary p-5 text-center mb-4">
                            <div class="color-shape rounded bg-info m-auto"></div>
                            <div class="mt-4 text-white">
                                <h2 class="h5">Info:</h2>
                                <span class="fw-bold text-white">#1E90FF</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card shadow-soft border-dark bg-primary p-5 text-center mb-4">
                            <div class="color-shape rounded bg-warning m-auto"></div>
                            <div class="mt-4 text-white">
                                <h2 class="h5">Warning:</h2>
                                <span class="fw-bold text-white">#F5B759</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card shadow-soft border-dark bg-primary p-5 text-center mb-4">
                            <div class="color-shape rounded bg-success m-auto"></div>
                            <div class="mt-4 text-white">
                                <h2 class="h5">Success:</h2>
                                <span class="fw-bold text-white">#00BF9A</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card shadow-soft border-dark bg-primary p-5 text-center mb-4">
                            <div class="color-shape rounded bg-danger m-auto"></div>
                            <div class="mt-4 text-white">
                                <h2 class="h5">Danger:</h2>
                                <span class="fw-bold text-white">#FA5252</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card shadow-soft border-soft bg-gray-200 p-5 text-center mb-4">
                            <div class="color-shape rounded bg-dark m-auto"></div>
                            <div class="mt-4">
                                <h2 class="h5 text-dark">Dark:</h2>
                                <span class="fw-bold text-dark">#2A354F</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card shadow-soft border-dark bg-primary p-5 text-center mb-4">
                            <div class="color-shape rounded bg-gray-300 m-auto"></div>
                            <div class="mt-4 text-white">
                                <h2 class="h5">Light:</h2>
                                <span class="fw-bold text-light">#DDE1ED</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card shadow-soft border-dark bg-primary p-5 text-center mb-4">
                            <div class="color-shape rounded bg-gray-200 m-auto"></div>
                            <div class="mt-4 text-white">
                                <h2 class="h5">Soft:</h2>
                                <span class="fw-bold text-light">#EFF2F5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg bg-gray-200">
            <div class="container">
                <div class="row justify-content-center text-center text-dark mb-5">
                    <div class="col-lg-9 col-xl-8">
                        <h2 class="h1 fw-light mb-3">Less <span class="fw-bold">work</span>, more <span
                                class="fw-bold">flow</span>.</h2>
                        <p class="lead">
                            Boost productivity with BrowserSync. SCSS changes are reflected instantly and pages
                            scroll
                            and refresh on devices as you work.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center mb-6">
                    <div class="col-md-10 col-xl-9">
                        <div class="position-relative">
                            <div class="rounded bg-dark p-4 text-white mb-2">
                                <div class="mb-3">
                                    <div class="fw-normal">&gt; $ npm install</div>
                                    <div class="text-muted">Everything’s installed!</div>
                                </div>
                                <div class="mb-3">
                                    <div class="fw-normal">&gt; $ gulp</div>
                                    <div class="text-muted">SCSS watching</div>
                                    <div class="text-muted">LiveReload started</div>
                                    <div class="text-muted">Opening localhost:3000</div>
                                </div>
                                <div>
                                    <div class="fw-normal">&gt; $ that's it?</div>
                                    <div class="text-muted">It's that simple!</div>
                                </div>
                            </div>
                        </div>
                        <div class="alert bg-dark text-white position-relative mt-4"><span
                                class="fas fa-question-circle me-2"></span> Looks unfamiliar? Don’t worry! Our <a
                                class="text-white fw-bold text-underline"
                                href="https://themesberg.com/docs/bootstrap-5/pixel/getting-started/quick-start/"
                                target="_blank">documentation</a> has got you covered.</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
