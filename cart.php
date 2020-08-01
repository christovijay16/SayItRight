
<?php include_once('header2.php'); ?>

    
    <body>
    <div id="wrapper">
        
     <div class="nav">
         <img src="<?php echo base_url("logo.png"); ?>" width="80px" height="80px" class="img" />
        
        
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
     <div class="centered"><p style=" font-size: 12px;">Home <i class="fas fa-arrow-right"></i> CART</p><p>CART</p></div>
        </div>
          <div class="cart_main" style="width: 100%;margin-bottom: 80px;">
        
          
      <div id='cart_div'>
          <form method="post" action="">
<div class ='cart_child_div'>  <h1 style="color: #000;">Contact Information</h1>
        <input type="text" name="email" placeholder="Enter Email" required  style="width: 350px;height: 20px;"><br/><br/>
          <h1 style="color:#000;">Shipping Address</h1>
          <input type="text" name="firstname" placeholder="Enter First Name" required>  <input type="text" name="lastname" placeholder="Enter Last Name"><br/><br/>
     <input type="text" name="address" placeholder="Enter Address" required style="width: 350px;height: 20px;"><br/><br/>
     <input type="text" name="apartment" placeholder="Enter Apartmen,suite,etc" required style="width: 350px;height: 20px;"><br/><br/>
     <input type="text" name="city" placeholder="Enter city" required style="width: 350px;height: 20px;"><br/><br/>
     <input type="text" placeholder="Enter First Name" required>  <input type="text" name="postalcode" placeholder="postal code"><br/><br/>
          </div>
          
<div class ='child_div_2'>
    <div class ='child_div_1'> 
        <table style="margin-top: 21px;
    margin-left: 200px;" cellspacing="20">
        <tr>
            <th >Id</th>
            <th style="width: 20px;">Name</th>
             <th style="width: 20px;">Units</th>
             <th style="width: 20px;">Price</th>
            </tr>
            
         <?php
      if($fetch_dat->num_rows()>0)
      {
        foreach ($fetch_dat->result() as $row) {
          ?>
			<tr>
				<td><img src="<?php echo base_url($row->Id); ?>" style="height: 40px;width: 40px;"></td>
				<td><?php echo $row->Name; ?></td>
            <td><?php echo $row->Unit; ?></td>
            <td><?php echo $row->Price; ?></td>
          </tr>

<?php }
}
      
			?>
		
		<tr>
			<td colspan="3"> total</td>
			
			<td><?php echo "$price"; ?></td>

		</tr>
         
        
        
        </table>
        
         <input type="submit" value="SEND" name="cartsend" class="button" style="width: 100px;height: 40px;margin-left: 150px; " >
        
        
      </div>
    </div>
  </form>
</div>
</div>


        
       
 <?php include_once('footer2.php'); ?>