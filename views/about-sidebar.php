
    <!-- Left nav Widget Start -->
    <div class="widget category">
       <h3 class="title">ExamHawk</h3>
       <ul class="category-list slide">
          <li><a href="<?php echo BASE_URL; ?>/about/index.php">About</a></li>
          <li><a href="<?php echo BASE_URL; ?>/institutions/faq.php">Institution FAQs</a></li>
          <li><a href="<?php echo BASE_URL; ?>/test-takers/faq.php">Test Taker FAQs</a></li>
          <li><a href="<?php echo BASE_URL; ?>/about/team.php">Team</a></li>
          <li><a href="<?php echo BASE_URL; ?>/about/contact.php">Contact</a></li>
          <li><a href="<?php echo BASE_URL; ?>/about/conferences.php">Conferences</a></li>
          <li><a href="<?php echo BASE_URL; ?>/about/news.php">News</a></li>
       </ul>
    </div>
    <!-- Left nav Widget End -->
    <!-- Tab Start -->
    <? if($_SERVER['REQUEST_URI'] == '/beta/about/news.php'){ ?>
    <div class="widget tabs">
       <div id="horizontal-tabs">
          <ul class="tabs">
             <li id="tab1" class="current">Popular</li>
             <li id="tab2">Recent</li>
             <li id="tab3">Comments</li>
          </ul>
          <div class="contents">
             <div class="tabscontent" id="content1" style="display: block;">
                <ul class="posts">
                   <li>
                      <a href="#"><img class="img-thumbnail recent-post-img" alt="" src="http://placehold.it/68"></a>
                      <p><a href="#">Lorem Ipsum is simply dummy text.</a></p>
                      <span class="color">27 July 2013</span>
                   </li>
                   <li>
                      <a href="#"><img class="img-thumbnail recent-post-img" alt="" src="http://placehold.it/68"></a>
                      <p><a href="#">Lorem Ipsum is simply dummy text.</a></p>
                      <span class="color">30 July 2013</span>
                   </li>
                </ul>
             </div>
             <div class="tabscontent" id="content2">
                <ul class="posts">
                   <li>
                      <a href="#"><img class="img-thumbnail recent-post-img" alt="" src="http://placehold.it/68"></a>
                      <p><a href="#">Lorem Ipsum is simply dummy text.</a></p>
                      <span class="color">27 July 2013</span>
                   </li>
                   <li>
                      <a href="#"><img class="img-thumbnail recent-post-img" alt="" src="http://placehold.it/68"></a>
                      <p><a href="#">Lorem Ipsum is simply dummy text.</a></p>
                      <span class="color">30 July 2013</span>
                   </li>
                </ul>
             </div>
             <div class="tabscontent" id="content3">
                <ul class="posts">
                   <li>
                      <a href="#"><img class="img-thumbnail recent-post-img" alt="" src="http://placehold.it/68"></a>
                      <p><a href="#">Lorem Ipsum is simply dummy text.</a></p>
                      by <span class="color">wptuts+</span>
                   </li>
                   <li>
                      <a href="#"><img class="img-thumbnail recent-post-img" alt="" src="http://placehold.it/68"></a>
                      <p><a href="#">Lorem Ipsum is simply dummy text.</a></p>
                      by <span class="color">wptuts+</span>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
     <? } ?>
    <!-- Tab End -->
