<section class="section section--head">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6">
                <h1 class="section__title section__title--head">
                    <?= $value ?>
                </h1>
            </div>
            <div class="col-12 col-xl-6">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item"><a href="/">Home</a></li>
                    <li class="breadcrumb__item">Search</li>
                    <li class="breadcrumb__item breadcrumb__item--active"><?= $value ?></li>
                </ul>
            </div>
        </div>
    </div>
</section> 

<div class="catalog catalog--page">
    <div class="container">
        <?php if (!empty($data['results'])) { ?>
            <div class="row">
                <div class="col-12">
                    <div class="row row--grid">
                        <?php foreach ($data['results'] as $item): ?>
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <a href="/<?= strtolower($item['type']) === 'movie' ? 'movie' : 'show' ?>/details?viewkey=<?= $item['id'] ?>&title=<?= urlencode(strtolower($item['title'] ))?>" class="card__cover">
                                        <img src="<?= $item['poster'] ?>" alt="<?= $item['title'] ?>" style="aspect-ratio: 2 / 3;" loading="lazy">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                    <span class="card__rating">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/>
                                        </svg>
                                        <?= $item['rating'] ?>
                                    </span>
                                    <h3 class="card__title">
                                        <a href="/<?= strtolower($item['type']) === 'movie' ? 'movie' : 'show' ?>/details?viewkey=<?= $item['id'] ?>&title=<?= urlencode(strtolower($item['title'] ))?>"><?= $item['title'] ?></a>
                                    </h3>
                                    <ul class="card__list">
                                        <li><?= $item['type'] ?></li>
                                        <li><?= $item['genre'] ?></li>
                                        <li><?= $item['release'] ?></li>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <?php
                    $halfRange = 2;
                    $startPage = max(1, $current_page - $halfRange);
                    $endPage = min($total_pages, $current_page + $halfRange);

                    $url = $pagination_url;
                    
                    if ($endPage - $startPage < 4) {
                        if ($endPage == $total_pages) {
                            $startPage = max(1, $total_pages - 4);
                        } else {
                            $endPage = min($total_pages, $startPage + 4);
                        }
                    }
                    ?>

                    <div class="catalog__paginator-wrap">
                        <span class="catalog__pages">Showing page <?= $current_page ?> of <?= $total_pages ?></span>

                        <ul class="catalog__paginator">
                            <li <?= ($current_page == 1) ? 'class="disabled"' : '' ?>>
                                <a href="<?= ($current_page > 1) ? $url . '&page=' . ($current_page - 1) : '#' ?>">                                    <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.75 5.36475L13.1992 5.36475" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5.771 10.1271L0.749878 5.36496L5.771 0.602051" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </li>

                            <?php 
                            for ($page = $startPage; $page <= $endPage; $page++): 
                                $isActive = ($page == $current_page) ? 'class="active"' : ''; 
                            ?>
                                <li <?= $isActive ?>>
                                    <a href="<?= $url ?>&page=<?= $page ?>">
                                <?= htmlspecialchars($page) ?>
                                    </a>
                                </li>
                            <?php endfor; ?>

                            <li <?= ($current_page == $total_pages) ? 'class="disabled"' : '' ?>>
                                <a href="<?= ($current_page < $total_pages) ? $url . '&page=' . ($current_page + 1) : '#' ?>">
                                    <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.1992 5.3645L0.75 5.3645" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M8.17822 0.602051L13.1993 5.36417L8.17822 10.1271" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="row">
                <div class="col-12">
                    <p style="color: white;">No search results found for "<?= $value ?>"</p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>