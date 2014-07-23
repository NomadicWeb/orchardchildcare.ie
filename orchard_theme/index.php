<?php get_header(); ?>

    <main role="main">
        <!-- section -->
        <section>

            <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

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
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home" class="smoothScroll">Home</a></li>
            <li> <a href="#about" class="smoothScroll"> About</a></li>
            <li> <a href="#services" class="smoothScroll"> Timetable</a></li>
            <li> <a href="#team" class="smoothScroll"> Team</a></li>
            <li> <a href="#portfolio" class="smoothScroll"> Gallery</a></li>
            <li> <a href="#contact" class="smoothScroll"> Contact</a></li>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>

  
  
        <!-- ==== HEADERWRAP ==== -->
        <div id="headerwrap" id="home" name="home">
            <header class="clearfix">
                    <h1 class="fancy-text">Orchard Childcare</h1>
                    <p>Excellence in Montessori and sessional care</p>
            </header>       
        </div><!-- /headerwrap -->
        
        <!-- ==== ABOUT ==== -->
        <div class="container" id="about" name="about">
            <div class="row white">
            <br>
                <h1 class="centered">Who are we?</h1>
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
                <h1 class="fancy-text">REVIEW #1</h1>
                <hr>
            </div><!-- container -->
        </section><!-- section -->
        
        
        <!-- ==== SERVICES ==== -->
        <div class="container" id="services" name="services">
            <br>
            <br>
            <div class="row">
                <h1 class="centered">ONE BRAND, ONE VOICE.</h1>
                <hr>
                <div class="col-lg-offset-2 col-lg-8">
                    <p>Employees and consumers. Two halves of a brand’s entirety, the whole of a brand’s audience. Sometimes these two halves have very different viewpoints, creating a weak spot in the brand story. Weakness tarnishes credibility. Brands that aren’t credible aren’t viable.
                    </p>
                    <p>We squash weakness by designing the whole brand story. It’s crafted around the truism held by employees and consumers to create an experience that connects from the inside out.</p>
                    <p>By being true to the brand we represent, we elevate the audiences’ relationship to it. Like becomes love becomes a passion. Passion becomes advocacy. And we see the brand blossom from within, creating a whole story the audience embraces. That’s when the brand can truly flex its muscles.</p>
                </div><!-- col-lg -->
            </div><!-- row -->
            
            <div class="row">
                <h2 class="centered">MOBILE FIRST THINKING, ALWAYS.</h2>
                <hr>
                <br>
                <div class="col-lg-offset-2 col-lg-8">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/iphone.png" alt="">
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
        

        <!-- ==== SECTION DIVIDER2 -->
        <section class="section-divider textdivider divider2">
            <div class="container fancy-text">
                <h1 class="fancy-text">HEADER #1</h1>
                <hr>
            </div><!-- container -->
        </section><!-- section -->

        <!-- ==== TEAM MEMBERS ==== -->
        <div class="container" id="team" name="team">
        <br>
            <div class="row white centered">
                <h1 class="centered">MEET THE FOUNDERS</h1>
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
                        <h2>Children's happiness is our utmost priority.</h2>
                        <p>A safe and enjoyable environment for your child all year round. Want to get in touch with us?</p>
                        <p><a href="#contact"class="btn btn-success smoothScroll">Contact Us</a></p>
                    </div>                  
                </div><!-- row -->
            </div>
            <br>
            <br>
        </div><!-- greywrap -->
        
        <!-- ==== SECTION DIVIDER3 -->
        <section class="section-divider textdivider divider3">
            <div class="container">
                <h1 class="fancy-text">REVIEW #2</h1>
                <hr>
            </div><!-- container -->
        </section><!-- section -->
        
        <!-- ==== PORTFOLIO ==== -->
        <div class="container" id="portfolio" name="portfolio">
        <br>
            <div class="row">
                <br>
                <h1 class="centered fancy-text">We create a safe and fun environment</h1>
                <hr>
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
                <h1 class="fancy-text">HEADER #2</h1>
                <hr>
            </div><!-- container -->
        </section><!-- section -->
        
        <div class="container" id="contact" name="contact">
            <div class="row">
            <br>
                <h1 class="centered">THANKS FOR VISITING US</h1>
                <hr>
                <br>
                <br>
                <div class="col-lg-4">
                    <h3>Contact Information</h3>
                    <p><span class="icon icon-home"></span> Some Address 987, NY<br/>
                        <span class="icon icon-phone"></span> +34 9884 4893 <br/>
                        <span class="icon icon-mobile"></span> +34 59855 9853 <br/>
                        <span class="icon icon-envelop"></span> <a href="#"> agency@blacktie.co</a> <br/>
                        <span class="icon icon-twitter"></span> <a href="#"> @blacktie_co </a> <br/>
                        <span class="icon icon-facebook"></span> <a href="#"> BlackTie Agency </a> <br/>
                    </p>
                </div><!-- col -->
                
                <div class="col-lg-4">
                    <h3>Newsletter</h3>
                    <p>Register to our newsletter and be updated with the latests information regarding our services, offers and much more.</p>
                    <p>
                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label for="inputEmail1" class="col-lg-4 control-label"></label>
                            <div class="col-lg-10">
                              <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="text1" class="col-lg-4 control-label"></label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="text1" placeholder="Your Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-10">
                              <button type="submit" class="btn btn-success">Sign in</button>
                            </div>
                          </div>
                       </form><!-- form -->
                    </p>
                </div><!-- col -->
                
                <div class="col-lg-4">
                    <h3>Support Us</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div><!-- col -->

            </div><!-- row -->
        
        </div><!-- container -->

        <!-- /section -->
    </main>

<?php /*get_sidebar();*/ ?>

<?php get_footer(); ?>
