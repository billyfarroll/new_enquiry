<?php
$a = $_SERVER['REQUEST_URI'];
$index = null;
$product = null;
$design = null;
$loft = null;
$team = null;
$gallery = null;
$news = null;
$contact = null;
if(strpos($a, 'index' )!== false){
  $index = "class='is-page'";
}
if(strpos($a, 'page-1' )!== false){
  $product = "class='is-page'";
}
if(strpos($a, 'page-2' )!== false){
  $design = "class='is-page'";
}
if(strpos($a, 'page-3' )!== false){
  $loft = "class='is-page'";
}
if(strpos($a, 'page-4' )!== false){
  $team = "class='is-page'";
}
if(strpos($a, 'page-5' )!== false){
  $gallery = "class='is-page'";
}
if(strpos($a, 'page-6' )!== false){
  $news = "class='is-page'";
}
if(strpos($a, 'page-7' )!== false){
  $contact = "class='is-page'";
}
// head start
include_once ("superhead.php");
?>
<title> TITLE GOES HERE <?php // $crumbs = explode("/",$_SERVER["REQUEST_URI"]); foreach($crumbs as $crumb){echo ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . ' ');} ?> </title>

<meta name="description" content="" />
<meta name="keywords" content="your, tags"/>

<meta name="author" content="name, email@hotmail.com" />
<meta name="copyright" content="" />
<meta name="robots" content="all" />
<meta name="googlebot" content="index,follow" />
<meta name="msnbot" content="index,follow" />
<meta name="search engines" content="AltaVista, AOL, Google, Yahoo, WebCrawler, Infoseek, Excite, HotBot, Lycos, LookSmart, UkIndex, UKPlus, MSN" />
<meta content="INDEX,FOLLOW" name="robots" />
<meta name="revisit-after" content="15 days" />
<meta name="distribution" content="global" />
</head>
<!-- head finish -->

<style>
.fquote{
  display: none;
}
</style>

<div class="masterwrapper"> <!-- start masterwrapper -->

<?php

// header below //
include_once ("nav.php");
// header above //

?>

<!-- content start -->
<div class="stripey">
  <div class="text">


  <div class="row">
    <div class="large-12 columns">
      <h1> Contact us </h1>

      <span>email HERE</span><br />
      <span>Telephone HERE</span><br /><br />
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
      <!-- Calling the form from the form.php file -->
      <?php
      include 'form.php';
      ?>
      <!-- Calling the form from the form.php file -->
    </div>
    <div class="large-6 columns" >
      <h5>Our address is</h5>
      <p>
       <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
      </p>
      
    </div>
  </div>
  </div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2517.627556855293!2d-1.304680083795856!3d50.87509446455598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48746fc580330027%3A0x787f6bc424e487de!2sUniversal+Marina!5e0!3m2!1sen!2suk!4v1473924962692" style="border:0" allowfullscreen="" width="100%" height="320" frameborder="0"></iframe>

<!-- content end -->

</div> <!-- end masterwrapper -->

<?php

// footer below //
include_once ("foot.php");
// footer above //

 ?>
