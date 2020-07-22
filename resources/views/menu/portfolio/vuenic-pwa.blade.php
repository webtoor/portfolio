
<div id="ajax-page" class="ajax-page-content">
    <div class="ajax-page-wrapper">
        <div class="ajax-page-nav">
            <div class="nav-item ajax-page-prev-next">
                <a class="ajax-page-load" href="/hiber-mobile"><i class="lnr lnr-chevron-left"></i></a>
                <a class="ajax-page-load" href="/hiber-api"><i class="lnr lnr-chevron-right"></i></a>
            </div>
            <div class="nav-item ajax-page-close-button">
                <a id="ajax-page-close-button" href="#"><i class="lnr lnr-cross"></i></a>
            </div>
        </div>

        <div class="ajax-page-title">
            <h1>Vuenic PWA</h1>
        </div>

        <div class="row">
            <div class="col-sm-7 col-md-7 portfolio-block">
                <div class="owl-carousel portfolio-page-carousel">
                    <div class="item">
                        <img src="images/portfolio/hiber-droner/1_blur.png" alt="" />
                    </div>
                    <div class="item">
                        <img src="images/portfolio/hiber-droner/2_blur.png" alt="" />
                    </div>
                    <div class="item">
                        <img src="images/portfolio/hiber-droner/3_blur.png" alt="" />
                    </div>
                    <div class="item">
                        <img src="images/portfolio/hiber-droner/4_blur.png" alt="" />
                    </div>
                    <div class="item">
                        <img src="images/portfolio/hiber-droner/5.png" alt="" />
                    </div>
                    <div class="item">
                        <img src="images/portfolio/hiber-droner/6_blur.png" alt="" />
                    </div>
                    <div class="item">
                        <img src="images/portfolio/hiber-droner/7.png" alt="" />
                    </div>
                </div>

             

                <script type="text/javascript">
                    jQuery(document).ready(function($){

                        $('.portfolio-page-carousel').owlCarousel({
                            smartSpeed:1200,
                            items: 1,
                            loop: true,
                            dots: true,
                            nav: true,
                            navText: false,
                            margin: 10
                        });

                    });
                </script>
            </div>

            <div class="col-sm-5 col-md-5 portfolio-block">
                <!-- Project Description -->
                <div class="project-description">
                    <div class="block-title">
                        <h3>Description</h3>
                    </div>
                    <ul class="project-general-info">
                        <li><p><i class="fa fa-user"></i><a href="https://apps.vuenic.com" target=”_blank” style="color:#666666">Vuenic Service</a></p></li>
                        <li><p><i class="fa fa-calendar"></i>January 2020 - Now</p></li>
                    </ul>

                    <p></p>
                    <!-- /Project Description -->

                    <!-- Technology -->
                    <div class="tags-block">
                        <div class="block-title">
                            <h3>Technology</h3>
                        </div>
                        <ul class="tags">
                            <li><a>Angular</a></li>
                            <li><a>Ionic Framework v.5.x.x</a></li>
                        </ul>
                    </div>
                    <!-- /Technology -->

                    <!-- Share Buttons -->
                    <div class="btn-group share-buttons">
                        <div class="block-title">
                            <h3>Share</h3>
                        </div>
                        <a href="#" class="btn"><i class="fab fa-facebook"></i> </a>
                        <a href="#" class="btn"><i class="fab fa-twitter"></i> </a>
                        <a href="#" class="btn"><i class="fab fa-dribbble"></i> </a>
                    </div>
                    <!-- /Share Buttons -->
                </div>
                <!-- Project Description -->
            </div>
        </div>
    </div>
</div>
