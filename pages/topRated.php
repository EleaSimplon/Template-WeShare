<?php

    include '../include/header.php';

?>

    <!-- ********** SECTION 1 HEADER WITH TEXT **********-->
    <section class="header-tr">

        <div class="header-img">

            <div class="row">
                <div class="col s12 m6 l3 left">
                    <img src="/images/badge.png" alt="">
                </div>
                <div class="col s12 m6 l9 right">
                    <h1><span>WE SHARE</span><br>The best places</h1>
                    <h5>
                    Travel in 2020 looked different, to say the least.</br>
                    </br>
                    We stayed a little closer to home, hit the open road, took to the great outdoors, and saw our own hometowns in a new light.</br>And thousands of travelers everywhere shared reviews and opinions based on those places and moments that left an impression.</br>
                    </br>
                    Our <span>Travelers’ Choice Best of the Best</span> list is drawn from the experiences of the best experts possible: Real travelers who’ve been there before.</br>
                    </br>
                    Here, the most popular, most loved destinations, hotels, restaurants, things to do, and beyond.
                </h5>
                </div>
            </div>
            
        </div> 
    </section>

    <!-- ********** SECTION 2 CATEGORIES + IMG LIKE TO PAGES **********-->
    <section class="categories">
        
        <div class="row center">
            <h2>The best of the best - Top 10</h2>
            <div class="col s12 m6 l4">
                <h3><span>Restaurants</span></h3>
                <img src="/images/1.jpg" alt="">
            </div>
            <div class="col s12 m6 l4">
                <h3><span>Activities</span></h3>
                <img src="/images/quad.jpg" alt="">
            </div>
            <div class="col s12 m6 l4">
                <h3><span>Destinations</span></h3>
                <img src="/images/about.jpg" alt="">
            </div>
        </div>

    </section>

    <!-- ********** SECTION 2 CATEGORIES + IMG LIKE TO PAGES **********-->
    <section class="top-10">
        <h5 class="center inspi">Need inspiration? See more Travelers’ Choice Awards. . .</h5>
        <div class="row">        
            <h3 class="center inspi">Restaurants</h3>
            <?php for ($i=0; $i < 10; $i++) { ?>    
                <div class="col s12 m8 l6">
                    <div class="card">
                        <div class="card-image">
                            <img src="/images/1.jpg">
                            <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            <?php    } ?>
        </div>

        <div class="row">        
            <h3 class="center inspi">Activities</h3>
            <?php for ($i=0; $i < 10; $i++) { ?>    
                <div class="col s12 m8 l6">
                    <div class="card">
                        <div class="card-image">
                            <img src="/images/quad.jpg">
                            <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            <?php    } ?>
        </div>

        <div class="row">        
            <h3 class="center inspi">Destinations</h3>
            <?php for ($i=0; $i < 10; $i++) { ?>    
                <div class="col s12 m8 l6">
                    <div class="card">
                        <div class="card-image">
                            <img src="/images/boat.jpg">
                            <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            <?php    } ?>
        </div>
    </section>
    

<?php

    include '../include/footer.php';

?>