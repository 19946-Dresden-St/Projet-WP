<?php get_header(); ?>
(index.php) (par défaut la "poste page" (définie coté interface wordpress) = index ? )


<?php
    include('template-parts/post-list.php');
?>

<?php 
echo "contenu de la plage :";
the_content();
 ?>
<?php get_footer(); ?>


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