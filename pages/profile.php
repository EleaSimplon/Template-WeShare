<?php

include '../include/header.php';

?>

    <!-- ********** SECTION 1 TABS USER PROFILE  **********-->
    <section style="margin-top:5rem" class="user-profile">

        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#test1">Informations</a></li>
                    <li class="tab col s3"><a href="#test2">Reviews</a></li>
                </ul>
            </div>
            <div id="test1" class="col s12">
                
                <div class="container">
                    <div class="card my-profile">
                        <div class="row">
                            <div class="col 12 center">
                                <img style="width: 5rem" src="/images/round.png">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col 12">
                                <h3 class="text-center">USER NAME</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col 12">
                                <h3>DESCRIPTION</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, in? Debitis suscipit ab fugiat. Dolorem sunt, ut mollitia fugiat non expedita quam, quisquam necessitatibus, dicta error est earum nobis adipisci.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col 12">
                                <h3>Email</h3>
                                <input type="email" value="userName@gmail.com" name="email" id="inputEmail" class="form-control" autocomplete="email" required disabled autofocus>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>

            <div id="test2" class="col s12">
                <h5>Your reviews</h5>
                <ul class="collapsible">
                <li>
                    <div class="collapsible-header">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star_border</i>
                        TITLE REVIEW
                    </div>
                    <div class="collapsible-body"><span>DESCRIPTION</span></div>
                </li>
                <li>
                    <div class="collapsible-header">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star_border</i>
                        TITLE REVIEW
                    </div>
                    <div class="collapsible-body"><span>DESCRIPTION</span></div>
                </li>
                <li>
                    <div class="collapsible-header">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star_border</i>
                        TITLE REVIEW
                    </div>
                    <div class="collapsible-body"><span>DESCRIPTION</span></div>
                </li>
            </ul>
            </div>
            
        </div>
    </section>



<?php

include '../include/footer.php';

?>