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
$title = "Contact Us";
$description = "#1 Worldwide PaperOne Supplier ";
include("header2.php"); 
?>



<footer class="contacts_wrap bg_tint_dark contacts_style_dark">
    <div class="content_wrap">
        <h2 class="footer_contact_title"> Message Sent! </h2>

        <div class="footer_contact_title_line"></div>
        <div class="contacts_address">
            <address>
                Thanks for contacting us.<br>
                We will get back to you as soon as possible
            </address>
        </div>

        <div class="footer_contact_title_line"></div>
        <div class="contacts_address">
            <address class="address_right">
                Phone: 1.800.123.4567<br>
                Fax: 1.800.123.4566
            </address>
            <address class="address_left">
                1234, Some Str.<br>
                San Francisco, CA 94102, US
            </address>
        </div>
        <div class="sc_socials sc_socials_size_big">
            <div class="sc_socials_item">
                <a href="#" target="_blank" class="social_icons social_facebook-circled">
                    <span class="icon-facebook-circled up"></span>
                    <span class="icon-facebook-circled"></span>
                </a>
            </div>
            <div class="sc_socials_item">
                <a href="#" target="_blank" class="social_icons social_pinterest-circled">
                    <span class="icon-pinterest-circled up"></span>
                    <span class="icon-pinterest-circled"></span>
                </a>
            </div>
            <div class="sc_socials_item">
                <a href="#" target="_blank" class="social_icons social_twitter-circled">
                    <span class="icon-twitter-circled up"></span>
                    <span class="icon-twitter-circled"></span>
                </a>
            </div>
            <div class="sc_socials_item">
                <a href="#" target="_blank" class="social_icons social_gplus-circled">
                    <span class="icon-gplus-circled up"></span>
                    <span class="icon-gplus-circled"></span>
                </a>
            </div>
            <div class="sc_socials_item">
                <a href="#" target="_blank" class="social_icons social_flickr-circled">
                    <span class="icon-flickr-circled up"></span>
                    <span class="icon-flickr-circled"></span>
                </a>
            </div>
        </div>
        
    </div>
    <!-- /.content_wrap -->
</footer>
<!-- /.contacts_wrap -->
<div class="copyright_wrap">
    <div class="content_wrap">
        <p>
            
            <a href="index.php"> Home </a>
            |
            <a href="company.php"> Company </a>
            |
            <a href="store.php"> Paper Store </a>
            |
            <a href="career.php"> Careers </a>
            |
            <a href="contact.php"> Contact Us</a>
        </p>
        <br />
        <p>
            <a href="#">April Group RC</a>
            © 2015 All rights reserved.
            
        </p>
    </div>
</div>

</div>
<!-- /.page_wrap -->

</div>
<!-- /.body_wrap -->

<div class="custom_options_shadow"></div>

<a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>

<div class="custom_html_section">
</div>

<script type='text/javascript' src='js/vendor/superfish.min.js'></script>
<script type='text/javascript' src='js/vendor/jquery.slidemenu.min.js'></script>
<script type='text/javascript' src='js/vendor/core.min.js'></script>
<script type='text/javascript' src='js/vendor/widget.min.js'></script>
<script type='text/javascript' src='js/vendor/accordion.min.js'></script>
<script type='text/javascript' src='js/vendor/chart.min.js'></script>
<script type='text/javascript' src='js/vendor/diagram.raphael.min.js'></script>
<script type='text/javascript' src='js/vendor/Graph.js'></script>
<script type='text/javascript' src='js/vendor/idangerous.swiper-2.7.min.js'></script>
<script type='text/javascript' src='js/vendor/idangerous.swiper.scrollbar-2.4.min.js'></script>
<script type='text/javascript' src='js/vendor/isotope.pkgd.min.js'></script>

<script type='text/javascript' src='js/custom/core.utils.min.js'></script>
<script type='text/javascript' src='js/custom/core.init.js'></script>
<script type='text/javascript' src='js/custom/shortcodes.js'></script>
<script type='text/javascript' src='js/custom/core.messages.min.js'></script>
<script type='text/javascript' src='js/custom/jquery.prettyPhoto.min.js'></script>

<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>

</html>
 
 
 
<?php
 
}
 
?>