  <!-- Footer -->
  <footer id="footer" class="footer" data-bg-color="#1f1f1f">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
          <img src="images/zed start footer logo.png" alt="">
          <p class="font-12 mt-20 mb-20">VNR is an ISO 9001-2015 Certified Organization provides Consulting and Training Solutions to help you in achieving your goals.</p>
          <ul class="styled-icons flat medium list-inline mb-40">
            <li>
              <i class="fa fa-facebook"></i>
           </li>
            <li>
              <i class="fa fa-twitter"></i>
            </li>
            <li>
              <i class="fa fa-linkedin"></i>
            </li>
            <li>
              <i class="fa fa-google-plus"></i>
            </li>
            <li>
              <i class="fa fa-youtube"></i>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">FIND US</h4>
            <div class="opening-hours">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.362052025116!2d78.38254805117026!3d17.537940987929684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb8e0ab28e0975%3A0x7b048b2858fdee94!2sVNR+Vignana+Jyothi+Institute+of+Engineering+and+Technology!5e0!3m2!1sen!2sin!4v1510468018642" width="300" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Useful Links</h4>
            <ul class="list angle-double-right list-border">
             <li><a href="/">VNR</a></li>
             <li><a href="<?=site_url('/page/courses')?>">Our Courses</a></li>
             <li><a href="<?=site_url('/page/facilities')?>">Facilities</a></li>
             <li><a href="<?=site_url('/page/certificate-validity')?>">Check Certificate Validity</a></li>
             <li><a href="<?=site_url('/page/certificate-verification')?>">Certificate Verification</a></li>
             <li><a href="<?=site_url('/page/quality-policy')?>">Quality Policy</a></li>
             <li><a href="<?=site_url('/page/videos')?>">Video</a></li>
             <li><a href="<?=site_url('/page/contact-us')?>">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
              <h5 class="widget-title">Tags</h5>
              <div class="tags">
                <a href="#"  onclick="return false">Computer Basics</a>
                <a href="#"  onclick="return false">DCS</a>
                <a href="#"  onclick="return false">DCA</a>
                <a href="#"  onclick="return false">O' Level</a>
                <a href="#"  onclick="return false">DCA</a>
                <a href="#"  onclick="return false">SSC</a>
                <a href="#"  onclick="return false">LIC</a>
                <a href="#"  onclick="return false">PCS Level Upp</a>
                <a href="#"  onclick="return false">TET</a>
                <a href="#"  onclick="return false">B.Ed.</a>
                <a href="#"  onclick="return false">English Speaking (British, American)</a>
                <a href="#"  onclick="return false">ITIL</a>
                <a href="#"  onclick="return false">Tally Erp 9 (GST) with manual accounting</a>
              </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Quick Contact</h4>
            <form id="quick_contact_form2" name="footer_quick_contact_form" class="quick-contact-form" action="includes/quickcontact.php" method="post">
              <div class="form-group">
                <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <textarea name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-default btn-flat btn-xs btn-quick-contact text-gray pt-5 pb-5" data-loading-text="Please wait...">Send Message</button>
              </div>
            </form>

            <!-- Quick Contact Form Validation-->
            <script type="text/javascript">
              $("#quick_contact_form2").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#2f2f2f">
      <div class="container pt-15 pb-10">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2017 VNR. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
       <!--     <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>  -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#">

    <i class="fa fa-angle-up"></i>

  </a> </div>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="<?=base_url('assets/js/custom.js')?>"></script>
</body>
</html>
				