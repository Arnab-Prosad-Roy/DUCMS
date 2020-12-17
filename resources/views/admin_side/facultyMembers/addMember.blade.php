                <div class="modal fade" id="modal-animation-10">
                  <div class="modal-dialog">
                    <div class="modal-content animated bounceIn">
                      <div class="modal-header">
                        <h5 class="modal-title"><i class="fa fa-star"></i>Add Faculty Member</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
               <div class="card-body">
                  <form id="post-form" method="post" action="javascript:void(0)">
                     @csrf
                     <div class="row">
                        <div class="col-md-12">
                           <div class="alert alert-success d-none" id="msg_div">
                                   <span id="res_message"></span>
                              </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Name<span class="text-danger">*</span></label>
                              <input type="text" name="name" placeholder="Enter name" class="form-control">
                              <span class="text-danger p-1">{{ $errors->first('name') }}</span>
                           </div>
                        </div>
                     </div>                     
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Email<span class="text-danger">*</span></label>
                              <input type="email" name="email" placeholder="Enter email" class="form-control">
                              <span class="text-danger p-1">{{ $errors->first('email') }}</span>
                           </div>
                        </div>
                     </div>                     
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Phone<span class="text-danger">*</span></label>
                              <input type="text" name="phone" placeholder="Enter phone" class="form-control">
                              <span class="text-danger p-1">{{ $errors->first('phone') }}</span>
                           </div>
                        </div>
                     </div>
<!--                      <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Body<span class="text-danger">*</span></label>
                              <textarea class="form-control" rows="3" name="body" placeholder="Enter Body Text"></textarea>
                              <span class="text-danger">{{ $errors->first('body') }}</span>
                           </div>
                        </div>
                     </div> -->
                     <div class="row">
                        <div class="col-md-12">
                           <button type="submit" id="send_form" class="btn btn-block btn-success">Submit</button>
                        </div>   
                     </div>
                  </form>
               </div>
                    </div>
                  </div>
                </div>


<script>
   if ($("#post-form").length > 0) {
    $("#post-form").validate({
      
    rules: {
      name: {
        required: true,
        maxlength: 50
      },
      email: {
        required: true,
        maxlength: 250
      },
      phone: {
        required: true,
        maxlength: 25
      },      
      designation: {
        required: true,
        maxlength: 50
      }
    },
    messages: {
      name: {
        required: "Please Enter Name",
        maxlength: "Your name maxlength should be 50 characters long."
      },
      designation: {
        required: "Please Enter Designation",
        maxlength: "Your phone maxlength should be 50 characters long."
      },
      phone: {
        required: "Please Enter Phone Number",
        maxlength: "Your phone maxlength should be 25 characters long."
      },
      email: {
        required: "Please Enter Email",
        maxlength: "Your email maxlength should be 250 characters long."
      },      

    },
    submitHandler: function(form) {
     $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $('#send_form').html('Sending..');
      $.ajax({
        url: '/save-form' ,
        type: "POST",
        data: $('#post-form').serialize(),
        success: function( response ) {
            $('#send_form').html('Submit');
            $('#res_message').show();
            $('#res_message').html(response.msg);
            $('#msg_div').removeClass('d-none');
 
            document.getElementById("post-form").reset(); 
            setTimeout(function(){
            $('#res_message').hide();
            $('#msg_div').hide();
            },10000);
        }
      });
    }
  })
}
</script>