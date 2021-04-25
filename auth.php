<?php 
include('config.php');
if(isset($_POST['submit'])) :
  
  
   if(1 != mysql_num_rows($result)) :
      
       header('Location: index.php?msg=login_failed');
   else :
       
       $row = mysql_fetch_assoc($result);
       
      
       if (!isset($_SESSION['member_ID'])) {
    		// do login.
    		header('Location: members-only.php');
  		 }
  		 else 
  		 	echo "already logged in";
   endif;
endif;
?>