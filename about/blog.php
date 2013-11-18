<?php include '../views/header.php'; ?>
        <!-- Content Start -->
        <div id="main">
	    <!-- Title, Breadcrumb Start-->
            <div class="breadcrumb-wrapper">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Blog</h2>
                     </div>
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                           <ul>
                              <li>You are here:</li>
                              <li><a href="../index.html">Home</a></li>
                              <li>About</li>
                              <li>Blog</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
             </div>
          <!-- Title, Breadcrumb End-->
          <!-- Main Content start-->
            <div class="content">
               <div class="container">
                  <div class="row">
                     <!-- Sidebar Begin -->
                     <?php include '../views/about-sidebar.php'; ?>
                      <!-- Category Widget Start -->
<!--                        <div class="widget category">
                           <h3 class="title">Categories</h3>
                           <ul class="category-list slide">
                              <li><a href="#">Web Design</a></li>
                              <li><a href="#">Graphic Design</a></li>
                              <li><a href="#">Illustration</a></li>
                              <li><a href="#">Logo Design</a></li>
                              <li><a href="#">Wordpress Themes</a></li>
                           </ul>
                        </div>-->
                        <!-- Category Widget End -->
                     <!-- Sidebar End -->
                    <div class="posts-block col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <article class="post hentry">
                           <div class="post-image">
                              <a href="<?php echo BASE_URL; ?>/img/blog/blog-post1.jpg" data-rel="prettyPhoto">
                              <span class="img-hover"></span>
                              <span class="fullscreen"><i class="icon-search"></i></span>
                              <img src="<?php echo BASE_URL; ?>/img/blog/blog-post1.jpg" alt="">
                              </a>
                           </div>
                           <header class="post-header">
                              <h3 class="content-title">Blog post title</h3>
                              <div class="blog-entry-meta">
                                 <div class="blog-entry-meta-date">
                                    <i class="icon-time"></i>
                                    <span class="blog-entry-meta-date-month">August</span>
                                    <span class="blog-entry-meta-date-day">12,</span>
                                    <span class="blog-entry-meta-date-year">2013</span>
                                 </div>
                                 <div class="blog-entry-meta-author">
                                    <i class="icon-user"></i>
                                    <a href="#" class="blog-entry-meta-author">John Doe</a>
                                 </div>
                                 <div class="blog-entry-meta-tags">
                                    <i class="icon-tags"></i>
                                    <a href="#">Web Design</a>,
                                    <a href="#">Branding</a>
                                 </div>
                                 <div class="blog-entry-meta-comments">
                                    <i class="icon-comments"></i>
                                    <a href="#" class="blog-entry-meta-comments">4 comments</a>
                                 </div>
                              </div>
                           </header>
                           <div class="post-content">
                              <p>
                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen not only five centuries, but also the leap essentially.
                              </p>
                           </div>
                           <footer class="post-footer">
                              <a class="btn-small btn-color">Read More</a>
                           </footer>
                        </article>
                        <div class="blog-divider"></div>
                        <article class="post hentry">
                           <div class="post-image">
                              <a href="<?php echo BASE_URL; ?>/img/blog/blog-post1.jpg" data-rel="prettyPhoto">
                              <span class="img-hover"></span>
                              <span class="fullscreen"><i class="icon-search"></i></span>
                              <img src="<?php echo BASE_URL; ?>/img/blog/blog-post1.jpg" alt="">
                              </a>
                           </div>
                           <header class="post-header">
                              <h3 class="content-title">Blog post title</h3>
                              <div class="blog-entry-meta">
                                 <div class="blog-entry-meta-date">
                                    <i class="icon-time"></i>
                                    <span class="blog-entry-meta-date-month">August</span>
                                    <span class="blog-entry-meta-date-day">23,</span>
                                    <span class="blog-entry-meta-date-year">2013</span>
                                 </div>
                                 <div class="blog-entry-meta-author">
                                    <i class="icon-user"></i>
                                    <a href="#" class="blog-entry-meta-author">John Doe</a>
                                 </div>
                                 <div class="blog-entry-meta-tags">
                                    <i class="icon-tags"></i>
                                    <a href="#">Web Design</a>,
                                    <a href="#">Branding</a>
                                 </div>
                                 <div class="blog-entry-meta-comments">
                                    <i class="icon-comments"></i>
                                    <a href="#" class="blog-entry-meta-comments">3 comments</a>
                                 </div>
                              </div>
                           </header>
                           <div class="post-content">
                              <p>
                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen not only five centuries, but also the leap essentially.
                              </p>
                           </div>
                           <footer class="post-footer">
                              <a class="btn-small btn-color">Read More</a>
                           </footer>
                        </article>
                        <div class="blog-divider"></div>
                        <article class="post hentry">
                           <div class="post-image">
                              <a href="<?php echo BASE_URL; ?>/img/blog/blog-post1.jpg" data-rel="prettyPhoto">
                              <span class="img-hover"></span>
                              <span class="fullscreen"><i class="icon-search"></i></span>
                              <img src="<?php echo BASE_URL; ?>/img/blog/blog-post1.jpg" alt="">
                              </a>
                           </div>
                           <header class="post-header">
                              <h3 class="content-title">Blog post title</h3>
                              <div class="blog-entry-meta">
                                 <div class="blog-entry-meta-date">
                                    <i class="icon-time"></i>
                                    <span class="blog-entry-meta-date-month">August</span>
                                    <span class="blog-entry-meta-date-day">31,</span>
                                    <span class="blog-entry-meta-date-year">2013</span>
                                 </div>
                                 <div class="blog-entry-meta-author">
                                    <i class="icon-user"></i>
                                    <a href="#" class="blog-entry-meta-author">John Doe</a>
                                 </div>
                                 <div class="blog-entry-meta-tags">
                                    <i class="icon-tags"></i>
                                    <a href="#">Web Design</a>,
                                    <a href="#">Branding</a>
                                 </div>
                                 <div class="blog-entry-meta-comments">
                                    <i class="icon-comments"></i>
                                    <a href="#" class="blog-entry-meta-comments">4 comments</a>
                                 </div>
                              </div>
                           </header>
                           <div class="post-content">
                              <p>
                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen not only five centuries, but also the leap essentially.
                              </p>
                           </div>
                           <footer class="post-footer">
                              <a class="btn-small btn-color">Read More</a>
                           </footer>
                        </article>
                        <div class="blog-divider"></div>
                        <div class="pagination-centered">
                           <ul class="pagination">
                              <li class="disabled"><a href="#">«</a></li>
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li><a href="#">»</a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- Left Section End -->
                  </div>
               </div>
            </div>
            <!-- Main Content end-->
         </div>
         <!-- Content End -->
<?php include '../views/footer.php'; ?>
