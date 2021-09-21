<?php

include 'include/header.php';

?>

<!-- ********** SECTION 1 HEADER IMG PARALLAX EFFECT  **********-->
<section class="header-section">

    <div class="header-img">

        <div class="row">
            <div class="col s12 m6 l4 right">
                <h1><span>WE SHARE</span><br>Experiences of travelling</h1>
                <div class="mouse">
                    <span></span>
                </div>
            </div>
        </div>
        
    </div> 

</section>

<!-- ********** SECTION 2 TOP RATED PLACES **********-->

<section class="top-rated pt-5 pb-5">

    
    <!-- **** CAROUSEL ****-->
    <div class="carousel" data-flickity='{ "groupCells": true }'>

    <?php for ($i=0; $i < 9; $i++) { ?> 

        <div class="carousel-cell">
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/1.jpg">
                        </div>
                        <div class="card-content">
                            <h5>TITLE</h5>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php    } ?>
    </div>

</section>


<!-- ********** SECTION 3 SHARE OR FIND **********-->
<section class="share-find">

    <div class="container">
        <div class="row">
            <div class="col s12 m6 l6 share">
                <a href="/pages/share.php">
                    <img src="/images/round.png">
                    <h1><span>SHARE</span></h1>
                </a>
            </div>
            <div class="col s12 m6 l6 find">
                <a href="/pages/find.php">
                    <img src="/images/round.png">
                    <h1><span>FIND</span></h1>
                </a>
            </div>
        </div>
    </div>

    
</section>


<?php

    include 'include/footer.php';

?>