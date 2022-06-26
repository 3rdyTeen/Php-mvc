<?php $this->view('includes/head', $data)?>
<?php $this->view('includes/preloader')?>
<?php $this->view('includes/header')?>

        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 u-s-m-b-30">
                                <div class="empty">
                                    <div class="empty__wrap">

                                        <span class="empty__big-text">404</span>

                                        <span class="empty__text-1">Looks like you're in wrong place.</span>

                                        <a class="empty__redirect-link btn--e-brand" href="home">GO TO HOME</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 1 ======-->
        </div>
        <!--====== End - App Content ======-->

<?php $this->view('includes/footer')?>