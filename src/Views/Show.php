<section class="section section--head section--head-fixed section--gradient section--details-bg">

<?php $show = $data['show_details']; ?>

		<div class="section__bg" data-bg="<?= htmlspecialchars($show['backdrop']); ?>"></div>

        <div class="container">
			<div class="article">

                    <div class="row">

					    <div class="col-12 col-xl-8">
                            <div class="article__content">
                                <h1><?= htmlspecialchars($show['title']); ?></h1>
                                <ul class="list">
                                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> <?= htmlspecialchars($show['rating']); ?></li>
                                    <li>TV</li>
                                    <li><?= htmlspecialchars($show['genre']); ?></li>
                                    <li><?= htmlspecialchars($show['release']); ?></li>
                                </ul>
                                <p><?= htmlspecialchars($show['overview']); ?></p>
                            </div>
                        </div>

                        <div class="col-12 col-xl-8">
                            <div tabindex="0" class="plyr plyr--full-ui plyr--video plyr--html5 plyr--fullscreen-enabled plyr--paused plyr--stopped plyr--pip-supported plyr--captions-enabled plyr__poster-enabled">
                                <div class="plyr__video-wrapper">
                                    <iframe id="player" src="<?= $embedURL . '/tv/' . $show['id'] ?>" allowfullscreen autoplay frameborder="0" style="border: 0; aspect-ratio: 16 / 9;" loading="auto" ></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-8">
                            
                        <div class="categories">
    <h3 class="categories__title">Genres</h3>
    <?php if (!empty($show['genres'])): ?>
        <?php 
        // Convert the comma-separated genres string into an array
        $genresArray = explode(', ', $show['genres']);
        ?>
        <?php foreach ($genresArray as $genre): ?>
            <a href="/search?genre=<?= urlencode($genre); ?>" class="categories__item"><?= htmlspecialchars($genre); ?></a>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No genres available</p>
    <?php endif; ?>
</div>


                            <div class="share">
                                <h3 class="share__title">Share</h3>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= htmlspecialchars($baseURL) . '/movie/details?viewkey=' . urlencode($show['id']) . '&title=' . urlencode(($show['title'])) ?>" class="share__link share__link--fb"><svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.56341 16.8197V8.65888H7.81615L8.11468 5.84663H5.56341L5.56724 4.43907C5.56724 3.70559 5.63693 3.31257 6.69042 3.31257H8.09873V0.5H5.84568C3.1394 0.5 2.18686 1.86425 2.18686 4.15848V5.84695H0.499939V8.6592H2.18686V16.8197H5.56341Z"/></svg> share</a>
                                <a href="https://twitter.com/intent/tweet?url=<?= urlencode($baseURL . '/movie/details?viewkey=' . $show['id']) ?>&text=<?= urlencode($show['title']) ?>" class="share__link share__link--tw"><svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.55075 3.19219L7.58223 3.71122L7.05762 3.64767C5.14804 3.40404 3.47978 2.57782 2.06334 1.1902L1.37085 0.501686L1.19248 1.01013C0.814766 2.14353 1.05609 3.34048 1.843 4.14552C2.26269 4.5904 2.16826 4.65396 1.4443 4.38914C1.19248 4.3044 0.972149 4.24085 0.951164 4.27263C0.877719 4.34677 1.12953 5.31069 1.32888 5.69202C1.60168 6.22165 2.15777 6.74068 2.76631 7.04787L3.28043 7.2915L2.67188 7.30209C2.08432 7.30209 2.06334 7.31268 2.12629 7.53512C2.33613 8.22364 3.16502 8.95452 4.08833 9.2723L4.73884 9.49474L4.17227 9.8337C3.33289 10.321 2.34663 10.5964 1.36036 10.6175C0.888211 10.6281 0.5 10.6705 0.5 10.7023C0.5 10.8082 1.78005 11.4014 2.52499 11.6344C4.75983 12.3229 7.41435 12.0264 9.40787 10.8506C10.8243 10.0138 12.2408 8.35075 12.9018 6.74068C13.2585 5.88269 13.6152 4.315 13.6152 3.56293C13.6152 3.07567 13.6467 3.01212 14.2343 2.42953C14.5805 2.09056 14.9058 1.71983 14.9687 1.6139C15.0737 1.41264 15.0632 1.41264 14.5281 1.59272C13.6362 1.91049 13.5103 1.86812 13.951 1.39146C14.2762 1.0525 14.6645 0.438131 14.6645 0.258058C14.6645 0.22628 14.5071 0.279243 14.3287 0.374576C14.1398 0.480501 13.7202 0.639389 13.4054 0.734722L12.8388 0.914795L12.3247 0.565241C12.0414 0.374576 11.6427 0.162725 11.4329 0.0991699C10.8978 -0.0491255 10.0794 -0.0279404 9.59673 0.14154C8.2852 0.618204 7.45632 1.84694 7.55075 3.19219Z"/></svg> tweet</a>
                                <a href="https://api.whatsapp.com/send?text=<?= urlencode($show['title'] . ' ' . $baseURL . '/movie/details?viewkey=' . $show['id']) ?>" class="share__link share__link--whatsapp"><svg width="16" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/></svg> share</a>
                            </div>

                        </div>

                    </div>

                    <div class="row"></div>

            </div>
        </div>

</section>