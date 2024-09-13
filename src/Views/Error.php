<?php
    $baseURL = $_ENV['BASE_URL'];
    $errorCode = isset($code) ? htmlspecialchars($code) : '404';
    $errorMessage = isset($message) ? htmlspecialchars($message) : 'Page Not Found';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $errorCode . ' - ' . $errorMessage ?></title>
    <link rel="icon" type="image/png" href="<?= htmlspecialchars($baseURL) . '/assets/images/favicon.png'; ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= htmlspecialchars($baseURL) . '/assets/images/favicon.png'; ?>">
    <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/plugins/bootstrap/css/bootstrap-reboot.min.css'; ?>">
    <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/plugins/bootstrap/css/bootstrap-grid.min.css'; ?>">
    <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/plugins/owlcarousel/owl.carousel.min.css'; ?>">
    <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/css/slider-radio.css'; ?>">
    <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/plugins/select2/css/select2.min.css'; ?>">
    <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/plugins/magnific-popup/magnific-popup.css'; ?>">
    <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/css/plyr.css'; ?>">
    <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/css/main.css'; ?>">
</head>

<body>
    <div class="page-404 section--full-bg" data-bg="<?= htmlspecialchars($baseURL) . '/assets/images/bg.jpg'; ?>">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-404__wrap">
                        <div class="page-404__content">
                            <h1 class="page-404__title"><?= $errorCode ?></h1>
                            <p class="page-404__text">The page you are looking for is not available!</p>
                            <a href="/" class="page-404__btn">Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="<?= htmlspecialchars($baseURL) . '/assets/plugins/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
    <script src="<?= htmlspecialchars($baseURL) . '/assets/plugins/owlcarousel/owl.carousel.min.js'; ?>"></script>
    <script src="<?= htmlspecialchars($baseURL) . '/assets/js/slider-radio.js'; ?>"></script>
    <script src="<?= htmlspecialchars($baseURL) . '/assets/plugins/select2/js/select2.min.js'; ?>"></script>
    <script src="<?= htmlspecialchars($baseURL) . '/assets/js/smooth-scrollbar.js'; ?>"></script>
    <script src="<?= htmlspecialchars($baseURL) . '/assets/plugins/magnific-popup/jquery.magnific-popup.min.js'; ?>"></script>
    <script src="<?= htmlspecialchars($baseURL) . '/assets/js/plyr.min.js'; ?>"></script>
    <script src="<?= htmlspecialchars($baseURL) . '/assets/js/main.js'; ?>"></script>
</body>

</html>