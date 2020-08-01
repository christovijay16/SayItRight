
<?php include_once('header2.php'); ?>
    
    <body>
    <div id="wrapper">
        
     <div class="nav">
        <img src="<?php echo base_url("logo.png"); ?>"  width="80px" height="80px" class="img" />
        
        
        <ul class="nav_text">
       
            <li><a href="<?php echo base_url(); ?>index.php/Homec/index ">HOME</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Homec/aboutus ">ABOUT US</a></li>
          <li><a href="http://christovijay.uta.cloud/">BLOG</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Homec/buyfromus ">BUY FROM US</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Homec/contact ">CONTACT</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Homec/signup ">SIGN UP</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Homec/login ">LOGIN</a></li>
        </ul>
    </div>
        </div>
        <div class="container">
          <img src="<?php echo base_url("home-banner.jpg"); ?>"  width="100%" height="200px">
            
             <div class="centered"><p style=" font-size: 12px;">Home <i class="fas fa-arrow-right"></i> signup</p><p>SIGNUP</p></div>
        </div>
      <div class="aboutus" style="width: 100%;margin-bottom: 50px;margin-top: 100px;">
        
          
       <div class="aboutstext" style="width: 50%;float: left; padding-left: 150px;">
          <p style="padding-left: 120px;">Select Type Of User</p>
           <form action="<?php echo base_url(); ?>index.php/Homec/individual" style="display: inline;"><input type="submit" value="INDIVIDUAL" class="button1" ></form>&nbsp;&nbsp;&nbsp; <form action="<?php echo base_url(); ?>index.php/Homec/Events " style="display: inline"><input type="submit" value="EVENT" class="button1" ></form> &nbsp;&nbsp;&nbsp;<form action="<?php echo base_url(); ?>index.php/Homec/business " style="display: inline"><input type="submit" value="BUSINESS" class="button1" ><br/></form>
          
          
        
          </div>
        
        
        
        </div>
        
        
<?php include_once('footer3.php'); ?>