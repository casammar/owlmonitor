<!-- Modal -->
<div class="modal fade" id="demo-form" tabindex="-1" role="dialog" aria-labelledby="demo-form" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel">Schedule a Live Demo</h2>
      </div>
      <div class="modal-body">
          <form method="post" class="reply" id="contact">
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
                        <input type="email" class="form-control" id="phone" name="phone" placeholder="Phone" required="">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-xs-12">
                        <input type="text" class="form-control" id="company" name="company" placeholder="Company" required="">
                    </div>
                </div>
            </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
        <div class="success alert-success alert" style="display:none">
        Your message has been sent successfully.
    </div>
    <div class="error alert-error alert" style="display:none">
        E-mail must be valid and message must be longer than 100 characters.
    </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->