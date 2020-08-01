

<?php include_once('header3.php'); ?>

  <!--   <script>
  $(function dialog() {
    $( "#dialog" ).dialog();
  });
         
  </script>-->
    
    <body>
    <div id="wrapper">
        
     <div class="nav">
         <img src="<?php echo base_url("logo.png"); ?>" width="80px" height="80px" class="img" />
     <!--  <div id="dialog" title="Basic dialog">
  <p>Image:</p>
  <img src="http://placehold.it/50x50" alt="Placeholder Image" />

</div>-->
        
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
             <div class="centered"><p style=" font-size: 12px;">Home <i class="fas fa-arrow-right"></i> Buy From  Us</p><p>BUY FROM US</p></div>
            </div>
        
    
        
          <div class="img_row" style="width: 100%;margin-bottom: 250px;">
              <form method="post";>
        
          
      <div id='parent_div_1'>
<div class ='child_div_1'> <img src="<?php echo base_url("franela1.jpg"); ?>" width="80px" id="dialog" height="80px;"> 
          <p>$24.9</p>
      <p style="width: 130px;font-size: 10px;">Some quick example text to build on the card  title and make up the bulk of the card's content</p><a href="<?php echo base_url("index.php/Homec/button1");?>">
          <input type="button" name="AddtoCart1" value="AddToCart1" class="button1">
          </div>

</div></a>
                <div id='parent_div_1'>
<div class ='child_div_1'>  <img src="<?php echo base_url("taza1.png"); ?>" width="80px" height="80px;"> 
          <p>$24.9</p>
     <p style="width: 130px;font-size: 10px;">Some quick example text to build on the card  title and make up the bulk of the card's content</p><a href="<?php echo base_url("index.php/Homec/button2"); ?> ">
           <input type="button" name="AddtoCart2" value="AddToCart2" class="button1">
          </div></a>

</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              
                <div id='parent_div_1'>
<div class ='child_div_1'>  <img src="<?php echo base_url("franela2.jpg"); ?>" width="80px" height="80px;"> 
           <p>$24.9</p>
      <p style="width: 130px;font-size: 10px;">Some quick example text to build on the card  title and make up the bulk of the card's content</p><a href="<?php echo base_url("index.php/Homec/button3"); ?> ">
           <input type="button" name="AddtoCart3" value="AddToCart3" class="button1">
          </div></a>

</div>
              
              
              
              
              
       
        </div>
        
        
         <div class="img_row" style="width: 100%;">
        
          
      <div id='parent_div_1'>
<div class ='child_div_1'>  <img src="<?php echo base_url("taza2.png"); ?>" width="80px" height="80px;"> 
          <p>$24.9</p>
    <p style="width: 130px;font-size: 10px;">Some quick example text to build on the card  title and make up the bulk of the card's content</p><a href="<?php echo base_url("index.php/Homec/button4"); ?> ">
           <input type="button" name="AddtoCart4" value="AddToCart4" class="button1"></a>
          </div>

</div>
                <div id='parent_div_1'>
<div class ='child_div_1'>  <img src="<?php echo base_url("franela3.jpg"); ?>" width="80px" height="80px;"> 
          <p>$24.9</p>
     <p style="width: 130px;font-size: 10px;">Some quick example text to build on the card  title and make up the bulk of the card's content</p><a href="<?php echo base_url("index.php/Homec/button5"); ?> ">
           <input type="button" name="AddtoCart5" value="AddToCart5" class="button1"></a>
          </div>

</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              
                <div id='parent_div_1'>
<div class ='child_div_1'>  <img src="<?php echo base_url("taza3.png"); ?>" width="80px" height="80px;"> 
          <p>$24.9</p>
     <p style="width: 130px;font-size: 10px;">Some quick example text to build on the card  title and make up the bulk of the card's content</p><a href="<?php echo base_url("index.php/Homec/button6"); ?>">
           <input type="button" name="AddtoCart6" value="AddToCart6" class="button1"></a>
          </div>

</div>
              
              
              
              
              
       
        </div>
        <br/><br/>
              </form>
    
    
        <div class="cart_view"> 
        
        <div class="cart_text"><h1>View Shopping Cart</h1>
            <p style="display: inline">You can see the products that you added to cart</p><br>
            <a href="<?php echo base_url(); ?>index.php/Homec/cart ">
            
            
            <input type="submit" value="submit" class="button1" onclick="document.location='cart.php'" style="margin-left: 200px;">
           
            
            </div>
        
        </div>
        
   
<?php include_once('footer2.php'); ?>
