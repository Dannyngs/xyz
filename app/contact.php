<?php
require_once 'init.php';

?>
<?php require_once 'header.php' ?>


<div class="page-title">
     <div class="container clearfix">
       
       <div class="sixteen columns"> 
         <h1>Contact us</h1>
       </div>
       
     </div><!-- End Container -->
   </div><!-- End Page title -->
   
   <!-- Start Google Map -->
   <div id="map"></div>
   <!-- End -->
   
   <!-- Start main content -->
   <div class="container main-content clearfix">
   
     <div class="eleven columns top-3 bottom-2">
       <h3 class="title bottom-2">Get in touch</h3>
       
       <div id="note"></div><!-- End notification -->
      
      <div id="fields">
      
       <form id="ajax-contact-form" action="">
      
      <div class="form-box">
        <label>Name <small>*</small></label>
        <input type="text" name="name" class="text">
      </div><!-- End Box -->
      
      <div class="form-box">
        <label>Email <small>*</small></label>
        <input type="text" name="email" class="text">
      </div><!-- End Box -->
      
      <div class="form-box last">
        <label>Subject </label>
        <input type="text" name="subject" class="text">
      </div><!-- End Box -->
      
      <div class="form-box big">
        <label>Message <small>*</small></label>
        <textarea name="message"></textarea>
      </div><!-- End Box -->
      
      <div class="clearfix"></div>
      
      <input type="submit" value="Send Message" class="button medium color" />
      
      </form>
      
      </div><!-- End fields -->
      
     </div>
      
     <div class="five columns top-3 bottom-2">
       <h3 class="title bottom-2">Contact Info</h3>
       
       <ul class="address-info">
         <li><?php echo $system[$current_lang.'_address'];?></li>
       </ul>
       
       <ul class="phone-info">
         <li><?php echo $system['phone'];?></li>
       </ul>
       
       <ul class="email-info">
         <li><?php echo $system['email'];?></li>
       </ul>
       
       <h3 class="title top-2 bottom-2">Social Contact</h3>
       <div class="share-social">
      <a href="#" target="_blank"><i class="social_icon-twitter s-17 white"></i></a>
      <a href="#" target="_blank"><i class="social_icon-facebook s-18 white"></i></a>
      <a href="#" target="_blank"><i class="social_icon-dribbble s-18 white"></i></a>
      <a href="#" target="_blank"><i class="social_icon-linkedin s-17 white"></i></a>
      <a href="#" target="_blank"><i class="social_icon-gplus s-18 white"></i></a>
      </div>
       
     </div>
    
   </div><!-- <<< End Container >>> -->
 
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="/_/js/gmaps.js"></script>
  <script type="text/javascript">
    var map;
    $(document).ready(function(){
	  
	  // main directions
      map = new GMaps({
        el: '#map', lat: 51.5073346, lng: -0.1276831, zoom: 13, zoomControl : true, 
        zoomControlOpt: { style : 'SMALL', position: 'TOP_LEFT' }, panControl : false, scrollwheel: false
      });
	  // add address markers
	  map.addMarker({ lat: 51.503324, lng: -0.119543, title: 'London Eye',
      infoWindow: { content: '<p>You can add your address 1 here</p>' } });
	  
      map.addMarker({ lat: 51.5007396, lng: -0.1245299, title: 'Big Ben',
      infoWindow: { content: '<p>You can add your address 2 here</p>' } });
	  
      map.addMarker({ lat: 51.518856, lng: -0.1263371, title: 'British Museum',
      infoWindow: { content: '<p>You can add your address 3 here</p>' } });
	  
      map.addMarker({ lat: 51.5085822, lng: -0.1283169, title: 'National Gallery',
      infoWindow: { content: '<p>You can add your address 4 here</p>' } });
	  
      map.addMarker({ lat: 51.5089465, lng: -0.0764269, title: 'Tower Of London',
      infoWindow: { content: '<p>You can add your address 5 here</p>' } });
	  
    });
  </script>
  <!-- End Google Map JavaScript -->
  
  <!-- Contact Form Js -->
  <script type="text/javascript">                                 
	// contact form js
	jQuery(document).ready(function($) {
	$("#ajax-contact-form").submit(function() {
	var str = $(this).serialize();
	$.ajax({
	  type: "POST",
	  url: "inc/contact-process.php",
	  data: str,
	  success: function(msg) {
	  // Message Sent? Show the 'Thank You' message and hide the form
	  if(msg == 'OK') {
		  result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
		  $("#fields").hide();
		  setTimeout("location.reload(true);",7000);
	  } else {
		  result = msg;
	  }
	  $('#note').html(result);
    }
	});
	return false;
	});
	});
   </script>   
   
<?php require_once 'footer.php' ?>