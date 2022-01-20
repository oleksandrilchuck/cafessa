<?php get_header('page')?>
  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="contact_bg_box">
      <img src="<?php the_post_thumbnail_url(  )?>" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          <?php the_title(  )?>
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-7 mx-auto">
            <!-- <form action="#">
              <div class="contact_form-container">
                <div class="row">
                  <div class="col-sm-6">
                    <input type="text" placeholder="Full Name" />
                  </div>
                  <div class="col-sm-6">
                    <input type="email" placeholder="Email " />
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <div class="col-sm-6">
                    <input type="number" placeholder="Number of People" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <input type="date" placeholder="Select Date" />
                  </div>
                  <div class="col-sm-6">
                    <input type="time" placeholder="Select Time" />
                  </div>
                </div>
                <div class="">
                  <input type="text" placeholder="Aditional Note" class="message_input" />
                </div>
                <div class="btn-box ">
                  <button type="submit">
                    Send
                  </button>
                </div>
              </div>
            </form> -->
            <?php echo do_shortcode( "[wpc_reservation_form form_style ='2']" )?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <?php get_footer(  ) ?>