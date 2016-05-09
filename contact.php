<?php
$title = "Contact Us";
include("header.php");
?> 
  <div class="banner">
    <div class="location-map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2813.8139917729504!2d9.23783618295594!3d4.154590669682852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xc4bad76d95b636d7!2sBuea+Council+Hall!5e0!3m2!1sen!2scm!4v1462799888303" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div><!-- location-map ends -->
    <div class="container">
      <h1>Contact Us</h1>
      <div class="bread-bar clearfix">
        <ul class="breadcrumb">
          <li><a href="index-2.html">Home</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div><!-- banner ends -->
  <br />
  <div class="container">
    <div class="row">
      <div class="span5">
        <section class="contact-box">
          <h2>Get In <strong>Touch</strong></h2>
          <p>We're very approachable and would love to speak to you. Feel free to call, send us an email, Tweet us or simply complete the enquiry form</p>
          <ul class="contact-list">
            <li class="list-phone">+44 - 123 - 4567890</li>
            <li class="list-email"><a href="#">Info@h-e-l-p.com</a></li>
            <li class="list-facebook"><a href="#">www.facebook.com/h-e-l-p</a></li>
            <li class="list-twitter"><a href="#">#h-e-l-p</a></li>
          </ul>
        </section><!-- blog-box ends -->
      </div>
      <div class="span7">
        <section class="comment-area">
          <h2 class="text-pink">Leave <strong>Reply</strong></h2>
          <form method="get" action="contactresponse.php">
            <ul class="unstyled">
              <li class="row-fluid">
                <div class="span12">
                  <label>Name <span class="require">(Required)</span></label>
                  <input type="text" class="input-block-level" placeholder="" name="name">
                </div>
              </li>
              <li class="row-fluid">
                <div class="span12">
                  <label>Email <span class="require">(Required)</span></label>
                  <input type="text" class="input-block-level" placeholder="" name="email">
                </div>
              </li>
              <li class="row-fluid">
                <div class="span12">
                  <label>Phone <span class="require">(Required)</span></label>
                  <input type="text" class="input-block-level" placeholder="" name="phone">
                </div>
              </li>
              <li class="row-fluid">
                <div class="span12">
                  <label>Subject <span class="require">(Required)</span></label>
                  <input type="text" class="input-block-level" placeholder="" name="subject">
                </div>
              </li>
              <li class="row-fluid">
                <div class="span12">
                  <label>Message <span class="require">(Required)</span></label>
                  <textarea class="input-block-level" placeholder="" name="message"></textarea>
                </div>
              </li>
              <li class="row-fluid">
                <div class="span12">
                  <input type="submit" class="btn" value="Submit">
                </div>
              </li>
            </ul>
          </form>
        </section><!-- comment form ends -->
      </div>
    </div>
  </div><!-- /container --> 

  
<?php
include("footer.php");
?>