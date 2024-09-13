<section class="section section--head section--head-fixed">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6">
                <h1 class="section__title section__title--head">FlixTV – Best Place for Movies</h1>
            </div>
            <div class="col-12 col-xl-6">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item"><a href="/">Home</a></li>
                    <li class="breadcrumb__item breadcrumb__item--active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section--pb0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="section__text section__text--small">
                    At <a href="/"><?= htmlspecialchars($appName) ?></a>, we offer a vast collection of movies and TV shows, all available to stream for free. From the newest releases to classic favorites, our platform brings you the best of entertainment without the hassle of subscriptions or hidden costs. Whether you're in the mood for a blockbuster hit or an indie gem, you'll find it here—ready to watch with just a click.
                </p>
                <p class="section__text section__text--small">
                    Designed with an amazing user interface and user experience, <a href="/"><?= htmlspecialchars($appName) ?></a> makes discovering and enjoying content effortless. Our clean, modern design ensures smooth navigation, quick access to your favorite genres, and a buffer-free streaming experience. We prioritize convenience, quality, and enjoyment, so you can focus on what matters most—watching great content.
                </p>
                <p class="section__text section__text--small">
                    This outlines the streamlined process through which our website displays data efficiently and effectively.
                </p>
            </div>
        </div>

        <div class="row row--grid">
            <div class="col-12 col-lg-4">
                <div class="step">
                    <span class="step__number">01</span>
                    <h3 class="step__title">Fetching Data</h3>
                    <p class="step__text">The platform pulls basic Movies and TV Shows data from the TMDb API. This ensures up-to-date information for all content available on the site.</p>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="step">
                    <span class="step__number">02</span>
                    <h3 class="step__title">Collecting Links</h3>
                    <p class="step__text">It then collects streaming links from third-party websites, providing free access to a variety of movies and shows with multiple viewing options.</p>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="step">
                    <span class="step__number">03</span>
                    <h3 class="step__title">Displaying Content</h3>
                    <p class="step__text">All data is compiled and displayed in a clean interface. Users can quickly browse, select a movie or show, and start streaming with ease.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--pb0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">Features</h2>
            </div>
        </div>

        <div class="row row--grid">
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="feature">
                    <span class="feature__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M21.53,7.15a1,1,0,0,0-1,0L17,8.89A3,3,0,0,0,14,6H5A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3h9a3,3,0,0,0,3-2.89l3.56,1.78A1,1,0,0,0,21,17a1,1,0,0,0,.53-.15A1,1,0,0,0,22,16V8A1,1,0,0,0,21.53,7.15ZM15,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8h9a1,1,0,0,1,1,1Zm5-.62-3-1.5V11.12l3-1.5Z"/>
                        </svg>
                    </span>
                    <h3 class="feature__title">Fast Streams</h3>
                    <p class="feature__text">Enjoy instant access to your favorite movies and TV shows with streaming speeds that keep your viewing experience smooth and uninterrupted.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="feature">
                    <span class="feature__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M21,2a1,1,0,0,0-1,1V5H18V3a1,1,0,0,0-2,0V4H8V3A1,1,0,0,0,6,3V5H4V3A1,1,0,0,0,2,3V21a1,1,0,0,0,2,0V19H6v2a1,1,0,0,0,2,0V20h8v1a1,1,0,0,0,2,0V19h2v2a1,1,0,0,0,2,0V3A1,1,0,0,0,21,2ZM6,17H4V15H6Zm0-4H4V11H6ZM6,9H4V7H6Zm10,9H8V13h8Zm0-7H8V6h8Zm4,6H18V15h2Zm0-4H18V11h2Zm0-4H18V7h2Z"/>
                        </svg>
                    </span>
                    <h3 class="feature__title">Fresh Content</h3>
                    <p class="feature__text">Access the latest releases and up-to-date information, ensuring that you always find new and trending content right at your fingertips.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="feature">
                    <span class="feature__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M20,2H10A3,3,0,0,0,7,5v7a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V5A3,3,0,0,0,20,2Zm1,10a1,1,0,0,1-1,1H10a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1H20a1,1,0,0,1,1,1ZM17.5,8a1.49,1.49,0,0,0-1,.39,1.5,1.5,0,1,0,0,2.22A1.5,1.5,0,1,0,17.5,8ZM16,17a1,1,0,0,0-1,1v1a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V15H4a1,1,0,0,0,0-2H3V12a1,1,0,0,1,1-1A1,1,0,0,0,4,9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H14a3,3,0,0,0,3-3V18A1,1,0,0,0,16,17ZM6,18H7a1,1,0,0,0,0-2H6a1,1,0,0,0,0,2Z"/>
                        </svg>
                    </span>
                    <h3 class="feature__title">Sleek Navigation</h3>
                    <p class="feature__text">Browse and discover new content effortlessly with our clean, user-friendly interface designed to enhance your overall viewing experience.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="feature">
                    <span class="feature__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M19.63,3.65a1,1,0,0,0-.84-.2,8,8,0,0,1-6.22-1.27,1,1,0,0,0-1.14,0A8,8,0,0,1,5.21,3.45a1,1,0,0,0-.84.2A1,1,0,0,0,4,4.43v7.45a9,9,0,0,0,3.77,7.33l3.65,2.6a1,1,0,0,0,1.16,0l3.65-2.6A9,9,0,0,0,20,11.88V4.43A1,1,0,0,0,19.63,3.65ZM18,11.88a7,7,0,0,1-2.93,5.7L12,19.77,8.93,17.58A7,7,0,0,1,6,11.88V5.58a10,10,0,0,0,6-1.39,10,10,0,0,0,6,1.39ZM13.54,9.59l-2.69,2.7-.89-.9a1,1,0,0,0-1.42,1.42l1.6,1.6a1,1,0,0,0,1.42,0L15,11a1,1,0,0,0-1.42-1.42Z"/>
                        </svg>
                    </span>
                    <h3 class="feature__title">Smart Search</h3>
                    <p class="feature__text">Quickly find exactly what you want with our intuitive search system, designed to make discovering new movies and shows fast and easy.</p>
                </div>
            </div>
        </div>
    </div>
</section>