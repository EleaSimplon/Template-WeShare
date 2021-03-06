<?php

    include '../include/header.php';

?>

 <!-- ********** SECTION 1 HEADER WITH TEXT **********-->
 <section class="header-find">
    <div class="header-img">
        <div class="row">
            <div class="col s12 m6 l3 left">
                <img src="/images/cactus.png" alt="">
            </div>
            <div class="col s12 m6 l9">
                <h1><span>Need Inspiration ?</span><br>View our rated categories ...</h1>
            </div>
        </div>
    </div> 
</section>

<!-- ********** SECTION 2 SEARCH BAR **********-->
<section class="search-bar">
    <div class="container">
        <div class="row">
            <div class="col 6">
                <div class="nav-wrapper">
                    <form>
                        <div class="input-field">
                        <input id="search" type="Search" placeholder="search" required>
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                        </div>
                    </form>
                </div>
            </div>
        </div>   
    </div>
</section>
    

<!-- ********** SECTION 2 CATEGORIES + IMG LIKE TO PAGES **********-->
<section class="categories">
    <div class="row center">
        <div class="col s12 m6 l4">
            <h3><span>Restaurants</span></h3>
            <a href=""><img src="/images/1.jpg" alt=""></a>
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

<?php

    include '../include/footer.php';

?>