<section class="section section--head section--head-fixed">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6">
                <h1 class="section__title section__title--head">Categories</h1>
            </div>

            <div class="col-12 col-xl-6">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item"><a href="/">Home</a></li>
                    <li class="breadcrumb__item breadcrumb__item--active">Categories</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section--pb0">
    <div class="container">
        <div class="row row--grid">
            <?php foreach ($data as $genre): ?>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <a href="/search?genre=<?php echo urlencode($genre['genre']); ?>" class="category">
                        <div class="category__cover">
                            <img src="<?php echo htmlspecialchars($genre['backdrop']); ?>" alt="<?php echo htmlspecialchars($genre['genre']); ?>"  loading="lazy">
                        </div>
                        <h3 class="category__title"><?php echo htmlspecialchars($genre['genre']); ?></h3>
                        <span class="category__value"><?php echo htmlspecialchars($genre['items']); ?></span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>