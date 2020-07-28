 <!-- Contact Subpage -->
 <section class="pt-page" data-id="contact">

        <div class="section-inner custom-page-content">
          <div class="section-title-block second-style">
            <h2 class="section-title">Contact</h2>
            <h5 class="section-description">Get in Touch</h5>
          </div>

          <div class="section-content">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                {{--   <div id="map" class="map" >
                     
                    </div> --}}
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-3">
                <div class="col-inner bs-30">
                  <div class="lm-info-block gray-default">
                    <i class="lnr lnr-phone-handset"></i>
                    <h4>+6287786668767</h4>
                    <span class="lm-info-block-value"></span>
                    <span class="lm-info-block-text"></span>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-3">
                <div class="col-inner bs-30">
                  <div class="lm-info-block gray-default">
                    <i class="lnr lnr-map-marker"></i>
                    <h4>Jakarta - Bandung</h4>
                    <span class="lm-info-block-value"></span>
                    <span class="lm-info-block-text"></span>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-3">
                <div class="col-inner bs-30">
                  <div class="lm-info-block gray-default">
                    <i class="lnr lnr-envelope"></i>
                    <h4><a href="#" class="__cf_email__">fityanalishi@gmail.com</a></h4>
                    <span class="lm-info-block-value"></span>
                    <span class="lm-info-block-text"></span>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-3">
                <div class="col-inner bs-30">
                  <div class="lm-info-block gray-default">
                    <i class="lnr lnr-checkmark-circle" style="font-size:32px;"></i>
                    <h5>Freelance Available</h5>
                    <p style="font-size:13px; margin-top:-14px;"><b>Start form $15/hour and $1000/project</b></p>
                    <span class="lm-info-block-value"></span>
                    <span class="lm-info-block-text"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class=" col-xs-12 col-sm-8 offset-sm-1 offset-sm-2">
              <div class="col-inner ts-20">
                <div class="block-title">
                  <h3>How Can I Help You?</h3>
                </div>

                <form id="contact_form" class="contact-form" action="javascript:void(0)" method="post">

                  <div class="messages"></div>

                  <div class="controls two-columns">
                    <div class="fields clearfix">
                      <div class="left-column">
                        <div class="form-group form-group-with-icon">
                          <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                          <div class="form-control-border"></div>
                          <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group form-group-with-icon">
                          <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                          <div class="form-control-border"></div>
                          <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group form-group-with-icon">
                          <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject" required="required" data-error="Subject is required.">
                          <div class="form-control-border"></div>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="right-column">
                        <div class="form-group form-group-with-icon">
                          <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                          <div class="form-control-border"></div>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                    </div>

                    <div class="g-recaptcha" data-sitekey="6LeIA7EUAAAAAKukxiC7zsaGIrLjGjaWYb8nExrn"></div>

                    <input type="submit" id="submit" class="button btn-send" value="Send message">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        
      </section>
      <!-- End Contact Subpage -->
      

@section('js-contact')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
          $(document).ready(function() {
            console.log('readys')

            $('#contact_form').on('submit', function() {
              
              var params = {
                'name' : $('#form_name').val(),
                'email' :  $('#form_email').val(),
                'subject' :  $('#form_subject').val(),
                'message' :  $('#form_message').val(),
              }
              if(params.name && params.email && params.subject && params.message ){
                if(grecaptcha.getResponse() == "") {
                $('.messages').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Please click on the reCAPTCHA box.</div>');
              }else{
              console.log(params)
              $.ajax({
              headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            contentType: "application/json",
            dataType: "json",
            type: 'POST',
            url: "send-email",
            data: JSON.stringify(params),
            success: function (results) {
              console.log(results);
              if(results['success'] == 'true'){
                $('.messages').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Terima kasih!</strong><p>Secepatnya segera saya respon</p></div>');
                $('#contact_form')[0].reset();
              }
            
        }
    });
    }
    }  
    });

});
</script>
@endsection