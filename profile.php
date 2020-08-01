
<?php include_once('header2.php'); ?>
    
    <body>
    <div id="wrapper">
        
     <div class="nav">
        <img src="<?php echo base_url("logo.png"); ?>"  width="80px" height="80px" class="img" />
        
        
        <ul class="nav_text">
       
           
            <li><a href="<?php echo base_url(); ?>index.php/Homec/user ">HOME</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Homec/conferences ">CONFERENCES</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Homec/eventuser ">EVENTS</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Homec/myconferences ">MY CONFERENCES</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Homec/myevents ">MY EVENTS</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Homec/profile ">SETTINGS</a></li>
        </ul>
    </div>
        </div>
   <!-- <div class="container">
          <img  src="imgsay/home-banner.jpg" width="100%" height="200px">
     <div class="centered"><p style=" font-size: 12px;">Home <i class="fas fa-arrow-right"></i> CONTACT</p><p>CONTACT</p></div>
        </div>-->
        
          <div class="profile_cont" style="width: 100%;margin-bottom: 250px;">
        
          
      <div id='cart_div' style="padding-top: 8px;">
          <p style="margin-left: 350px;margin-top: 25px;">WELCOME TO YOUR PROFILE</p>
          <hr style="margin-right: 20px;margin-left: 20px;"/>
<div class ='contact_child' style="margin-top: 30px;">
    <img src="<?php echo base_url("user.jpg"); ?>"  width="150px" height="150px;"><br/>
        <input type="submit" value="CHANGE IMAGE" class="button_1"> 
   
   
          </div>
          
<div class ='contact_child1' style="margin-top: 30px;">
    <form method="post";>
      <?php
      if($fetch_dat->num_rows()>0)
      {
        foreach ($fetch_dat->result() as $row) {
          ?>
   
     <input type="text" name="Firstname" placeholder="Enter Your name" style="height: 30px;"value="<?php echo $row->fname;?> ">&nbsp;&nbsp;<input type="text" name="Lastname" placeholder="Enter last name" style="height: 30px;"value="<?php echo $row->lname;?> ">><br/><br/>
    <input type="text" name="work" placeholder="Enter place work" style="width: 355px; height: 30px; margin-bottom: 5px;"value="<?php echo $row->work;?> "><br/>
     <input type="text" name="school" placeholder="Enter school" style="width: 355px; height: 30px; margin-bottom: 5px;"value="<?php echo $row->school;?> "><br/>
     <input type="text" name="email" placeholder="Enter email" style="width: 355px; height: 30px; margin-bottom: 5px;"value="<?php echo $row->email;?> "><br/>
     <input type="text" name="password" placeholder="Enter password" style="width: 355px; height: 30px; margin-bottom: 5px;"value="<?php echo $row->password;?> "><br/>
    </form>
      <?php
    }
      }
      ?>
          </div>
        
        
        
        <input type="submit" value="SAVE CHANGES" class="button" style="width: 200px;height: 40px;margin-left: 400px; " > 
        </div>
        
        </div>
              
        
        <?php include_once('footer3.php'); ?>
                
        