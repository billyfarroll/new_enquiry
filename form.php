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

$email = htmlspecialchars($_POST['email']);
  if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email) || ($name == "") || ($question == "") ||(!$captcha))
  {
      echo "<p>Invalid Input.</p>";
      ?>
      <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post" style="text-align:left;">
        <label>Name: <span>*</span></label><input name="name" type="text" />
        <label>Email: <span>*</span></label><input name="email" type="text" />
        <label>Contact Number: </label><input name="telephone" type="text" />
        <label>Message: <span>*</span></label>
        <textarea name="message" rows="10" cols="30"></textarea>
        
        <input type="submit" value="submit" />
      </form>
      <?php
 
 
    {
    
    
  $email_from = $_POST["email"];
  $email_to = "billy@strawberrymarketing.com";
  $question = $_POST["message"];
  $email_subject = "SUBJECT LINE HERE";
  $headers =
  "From: $email_from \n";
  "Reply-To: $email_from \n";
  $message =
  "Name: ". $name .
  "\r\nMobile Number: " . $telephone .
  "\r\nEmail Address: " . $email .
  "\r\n\r\n\r\n" .
  "\r\n\r\nMessage: \r\n" . $question;
  ini_set("sendmail_from", $email_from);
  $sent = mail($email_to, $email_subject, $message, $headers, "-f" .$email);
  if ($sent)
  {
    echo 'Thank you for your enquiry, one of our team will be in contact with you shortly.';
  }

    }
}
} else {
  ?>
  <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post" style="text-align:left;">
    <label>Name: <span>*</span></label><input name="name" type="text" />
    <label>Email: <span>*</span></label><input name="email" type="text" />
    <label>Contact Number: </label><input name="telephone" type="text" />
    <label>Message: <span>*</span></label>
    <textarea name="message" rows="10" cols="30"></textarea>
   
    <input type="submit" value="submit" /><span> * required fields</span>
  </form>
  <?php } ?>
