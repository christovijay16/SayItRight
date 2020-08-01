
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
           <img src="<?php echo base_url("home-banner.jpg"); ?>" width="100%" height="200px">
             <div class="centered"><p style=" font-size: 12px;">Home <i class="fas fa-arrow-right"></i> EVENTS</p><p>EVENTS</p></div>
        </div>
      <div class="aboutus" style="width: 100%;margin-bottom: 250px;">
        
          
       <div class="aboutstext" style="width: 50%;float: left; padding-left: 200px;">
          <p style="padding-left: 150px;">Select Type Of User</p>
           <input type="submit" value="INDIVIDUAL" class="button1" > <input type="submit" value="EVENT" class="button1" > <input type="submit" value="BUSINESS" class="button1" ><br/>
          
           <p style="font-size: 10px;padding-left: 100px;">welcome to the Event log</p>
           <form action="" method="post">
       <input type="text" name="firstname" id="firstname" placeholder="Enter Your Name" style="width: 350px; height: 30px;"><br/><br/><span id="showmessageA"></span><span><?php echo form_error('firstname'); ?> </span>
          <input type="text" name="lastname" id="lastname"placeholder="Enter Your Last Name"  style="width: 350px;height: 30px;"><br/><br/><span id="showmessageB"></span><span><?php echo form_error('lastname'); ?> </span>
           <input type="text" name="email" id="email"placeholder="Enter Email"  style="width: 350px;height: 30px;"><br/><br/><span id="showmessageC"></span><br><span><?php echo form_error('email'); ?> </span>
            <input type="text" name="password" id="password" placeholder="Enter password"  style="width: 350px;height: 30px;"><br/><br/><span id="showmessageD"></span><span><?php echo form_error('password'); ?> </span>
        
         <input type="submit" value="SEND" class="button" style="width: 100px;height: 40px;margin-left: 150px; " >
        
           </form>
        
        
        </div>

        
       
<?php include_once('footer3.php'); ?>