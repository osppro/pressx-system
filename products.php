<?php include 'header.php'; ?>
   <div class="inner-page-banner">
      <div class="container">
      </div>
   </div>
   <div class="inner-information-text">
      <div class="container">
         <h3>Products</h3>
         <ul class="breadcrumb">
            <li><a href="<?=SITE_URL; ?>">Home</a></li>
            <li class="active">Products</li>
         </ul>
      </div>
   </div>
</section>
<section id="contant" class="contant">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 col-sm-12 col-xs-12">
            <div class="news-post-holder">
               <?php $rro = $dbh->query("SELECT * FROM products p, category c WHERE p.cat_id = c.cat_id");
               if ($rro->rowCount() > 0 ) { 
               while ($rox = $rro->fetch(PDO::FETCH_OBJ)) { ?>
               <div class="col-lg-6 col-sm-6 col-xs-12">
                  <div class="news-post-widget">
                     <img class="img-responsive" src="images/img-01_002.jpg" alt="">
                     <div class="news-post-detail">
                        <span class="date">20 march 2016</span>
                        <h2><a href="blog-detail">Free play to ground in anywhere</a></h2>
                        <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                     </div>
                  </div>
               </div>
            <?php }}else{ ?>
               <h2 class="alert alert-danger text-center">No Product Found !</h2>
           <?php } ?>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="content-widget top-story" style="background: url(images/top-story-bg.jpg);">
               <div class="top-stroy-header">
                  <h2>Top Categories <a href="#" class="fa fa-fa fa-angle-right"></a></h2>
                  <span class="date"></span>
               </div>
               <ul class="other-stroies">
               <?php $res = $dbh->query("SELECT * FROM category ");
               while ($rows = $res->fetch(PDO::FETCH_OBJ)) { ?>
                  <li><a href="<?=$rows->cat_id; ?>"><?=$rows->cat_name; ?></a></li>
               <?php } ?>
               </ul>
            </div>
            <aside id="sidebar" class="right-bar">
               <div class="banner">
                  <img class="img-responsive" src="uploads/logoo.png" alt="#">
               </div>
            </aside>
         </div>
      </div>
   </div>
</section>
<?php include 'footer.php'; ?>