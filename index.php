<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <title>Title</title>
</head>


<?php get_header(); ?>


<?php
    // include('template-parts/post-list.php');

    // echo "<div>";
    // // include ('template-parts/post-tiny-list.php');
    // echo "</div>";
?>



<main>

    <div id="main-title" class="container">
        <div class="row small-padding">
            <h1>Blog.</h1>
        </div>
    </div>

    <div id="content" class="container">
        <div class="row small-padding">
            <div>
                <div>
                    <h5>Search</h5>
                    <div class="input-group flex-nowrap">
                        <input id="input-search" type="text" class="form-control" placeholder="Type to search" aria-describedby="addon-wrapping">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                    </div>
                </div>
                <div>
                <?php include ('template-parts/post-tiny-list.php'); ?>
                    <!-- <h5>Recent posts</h5>
                    <div class="recent-post">
                        <div></div>
                        <div>
                            <p>
                                Mauris venenatis fermentum pellentesque.
                            </p>
                            <p>
                                12 May, 2022
                            </p>
                        </div>
                    </div> -->
                </div>
                <div>
                    <h5>Archives</h5>
                    <ul class="custom-ul">
                        <li>
                            <a href="">May 2022</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5>Categories</h5>
                    <ul class="custom-ul">
                        <li>
                            <a href="">Advertising</a>
                        </li>
                        <li>
                            <a href="">Web developing</a>
                        </li>
                        <li>
                            <a href="">Graphic design</a>
                        </li>
                        <li>
                            <a href="">HTML</a>
                        </li>
                        <li>
                            <a href="">Creative</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5>Tags</h5>
                    <div id="tags-container">
                        <a href=""><button type="button" class="btn btn-light">Web</button></a>
                        <a href=""><button type="button" class="btn btn-light">Twitter</button></a>
                        <a href=""><button type="button" class="btn btn-light">App</button></a>
                    </div>
                </div>
            </div>
            <div>
                <?php include ('template-parts/post-list.php'); ?>
            </div>
            </div>
        </div>
    </div>

</main>


<?php get_footer(); ?>




<!-- 






 -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script>
    function changeIcon() {
        var logo1 = document.getElementById("nav-open");
        var logo2 = document.getElementById("nav-close");
        if ( logo2.style.display === "none" ) {
            logo1.setAttribute("style", "display: none");
            logo2.setAttribute("style", "display: block");
        } else {
            logo1.setAttribute("style", "display: block");
            logo2.setAttribute("style", "display: none");
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script>
    function changeIcon() {
        var logo1 = document.getElementById("nav-open");
        var logo2 = document.getElementById("nav-close");
        if ( logo2.style.display === "none" ) {
            logo1.setAttribute("style", "display: none");
            logo2.setAttribute("style", "display: block");
        } else {
            logo1.setAttribute("style", "display: block");
            logo2.setAttribute("style", "display: none");
        }
    }
</script>
<style>

    @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;600;800&display=swap');

    :root {
        --dark-blue: #050A3A;
        --gray: #8A8A8A;
        --middle-gray: #ADADAD;
        --light-gray: #E4E4E4;
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



    #site-header {
        transition: background-color 0.4s;
    }

    #site-header .row {
        width: 100%;
    }

    #site-header button {
        background-color: unset;
        border: none;
    }

    #site-header .row .col:first-child img {
        width: 18%
    }
    #site-header .row .col:nth-child(2) {
        text-align: right;
    }

    #site-header:hover {
        background-color: var(--dark-blue);
    }

    #site-header:hover img {
        filter: invert(100%);
    }

    #navbarToggleExternalContent {
        background-color: var(--dark-blue);
    }

    #navbarToggleExternalContent .row {
        display: flex;
        align-items: flex-start;
        padding-top: 0;
    }

    #search-link{
        text-decoration: none;
        color: white;
        font-size: 20px;
        font-weight: bold;
    }

    #site-header i {
        color: white;
    }

    #site-header li {
        list-style: none;
    }

    #site-header li a {
        color: white;
        font-size: 44px;
        font-weight: 600;
        text-decoration: none;
    }

    #navbarToggleExternalContent a:hover{
        border-bottom: 4px solid transparent;
        border-image: linear-gradient(0.25turn, #FFD0A8, #FF4FC0);
        border-image-slice: 1;
        width:100%;
    }

    #content {
        padding-top: 0;
    }

    #content .small-padding {
        display: flex;
        align-items: flex-start;
    }

    #content > div > div:first-child {
        width: 35%;
    }

    #content > div > div:first-child > div {
        padding-right: 1rem;
        margin: 3rem 0;
    }

    #content > div > div:first-child > div:first-child {
        margin-top: 0;
    }

    #content > div > div:first-child h5 {
        font-size: 16px;
        font-weight: 600;
    }

    #input-search,
    #addon-wrapping {
        padding-top: 0.75rem;
        padding-left: 0;
        padding-right: 0;
        background-color: transparent;
        border: 0;
        border-radius: 0;
        border-bottom: 1px solid var(--light-gray);
        color: var(--middle-gray);
    }

    #input-search::placeholder {
        color: var(--middle-gray) !important;
    }

    .recent-post {
        display: flex;
        margin: 1.5rem 0;
    }

    .recent-post > div:first-child {
        height: 85px;
        width: 85px;
        background-image: url(assets/images/png/3.png);
        background-size: cover;
        background-position: center;
    }

    .recent-post > div:last-child {
        padding-left: 1rem;
    }

    .recent-post > div:last-child > p:last-child {
        font-size: 12px;
        color: var(--middle-gray);
    }

    .custom-ul {
        list-style: none;
        padding-left: 0;
    }

    .custom-ul li {
        padding: 0.75rem 0;
    }

    .custom-ul li::before {
        content: "\2022";
        color: #FF4FC0;
        width: 1em;
    }

    .custom-ul a {
        color: var(--gray);
        text-decoration: none;
        padding-left: 0.25rem;
    }

    #tags-container {
        margin-top: 2rem;
    }

    #tags-container button {
        border-radius: unset;
        color: var(--gray);
        font-size: 12px;
        padding-left: 0.4rem;
        padding-right: 0.4rem;
        margin-right: 0.5rem;
    }


    #content > div > div:last-child {
        width: 65%;
    }

    #content .card {
        border: none;
        margin-bottom: 1.5rem;
    }

    #content .card-body {
        padding: 0;
    }

    #content > div:last-child img {
        border-radius: unset;
    }


    .img-container {
        height: 250px;
        background-image: url(assets/images/png/3.png);
        background-size: cover;
        background-position: center;
    }

    .card-text {
        line-height: 1.75;
        font-size: 15px;
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
        height: 20vh;
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