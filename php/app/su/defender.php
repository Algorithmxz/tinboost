<?php

session_start();

if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = false;
}

if (isset($_POST['passwd'])) {
    if (sha1($_POST['passwd']) == $ap) {
        $_SESSION['loggedIn'] = true;
    } else {
        header($_SERVER['SERVER_PROTOCOL'] . 'HTTP/1.0 404 Not Found', true, 404);
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    }
}

if (!$_SESSION['loggedIn']) :
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark" data-color-theme="Blue_Theme" data-layout="vertical"
  data-boxed-layout="boxed" data-card="shadow">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Core Css -->
  <link rel="stylesheet" href="assets/css/styles.css">

  <title>404 - Error</title>
</head>

<body>
  <div id="main-wrapper" class="auth-customizer-none">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
            <div class="card mb-0">

              <div class="card-body pt-5">

                <p style="font-size: 25px;" class="text-nowrap logo-img text-center d-block mb-4 w-100"><span style="font-weight: bold;">nwa.</span> never work again</p>

                <form method="post">
                  <div class="mb-3">
                    <input type="password" class="form-control" name="passwd" id="passwd">
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 mb-3">?</button>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>

<?php
exit();
endif;
?>