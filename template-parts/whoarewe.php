
            <div class="container-fluid">
                <div class="row">
                    <div class="col-5">
                        <img src="<?= wp_get_attachment_url(get_theme_mod('desc-bannerleft')) ?>" alt="crowd-2 picture">
                    </div>
                    <div id="div-description" class="col-7">
                        <div style="width: 70%;">
                            <div>
                                <h3>Who are we?</h3>
                                <p>
                                    <?= get_option('desc-whoarewe','Who you are') ?>
                                </p>
                            </div>
                            <div>
                                <h3>Our vision</h3>
                                <p>
                                    <?= get_option('desc-ourvision','our vision') ?>
                                </p>
                            </div>
                            <div>
                                <h3>Our mission</h3>
                                <p>
                                    <?= get_option('desc-ourmission','our mission') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>