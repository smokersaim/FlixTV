<?php require_once __DIR__ . '/Variables.php'; ?>
<!DOCTYPE html>
<html lang="en">
        
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title><?= htmlspecialchars($metadata['title']); ?></title>

        <meta name="description" content="<?= htmlspecialchars($metadata['description']); ?>">
        <meta name="keywords" content="<?= htmlspecialchars($metadata['keywords']); ?>">
        <meta name="robots" content="<?= htmlspecialchars($metadata['robots']); ?>">

        <meta property="og:title" content="<?= htmlspecialchars($metadata['title']); ?>">
        <meta property="og:description" content="<?= htmlspecialchars($metadata['description']); ?>">
        <meta property="og:image" content="<?= !empty($metadata['shareImage']) ? htmlspecialchars($metadata['shareImage']) : htmlspecialchars($baseURL . '/assets/images/backdrop.jpg') ?>">
        <meta property="og:url" content="<?= htmlspecialchars($metadata['url']); ?>">
        <meta property="og:type" content="website">
        
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?= htmlspecialchars($metadata['title']); ?>">
        <meta name="twitter:description" content="<?= htmlspecialchars($metadata['description']); ?>">
        <meta name="twitter:image" content="<?= !empty($metadata['shareImage']) ? htmlspecialchars($metadata['shareImage']) : htmlspecialchars($baseURL . '/assets/images/backdrop.jpg') ?>">
        <meta name="twitter:url" content="<?= htmlspecialchars($metadata['url']); ?>">

        <link rel="icon" type="image/png" href="<?= htmlspecialchars($baseURL) . '/assets/images/favicon.png'; ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= htmlspecialchars($baseURL) . '/assets/images/favicon.png'; ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= htmlspecialchars($baseURL). '/assets/images/favicon.png'; ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= htmlspecialchars($baseURL) . '/assets/images/favicon.png'; ?>">

        <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "<?= htmlspecialchars($metadata['title']); ?>",
        "description": "<?= htmlspecialchars($metadata['description']); ?>",
        "url": "<?= htmlspecialchars($metadata['url']); ?>",
        "image": "<?= !empty($metadata['shareImage']) ? htmlspecialchars($metadata['shareImage']) : htmlspecialchars($baseURL . '/assets/images/backdrop.jpg') ?>"
        }
        </script>
        
        <link rel="canonical" href="<?= htmlspecialchars($metadata['url']); ?>">
        <link rel="alternate" href="<?= htmlspecialchars($metadata['url']); ?>">

        <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/plugins/bootstrap/css/bootstrap-reboot.min.css'; ?> ">
        <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/plugins/bootstrap/css/bootstrap-grid.min.css'; ?> ">
        <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/plugins/owlcarousel/owl.carousel.min.css'; ?> ">
        <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/css/slider-radio.css'; ?> ">
        <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/plugins/select2/css/select2.min.css'; ?> ">
        <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/plugins/magnific-popup/magnific-popup.css'; ?> ">
        <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/css/plyr.css'; ?> ">
        <link rel="stylesheet" href="<?= htmlspecialchars($baseURL) . '/assets/css/main.css'; ?> ">

    </head>

    <body>

	    <header class="<?= htmlspecialchars($metadata['header']); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="header__content">

                            <button class="header__menu" type="button">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>

                            <a href="/" class="header__logo">
                                <img src="<?= htmlspecialchars($baseURL) . '/assets/images/logo.svg'; ?>" alt="<?= htmlspecialchars($metadata['title']); ?>">
                            </a>

                            <ul class="header__nav">

                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="#" role="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Movies 
                                        <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.93893 3.30334C1.08141 3.30334 0.384766 2.60669 0.384766 1.75047C0.384766 0.894254 1.08141 0.196308 1.93893 0.196308C2.79644 0.196308 3.49309 0.894254 3.49309 1.75047C3.49309 2.60669 2.79644 3.30334 1.93893 3.30334Z"/>
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="/movies/popular">Popular Movies</a></li>
                                        <li><a href="/movies/now_playing">Now Playing</a></li>
                                        <li><a href="/movies/upcoming">Upcoming</a></li>
                                        <li><a href="/movies/top_rated">Top Movies</a></li>
                                    </ul>
                                </li>

                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="#" role="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        TV Shows 
                                        <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.93893 3.30334C1.08141 3.30334 0.384766 2.60669 0.384766 1.75047C0.384766 0.894254 1.08141 0.196308 1.93893 0.196308C2.79644 0.196308 3.49309 0.894254 3.49309 1.75047C3.49309 2.60669 2.79644 3.30334 1.93893 3.30334Z"/>
                                        </svg>                                    
                                    </a>
                                    <ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenu2">
                                        <li><a href="/shows/popular">Popular Shows</a></li>
                                        <li><a href="/shows/airing_today">Airing Today</a></li>
                                        <li><a href="/shows/on_the_air">On The Air</a></li>                                      
                                        <li><a href="/shows/top_rated">Top Shows</a></li>
                                    </ul>
                                </li>

                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="/trending">Trending</a>
                                </li>

                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="/categories">Categories</a>
                                </li>

						    </ul>

                            <div class="header__actions">
                                <form action="/search" method="GET" class="header__form">
                                    <input name="keywords" class="header__form-input" type="text" placeholder="I'm looking for..." required>
                                    <button class="header__form-btn" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/>
                                    </svg>
                                    </button>
                                    <button type="button" class="header__form-close">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.3345 0.000183105H5.66549C2.26791 0.000183105 0.000488281 2.43278 0.000488281 5.91618V14.0842C0.000488281 17.5709 2.26186 20.0002 5.66549 20.0002H14.3335C17.7381 20.0002 20.0005 17.5709 20.0005 14.0842V5.91618C20.0005 2.42969 17.7383 0.000183105 14.3345 0.000183105ZM5.66549 1.50018H14.3345C16.885 1.50018 18.5005 3.23515 18.5005 5.91618V14.0842C18.5005 16.7653 16.8849 18.5002 14.3335 18.5002H5.66549C3.11525 18.5002 1.50049 16.7655 1.50049 14.0842V5.91618C1.50049 3.23856 3.12083 1.50018 5.66549 1.50018ZM7.07071 7.0624C7.33701 6.79616 7.75367 6.772 8.04726 6.98988L8.13137 7.06251L9.99909 8.93062L11.8652 7.06455C12.1581 6.77166 12.6329 6.77166 12.9258 7.06455C13.1921 7.33082 13.2163 7.74748 12.9984 8.04109L12.9258 8.12521L11.0596 9.99139L12.9274 11.8595C13.2202 12.1524 13.2202 12.6273 12.9273 12.9202C12.661 13.1864 12.2443 13.2106 11.9507 12.9927L11.8666 12.9201L9.99898 11.052L8.13382 12.9172C7.84093 13.2101 7.36605 13.2101 7.07316 12.9172C6.80689 12.6509 6.78269 12.2343 7.00054 11.9407L7.07316 11.8566L8.93843 9.99128L7.0706 8.12306C6.77774 7.83013 6.77779 7.35526 7.07071 7.0624Z"/>
                                    </svg>
                                    </button>
                                </form>

                                <button class="header__search" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/>
                                    </svg>
                                </button>

                                <a href="<?= htmlspecialchars($githubURL); ?>" class="header__user" target="_blank">
                                    <span>GitHub</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                    </svg>
                                </a>
                            </div>

					    </div>

                    </div>
                </div>
            </div>
        </header>
        