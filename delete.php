<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Delete_Data</title>
      <link rel="stylesheet" href="./css/style.css" />
   </head>
   <body>
      <div class="wrapper">
         <h3 class="title">Delete Borrower Data</h3>
         <form action="" method="post" target="_self">
            <div class="form">
               <div class="inputfield">
                  <label>ID</label>
                  <input type="text" name="id" class="input" />
               </div>
               <div class="inputfield">
                  <input type="submit" name="submit" value="Submit" class="btn" />
               </div>
            </div>
         </form>
         <div class="second-container">
            <a href="admin.html" class="home-btn">Back</a>
         </div>

         <div>
            <?php
              if(isset($_POST['submit']))
		        {
                  $con = new mysqli("localhost","root","","library");
                  $id = $_POST['id'];
                  $sql = "delete from borrower_data where id='".$id."'";	
			
			         mysqli_query($con,$sql);
			  
			        if(mysqli_affected_rows($con)>0)
			          {
				         echo '<br>Data Deleted';
			          }
		         	else
                  { 
			            echo '<br>Something wrong';
			         }
		         }   	
            ?>
         </div>
      </div>
   </body>
</html>
