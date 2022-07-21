
(page.php)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Title</title>
</head>
    <body>

    <?php get_header() ?>
    <main >

        <div id="main-title" class="container">
            <div class="row small-padding">
                <h1><?php the_title() ?></h1>
            </div>
        </div>
        <div id="main-picture">
            <div class="container-fluid">
                <div class="row big-padding">
                    <img src="<?php echo get_bloginfo('template_url') ?>/src/images/png/1.png" alt="crowd-1 picture">
                </div>
            </div>
        </div>
        <div id="second-section">
            <div class="container-fluid">
                <div id="second-title" class="row">
                    <h2>About Us</h2>
                    <p class="second-p">
                        Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.
                    </p>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-5">
                        <img src="<?php echo get_bloginfo('template_url') ?>/src/images/png/2.png" alt="crowd-2 picture">
                    </div>
                    <div id="div-description" class="col-7">
                        <div style="width: 70%;">
                            <div>
                                <h3>Who are we?</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu convallis elit, at convallis magna.
                                </p>
                            </div>
                            <div>
                                <h3>Our vision</h3>
                                <p>
                                    Nullam faucibus interdum massa. Duis eget leo mattis, pulvinar nisi et, consequat lectus. Suspendisse commodo magna orci, id luctus risus porta pharetra. Fusce vehicula aliquet urna non ultricies.
                                </p>
                            </div>
                            <div>
                                <h3>Our mission</h3>
                                <p>
                                    Vivamus et viverra neque, ut pharetra ipsum. Aliquam eget consequat libero, quis cursus tortor. Aliquam suscipit eros sit amet velit malesuada dapibus. Fusce in vehicula tellus. Donec quis lorem ut magna tincidunt egestas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="partners">
            <div class="container">
                <div class="row small-padding">
                    <h2>Our Partners</h2>
                </div>
            </div>
            <div class="container">
                <div id="pictures-partners">
                    <div><img src="<?php echo get_bloginfo('template_url') ?>/src/images/svg/partner-1.svg" alt="logo partner"></div>
                    <div><img src="<?php echo get_bloginfo('template_url') ?>/src/images/svg/partner-2.svg" alt="logo partner"></div>
                    <div><img src="<?php echo get_bloginfo('template_url') ?>/src/images/svg/partner-3.svg" alt="logo partner"></div>
                    <div><img src="<?php echo get_bloginfo('template_url') ?>/src/images/svg/partner-4.svg" alt="logo partner"></div>
                    <div><img src="<?php echo get_bloginfo('template_url') ?>/src/images/svg/partner-5.svg" alt="logo partner"></div>
                    <div><img src="<?php echo get_bloginfo('template_url') ?>/src/images/svg/partner-6.svg" alt="logo partner"></div>
                </div>
            </div>
        </div>

        <div id="team">
            <div class="container">
                <div class="row small-padding">
                    <h2>Our Team</h2>
                </div>
            </div>
            <div class="container">
                <div class="row small-padding">
                    <div class="col-3">
                        <div>
                            <img src="<?php echo get_bloginfo('template_url') ?>/src/images/png/5.png" alt="picture team">
                        </div>
                        <div>
                            <h5>Sales Manages</h5>
                            <p>+33 1 53 31 25 23</p>
                            <p>sales@company.com</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div>
                            <img src="<?php echo get_bloginfo('template_url') ?>/src/images/png/6.png" alt="picture team">
                        </div>
                        <div>
                            <h5>Event planner</h5>
                            <p>+33 1 53 31 25 24</p>
                            <p>plan@company.com</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div>
                            <img src="<?php echo get_bloginfo('template_url') ?>/src/images/png/7.png" alt="picture team">
                        </div>
                        <div>
                            <h5>Designer</h5>
                            <p>+33 1 53 31 25 20</p>
                            <p>design@company.com</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div>
                            <img src="<?php echo get_bloginfo('template_url') ?>/src/images/png/8.png" alt="picture team">
                        </div>
                        <div>
                            <h5>CEO</h5>
                            <p>+33 1 53 31 25 25</p>
                            <p>ceo@company.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="services">
            <div class="container">
                <div class="row small-padding">
                    <h2>Our Services</h2>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row row-pictures">
                    <div class="col-3"><img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/src/images/png/12.png" alt="chairs picture"></div>
                    <div class="col-3"><img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/src/images/png/11.png" alt="woman picture"></div>
                    <div class="col-3">
                        <div class="col-title">
                            <h4>Private Parties</h4>
                        </div>
                    </div>
                    <div class="col-3"><img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/src/images/png/3.png" alt="party picture"></div>
                </div>
            </div>
        </div>

        <div id="services-details">
            <div class="container">
                <div class="row small-padding">
                    <h2>Corp. Parties</h2>
                    <p class="second-p">Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution. </p>
                </div>
            </div>
            <div>
                <img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/src/images/png/9.png" alt="crow-3 picture">
            </div>
        </div>

    </main>

    <?php  get_footer() ?>

    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<style>

    @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;600&display=swap');

    :root {
        --dark-blue: #050A3A;
        --gray: #8A8A8A
    }

    body {
        margin: 0;
        font-weight: 300;
        color: var(--gray);
        font-family: "Mulish", serif;
    }

    h1, h2, h3, h4, h5 {
        color: var(--dark-blue);
    }

    h1 {
        font-size: 58px;
        padding-bottom: 3rem;
        font-weight: 600;
    }

    h2 {
        font-size: 44px;
        font-weight: 600;
        letter-spacing: 3px;
    }

    h3 {
        font-size: 36px;
    }

    h4 {
        font-size: 28px;
    }

    h5 {
        font-size: 24px;
    }

    .small-padding {
        padding: 2rem 4rem;
        align-items: center;
    }

    .logo-invert {
        filter: invert(100%);
    }




    main > div {
        padding: 2rem 0;
    }


    #site-header .row .col:first-child img {
        width: 18%
    }
    #site-header .row .col:nth-child(2) {
        text-align: right;
    }

    #side-header:focus {
        background-color: red;
    }



    #main-picture .row:first-child {
        margin-left: auto;
        max-width: 100%;
    }

    #main-picture img {
        width: 80%;
        padding: 0;
        margin-left: auto;
    }




    #second-section > .container-fluid {
        padding: 0;
    }

    #second-section > .container-fluid:nth-child(2) .row {
        max-width: 100%;
    }

    #second-section img {
        width: 75%;
    }

    #second-section #div-description {
        display: flex;
        align-items: center;
    }

    #second-section #div-description p {
        margin-top: 1rem;
        line-height: 1.8rem;
        font-size: 14px;
    }

    #second-section #div-description div:not(:first-child) h3 {
        margin-top: 2rem;
    }

    .second-p {
        font-size: 18px;
        line-height: 2rem;
        margin-top: 0.5rem;
    }

    #second-section #second-title {
        width: 45%;
        margin-left: 20%;
        padding-bottom: 4rem;
        padding-top: 1rem;
    }



    #services .row-pictures,
    #services .row-pictures .col-3 {
        overflow: hidden;
        padding: 0;
    }

    #services .col-title {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }

    #services .col-title h4 {
        margin-top: 40%;
        position: relative;
        text-decoration: none;
    }

    #services .col-title h4::after {
        background: #f00;
        background: linear-gradient(to right, #FFD0A8, #FF4FC0);
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        height: 4px;
        width: 100%;
        top: 2.3rem;
    }

    #services img {
        padding: 0;
        width: -webkit-fill-available;
    }

    #services-details {
        padding-bottom: 0;
    }

    #services-details .container {
        padding-bottom: 4rem;
    }

    #services-details .row {
        width: 60%;
    }



    #pictures-partners {
        display: flex;
        padding: 2rem 4rem;
        justify-content: space-between;
        align-items: center;
    }

    #pictures-partners img {
        max-width: 80%;
    }



    #team img {
        width: 98%;
    }

    #team h5 {
        margin-top: 2rem;
        margin-bottom: 1.5rem;
    }

    #team p {
        margin-bottom: 0.5rem;
        font-size: 14px;
    }

    #site-footer {
        background-color: var(--dark-blue);
        color: white;
    }

    #site-footer h5 {
        color: white;
        font-size: 20px;
    }

    #site-footer .row:first-child {
        height: 40vh;
        padding-top: 3rem;
        padding-bottom: 0;
    }

    #site-footer .row:nth-child(2) {
        padding-bottom: 3rem;
    }

    #site-footer  .row:first-child .col-6 {
        margin-bottom: auto;
    }

    #site-footer  .row:first-child .col-3 {
        text-align: right;
    }

    #site-footer  .row:nth-child(2) .col:nth-child(2) div {
        width: 12%;
        margin-left: auto;
        display: flex;
        justify-content: space-between;
    }







</style>