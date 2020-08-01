
<?php include_once('header4.php'); ?>
    
    
    <body>
    <div id="wrapper">
        
     <div class="nav">
        <img src="<?php echo base_url("logo.png"); ?>"  width="80px" height="80px" class="img" />
        
        
        <ul class="nav_text">
       <li><a href="<?php echo base_url(); ?> index.php/Homec/index">HOME</a></li>
          <li><a href="<?php echo base_url(); ?>/index.php/Homec/aboutus ">ABOUT US</a></li>
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
            
            <div class="centered"><p style=" font-size: 12px;">Home <i class="fas fa-arrow-right"></i> Login</p><p>LOGIN</p></div>
            </div>
      <div class="aboutus" style="width: 100%;">
        
          
       <div class="aboutstext" style="width: 50%;float: left; padding-left: 300px;">
          <form  method="post" action="">
       <input type="text" name="email" required placeholder="Enter Email id" pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" style="width: 250px; height: 30px;"><br/><span><?php echo form_error('email'); ?> </span> 
          <input type="text" name="password" required placeholder="Enter password"  style="width: 250px;height: 30px;"><br/><span><?php echo form_error('password'); ?> </span> 
         <input type="submit" value="SEND" class="button" style="width: 100px;height: 40px;margin-left: 150px; " >
        </form>
          </div>
        
        
        
        </div>
        
        <?php include_once('footer2.php'); ?>