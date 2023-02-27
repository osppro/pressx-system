<?php include 'header.php'; ?>

      <div class="full-slider">
         <div id="carousel-example-generic" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
               <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
               <li data-target="#carousel-example-generic" data-slide-to="1"></li>
               <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
               <!-- First slide -->
               <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
                  <div class="carousel-caption">
                     <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="slider-contant" data-animation="animated fadeInRight">
                           <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                           <p>If you use this site regularly and would like to help keep the site on the Internet,<br>
                              please consider donating a small sum to help pay..
                           </p>
                           <button class="btn btn-primary btn-lg">Read More</button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.item -->
               <!-- Second slide -->
               <div class="item skyblue" data-ride="carousel" data-interval="5000">
                  <div class="carousel-caption">
                     <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="slider-contant" data-animation="animated fadeInRight">
                           <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                           <p>You can make a case for several potential winners of<br>the expanded European Championships.</p>
                           <button class="btn btn-primary btn-lg">Button</button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.item -->
               <!-- Third slide -->
               <div class="item darkerskyblue" data-ride="carousel" data-interval="5000">
                  <div class="carousel-caption">
                     <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="slider-contant" data-animation="animated fadeInRight">
                           <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                           <p>You can make a case for several potential winners of<br>the expanded European Championships.</p>
                           <button class="btn btn-primary btn-lg">Button</button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.item -->
            </div>
            <!-- /.carousel-inner -->
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <!-- /.carousel -->
         <div class="news">
            <div class="container">
               <div class="heading-slider">
                  <p class="headline"><i class="fa fa-star" aria-hidden="true"></i> Top Headlines :</p>
                  <!--made by vipul mirajkar thevipulm.appspot.com-->
                  <h1>
                  <a href="" class="typewrite" data-period="2000" data-type='[ "Contrary to popular belief, Lorem Ipsum is not simply random text.", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.", "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."]'>
                  <span class="wrap"></span>
                  </a>
                  </h1	   
                  <span class="wrap"></span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="matchs-info">
      <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="row">
            <div class="full">
               <div class="matchs-vs">
                  <div class="vs-team">
                     <div class="team-btw-match">
                        <ul>
                           <li>
                              <img src="images/img-03.png" alt="">
                              <span>Footbal Team</span>
                           </li>
                           <li class="vs"><span>vs</span></li>
                           <li>
                              <img src="images/img-04.png" alt="">
                              <span>Super Team Club</span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="row">
            <div class="full">
               <div class="right-match-time">
                  <h2>Next Match</h2>
                  <ul id="countdown-1" class="countdown">
                     <li><span class="days">10 </span>Day </li>
                     <li><span class="hours">5 </span>Hours </li>
                     <li><span class="minutes">25 </span>Minutes </li>
                     <li><span class="seconds">10 </span>Seconds </li>
                  </ul>
                  <span>12/02/2017 /19:00pm</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <section id="contant" class="contant">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-sm-4 col-xs-12">
               <div class="content-widget top-story" style="background: url(images/top-story-bg.jpg);">
                  <div class="top-stroy-header">
                     <h2>Top Categories <a href="#" class="fa fa-fa fa-angle-right"></a></h2>
                     <span class="date"></span>
                  </div>
                  <ul class="other-stroies">
                     <?php $res = $dbh->query("SELECT * FROM category ");
                     if($res->rowCount() > 0 ){
                     while ($rows = $res->fetch(PDO::FETCH_OBJ)) { ?>
                        <li><a href="<?=$rows->cat_id; ?>"><?=$rows->cat_name; ?></a></li>
                     <?php } }else{ ?>
                        <h2 class="alert alert-danger text-center">No Category Yet !.</h2>
                     <?php } ?>
                  </ul>
               </div>
            </div>
            <div class="col-lg-8 col-sm-8 col-xs-12">
               <div class="news-post-holder">
                  <div class="news-post-widget">
                     <img class="img-responsive" src="images/img-01_002.jpg" alt="">
                     <div class="news-post-detail">
                        <span class="date">20 march 2016</span>
                        <h2><a href="blog-detail.html">At vero eos et accusamus et iusto odio dignissimos ducimus</a></h2>
                        <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                     </div>
                  </div>
                  <div class="news-post-widget">
                     <img class="img-responsive" src="images/img-02_003.jpg" alt="">
                     <div class="news-post-detail">
                        <span class="date">20 march 2016</span>
                        <h2><a href="blog-detail.html">At vero eos et accusamus et iusto odio dignissimos ducimus</a></h2>
                        <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                     </div>
                  </div>
               </div>
               <div class="news-post-holder">
                  <div class="news-post-widget">
                     <img class="img-responsive" src="images/img-03_003.jpg" alt="">
                     <div class="news-post-detail">
                        <span class="date">20 march 2016</span>
                        <h2><a href="blog-detail.html">At vero eos et accusamus et iusto odio dignissimos ducimus</a></h2>
                        <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="full">
                  <div class="main-heading sytle-2">
                     <h2>Video</h2>
                     <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br>doloremque laudantium, totam rem aperiam</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="video_section_main theme-padding middle-bg vedio">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="full">
                  <div class="match_vedio">
                     <img class="img-responsive" src="images/img-07.jpg" alt="#" />
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   
<?php include 'footer.php'; ?>