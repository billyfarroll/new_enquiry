<style>
form span{
  color: red;
}
form input[type="submit"]{
  background: url('images/logo2.png') no-repeat;
  background-size: contain;
  overflow: visible;
  padding-left: 45px;
  height: 20px;
  border: 0px;
  margin: 0 auto;
  margin-top: 5px;
  font-family: 'Orbitron', sans-serif;
  text-transform: uppercase;
}
.g-recaptcha{
  margin: 5px;
}
</style>
<?php
if(strpos($_SERVER['REQUEST_URI'], 'form' )!== false){
  header('Location:index.php');
}
if($_POST){
 $email;
 $name;
 $captcha;
 $telephone;
 $question;
    if(isset($_POST['email']))
      $email=$_POST['email'];
    if(isset($_POST['name']))
      $name=$_POST['name'];
    if(isset($_POST['telephone']))
      $telephone=$_POST['telephone'];
    if(isset($_POST['message']))
      $question=$_POST['message'];
    if(isset($_POST['g-recaptcha-response']))
      $captcha=$_POST['g-recaptcha-response'];


$email = htmlspecialchars($_POST['email']);
  if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email) || ($name == "") || ($question == "") ||(!$captcha))
  {
      echo "<p>Invalid Input.</p>";
      ?>
      <form method="post" style="text-align:left;">
        <label>Name: <span>*</span></label><input name="name" type="text" />
        <label>Email: <span>*</span></label><input name="email" type="text" />
        <label>Contact Number: </label><input name="telephone" type="text" />
        <label>Message: <span>*</span></label>
        <textarea name="message" rows="10" cols="30"></textarea>
        <div class="g-recaptcha" data-sitekey="<!-- SITEKEY -->"></div>
        <input type="submit" value="submit" />
      </form>
      <?php
  } else {
    $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=<!-- SECRET KEY -->=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
    if($response['success'] == false)
    {
      echo '<h2>Spam detected</h2>';
    }
    else
    {
  $email_from = "billy.farroll@hotmail.com"; // This email address has to be the same email on the server if using Fasthots server i.e. strawberry server - billy@strawberrymarketing.com - SENDS THE EMAIL
  $email_to = "billy.farroll@hotmail.com"; // Where the email is being sent to
  $question = $_POST["message"];
  $email_subject = "Enquiry";
  $headers =
  "From: $email \n"; // This is what's shown in the receiving message mail the email variable is essential here because it's whats entered by user
  "Reply-To: $email \n";  // This is what's shown in the receiving message mail the email variable is essential here because it's whats entered by user
  $message =
  "Name: ". $name .
  "\r\nMobile Number: " . $telephone .
  "\r\nEmail Address: " . $email .
  "\r\n\r\n\r\n" .
  "\r\n\r\nMessage: \r\n" . $question;
  ini_set("sendmail_from", $email_from);
  $sent = mail($email_to, $email_subject, $message, $headers, "-f" .$email_from);
  if ($sent)
  {
    echo 'Thank you for your enquiry, one of our team will be in contact with you shortly.';
  }

    }
}
} else {
  ?>
  <form method="post" style="text-align:left;">
    <label>Name: <span>*</span></label><input name="name" type="text" />
    <label>Email: <span>*</span></label><input name="email" type="text" />
    <label>Contact Number: </label><input name="telephone" type="text" />
    <label>Enquiry: <span>*</span></label>
    <textarea name="message" rows="10" cols="30"></textarea>
    <div class="g-recaptcha" data-sitekey="<! -- SITE KEY -->"></div>
    <input type="submit" value="submit" /><span> * required fields</span>
  </form>
  <?php } ?>
