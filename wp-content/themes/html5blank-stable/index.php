
<?php get_header(); ?>

<!-- reference examples at https://www.idangero.us/swiper/demos/#.Vl8kD9-rRHc -->
<section id="lab_video_slider">
  <div class="container-fluid">
    <div class="row">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

      <!-- Link Swiper's CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/css/swiper.min.css">

      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">

          <div id="slide_one" class="swiper-slide">
            <div id="lab_video_text_overlay">
              <div class="container">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-sc.png">
                

              </div>
            </div>
            <!-- VIDEO -->
            <video class="slider-video" width="100%" preload="auto" loop="" onloadedmetadata="this.muted = true" playsinline autoplay muted loop autoplay="false" style="visibility: visible; width: 100%;" poster="img/1.png">
              <source src="<?php echo get_template_directory_uri(); ?>/video/satu.mp4" type="video/mp4">
                <source src="<?php echo get_template_directory_uri(); ?>/video/satu.mp4" type="video/webm">
                  <source src="<?php echo get_template_directory_uri(); ?>/video/satu.mp4" type="video/ogg">
                  </video>
                  <!-- END VIDEO -->
                </div>

                <div id="slide_two" class="swiper-slide">
                  <div id="lab_video_text_overlay">
                    <div class="container">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/logo-sc.png">

                    </div>
                  </div>
                  <!-- end #lab_overlay -->

                  <video class="slider-video" width="100%" preload="auto" loop="" autoplay="" style="visibility: visible; width: 100%;" poster="<?php echo get_template_directory_uri(); ?>/img/2.png">
                  </video>


                </div>

              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>


            <div class="header-content">
             <h2 style="text-align: center;">WE’RE BACK!</h2>
             <p>After 4 years, we are finally back with our first ever touring event! Speed Creed is proud to announce that we have partnered with World X Rally from the UK to organize a 4-day touring event from Jakarta to Surabaya. What started in the UK and Europe, World X Rally is now known for holding rallies worldwide, from Japan, South Africa, to India and Australia. </p>
             <div class="container section">
              <div class="row">
                <div class="col-md-6">
                  <h3 style="margin-bottom: 20px">
                    ----- COUNTDOWN TIMER -----
                  </h3>
                  <span class="data">
                    <p><b>4 DAYS &nbsp;&nbsp;&nbsp;&nbsp;  5 CITIES</b></p>
                    <br>
                    JAKARTA – CIREBON – SEMARANG – JOGJA – SURABAYA

                  </span>
                </div>
                <div class="col-md-6" style="padding: 1%;">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/bg-images.png" alt=""/>
                </div>
              </div>

            </div>

            
          </div>

          <div class="container" style="margin-top: 20px;">
            <div class="row">
              <div class="col-md-12 ml-auto col-xl-12 mr-auto">
                <center><h2>ITINERARY</h2></center>
                <!-- Nav tabs -->
                <div class="card">
                  <div class="card-header">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                          <i></i> Day 1
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                          <i></i> Day 2
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                          <i></i> Day 3
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                          <i></i> Day 4
                        </a>
                      </li>

                    </ul>
                  </div>
                  <div class="card-body">
                    <!-- Tab panes -->
                    <div class="tab-content text-center">
                      <div class="tab-pane active" id="home" role="tabpanel">
                        <p style="text-align: left;">1) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. (day1) <br>
                          2) Lorem ipsum dolor sit amet, consectetur adipisicing elit <br>
                          3) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
                          4) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                      </div>
                      <div class="tab-pane" id="profile" role="tabpanel">
                        <p style="text-align: left;">1) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. (day2) <br>
                          2) Lorem ipsum dolor sit amet, consectetur adipisicing elit <br>
                          3) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
                          4) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                      </div>
                      <div class="tab-pane" id="messages" role="tabpanel">
                        <p style="text-align: left;">1) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. (day3) <br>
                          2) Lorem ipsum dolor sit amet, consectetur adipisicing elit <br>
                          3) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
                          4) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                      </div>
                      <div class="tab-pane" id="settings" role="tabpanel">
                        <p style="text-align: left;">1) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. (day4) <br>
                          2) Lorem ipsum dolor sit amet, consectetur adipisicing elit <br>
                          3) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
                          4) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

          <div class="owl-carousel owl-theme">
            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/img-article-body-section-bg2.png" alt="images not found">
              <div class="cover">
                <div class="container">
                  <div class="header-content">
                    <div class="line"></div>
                    <h2>SpeedCreed</h2>
                    <h1>Sport Car Community</h1>
                    <h4>Indonesia's Largest Sports Car Lifestyle</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/img-landing-header.png" alt="images not found">
              <div class="cover">
                <div class="container">
                  <div class="header-content">
                    <div class="line animated bounceInLeft"></div>
                    <h2>SpeedCreed</h2>
                    <h1>Sport Car Community</h1>
                    <h4>Indonesia's Largest Sports Car Lifestyle</h4>
                  </div>
                </div>
              </div>
            </div>    
          </div>                

          <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <center><h2>Thank You!!!</h2></center>
                </div>


              </div>
            </div>
          </div>



          <div class="container">

            <div class="row">

              <aside class="col-sm-6">
                <h3>Fees</h3>

                <article class="card">
                  <div class="card-body p-5">
                    <table class="table">
                      <tr>
                        <td><b>Type</b></td>
                        <td><b>Entry Fee</b></td>
                      </tr>
                      <tr>
                        <td>Early-bird Ticket (1 pax)</td>
                        <td>IDR 25,000,000</td>
                      </tr>
                      <tr>
                        <td>Early-bird Ticket (2 pax)</td>
                        <td>IDR 45,000,000</td>
                      </tr>
                      <tr>
                        <td>Regular Price (1 pax)</td>
                        <td>IDR 30,000,000</td>
                      </tr>
                      <tr>
                        <td>Regular Price (2 pax)</td>
                        <td>IDR 50,000,000</td>
                      </tr>
                    </table>
                    <!-- <div class="form-group">
                      <label for="sel1">Listing</label>
                      <select class="form-control" id="sel1">
                        <option>Early-bird Ticket (1 pax)</option>
                        <option>Early-bird Ticket (2 pax)</option>
                        <option>Regular Price (1 pax)</option>
                        <option>Regular Price (2 pax)</option>
                      </select>
                    </div> -->
                    <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                          <i class="fa fa-university"></i> Payment Details</a></li>
                        </ul>
                          <table class="table">
                            <tr>
                              <td>Please make your payment to the following bank account:</td>
                            </tr>
                            <tr>
                              <td>Bank</td>
                              <td>Bank Central Asia (BCA)</td>
                            </tr>
                            <tr>
                              <td>Account Name</td>
                              <td>PT ZORAN INDO</td>
                            </tr>
                            <tr>
                              <td>Account Number</td>
                              <td>458-2229931</td>
                            </tr>
                            <tr>
                              <td>Once transferred, please send the transfer receipt to 081513302361 (Will).</td>
                            </tr>
                          </table>

                        
                       </div> <!-- card-body.// -->
                    </article> <!-- card.// -->


                  </aside> <!-- col.// -->

                  <aside class="col-sm-6">
                    <h3>Pre-register form</h3>

                    <article class="card">
                     <?php echo do_shortcode("[wpforms id='8']"); ?>
                    </article> <!-- card.// -->


                  </aside> <!-- col.// -->
                </div> <!-- row.// -->

              </div> 


<?php get_footer(); ?>
