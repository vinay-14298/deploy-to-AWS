				<?php

				$hostname="database-1.c6lk7abq1avn.us-east-2.rds.amazonaws.com";
				$username= "vinayadmin";
				$password= "VinayVeltech";
				$database="db_voting";

				// UserInput Test
					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					
					  return $data;
					}	

								

?>