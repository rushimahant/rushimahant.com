@extends('app')
@section('content')
    <div class="page-single page-layout">
        <!-- .hentry -->
        <article class="page hentry">
            <!-- .entry-header -->
            <header class="entry-header">
                <h1 class="entry-title">portfolio</h1>
            </header>
            <!-- .entry-header -->
            <!-- .entry-content -->
            <div class="entry-content">
                <!--FILTERS-->
                <ul id="filters" class="filters">
                    <li class="current">
                        <a href="#" data-filter="*">all</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".media">Media</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".illustration">Illustration</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".video">Video</a>
                    </li>
                </ul>
                <!--FILTERS-->
                <!-- PORTFOLIO -->
                <div class="portfolio-items media-grid masonry" data-layout="masonry" data-item-width="340">
                    <!-- portfolio-item -->
                    <div class="media-cell illustration hentry">
                        <div class="media-box">
                            <img src="images/portfolio/01.jpg" alt="portfolio-post">
                            <div class="mask"></div>
                            <a href="portfolio-item-01.html" class="ajax"></a>
                        </div>
                        <div class="media-cell-desc">
                            <h3>Personal Cv Project</h3>
                            <p class="category">an illustration work</p>
                        </div>
                    </div>
                    <!-- portfolio-item -->
                    <!-- portfolio-item -->
                    <div class="media-cell media hentry">
                        <div class="media-box">
                            <img src="images/portfolio/02.jpg" alt="portfolio-post">
                            <div class="mask"></div>
                            <a href="portfolio-item-02.html" class="ajax"></a>
                        </div>
                        <div class="media-cell-desc">
                            <h3>On The Desert</h3>
                            <p class="category">an illustration work</p>
                        </div>
                    </div>
                    <!-- portfolio-item -->
                    <!-- portfolio-item - lightbox video -->
                    <div class="media-cell illustration video hentry">
                        <div class="media-box">
                            <img src="images/portfolio/03.jpg" alt="portfolio-post">
                            <div class="mask"></div>
                            <!-- lightbox - video -->
                            <a href="https://player.vimeo.com/video/97102654?title=0&byline=0&portrait=0"
                               title="Lihtbox Title" class="lightbox mfp-iframe"></a>
                            <!-- lightbox - video -->
                        </div>
                        <div class="media-cell-desc">
                            <h3>Sleepy Games</h3>
                            <p class="category">lightbox video</p>
                        </div>
                    </div>
                    <!-- portfolio-item - lightbox video -->
                    <!-- portfolio-item - lightbox image -->
                    <div class="media-cell media image hentry">
                        <div class="media-box">
                            <img src="images/portfolio/04.jpg" alt="portfolio-post">
                            <div class="mask"></div>
                            <!-- lightbox - image -->
                            <a href="images/portfolio/lightbox-01.jpg" title="an illustration by Vasili Tkach"
                               class="lightbox"></a>
                            <!-- lightbox - image -->
                        </div>
                        <div class="media-cell-desc">
                            <h3>World War X</h3>
                            <p class="category">ligthbox image</p>
                        </div>
                    </div>
                    <!-- portfolio-item - lightbox image -->
                    <!-- portfolio-item - lightbox soundcloud -->
                    <div class="media-cell illustration audio hentry">
                        <div class="media-box">
                            <img src="images/portfolio/05.jpg" alt="portfolio-post">
                            <div class="mask"></div>
                            <!-- lightbox - soundcloud : url copied from share/embed code -->
                            <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/210862270&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"
                               title="Soundcloud embed" class="lightbox mfp-iframe"></a>
                            <!-- lightbox - soundcloud -->
                        </div>
                        <div class="media-cell-desc">
                            <h3>Empty Battery</h3>
                            <p class="category">lightbox soundcloud</p>
                        </div>
                    </div>
                    <!-- portfolio-item - lightbox soundcloud -->
                    <!-- portfolio-item - lightbox gallery -->
                    <div class="media-cell media image hentry">
                        <div class="media-box">
                            <img src="images/portfolio/06.jpg" alt="portfolio-post">
                            <div class="mask"></div>
                            <!-- lightbox - gallery -->
                            <a href="images/portfolio/lightbox-02.jpg" class="lightbox" title="This is title"></a>
                            <a href="images/portfolio/lightbox-03.jpg" class="lightbox"></a>
                            <a href="images/portfolio/lightbox-04.jpg" class="lightbox" title="Dog have dreams"></a>
                            <!-- lightbox - gallery -->
                        </div>
                        <div class="media-cell-desc">
                            <h3>Wizard Adventure</h3>
                            <p class="category">lightbox gallery</p>
                        </div>
                    </div>
                    <!-- portfolio-item - lightbox gallery -->
                    <!-- portfolio-item - custom url -->
                    <div class="media-cell illustration url hentry">
                        <div class="media-box">
                            <img src="images/portfolio/07.jpg" alt="portfolio-post">
                            <div class="mask"></div>
                            <a href="http://themeforest.net/user/pixelwars" target="_blank"></a>
                        </div>
                        <div class="media-cell-desc">
                            <h3>Shinny Robot</h3>
                            <p class="category">an illustration work</p>
                        </div>
                    </div>
                    <!-- portfolio-item - custom url -->
                    <!-- portfolio-item -->
                    <div class="media-cell media hentry">
                        <div class="media-box">
                            <img src="images/portfolio/08.jpg" alt="portfolio-post">
                            <div class="mask"></div>
                            <a href="portfolio-item-03.html" class="ajax"></a>
                        </div>
                        <div class="media-cell-desc">
                            <h3>Virus Protection</h3>
                            <p class="category">an illustration work</p>
                        </div>
                    </div>
                    <!-- portfolio-item -->
                    <!-- portfolio-item -->
                    <div class="media-cell media hentry">
                        <div class="media-box">
                            <img src="images/portfolio/09.jpg" alt="portfolio-post">
                            <div class="mask"></div>
                            <a href="portfolio-item-01.html" class="ajax"></a>
                        </div>
                        <div class="media-cell-desc">
                            <h3>Red Diamond</h3>
                            <p class="category">an illustration work</p>
                        </div>
                    </div>
                    <!-- portfolio-item -->
                </div>
                <!-- PORTFOLIO -->
            </div>
            <!-- .entry-content -->
        </article>
        <!-- .hentry -->
    </div>
    <!-- .page-single -->
@endsection