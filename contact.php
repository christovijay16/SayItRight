

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
     <div class="centered"><p style=" font-size: 12px;">Home <i class="fas fa-arrow-right"></i> CONTACT</p><p>CONTACT</p></div>
        </div>
        
          <div class="contact_main" style="width: 100%;margin-bottom: 250px;">
        
          
      <div id='cart_div'> 
<div class ='contact_child'>
    <form  method="post" action="">
         
     <input type="text" name="Firstname" id="firstname" placeholder="Enter Name"  style="width: 350px;height: 20px;"><br/><span><?php echo form_error('Firstname'); ?> </span>
     <input type="text" name="Lastname" id="lastname"placeholder="Enter LastName"   style="width: 350px;height: 20px;"><br/><span><?php echo form_error('Lastname'); ?> </span>
     <input type="text" name="Telephone" id="telephone"placeholder="Telphone"   style="width: 350px;height: 20px;"><br/><span><?php echo form_error('Telephone'); ?> </span>
        
        
   
        </div>
          
<div class ='contact_child1'>
   
      <textarea cols="50" rows="5" name="message" id="message"placeholder=" enter message"></textarea>
    
        
        
        
</div>
        <input type="submit" value="SEND" class="button" style="width: 100px;height: 40px;margin-left: 260px; " > 
          </div>
              </div>
        </form>
        
        
     

        
<?php include_once('footer3.php'); ?>
        