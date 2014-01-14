<!-- Modal -->
<div class="modal fade in" id="demo-form" tabindex="-1" role="dialog" aria-labelledby="demo-form" aria-hidden="true">
  <div class="modal-dialog modal-dialog-center">
      <form method="post" class="reply" id="demo-form">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel"><img src="<?php echo BASE_URL; ?>/img/sandbox/sm-owl.png" alt="ExamHawk"> Schedule a Live Demo</h2>
      </div>
      <div class="modal-body form-body">
            <div class="col-sm-12">
                <div class="row form-group">
                    <div class="col-xs-12">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-xs-12">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-xs-12">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required="">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-xs-12">
                        <input type="text" class="form-control" id="company" name="company" placeholder="Company" required="">
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-body message-sent" style="display:none;">
          <div class="row">
              <div class="col-xs-6">
                  <img src="http://localhost/owlmonitor/img/sandbox/lg-owl.png" alt="ExamHawk Mascot Hawkee">
              </div>
              <div class="col-xs-6">
                  <h3 class="modal-success-msg">Thank you!</h3>
                  <p class="modal-success-msg">
                      Your message has been received. A dedicated member of the ExamHawk staff will reach out to you in the near future.
                  <p>
                  <p class="modal-success-msg">
                      - Hawkee
                  </p>
              </div>
          </div>
      </div>
      <div class="error alert-error alert" style="display:none;">
          There was an error
      </div>

      <div class="modal-footer">
        <a type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</a>
        <input class="btn btn-primary" type="submit" value="Send" id="demo-form-submit">
      </div>



    </div><!-- /.modal-content -->
     </form>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->