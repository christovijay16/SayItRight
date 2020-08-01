
<?php include_once('header5.php'); ?>
    
    <body>
    <div id="wrapper">
        
     <div class="nav">
        <img src="<?php echo base_url("logo.png"); ?>"  width="80px" height="80px" class="img" />
       <!-- <div id="dialog" title="Basic dialog">
  <p>Image:</p>
  <img src="http://placehold.it/50x50" alt="Placeholder Image" />

</div>-->
        
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
     <div class="container">
          <h1 style="color:#000;">List of  My conferences</h1>
         <form method="get">
         
             <div class="container_1">
         <table  class="conferencetable" border="1">
                 <tr border="1">
            <th>name</th>
            <th>Description </th>
            <th>date</th>
            <th>sede</th>
            
             
             </tr>
             
             <?php
      if($fetch_dat->num_rows()>0)
      {
        foreach ($fetch_dat->result() as $row) {
          ?>

          <tr>
            <td><?php echo $row->Name; ?></td>
            <td><?php echo $row->description; ?></td>
            <td><?php echo $row->date; ?></td>
            <td><?php echo $row->sede; ?></td>
            <td><a href="<?php echo base_url('index.php/Homec/delete_myconf/'.$row->Name); ?>">delete</a></td>
          </tr>
          <?php }
        }
          ?>
                   
                 
                 </table>
             </div></form>
             </div>
            
    
      
    
       <!-- <div class="cart_view"> 
        
        <div class="cart_text"><h1>View Shopping Cart</h1>
            <p style="display: inline">You can see the products that you added to cart</p>
            
            
            <input type="submit" value="submit" class="button1" style="margin-left: 200px;">
           
            
            </div>
        
        </div>-->
        
        
   <?php include_once('footer4.php'); ?>
