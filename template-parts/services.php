<div id="services">
           
            <div class="container-fluid">
                <div class="row row-pictures">
                    <div class="col-3"><img class="img-fluid" src="<?= wp_get_attachment_url(get_theme_mod('svc-photo1')) ?>" alt="chairs picture"></div>
                    <div class="col-3"><img class="img-fluid" src="<?= wp_get_attachment_url(get_theme_mod('svc-photo2')) ?>" alt="woman picture"></div>
                    <div class="col-3">
                        <div class="col-title">
                            <h4>Private Parties</h4>
                        </div>
                    </div>
                    <div class="col-3"><img class="img-fluid" src="<?= wp_get_attachment_url(get_theme_mod('svc-photo3')) ?>" alt="party picture"></div>
                </div>
            </div>
</div>

<div id="services-details">
            <div class="container">
                <div class="row small-padding">
                    <h2>Corp. Parties</h2>
                    <p class="second-p"><?= get_option('svc-corp','Corp parties bloc') ?></p>
                </div>
            </div>
            <div>
                <img class="img-fluid" src="<?= wp_get_attachment_url(get_theme_mod('svc-photo4')) ?>" alt="crow-3 picture">
            </div>
        </div>