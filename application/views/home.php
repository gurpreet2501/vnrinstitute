<?php $this->load->view('partials/header'); ?>

  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>
              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1920x1280" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                <!-- MAIN IMAGE -->
                <img src="<?=base_url('assets/')?>images/slide2.gif"  alt=""  data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent-5 text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                  id="rs-2-layer-1"
                
                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['28']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Get into the Next big thing...
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['48']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;"> Learn and Automate things.
                </div>


                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-2-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['115']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                  <!-- <a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="reservation-form.html">Request a Quote</a>  -->
                </div>
              </li>

             </li> 

            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [650, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->

      </div>
    </section>

    <!-- Divider: Call To Action -->
    <section class="bg-theme-colored">
      <div class="container pt-10 pb-20">
        <div class="row">
          <div class="call-to-action">
            <!-- Reservation Form Start-->
            <form id="reservation_form" name="reservation_form" class="reservation-form mb-0" method="post" action="includes/reservation.php">
              <div class="col-md-12">
                <h3 class="text-white mt-0 mb-10">Get A Free<span class="text-theme-color-2"> Registration</span>!</h3>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="form-group mb-15">
                  <input name="reservation_email" class="form-control required email" type="email" placeholder="Enter Email">
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="form-group mb-15">
                  <div class="styled-select">
                    <select id="course" name="course" class="form-control" required="">
                      <option value="">- Select Courses -</option>
                      <?php foreach (courses() as $key => $course): ?>
                        <option value="<?=$course['title']?>"><?=$course['title']?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="form-group mb-15">
                  <input placeholder="Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control" required="">
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="form-group mb-15">
                  <input name="reservation_date" class="form-control required date-picker" type="text" placeholder="Date Of Birth" aria-required="true">
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="form-group mb-15 mt-0">
                  <input name="form_botcheck" class="form-control" type="hidden" value="">
                  <button type="submit" class="btn btn-default btn-lg btn-flat border-left-theme-color-2-4px form-control" data-loading-text="Please wait...">Submit Now</button>
                </div>
              </div>
            </form>
            <!-- Reservation Form End-->

            <!-- Reservation Form Validation Start-->
            <script type="text/javascript">
              $("#reservation_form").validate({
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
            <!-- Reservation Form Validation Start -->
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About  -->
   <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20 ">
              <h2 class="line-bottom font-20 text-theme-colored text-uppercase mb-10 mt-0">Welcome to<span class="text-theme-color-2"> VNR Solutions</span></h2>
              <p class="lead font-18">We are a young company created by a team of IT professionals worked in companies like Bharti Airtel, SifyTechnologies, HCL, Convergys, Accenture and Colt.</p>
              <p>We mainly focus on Fast IT solutions that helps a company grow in a rapid manner in this IT maniac industry.</p>
              <!--<a class="btn btn-colored btn-theme-colored btn-sm" href="#">View Details</a>-->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
              <div class="image-box-thum">
                <img  class="img-fit-container" alt="" src="<?=base_url('assets/')?>images/register.jpg">
              </div>
              <div class="image-box-details pt-20 pb-sm-20">
                <h4 class="title text-uppercase line-bottom mt-0">Experience Yourself</h4>
                <p class="desc mb-10">You can experience yourself by registering for free demo classes at VNR and feel the difference in curriculum and instructors.</p>
               <!-- <a href="courses-at-VNR.html" class="btn btn-xs btn-theme-colored">Read more</a>-->
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 pb-sm-20">
              <div class="image-box-thum">
                <img  class="img-fit-container"  alt="" src="<?=base_url('assets/')?>images/online-learning.jpg">
              </div>
              <div class="image-box-details pt-20 pb-sm-20">
                <h4 class="title text-uppercase line-bottom mt-0">Online Learning</h4>
                <p class="desc mb-10">For Professionals, we have instructor-led one-to-one or one-to-many interactive online courses.</p>
              <!--  <a href="courses-at-VNR.html" class="btn btn-xs btn-theme-colored">Read more</a>-->
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="image-box-thum">
                <img class="img-fullwidth" width="255" height="170" alt="" src="<?=base_url('assets/')?>images/innovate.jpg">
              </div>
              <div class="image-box-details pt-20 pb-sm-20">
                <h4 class="title text-uppercase line-bottom mt-0">INNOVATION</h4>
                <p class="desc mb-10">VNR has a strong innovative team that works at the backend and drives innovation in the fields of Networks and Automation Industry. </p>
               <!-- <a href="innovation-at-VNR-solutions.html" class="btn btn-xs btn-theme-colored">Read more</a>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="">
      <div class="container pb-40">
        <div class="section-title">
        <div class="row">
          <div class="col-md-8">
            <h2 class="text-uppercase line-bottom line-height-1 mt-0 mb-0 ">Our <span class="text-theme-color-2 font-weight-400">COURSES</span></h2>
         </div>
        </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel-4col">
               <?php foreach (courses() as $key => $val): ?>
                  <div class="item ">
                  <div class="service-block bg-lighter">
                    <div class="thumb"> <img class="img-fit-container" alt="featured project" src="<?=base_url('assets/images/')?><?=$val['img']?>" class="img-fullwidth">
                    </div>
                    <div class="content text-left flip p-25 pt-0">
                      <h4 class="line-bottom mb-10"><?=$val['title']?></h4>
                      <p><?=$val['desc']?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="<?=base_url('assets/images/content-back-home.jpg')?>" data-parallax-ratio="0.7">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mt-5 text-theme-color-2"></i>
              <h2 data-animation-duration="2000" data-value="2248" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase mb-0">Happy Students</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-note2 mt-5 text-theme-color-2"></i>
              <h2 data-animation-duration="2000" data-value="115" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase mb-0">Our Courses</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-users mt-5 text-theme-color-2"></i>
              <h2 data-animation-duration="2000" data-value="23" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase mb-0">Our Teachers</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
            <div class="funfact text-center">
              <i class="pe-7s-cup mt-5 text-theme-color-2"></i>
              <h2 data-animation-duration="2000" data-value="100%" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase mb-0">Client Satisfaction</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Why Choose Us -->
    <section id="event" class="">
      <div class="container pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h3 class="text-uppercase line-bottom mt-0 line-height-1"><i class="fa fa-calendar mr-10"></i>Upcoming <span class="text-theme-color-2">Events</span></h3>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb mr-20"><img width="120" height="120" alt="" src="<?=base_url('assets/')?>images/vnr.jpg"></a>
                <div class="post-right">
                  <h4 class="mt-0 mb-5"><a href="#">Internet of Things Course</a></h4>
                  <ul class="list-inline font-12 mb-5">
                    <li class="pr-0"><i class="fa fa-calendar mr-5"></i> September 20, 2017 |</li>
                    <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>Patiala</li>
                  </ul>
                  <p class="mb-0 font-13">Learn IOT with Arduino and Raspberry Pi and automate things you like. </p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb mr-20"><img width="120" height="120" alt="ethical-hacking-training-at-VNR" src="<?=base_url('assets/')?>images/vnr.jpg"></a>
                <div class="post-right">
                  <h4 class="mt-0 mb-5"><a href="#">Ethical Hacking</a></h4>
                  <ul class="list-inline font-12 mb-5">
                    <li class="pr-0"><i class="fa fa-calendar mr-5"></i> September 27, 2017 |</li>
                    <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>Patiala</li>
                  </ul>
                  <p class="mb-0 font-13">Ethical Hacking Course Covers Penetration Testing with Scripting and Kali Linux.</p>
                </div>
              </article>
            
            </div>
            <div class="col-md-6">
              <h3 class="line-bottom mt-0 line-height-1">Why <span class="text-theme-color-2">VNR?</span></h3>
              <p class="mb-10">Only Company in the region that provides over 100 courses and corporate training in the region.</p>
              <div id="accordion1" class="panel-group accordion">
                <div class="panel">
                  <div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse" href="#accordion11" aria-expanded="true"> <span class="open-sub"></span>For Freshers</a> </div>
                  <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Our Vision at VNR is to make fresher students capable in getting jobs in technologies they love by providing industry specific training. </p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" class="" aria-expanded="true"> <span class="open-sub"></span> Corporate Training</a> </div>
                  <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>We provide Corporate Training to industry professionals on online and weekend basis which helps them grow rapidly in today's competitive environment.</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span> Online Training</a> </div>
                  <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>We have a large set of instructor-led online courses available which are provided through collaboration tools on one-to-one or one-to-many basis.</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="" aria-expanded="true"> <span class="open-sub"></span>Placements</a> </div>
                  <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>VNR provides a solid placement assistance by preparing students for Interviews and Technology Ethics. </p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="" aria-expanded="true"> <span class="open-sub"></span> Best Technical Team</a> </div>
                  <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>VNR have the best technical team available in the region with all instructors are having over three years of experience and are pioneer in their related fields   </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php $this->load->view('partials/footer'); ?>