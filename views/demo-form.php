<!-- Modal -->
<div class="modal fade in" id="demo-form" tabindex="-1" role="dialog" aria-labelledby="demo-form" aria-hidden="true">
  <div class="modal-dialog modal-dialog-center">
      <form method="post" class="reply" id="demo-form">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel"><img src="<?php echo BASE_URL; ?>/img/sandbox/sm-owl.png" alt="ExamHawk"> Schedule a Live Demo</h2>
      </div>
      <div class="modal-body">
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
        <div class="modal-footer">
        <a type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</a>
        <input class="btn btn-success" type="submit" value="Submit" id="demo-form-submit">
      </div>

    <div class="success alert-success alert" style="display:none">
        Your message has been sent successfully.
    </div>
    <div class="error alert-error alert" style="display:none">
        There was an error
    </div>
    </div><!-- /.modal-content -->
     </form>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->