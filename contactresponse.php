<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "info@bmf.com";
 
    $email_subject = "BMF";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "Something went wrong ";
 
        echo "Please retry filling the form <a href='contact.php'>Inquiry Form</a>.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||  
 
        !isset($_POST['email']) ||

        !isset($_POST['phone']) ||

        !isset($_POST['subject']) ||
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $email = $_POST['email']; // required

    $phone = $_POST['phone']; // required

    $subject = $_POST['subject']; // required
 
    $message = $_POST['message']; // required
 

 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";

    $email_message .= "Phone: ".clean_string($phone)."\n";

    $email_message .= "Subject: ".clean_string($subject)."\n";
 
    $email_message .= "Inquiry Message: ".clean_string($message)."\n";
    
    $email_message .= "Form on product page ";
 
     
 
     
 
// create email headers
 
$headers = 'From : '.$email."\r\n".
 
'Reply-To: '.$email."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
<?php
$title = "Home";
include("header.php");
?>  

  <div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
      <ul>
        <li data-transition="papercut" data-slotamount="15" data-masterspeed="2300" data-delay="9400">
          <img src="images/resource/slide-1.jpg" alt="slide">
          <div class="caption large_yallow lfl stl"
             data-x="left"
             data-y="170"
             data-speed="500"
             data-start="500"
             data-easing="easeOutExpo">Improving Governance and Private
          </div>
          <div class="caption medium_grey lfr"
             data-x="left"
             data-y="236"
             data-speed="500"
             data-start="800"
             data-easing="easeOutExpo">Sector Expansion in Municipalities through Education
          </div>
        </li>
        <li data-transition="papercut" data-slotamount="15" data-masterspeed="2300" data-delay="9400">
          <img src="images/resource/slide-2.jpg" alt="slide">
          <div class="caption large_yallow lfl stl"
             data-x="left"
             data-y="170"
             data-speed="500"
             data-start="500"
             data-easing="easeOutExpo">Offering Collective Learning, 
          </div>
          <div class="caption medium_grey lfr"
             data-x="left"
             data-y="236"
             data-speed="500"
             data-start="800"
             data-easing="easeOutExpo">Skill Development Support, and Sharing of Best Practices
          </div>
        </li>
        <li data-transition="papercut" data-slotamount="15" data-masterspeed="2300" data-delay="9400">
          <img src="images/resource/slide-3.jpg" alt="slide">
          <div class="caption large_yallow lfl stl"
             data-x="left"
             data-y="170"
             data-speed="500"
             data-start="500"
             data-easing="easeOutExpo">Connecting the human capital of 
          </div>
          <div class="caption medium_grey lfr"
             data-x="left"
             data-y="236"
             data-speed="500"
             data-start="800"
             data-easing="easeOutExpo">Buea municipality to the Nation’s National Development Agenda (Vision 2035)
          </div>
        </li>
      </ul>
      <div class="tp-bannertimer"></div>
    </div>
  </div><!-- slider ends -->
  
  <div class="alert alert-full">
    <div class="container">
      <h4><center>Message received. Thanks for contacting us. We will get back to you.</center></h4>
    </div>
  </div><!-- alert ends -->
  
  <div class="container">
    <div class="row">
      <div class="span6">
        <div class="events">
          <h2>Upcoming <strong>Sessions</strong></h2>
          <ul class="events-list">
            <li>
              <div class="event-box event-box-featured">
                <figure class="image">
                  <a href="events-detail.html"><img src="images/resource/pic-1.jpg" alt="pic"></a>
                </figure>
                <div class="detail">
                  <h5><a href="events-detail.html">BMF Tailored Professional Courses and Modules</a></h5>
                  <ul>
                    <li><span>Combination of unique experiential learning and academia level learning that provide a broad curriculum of professional skill development. </span></li>
                  </ul>
                </div>
              </div><!-- event-box ends -->
            </li>
            <li>
              <div class="event-box">
                <div class="detail">
                  <h5><a href="professional.html">Day 1</a></h5>
                  <ul>
                    <li><span><i class="icon-date"></i> The God Reward for Service</span></li>
                    <li><span><i class="icon-date"></i> The Business Environment</span></li>
                    <li><span><i class="icon-date"></i> Stakeholders Analysis</span></li>
                    <li><span><i class="icon-date"></i> Strategic Change Leadership</span></li>
                  </ul>
                </div>
              </div><!-- event-box ends -->
            </li>
            <li>
              <div class="event-box">
                <div class="detail">
                  <h5><a href="professional.html">Day 2</a></h5>
                  <ul>
                    <li><span><i class="icon-date"></i> Understanding Corruption, Its causes, effects and consequences</span></li>
                    <li><span><i class="icon-date"></i> Public Service Corruption Risk Assessment & Management</span></li>
                    <li><span><i class="icon-date"></i> Strategic Human Resource Management</span></li>
                    <li><span><i class="icon-date"></i> Corporate Strategy</span></li>
                  </ul>
                </div>
              </div><!-- event-box ends -->
            </li>
            <li>
              <div class="event-box">
                <div class="detail">
                  <h5><a href="professional.html">Day 3</a></h5>
                  <ul>
                    <li><span><i class="icon-date"></i> Economics of Happiness (Video session)</span></li>
                    <li><span><i class="icon-date"></i> Anti Corruption What it Means to the Cameroonian Economy</span></li>
                    <li><span><i class="icon-date"></i> Policy Development, Analysis and Implementation; Understanding the Difference Between Governance and Good Governance</span></li>
                    <li><span><i class="icon-date"></i> Explaining Vision 2035: Understanding the Growth and Employment Strategy Objectives of Cameroon and Cameroon’s Development Goals</span></li>
                  </ul>
                </div>
              </div><!-- event-box ends -->
            </li>
            <li>
              <div class="event-box">
                <div class="detail">
                  <h5><a href="professional.html">Day 4</a></h5>
                  <ul>
                    <li><span><i class="icon-date"></i> Poject Management</span></li>
                    <li><span><i class="icon-date"></i> Marketing Policy, Planning, and Communication</span></li>
                    <li><span><i class="icon-date"></i> Financial Accounting</span></li>
                    <li><span><i class="icon-date"></i> Nonviolent Discipline and Communication ( Video)</span></li>
                  </ul>
                </div>
              </div><!-- event-box ends -->
            </li>
            <li>
              <div class="event-box">
                <div class="detail">
                  <h5><a href="professional.html">Day 5</a></h5>
                  <ul>
                    <li><span><i class="icon-date"></i> Understanding Entrepreneurship</span></li>
                    <li><span><i class="icon-date"></i> Group Presentation of Lessons Learned by Learners</span></li>
                    <li><span><i class="icon-date"></i> Closing Ceremony & Award of Fellowship Certificates</span></li>
                  </ul>
                </div>
              </div><!-- event-box ends -->
            </li>
          </ul><!-- events-list ends -->

        </div><!-- events end -->
      </div>
      <div class="span3">
        <div class="donate">
          <h2>The <strong>Program</strong></h2>
          <div class="donate-box">
            <form method="post" action="README.md">
              <div class="donate-detail">
                <h3>Want a complete downloadable copy of the program?</h3>
                <div class="ratio">
                  Download almost complete
                </div>
                <div class="progress">
                  <div class="bar" style="width:79%"></div>
                </div>
              </div><!-- donate-detail ends -->
              <input type="submit" class="btn btn-donate" value="Download Now">
            </form>
          </div><!-- donate-box ends -->
        </div><!-- donate ends -->
        <div class="twitter">
          <h2>What is <strong>BMF?</strong></h2>
          <div class="event-box">
                <div class="detail" style="text-align: justify;">
                <p>
                  BMF is a pioneering Business Management and Public Service Integrity professional development opportunity for the population of Cameroon in general, offered by Buea Municipal Council. It aims to overcome shortcomings in the development potential of ordinary citizens who constitute key players in the social, economic and political life of Cameroon and Buea municipality in particular. It is a partnership between the Buea Municipal Council and the International Governance 
                </p>
                <p>
                  Institute of the UK through its Cameroon chapter known as the Focal Integrity Team. The BMF supports young public servants in the civil service and private sectors, unskilled small business operators and young entrepreneurs; graduates from all works of life, including individuals who desire to improve their competencies in business management and local governance for the sustainable development of Buea Municipality and Cameroon in general.
                </p>
                <p>
                  The purpose of BMF is to help Cameroon recover lost grounds in governance, economic and social development as quickly as possible so as to ...
                </p>
                <p>
                  <a href="about.php">Continue reading about BMF</a>
                </p>
                  
                </div>
              </div><!-- tweets-box ends -->
        </div><!-- twitter ends -->      
      </div>
      <!-- Sidebar -->
      <?php
      include("sidebar.php");
      ?>
      <!-- Sidebar endds -->
    </div>
  </div><!-- /container --> 
  <div class="testimonials">
    <div class="container">
      <div class="testimonial-detail">
        <ul class="testimoni">
          <li>
            <blockquote>
              <p>The purpose of training is to tighten up the slack, toughen the body, and polish the spirit. </p>
            </blockquote>
            <span class="name">Morihei Ueshiba</span>
          </li>
          <li>
            <blockquote>
              <p>Job training empowers people to realize their dreams and improve their lives. </p>
            </blockquote>
            <span class="name">Sylvia Mathews Burwell</span>
          </li>
        </ul>
      </div>
    </div>
  </div><!-- testimonials end -->
  
<?php
include("footer.php");
?>


 
 
 
<?php
 
}
 
?>