<?php get_header(); ?>

    <main role="main">
        <!-- section -->
        <section>
            <?php get_template_part('loop'); ?>
            <?php get_template_part('pagination'); ?>
        </section>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">


    <div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:white;"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home" class="smoothScroll">Home</a></li>
            <li> <a href="#about" class="smoothScroll"> About</a></li>
            <li> <a href="#services" class="smoothScroll"> Sessions</a></li>
            <li> <a href="#team" class="smoothScroll"> Team</a></li>
            <li> <a href="#portfolio" class="smoothScroll"> Gallery</a></li>
            <li> <a href="#offers" class="smoothScroll"> Offers</a></li>
            <li> <a href="#contact" class="smoothScroll"> Contact</a></li>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>

        <!-- ==== HEADERWRAP ==== -->
        <div id="headerwrap" id="home" name="home">
            <header class="clearfix">
                    <h1 class="fancy-header">Orchard Childcare</h1>
                    <p>Excellence in Montessori and sessional care</p>
            </header>
        </div><!-- /headerwrap -->

        <!-- ==== ABOUT ==== -->
        <div class="container" id="about" name="about">
            <div class="row white">
            <br>
                <h1 class="white centered">Who are we?</h1>
                <hr>

                <div class="col-lg-12">
                    <p><span class="big"><a href="#team" class="smoothScroll">Sinead O Connell</a> </span>&amp; <span class="big"><a href="#team" class="smoothScroll">Rachel O Leary</a></span> are co-owners and childhood friends. We opened Orchard Childcare together in February of 2014. Both having small children ourselves we found it imperative to make our pre-school a home away from home. Creating our perfect pre-school was something we dreamt of for many years growing up together and when we finally got our chance we made the very best out of it.</p>

