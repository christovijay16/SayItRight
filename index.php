
<?php include_once('header1.php'); ?>

    
    
    <body>
    <div id="wrapper">
        
     <div class="nav">
        <img src="<?php echo base_url("logo.png"); ?>"  width="80px" height="80px" class="img" />
        
        
        <ul class="nav_text">
       
            <li><a href="<?php echo base_url(); ?>index.php/Homec ">HOME</a></li>
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
          <img src="<?php echo base_url("home-banner.jpg"); ?>"  style="width: 100%;">
             <div class="centered" style="text-align: left; left: 64%;">
           <p class="p_index">For good</p>
                  <p class="p_index">Communication</p>
                  <p class="p_index" ><span style="color: red;">Say it Right</span>&nbsp;&nbsp;<span>is</span></p>
                  <p class="p_index">a tool that</p>
                  <p class="p_index">you should use</p>
            <p style="font-size: 8px;">you can see our vido tutorial of use with just pressing the</p>
                <p style="font-size: 8px;">button</p>
                 <button type="submit" value="" class="round_button"> <i class="fa fa-play" aria-hidden="true"></i></button>
            </div>
            </div>
        
        
     
        <div class="subscribe_text">
        <div class="news">
            <form onsubmit="return validation()" method="post">
       
            <span class="subscribe"><h1 style="display: inline;margin-right: 250px;">Subscribe our news letter</h1></span>
            <input type="text" name="email" id="email"placeholder="Enter Email id" class="inputForm" pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}"><input  type="submit" value="subscribe" class="button_1">
            <p style="font-size: 10px;">we will not send any spam mails</p><span id="showmessage"></span>
                <span> <?php if(isset($error)) {echo $error['email'];} else {echo "it is valid";} ?> </span>
            </form>
        </div>
        </div>
        
        <?php include_once('footer1.php'); ?>