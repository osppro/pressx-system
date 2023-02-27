<?php include 'header.php'; ?>
   <div class="inner-page-banner">
      <div class="container">
      </div>
   </div>
   </section>
   <section id="contant" class="contant main-heading" style="padding-bottom:0;margin-bottom:-1px;position:relative;z-index:1;">
      <div class="aboutus">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="col-md-7 col-sm-7 col-xs-12">
                     <div class="full">
                        <h3>Press X - Gaming services</h3>
                        <p>Press X hires gaming tools to different Games across Uganda, the majority of people who use our tools are between age of 18 - 50. We welcome you all Gamers.<br>
                           <strong>Includes:-</strong>
                        </p>
                        <ul class="icon-list">
                        <?php $games = $dbh->query("SELECT * FROM category LIMIT 5 ");
                        while ($ro = $games->fetch(PDO::FETCH_OBJ)) { ?>
                           <li><i class="fa fa-angle-right"></i><?=$ro->cat_name; ?></li>
                        <?php } ?>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-5 col-sm-5 col-xs-12">
                     <img class="img-responsive" src="images/img-07.jpg" alt="#" />
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="dark-section" style="background:url(images/walle.jpg)">
         <div class="container" style="display: none;">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="heading-main">
                     <h2>Our Testimonials</h2>
                  </div>
                  <div class="testimonial-slider">
                     <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner text-center">
                           <!-- Quote 1 -->
                           <div class="item active">
                              <blockquote>
                                 <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                       <small>Someone famous</small>
                                    </div>
                                 </div>
                              </blockquote>
                           </div>
                           <!-- Quote 2 -->
                           <div class="item">
                              <blockquote>
                                 <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                       <small>Someone famous</small>
                                    </div>
                                 </div>
                              </blockquote>
                           </div>
                           <!-- Quote 3 -->
                           <div class="item">
                              <blockquote>
                                 <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                       <small>Someone famous</small>
                                    </div>
                                 </div>
                              </blockquote>
                           </div>
                        </div>
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" alt="">
                           </li>
                           <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg" alt="">
                           </li>
                           <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                           </li>
                        </ol>
                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

<?php include 'footer.php'; ?>