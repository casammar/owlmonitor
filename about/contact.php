<?php include '../views/header.php'; ?>
        <!-- Content Start -->
        <div id="main">
          <!-- Main Content start-->
            <div class="content">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" id="contact-form">
                        <h3 class="title">Send Us an Email</h3>
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lorem quam, facilisis laoreet venenatis non, tincidunt eget nulla. In vulputate condimentum feugiat. Donec non leo leo. Maecenas pellentesque quis diam a ultrices. Curabitur est purus, ullamcorper ac justo et, dictum pulvinar ligula. Etiam ornare, eros sit amet vehicula fringilla, sem felis tristique diam, tincidunt cursus massa magna et sapien.
                        </p>
                        <div class="divider"></div>
                        <form method="post" class="reply" id="contact">
						<fieldset>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<label>Name: <span>*</span></label>
									<input class="form-control" id="name" name="name" type="text" value="" required>
								</div>
                            </div>
                            <div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<label>Email: <span>*</span></label>
									<input class="form-control" type="email" id="email" name="email" value="" required>
								</div>
							</div>
                            <div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<label>Phone: <span>*</span></label>
									<input class="form-control" type="text" id="phone" name="phone" value="" required>
								</div>
							</div>
                            <div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<label>Company: <span>*</span></label>
									<input class="form-control" type="text" id="company" name="company" value="" required>
								</div>
							</div>
						</fieldset>
						<button class="btn-normal btn-color submit bottom-pad pull-right" type="submit">Send</button>
						<div class="success alert-success alert" style="display:none">
							Your message has been sent successfully.
						</div>
						<div class="error alert-error alert" style="display:none">
							E-mail must be valid and message must be longer than 100 characters.
						</div>
						<div class="clearfix">
						</div>
					</form>
                     </div>
                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                         <h3 class="title">Quick Contact</h3>
                         <ul class="contact-us">
                           <li>
                              <i class="icon-map-marker"></i>
                              <p>
                                 <strong>Address:</strong>
                                 Philadelphia, PA
                              </p>
                           </li>
                           <li>
                              <i class="icon-phone"></i>
                              <p><strong>Phone:</strong>123-456-7890</p>
                           </li>
                           <li>
                              <i class="icon-envelope"></i>
                              <p><strong>Email:</strong><a href="mailto:info@examhawk.com">info@examhawk.com</a></p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Main Content end-->
         </div>
         <!-- Content End -->
<?php include '../views/footer.php'; ?>
