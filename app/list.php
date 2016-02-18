
<?php 
  require_once 'init.php';

$rs = $db->query("SELECT * FROM T_work where id =".$_GET['id']);
 $work = $rs->fetch();
?>
<div id="ajax-status">
    <div class="preloader-wrapper large active">
        <div class="spinner-layer spinner-blue-only actually-green">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>

<a class="btn-floating btn-large waves-effect waves-dark green accent-2" id="close-ajax">
    <i class="mdi-navigation-close indigo-text text-darken-4"></i>
</a>

	    

<div class="container">
    <div class="row">
         <h1>
               <?php echo $work['title'];  ?>
            </h1>
       
          <?php if($work['type']!="website"&&$work['type']!="webapp"){;  ?> 
        <div class="col s12 m4 offset-m4">  
    <!-- iphone -->        
    <div class="marvel-device iphone6 gold" style="margin:0p auto;">
    <div class="top-bar"></div>
    <div class="sleep"></div>
    <div class="volume"></div>
    <div class="camera"></div>
    <div class="sensor"></div>
    <div class="speaker"></div>
    <div class="screen" style="z-index:99;">
     <iframe width="100%" height="100%" scrolling="no" src=" <?php echo $work['demo'];  ?>">
</iframe>
    </div>
    <div class="home"></div>
    <div class="bottom-bar"></div>
</div>
           </div>
                <div class="col s12 m3">
          <p class="flow-text grey lighten-4 padding-text">
                AppID: #  <?php echo $work['appid'];  ?><br>
                Written in :  <?php echo $work['lang'];  ?><br>
                Build With : <?php echo $work['tech'];  ?><br>
                Template By :  <?php echo $work['template'];  ?> <br>
            </p>
        </div>
                 <?php }else {  ?> 
        <div class="col s12" style="margin:50px 0px;">
            <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">Desktop</a></li>
        <li class="tab col s3"><a  href="#test2">Mobile</a></li>
      </ul></div>
        <div id="test1" class="col s12">
             
        <div class="col s12 m12 ">
                   
            <div class="browser-mockup with-tab" style="height:750px;">
                <iframe width="100%" height="900" scrolling="yes" src=" <?php echo $work['demo'];  ?>"></iframe>
</div>
              </div>
        
        
        </div>
    <div id="test2" class="col s12">
        
       <div class="col s12 m4 offset-m4">  
    <!-- iphone -->        
    <div class="marvel-device iphone6 gold" style="margin:0p auto;">
    <div class="top-bar"></div>
    <div class="sleep"></div>
    <div class="volume"></div>
    <div class="camera"></div>
    <div class="sensor"></div>
    <div class="speaker"></div>
    <div class="screen" style="z-index:99;">
     <iframe width="100%" height="100%" scrolling="no" src=" <?php echo $work['demo'];  ?>">
</iframe>
    </div>
    <div class="home"></div>
    <div class="bottom-bar"></div>
</div>
           </div>
          
        </div>
                         <!-- desktop -->
                
       
         
           
           <?php   }  ?>
          
            
           
            
            
        
                       
    </div>
</div>