<p>We are a small childcare centre which means each child gets individual attention and care. We strive for learning through play for our smaller children attending our `baby room` and we also do a pre-Montessori class from 2.5yrs which gives younger children an opportunity to obtain structure and routine which is vital for the free Montessori ECCE year to follow.</p>
                </div><!-- col-lg-6 -->
            </div><!-- row -->
        </div><!-- container -->

        <!-- ==== SECTION DIVIDER1 -->
        <section class="section-divider textdivider divider1">
            <div class="container">
                <div class="col-md-8 col-md-offset-1">
                    <h3 class="fancy-text">
                        My daughter Ella has attended Orchard since it's opening, and I can honestly say she absolutely loves it.
                        She runs into the school every morning and has to be dragged out every day!
                        And and she adores her teachers Rachel and Sinead. I love all the innovative and fun ideas that they pack the
                        days with, and I love that Ella absorbs so much creativity on a daily basis.
                        I highly recommend Orchard Childcare!</h3>
                    <hr>
                    <h3 class="fancy-text">Sarah o keeffe and daughter Ella </h3>
                </div>
                <div class="col-md-2 thumb-review">
                    <img data-src="holder.js/100%x180" alt="100%x180" class="img-thumbnail img-responsive"
                             src="<?php echo get_template_directory_uri(); ?>/assets/img/photo1.jpg">
                </div>
            </div><!-- container -->
        </section><!-- section -->


        <!-- ==== SERVICES ==== -->
        <div class="container" id="services" name="services">
            <br><br>
                <h1 class="white centered">Sessions and prices</h1>
            <hr>
            <br>
            <br>

            <div class="col-md-6 hidden-sm hidden-md hidden-lg">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th><h1>Morning</h1></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><h3>9am - 12.30pm</h3></td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th><h1>Afternoon</h1></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><h3>1.30pm - 5pm</h3></td>
                    </tr>
                    <tr>
                        <td>Extra hour offered for fee of &euro;6.</td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th><h1>6 mo. - 2.5 yr.</h1></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><h3>&euro;18.50 per session</h3></td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th><h1>2.5 yr. - 4.5 yr.</h1></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><h3>&euro;22.50 per session</h3></td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="col-md-6 hidden-sm hidden-md hidden-lg"> </div>

            <div class="col-md-6 hidden-xs">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th><h1>Morning</h1></th>
                      <th><h1>Afternoon</h1></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><h3>9am - 12.30pm</h3></td>
                      <td><h3>1.30pm - 5pm</h3></td>
                    </tr>
                    <tr>
                        <td>Extra hour offered for fee of &euro;6.</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-striped hidden-xs">
                  <thead>
                    <tr>
                      <th><h1>6 mo. - 2.5 yr.</h1></th>
                      <th><h1>2.5 yr. - 4.5 yr.</h1></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><h3>&euro;18.50 per session</h3></td>
                      <td><h3>&euro;22.50 per session</h3></td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <hr></hr>
                <ul>
                    <li>All fees payable throughout the year, including bank/public holidays and midterms except 
                        one week at Christmas and one week at Summer.</li>
                    <li>Open all year round except for one week at Christmas and bank holidays</li>
                </ul>
            </div>
        </div><!-- container -->


        <!-- ==== SECTION DIVIDER2 -->
        <section class="section-divider textdivider divider2">
            <div class="container fancy-text">
                <h1 class="fancy-text">Experienced and reliable childcare for your family</h1>
                <hr>
            </div><!-- container -->
        </section><!-- section -->

        <!-- ==== TEAM MEMBERS ==== -->
        <div class="container" id="team" name="team">
        <br>
            <div class="row white centered">
                <h1 class="centered">MEET THE TEAM</h1>
                <hr>
                <br>
                <br>
                <div class="col-lg-6 centered">
                    <img class="img img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/team/rachel.png" height="120px" width="120px" alt="">
                    <br>
                    <h4><b>Rachel</b></h4>
                    <a href="#" class="icon icon-twitter"></a>
                    <a href="#" class="icon icon-facebook"></a>
                    <a href="#" class="icon icon-flickr"></a>
                    <p>Rachel has fetac level 5, certificate in childcare and also studied Social studies. She has 9 years’ experience behind her and is fully qualified in first aid.  She has two small children, Robyn and Fia Lily, who both attend Orchard Childcare and love it!</p>
                </div><!-- col-lg-3 -->

                <div class="col-lg-6 centered">
                    <img class="img img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/team/sinead.png" height="120px" width="120px" alt="">
                    <br>
                    <h4><b>Sinead</b></h4>
                    <a href="#" class="icon icon-twitter"></a>
                    <a href="#" class="icon icon-facebook"></a>
                    <a href="#" class="icon icon-flickr"></a>
                    <p>Sinead has a level 6 diploma in Montessori, Social studies and special needs. She has 15 years’ experience in Childcare and is also qualified in first aid. Sinead has two small children also who are of school going age and attend Orchard happily for all camps and any other given chance!</p>
                </div><!-- col-lg-3 -->

            </div><!-- row -->
        </div><!-- container -->

        <!-- ==== GREYWRAP ==== -->
        <div id="greywrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 centered">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/macbook.png" align="">
                    </div>
                    <div class="col-lg-4">
                        <h2>Your childs happiness is our utmost priority.</h2>
                        <p>A safe and enjoyable environment for your child all year round. Want to get in touch with us?</p>
                        <p><a href="#contact" class="centered btn btn-info smoothScroll">Contact us Now!</a></p>
                    </div>
                </div><!-- row -->
            </div>
            <br>
            <br>
        </div><!-- greywrap -->

        <!-- ==== SECTION DIVIDER3 -->
        <section class="section-divider textdivider divider3">
            <div class="container">
                <div class="col-md-2 thumb-review col-md-offset-1">
                    <img data-src="holder.js/100%x180" alt="100%x180"
                         class="img-thumbnail img-responsive"
                         src="<?php echo get_template_directory_uri(); ?>/assets/img/photo2.jpg">
                </div>
                <div class="col-md-8">
                    <h3 class="fancy-text">
                    Sinead and Rachel have gone above and beyond for Jack along with every child in their care and I honestly believe there is no where else he could have gotten a better start. Thank you from the bottom of my heart Orchard Childcare!
                    </h3>
                    <hr>
                    <h3 class="fancy-text">Claire Conlon and her son Jack</h3>
                </div>
            </div><!-- container -->
        </section><!-- section -->


        <!-- ==== PORTFOLIO ==== -->
        <div class="container" id="portfolio" name="portfolio">
        <br>
            <div class="row">
                <br>
                <br>
            </div><!-- /row -->
            <div class="container">
            <div class="row">

                <!-- PORTFOLIO IMAGE 1 -->
                <div class="col-md-4 ">
                    <div class="grid mask">
                        <figure>
                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/folio01.jpg" alt="">
                            <figcaption>
                                <h5>Pickaboo!</h5>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->


                         <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
                              a modal for each of your projects. -->

                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">Project Title</h4>
                                </div>
                                <div class="modal-body">
                                  <p><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/folio01.jpg" alt=""></p>
                                  <p>This project was crafted for Some Name corp. Detail here a little about your job requirements and the tools used. Tell about the challenges faced and what you and your team did to solve it.</p>
                                  <p><b><a href="#">Visit Site</a></b></p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->


                <!-- PORTFOLIO IMAGE 2 -->
                <div class="col-md-4">
                    <div class="grid mask">
                        <figure>
                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/folio02.jpg" alt="">
                            <figcaption>
                                <h5>Ball pen fun!</h5>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->

                <!-- PORTFOLIO IMAGE 3 -->
                <div class="col-md-4">
                    <div class="grid mask">
                        <figure>
                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/folio03.jpg" alt="">
                            <figcaption>
                                <h5>Painting time!</h5>
                            </figcaption><!-- /figcaption -->
                        </figure><!-- /figure -->
                    </div><!-- /grid-mask -->
                </div><!-- /col -->
            </div><!-- /row -->

        </div><!-- /row -->
    </div><!-- /container -->

    <!-- ==== SECTION DIVIDER4 ==== -->
    <section class="section-divider textdivider divider4">
        <div class="container">
            <h1 class="fancy-text">We create memorable experiences for your child</h1>
        </div><!-- container -->
    </section><!-- section -->



        <!-- ==== SERVICES ==== -->
        <div class="container" id="offers" name="offers">
            <br><br>
            <h1 class="white centered">Offers</h1>
            <hr>
            <br>
            <div class="col-md-6">
                <h1 class="text-center">School homework club until 6pm which includes collection from local schools!</h1>
                <h3 class="text-center">After the afternoon session we hold a after school homework session in-house here
                                       at the childcare. We can arrange school pick-up if necessary!*</h3>
                <hr>
                <p class="text-center"><a href="#contact" class="centered btn btn-info smoothscroll">contact us now!</a></p>
            </div>
            <div class="col-md-6">
                <h1 class="text-center">Free Pre-school year</h1>
                <h3 class="text-center">Apply now for this fantastic offer starting September!**</h3>
                <hr>
                <p class="text-center"><a href="#contact" class="centered btn btn-info smoothscroll">contact us now!</a></p>
            </div>

            <div class="col-md-12">
            <hr></hr>
                <p>* Contact us for list of schools and prices as may vary</p>
                <p>** Places are very limited!</p>
            </div>
        </div><!-- container -->

        <!-- ==== SECTION DIVIDER1 -->
        <section class="section-divider textdivider divider1">
            <div class="container">
                <div class="col-md-8 col-md-offset-1">
                    <h3 class="fancy-text">
                        As a first time mother it was a tough decision where to send my 9 month old baby boy when I returned to work, but Rachel and Sinead are amazing, he was a little apprehensive during his first few days as he had been with me at home until this time. But now he adores it, he goes in smiling and more importantly he comes out smiling too.
                    </h3>
                    <hr>
                    <h3 class="fancy-text">Laura O Connor and her son Seb</h3>
                </div>
                <div class="col-md-2 thumb-review">
                    <img data-src="holder.js/100%x180" alt="100%x180" class="img-thumbnail img-responsive"
                             src="<?php echo get_template_directory_uri(); ?>/assets/img/photo3.jpg">
                </div>
            </div><!-- container -->
        </section><!-- section -->

    <div class="container" id="contact" name="contact">
        <div class="row">
            <br>
            <h1 class="centered">THANKS FOR VISITING US</h1>
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
                <h3>Contact Information</h3>
                <p><span class="icon icon-home"></span>6 The mews Riverway</br> South Douglas road</br> Cork Ireland<br/>
                <span class="icon icon-phone"></span>Rachel: 086 6633233<br/>
                <span class="icon icon-mobile"></span>Sinead: 085 8274015<br/>
                <span class="icon icon-envelop"></span> <a href="#">orchardchildcare@gmail.com</a> <br/>
                </p>
            </div><!-- col -->

            <div class="col-lg-3">
                <h3>Support Us</h3>
                <p>Orchard Childcare is run by members of your local community. Please help our endeavour to create a safe environment for the children of Cork.</p>

            </div><!-- col -->

        </div><!-- row -->

    </div><!-- container -->
    </main>

<?php /*get_sidebar();*/ ?>

<?php get_footer(); ?>
