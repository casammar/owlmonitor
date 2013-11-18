<?php include '../views/header.php'; ?>
        <!-- Content Start -->
        <div id="main">
	    <!-- Title, Breadcrumb Start-->
            <div class="breadcrumb-wrapper">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Contact</h2>
                     </div>
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                           <ul>
                              <li>You are here:</li>
                              <li><a href="../index.html">Home</a></li>
                              <li>About</li>
                              <li>Contact</li>
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
                     <!-- Sidebar End -->
                     <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" id="contact-form">
                        <h3 class="title">Send Us an Email</h3>
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lorem quam, facilisis laoreet venenatis non, tincidunt eget nulla. In vulputate condimentum feugiat. Donec non leo leo. Maecenas pellentesque quis diam a ultrices. Curabitur est purus, ullamcorper ac justo et, dictum pulvinar ligula. Etiam ornare, eros sit amet vehicula fringilla, sem felis tristique diam, tincidunt cursus massa magna et sapien.
                        </p>
                        <div class="divider"></div>
                        <form method="post" class="reply" id="contact">
                           <fieldset>
                              <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Name: <span>*</span></label>
                                    <input class="form-control" id="name" name="name" type="text" value="" required>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Email: <span>*</span></label>
                                    <input class="form-control" type="email" id="email" name="email" value="" required>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label>Subject: <span>*</span></label>
                                    <input class="form-control" id="subject" name="subject" type="text" value="" required>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label>Message: <span>*</span></label>
                                    <textarea class="form-control" id="text" name="text" rows="3" cols="40" required></textarea>
                                 </div>
                              </div>
                           </fieldset>
                           <button class="btn-normal btn-color submit  bottom-pad" type="submit">Send</button>
                           <div class="success alert-success alert" style="display:none">Your message has been sent successfully.</div>
                           <div class="error alert-error alert" style="display:none">E-mail must be valid and message must be longer than 100 characters.</div>
                           <div class="clearfix">
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Main Content end-->
         </div>
         <!-- Content End -->
<?php include '../views/footer.php'; ?>
