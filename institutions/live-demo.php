<?php include '../views/header.php'; ?>
        <!-- Content Start -->
        <div id="main">
          <!-- Main Content start-->
            <div class="content">
               <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h3 class="title">Contact Us</h3>
                        <div>
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
                              <p><strong>Email:</strong><a href="mailto:info@ExamHawk.com">info@ExamHawk.com</a></p>
                           </li>
                        </ul>
                      </div>
                        <div class="divider"></div>
                        <div id="maps" class="google-maps">
                            <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=philadelphia+pa&amp;aq=&amp;sll=40.002498,-75.118033&amp;sspn=0.467072,1.056747&amp;ie=UTF8&amp;hq=&amp;hnear=Philadelphia,+Pennsylvania&amp;ll=40.002372,-75.118332&amp;spn=0.467414,1.056747&amp;t=m&amp;z=11&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=philadelphia+pa&amp;aq=&amp;sll=40.002498,-75.118033&amp;sspn=0.467072,1.056747&amp;ie=UTF8&amp;hq=&amp;hnear=Philadelphia,+Pennsylvania&amp;ll=40.002372,-75.118332&amp;spn=0.467414,1.056747&amp;t=m&amp;z=11" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                        </div>
                     </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="contact-form">
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
                  </div>
                  <div class="divider"></div>
               </div>
            </div>
            <!-- Main Content end-->
         </div>
         <!-- Content End -->
<?php include '../views/footer.php'; ?>
