<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Makers | All documents are here</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('mywebs/backends/assets/img/favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('mywebs/backends/assets/img/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('mywebs/backends/assets/img/favicons/favicon-16x16.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('mywebs/backends/assets/img/favicons/favicon.png') ?>">
    <link rel="manifest" href="<?= base_url('mywebs/backends/assets/img/favicons/manifest.json') ?>">
    <meta name="msapplication-TileImage" content="<?= base_url('mywebs/backends/assets/img/favicons/mstile-150x150.png') ?>">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/fonts/boxicons.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/css/core.css') ?>"  class="template-customizer-core-css"/>
    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/css/theme-default.css') ?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/css/demo.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('mywebs/admins/assets/vendor/libs/apex-charts/apex-charts.css') ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('mywebs/backends/assets/img/favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('mywebs/backends/assets/img/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('mywebs/backends/assets/img/favicons/favicon-16x16.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('mywebs/backends/assets/img/logos/makers -2.png') ?>">
    <link rel="manifest" href="<?= base_url('mywebs/backends/assets/img/favicons/manifest.json') ?>">
    <meta name="msapplication-TileImage" content="<?= base_url('mywebs/backends/assets/img/favicons/mstile-150x150.png') ?>">
    <link href="<?= base_url('mywebs/backends/assets/css/theme.css') ?>" rel="stylesheet" />
  </head>
  <body>
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="" href="<?= base_url('/') ?>"><img src="<?= base_url('mywebs/backends/assets/img/logos/makers -2.png') ?>" height="50" alt="logo" style="padding: 0;" /></a>
        <a class="" href="<?= base_url('/') ?>"><img src="<?= base_url('mywebs/backends/assets/img/logos/makers title.png') ?>" height="15" alt="logo" style="left:-0px" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link" aria-current="page" style=":nav-item:hover{color:blue}" href="<?= base_url('/') ?>">Beranda</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="<?= base_url('product-list') ?>">Product</a></li>                                        
              <?php if (session()->get('username')) : ?>
              <li class="nav-item navbar-dropdown dropdown-user dropdown" style="margin-top: -5px;">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="<?= base_url('mywebs/backends/assets/img/logos/profile.png') ?>" alt class="w-px-40 h-auto rounded-circle" width="30" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="<?= base_url('mywebs/backends/assets/img/logos/profile.png') ?>" alt class="w-px-40 h-auto rounded-circle" width="30" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block"></span>
                          <small class="text-muted"><?= $session->get('username') ?></small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                      <a class="dropdown-item" href="<?php echo base_url('users'); ?>">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">Profile</span>
                  </a>
                  <li>
                      <div class="dropdown-divider"></div>
                  </li>                   
                  <?php if (filter_var($session->get('roles'), FILTER_VALIDATE_INT) == 1) : ?>
                      <li hidden>
                          <a class="dropdown-item" href="#">
                          <i class="bx bx-user me-2"></i>
                          <span class="align-middle">Dashboard</span>
                          </a>
                      </li>
                      <li hidden>
                          <div class="dropdown-divider"></div>
                      </li>                                        
                  <?php else: ?>
                      <li>
                          <a class="dropdown-item" href="<?php echo base_url('Dashboard'); ?>">
                          <i class="bx bx-user me-2"></i>
                          <span class="align-middle">Dashboard</span>
                          </a>
                      </li>
                      <li>
                          <div class="dropdown-divider"></div>
                      </li>
                  <?php endif; ?>
                  <li>
                    <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>      
            </ul>                                      
            <?php else: ?>
              <div class="d-flex ms-lg-4">
                <a class="btn btn-secondary-outline" href="<?= base_url('login') ?>">Sign In</a>
                <a class="btn btn-primary ms-3" href="<?= base_url('register') ?>">Sign Up</a>
              </div>
            <?php endif; ?>            
          </div>
        </div>
      </nav>
      <section class="pt-7">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-md-start text-center py-6">
              <h1 class="mb-4 fs-9 fw-bold">The best references you can find</h1>
              <p class="mb-6 lead text-secondary">Document, Audio, video & many more<br class="d-none d-xl-block" />We provide easy and quick access to a comprehensive collection of the latest scholarly documents, journals and e-books to meet your research needs</p>
              <div class="text-center text-md-start"><a class="btn btn-primary me-3 btn-lg" href="#!" role="button">Get started</a></div>
            </div>
            <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="<?= base_url('mywebs/backends/assets/img/logos/dash people.png') ?>" alt="" /></div>
          </div>
        </div>
      </section>
      <section class="pt-5 pt-md-9 mb-6" id="feature">
        <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block" style="background-image:url(<?= base_url('mywebs/backends/assets/img/category/shape.png') ?>);opacity:.5;">
        </div>
        <div class="container">
          <h1 class="fs-9 fw-bold mb-4 text-center"> We provide what you need <br class="d-none d-xl-block" />whatever it is</h1>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="<?= base_url('mywebs/backends/assets/img/category/icon1.png') ?>" width="75" alt="Feature" />
              <h4 class="mb-3">Best Document</h4>
              <p class="mb-0 fw-medium text-secondary">Explore more existing and recent documents.</p>
            </div>
            <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="<?= base_url('mywebs/backends/assets/img/category/icon2.png') ?>" width="75" alt="Feature" />
              <h4 class="mb-3">More Video</h4>
              <p class="mb-0 fw-medium text-secondary">Video references from educational and others</p>
            </div>
            <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="<?= base_url('mywebs/backends/assets/img/category/icon3.png') ?>" width="75" alt="Feature" />
              <h4 class="mb-3">Audio Quality</h4>
              <p class="mb-0 fw-medium text-secondary">Discover a variety of other learning audios.</p>
            </div>
            <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="<?= base_url('mywebs/backends/assets/img/category/icon4.png') ?>" width="75" alt="Feature" />
              <h4 class="mb-3">Much Tools</h4>
              <p class="mb-0 fw-medium text-secondary">Various kinds of equipment for learning</p>
            </div>
          </div><br><br><br>          
        </div>
      </section>
      <section class="pt-5" id="manager">
        <div class="container">
          <div class="row">
            <div class="col-lg-6"><img class="img-fluid" src="<?= base_url('mywebs/backends/assets/img/manager/manager.png') ?>" alt="" /></div>
            <div class="col-lg-6">
              <h5 class="text-secondary">Easier decision making for</h5>
              <p class="fs-7 fw-bold mb-2">Steps in defining your search</p>
              <p class="mb-4 fw-medium text-secondary">
              This website can be easily used by anyone. that's our trademark.
              </p>
              <div class="d-flex align-items-center mb-3"> <img class="me-sm-4 me-2" src="<?= base_url('mywebs/backends/assets/img/manager/tick.png') ?>" width="35" alt="tick" />
                <p class="fw-medium mb-0 text-secondary">Easy and Fast</p>
              </div>
              <div class="d-flex align-items-center mb-3"> <img class="me-sm-4 me-2" src="<?= base_url('mywebs/backends/assets/img/manager/tick.png') ?>" width="35" alt="tick" />
                <p class="fw-medium mb-0 text-secondary">Choose Document</p>
              </div>
              <div class="d-flex align-items-center mb-3"><img class="me-sm-4 me-2" src="<?= base_url('mywebs/backends/assets/img/manager/tick.png') ?>" width="35" alt="tick" />
                <p class="fw-medium mb-0 text-secondary">See the content</p>
              </div>
            </div>
          </div>
        </div>
      </section>      
      <section class="py-md-11 py-8" id="superhero">
        <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block background-position-top" style="background-image:url(<?= base_url('mywebs/backends/assets/img/superhero/oval.png') ?>);opacity:.5; background-position: top !important ;">
        </div>      
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h1 class="fw-bold mb-4 fs-7">need more help?</h1>
              <p class="mb-5 text-info fw-medium">Do you require some help for your Document, Video ,<br />Audio or something else?</p>
              <button class="btn btn-primary btn-md">Contact our email</button>
            </div>
          </div>
        </div>
      </section>
      </section>    
      <section class="pb-2 pb-lg-5">
        <div class="container">
          <div class="row border-top border-top-secondary pt-7">          
            <div class="col-lg-3 col-md-6 mb-4 mb-md-6 mb-lg-0 mb-sm-2 order-1 order-md-1 order-lg-1"><img class="mb-4" src="<?= base_url('mywebs/backends/assets/img/logos/makers -2.png') ?>" width="60"  style="margin-top:10px;" alt="" /><img class="mb-4" src="<?= base_url('mywebs/backends/assets/img/logos/makers title.png') ?>" width="120" alt="" /></div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 order-3 order-md-3 order-lg-2">
              <p class="fs-2 mb-lg-4">Quick Links</p>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">About us</a></li>
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Blog</a></li>
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Contact</a></li>
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">FAQ</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 order-4 order-md-4 order-lg-3">
              <p class="fs-2 mb-lg-4">Legal stuff</p>
              <ul class="list-unstyled mb-0">                
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Privacy Policy</a></li>
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Terms of Service</a></li>
              </ul>
            </div>            
          </div>
        </div>
      </section>
      <section class="text-center py-0">
        <div class="container">
          <div class="container border-top py-3">
            <div class="row justify-content-between">
              <div class="col-12 col-md-auto mb-1 mb-md-0">
                <p class="mb-0">&copy; 2024</p>
              </div>
              <div class="col-12 col-md-auto">                
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <iframe class="rounded" style="width:100%;height:500px;" src="https://www.youtube.com/embed/_lhdhL4UDIo" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <script src="<?= base_url('mywebs/admins/assets/vendor/libs/jquery/jquery.js') ?>"></script>    
        <script src="<?= base_url('mywebs/backends/vendors/@popperjs/popper.min.js') ?>"></script>
        <script src="<?= base_url('mywebs/backends/vendors/bootstrap/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('mywebs/backends/vendors/is/is.min.js') ?>"></script>
        <script src="<?= base_url('mywebs/admins/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
        <script src="<?= base_url('mywebs/admins/assets/vendor/js/menu.js') ?>"></script>
        <script src="<?= base_url('mywebs/admins/assets/vendor/libs/apex-charts/apexcharts.js') ?>"></script>
        <script src="<?= base_url('mywebs/admins/assets/js/main.js') ?>"></script>
        <script src="<?= base_url('mywebs/admins/assets/js/dashboards-analytics.js') ?>"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="<?= base_url('mywebs/backends/vendors/fontawesome/all.min.js') ?>"></script>
        <script src="<?= base_url('mywebs/backends/assets/js/theme.js') ?>"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
  </body>

</html>