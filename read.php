<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Read_Data</title>
      <link rel="stylesheet" href="./css/style.css" />
   </head>
   <body>
      <div class="wrapper">
         <h3 class="title">Read Borrower Data</h3>
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
			$id = $_POST['id'];
         $con = new mysqli("localhost","root","","library");

         $sql = "select * from borrower_data where id='".$id."'";	
				
			  $result=mysqli_query($con,$sql);	
			if($row=mysqli_fetch_row($result))
			{
				
			$id = $row[0];
			$name =$row[1];
			$address =$row[2];
			$number = $row[3];
			$gender = $row[4];
			$book = $row[5];
			$date = $row[6];
				
				
				echo "<br>ID  : ".$id;
				echo "<br>Name: ".$name;
				echo "<br>Address: ".$address;
				echo "<br>Phone_Number: ".$number;
				echo "<br>Gender: ".$gender;
				echo "<br>Borrowed_Book: ".$book;
				echo "<br>Borrowed_Date: ".$date;
			}
			else
         {
           echo "<br>Error! Or There Is No Data For ID $id";
         }
		
		  }   	
        ?>
      </div> 
      </div>
   </body>
</html>
