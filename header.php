<?php 
$filename=basename($_SERVER['SCRIPT_NAME']);
$filename_arr=explode(".",$filename);
$page_type=$filename_arr[0];

if($page_type=="index"){
    $banner_url="./images/slides/3.jpg";
    $home="#banner";
    $program="#services";
    $about="#content-3-10";
    $testimonial="#testimonials";
    $contact="#contact";
}
else if($page_type=="bachelor"){
    $banner_url="./images/ba.jpg";
    $home="./#banner";
    $program="./#services";
    $about="./#content-3-10";
    $testimonial="./#testimonials";
    $contact="./#contact";
}
else if($page_type=="masters"){
    $banner_url="./images/ma.jpg";
    $home="./#banner";
    $program="./#services";
    $about="./#content-3-10";
    $testimonial="./#testimonials";
    $contact="./#contact";
}else if($page_type=="construction"){
    $banner_url="./images/construction.jpg";
    $home="./#banner";
    $program="./#services";
    $about="./#content-3-10";
    $testimonial="./#testimonials";
    $contact="./#contact";
}else if($page_type=="nursing"){
    $banner_url="./images/nursing.jpg";
    $home="./#banner";
    $program="./#services";
    $about="./#content-3-10";
    $testimonial="./#testimonials";
    $contact="./#contact";
}else if($page_type=="food_production"){
    $banner_url="./images/food_technician.jpg";
    $home="./#banner";
    $program="./#services";
    $about="./#content-3-10";
    $testimonial="./#testimonials";
    $contact="./#contact";
}else if($page_type=="hospitality"){
    $banner_url="./images/hospitality.jpg";
    $home="./#banner";
    $program="./#services";
    $about="./#content-3-10";
    $testimonial="./#testimonials";
    $contact="./#contact";
}
else{
    $banner_url="./images/slides/3.jpg";
    $home="./#banner";
    $program="./#services";
    $about="./#content-3-10";
    $testimonial="./#testimonials";
    $contact="./#contact";
}
?>
<section class="banner" role="banner"  >
  <header id="header">
    <div class="header-content clearfix" > <a class="logo" href="/" ><img width="150px" src="images/logo/logo-small.png"></a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav" style="padding-top:20px;padding-bottom:0px;">
		      <li><a href="<?php echo $home; ?>">Home</a></li>
          <li><a href="<?php echo $program; ?>">Programs</a></li>
          <li><a href="<?php echo $about; ?>">About</a></li> 
          <!-- <li><a href="#gallery">Gallery</a></li> -->
         <!-- <li><a href="#teams">Our Team</a></li>-->
          <!-- <li><a href="#pricing5">Price</a></li> -->
          <li><a href="<?php echo $testimonial; ?>">Testimonials</a></li>
          <li><a href="<?php echo $contact; ?>">Contact</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
<!-- banner text --> 
    <!-- <div class="banner" id="banner">  -->
    <!-- <div class="euindia-banner"><img src="<?php echo $banner_url; ?>"></div> -->

    <!-- <section
        data-type="background" data-speed="10" class="euindia-banner" id="rotator" 
        style="background-image: url('<?php echo $banner_url; ?>');      
    "></section> -->

    <div class="bg-image"  style="background-image: url('<?php echo $banner_url; ?>');  "></div>
    <div class="bg-text"> 
        <div class="euindia-banner"><img src="<?php echo $banner_url; ?>"></div>
    </div>


    <!-- <div class="slider-banner">
            <div data-lazy-background="images/slides/3.jpg"  >  -->
                <!-- <h3 data-pos="['68%', '-40%', '58%', '42%']" data-duration="700" data-effect="move">
                    Success
                </h3> <br>
                <p data-pos="['75%', '110%', '75%', '36%']" data-duration="700" data-effect="move">
                    Lorem ipsum dolor sitamet consectetur adipiscing
                </p>  -->
            <!-- </div> -->
            <!-- <div data-lazy-background="images/slides/2.jpg"> 
                <h3 data-pos="['75%', '-40%', '58%', '42%']" data-duration="700" data-effect="move">
                    Ultimate
                </h3> <br>
                <p data-pos="['75%', '110%', '75%', '36%']" data-duration="700" data-effect="move">
                    Lorem ipsum dolor sitamet consectetur adipiscing 
                </p>
            </div> -->
             
         <!-- </div> -->
      <!-- banner text --> 
    <!-- </div> -->
</section>
