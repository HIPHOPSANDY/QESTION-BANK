<?php 
$result="";

if(isset($_POST['submit'])) {
    require'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='theshieldsince2019@gmail.com';
    $mail->Password='Shield@2019';

    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('santhoshkumar24cs@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);

    $mail->isHTML(true);
    $mail->Subject='Form Submission:'.$_POST['subject'];
    $mail->Body='<h1 align=center>Name :'.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message:'.$_POST['msg'].'</h1>';

  if(!$mail->send()){
    $result="Somthing went wrong. Please try again.";

  }
else {
  $result="Thanks".$_POST['name']." for contacting us .we'll get back soon!";

}


}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Question Bank</title>
  <meta name="description" content="">
  <meta name="author" content="">

 <?php include("include/header.php"); ?>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <div id="preloader">
    <div id="status"> <img src="img/preloader.gif" height="64" width="64" alt=""> </div>
  </div>
  

<?php 
include("include/headerpage.php");

?>



  <!-- Contact Section -->
  <div id="contact" class="text-center">
    <div class="container">
      <div class="section-title center">
        <h2>Contact us</h2>
        <hr>
        <p>What You Need From Us? What You Want From Us? Just Send a Feedbback Whatever You Want..!</p>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <div class="col-md-6">
          <div class="contact-item"> <i class="fa fa-map-marker fa-2x"></i>
            <p>CORALMINT SOFTWARE SOLUTIONS , Lohambalkovil,pudupalayam road, <br>Cuddalore, Tamil Nadu 607001</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="contact-item"> <i class="fa fa-envelope-o fa-2x"></i>
            <p>theshieldsince2019@gmail.com</p>
          </div>
        </div>
       
        <div class="clearfix"></div>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <h3>Leave us a FeedPack</h3>
        <br>
              <h5 class="text-center text-success"><?= $result; ?></h5>
        <form method="post" action=""  >
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text"  name="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" name="email"  class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">

             <input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
        
               <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <textarea name="msg" id="msg" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>


            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send">

                 </form>
        <div class="social">
          <h3>Follow us</h3>
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<!-- footerpage start -->
<?php include("include/footerpage.php"); ?>
<!-- footerpage end -->
<!-- footer content start -->
  <?php include("include/footer.php");?>
  <!-- footer  -->
</body>

</html>