<div class="home home--title">
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="home__title"><b>Trending</b> of the day</h1>
            </div>
        </div>
    </div>

    <div class="home__carousel owl-carousel" id="flixtv-hero">
        
        <?php foreach (array_slice($data['trending'], 0, 7) as $item): ?>
        
            <div class="home__card">
				<a href="/<?= strtolower($item['type']) === 'movie' ? 'movie' : 'show' ?>/details?viewkey=<?= $item['id'] ?>&title=<?= urlencode(strtolower($item['title'] ))?>">
					<img src="<?= $item['backdrop'] ?>" alt="<?= $item['title'] ?>">
				</a>
				<div>
					<h2><?= $item['title'] ?></h2>
					<ul>
                        <li><?= $item['type'] ?></li>
                        <li><?= $item['genre'] ?></li>
                        <li><?= $item['release'] ?></li>
					</ul>
				</div>
				<span class="home__rating">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/>
                    </svg>
                    <?= $item['rating'] ?>
                </span>
			</div>
        
        <?php endforeach; ?>

	</div>

    <button class="home__nav home__nav--prev" data-nav="#flixtv-hero" type="button"></button>
	<button class="home__nav home__nav--next" data-nav="#flixtv-hero" type="button"></button>

</div>

<section class="section">
    <div class="container">
        <div class="row">
            
            <div class="col-12">
                <h2 class="section__title"><a href="<?= $baseURL ?>/movies/popular">Popular Movies</a></h2>
            </div>

            <div class="col-12">
                <div class="section__carousel-wrap">

                    <div class="section__carousel owl-carousel" id="popular_movies">

                        <?php foreach (array_slice($data['popular_movies'], 0, 14) as $item): ?>

                            <div class="card">

                                <a href="/<?= strtolower($item['type']) === 'movie' ? 'movie' : 'show' ?>/details?viewkey=<?= $item['id'] ?>&title=<?= urlencode(strtolower($item['title'] ))?>" class="card__cover">
                                    <img src="<?= $item['poster'] ?>" alt="<?= $item['title'] ?>">
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
                                    <a href="/<?= strtolower($item['type']) === 'movie' ? 'movie' : 'show' ?>/details?viewkey=<?= $item['id'] ?>&title=<?= urlencode(strtolower($item['title'] ))?>">
                                        <?= $item['title'] ?>
                                    </a>
                                </h3>
                                
                                <ul class="card__list">
                                    <li><?= $item['type'] ?></li>
                                    <li><?= $item['genre'] ?></li>
                                    <li><?= $item['release'] ?></li>
                                </ul>

                            </div>

                        <?php endforeach; ?>

                    </div>

                    <button class="section__nav section__nav--cards section__nav--prev" data-nav="#popular_movies" type="button">
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.25 7.72559L16.25 7.72559" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <button class="section__nav section__nav--cards section__nav--next" data-nav="#popular_movies" type="button">
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.75 7.72559L0.75 7.72559" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="section section--pb0">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="section__title"><a href="<?= $baseURL ?>/shows/popular">Popular Shows</a></h2>
            </div>

            <div class="col-12">
                <div class="section__carousel-wrap">

					<div class="section__carousel owl-carousel" id="popular_shows">
                        
                        <?php foreach (array_slice($data['popular_shows'], 0, 14) as $item): ?>

							<div class="card">
								
                                <a href="/<?= strtolower($item['type']) === 'movie' ? 'movie' : 'show' ?>/details?viewkey=<?= $item['id'] ?>&title=<?= urlencode(strtolower($item['title'] ))?>" class="card__cover">
                                    <img src="<?= $item['poster'] ?>" alt="<?= $item['title'] ?>">
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
                                    <a href="/<?= strtolower($item['type']) === 'movie' ? 'movie' : 'show' ?>/details?viewkey=<?= $item['id'] ?>&title=<?= urlencode(strtolower($item['title'] ))?>">
                                        <?= $item['title'] ?>
                                    </a>
                                </h3>
								
                                <ul class="card__list">
                                    <li><?= $item['type'] ?></li>
                                    <li><?= $item['genre'] ?></li>
                                    <li><?= $item['release'] ?></li>
								</ul>

							</div>

                        <?php endforeach; ?>

					</div>

					<button class="section__nav section__nav--cards section__nav--prev" data-nav="#popular_shows" type="button">
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.25 7.72559L16.25 7.72559" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <button class="section__nav section__nav--cards section__nav--next" data-nav="#popular_shows" type="button">
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.75 7.72559L0.75 7.72559" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="section section--pb0">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="section__title"><a href="<?= $baseURL ?>/movies/top_rated">Top Movies</a></h2>
            </div>

            <div class="col-12">
                <div class="section__carousel-wrap">

					<div class="section__carousel owl-carousel" id="top_movies">
                        
                        <?php foreach (array_slice($data['top_movies'], 0, 14) as $item): ?>

							<div class="card">
								
                                <a href="/<?= strtolower($item['type']) === 'movie' ? 'movie' : 'show' ?>/details?viewkey=<?= $item['id'] ?>&title=<?= urlencode(strtolower($item['title'] ))?>" class="card__cover">
                                    <img src="<?= $item['poster'] ?>" alt="<?= $item['title'] ?>">
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
                                    <a href="/<?= strtolower($item['type']) === 'movie' ? 'movie' : 'show' ?>/details?viewkey=<?= $item['id'] ?>&title=<?= urlencode(strtolower($item['title'] ))?>">
                                        <?= $item['title'] ?>
                                    </a>
                                </h3>
								
                                <ul class="card__list">
                                    <li><?= $item['type'] ?></li>
                                    <li><?= $item['genre'] ?></li>
                                    <li><?= $item['release'] ?></li>
								</ul>

							</div>

                        <?php endforeach; ?>

					</div>

					<button class="section__nav section__nav--cards section__nav--prev" data-nav="#top_movies" type="button">
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.25 7.72559L16.25 7.72559" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <button class="section__nav section__nav--cards section__nav--next" data-nav="#top_movies" type="button">
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.75 7.72559L0.75 7.72559" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="section section--pb0 section--gradient">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="section__title"><a href="<?= $baseURL ?>/shows/top_rated">Top Shows</a></h2>
            </div>

            <div class="col-12">
                <div class="section__carousel-wrap">

					<div class="section__carousel owl-carousel" id="top_shows">
                        
                        <?php foreach (array_slice($data['top_shows'], 0, 14) as $item): ?>

							<div class="card">
								
                                <a href="/<?= strtolower($item['type']) === 'movie' ? 'movie' : 'show' ?>/details?viewkey=<?= $item['id'] ?>&title=<?= urlencode(strtolower($item['title'] ))?>" class="card__cover">
                                    <img src="<?= $item['poster'] ?>" alt="<?= $item['title'] ?>">
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
                                    <a href="/<?= strtolower($item['type']) === 'movie' ? 'movie' : 'show' ?>/details?viewkey=<?= $item['id'] ?>&title=<?= urlencode(strtolower($item['title'] ))?>">
                                        <?= $item['title'] ?>
                                    </a>
                                </h3>
								
                                <ul class="card__list">
                                    <li><?= $item['type'] ?></li>
                                    <li><?= $item['genre'] ?></li>
                                    <li><?= $item['release'] ?></li>
								</ul>

							</div>

                        <?php endforeach; ?>

					</div>

					<button class="section__nav section__nav--cards section__nav--prev" data-nav="#top_shows" type="button">
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.25 7.72559L16.25 7.72559" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <button class="section__nav section__nav--cards section__nav--next" data-nav="#top_shows" type="button">
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.75 7.72559L0.75 7.72559" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="section__title"><b>Airing</b> Today</h2>
                <p class="section__text">Explore All the Latest Releases of Today and Dive into the Excitement Now!</p>
            </div>

            <div class="col-12">
                <div class="section__carousel-wrap">

                    <div class="section__interview owl-carousel" id="flixtv">

                        <?php foreach (array_slice($data['airing_today_shows'], 0, 7) as $item): ?>

                            <div class="interview">
                                <a href="/<?= strtolower($item['type']) === 'movie' ? 'movie' : 'show' ?>/details?viewkey=<?= $item['id'] ?>&title=<?= urlencode(strtolower($item['title'] ))?>" class="interview__cover">
                                    <img src="<?= $item['backdrop'] ?>" alt="<?= $item['title'] ?>">
                                    <span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <?= $item['genre'] ?>
                                    </span>
                                </a>
                                <h3 class="interview__title">
                                    <a href="/<?= strtolower($item['type']) === 'movie' ? 'movie' : 'show' ?>/details?viewkey=<?= $item['id'] ?>&title=<?= urlencode(strtolower($item['title'] ))?>">
                                        <?= $item['title'] ?>
                                    </a>
                                </h3>
                            </div>

                        <?php endforeach; ?>

                    </div>

                    <button class="section__nav section__nav--interview section__nav--prev" data-nav="#flixtv" type="button">
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.25 7.72559L16.25 7.72559" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    
                    <button class="section__nav section__nav--interview section__nav--next" data-nav="#flixtv" type="button">
                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.75 7.72559L0.75 7.72559" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                
                </div>
            </div>

        </div>
    </div>
</section>