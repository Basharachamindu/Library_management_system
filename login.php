<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Login Here</title>
      <link rel="stylesheet" href="./css/style.css" />
   </head>
   <body>
      <div class="wrapper">
         <h3 class="title">Login Here</h3>
         <form action="login.php" method="POST" name="forml target="_self">
            <div class="form">
               <div class="inputfield">
                  <label>ID (1)</label>
                  <input type="text" name="id" class="input" />
               </div>
               <div class="inputfield">
                  <label>Password (admin123)</label>
                  <input type="password" name="password" class="input" />
               </div>
               <div class="inputfield">
                  <input type="submit" name="submit" value="Login" class="btn" />
               </div>
            </div>
         </form>
         <div class="second-container">
            <a href="index.html" class="home-btn">Back</a>
         </div>

         <div>
        <?php
        if(isset($_POST['submit']))
		   {
			$id = $_POST['id'];
			$password = $_POST['password'];
         echo $id;
         echo $password;

         $con = new mysqli("localhost","root","","library");

         $sql = "select * from login where id='".$id."' and password='".$password."'";	
				
			  $result=mysqli_query($con,$sql);
			  $found=mysqli_num_rows($result);
			
			
			if($found == 1)
			{
				header("Location:admin.html");
			}
			else{ 
				echo 'Wrong ID Or PASSWORD';
			}
		
		  }   	
        ?>
     </div>
     </div>
         
   </body>
</html>
