<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Insert_Data</title>
      <link rel="stylesheet" href="./css/style.css" />
   </head>
   <body>
      <div class="wrapper">
         <h3 class="title">Insert Borrower Data</h3>
         <form action="insert.php" method="post" target="_self" >
            <div class="form">
               <div class="inputfield">
                  <label>ID</label>
                  <input type="text" name="id" class="input" />
               </div>
               <div class="inputfield">
                  <label>Name</label>
                  <input type="text" name="name" class="input" />
               </div>
               <div class="inputfield">
                  <label>Address</label>
                  <textarea name="address" class="textarea"></textarea>
               </div>
               <div class="inputfield">
                  <label>Phone Number</label>
                  <input type="text" name="contact_num" class="input" />
               </div>
               <div class="inputfield">
                  <label>Gender</label>
                  <div class="custom_select">
                     <select name="gender">
                     <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                     </select>
                  </div>
               </div>
               <div class="inputfield">
                  <label>Borrowed_Book</label>
                  <input type="text" name="borrowed_book" class="input" />
               </div>

               <div class="inputfield">
                  <label>Borrowed_Date</label>
                  <input type="date" name="borrowed_date" class="input" />
               </div>

               <div class="inputfield">
                  <input type="submit" name="submit" value="submit" class="btn" />
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
                   $id = mysqli_real_escape_string($con, $_POST['id']);
                   $name = mysqli_real_escape_string($con, $_POST['name']);
                   $Address = mysqli_real_escape_string($con, $_POST['address']);
                   $phone = mysqli_real_escape_string($con, $_POST['contact_num']);
                   $gender = mysqli_real_escape_string($con, $_POST['gender']);
                   $book  = mysqli_real_escape_string($con, $_POST['borrowed_book']);
                   $date = mysqli_real_escape_string($con, $_POST['borrowed_date']);

                  if (empty($id && $name && $Address && $phone && $gender && $book && $date))
                  {
                      echo "<br>Please Insert All The Information Correctly"; 
                  }
                  else
                  {
                   $sql = "INSERT INTO borrower_data (ID,Name,Address,Phone_Number,Gender,Borrowed_Book,Borrowed_Date) VALUES ('$id','$name','$Address','$phone','$gender','$book','$date')";
                   
                   if (mysqli_query($con,$sql))
                        { 
                          echo '<br>Data Inserted Successfully';
                        }                
                  else
                        {
                             echo '<br>Error! Data can not be inserted';
                        }

                   }
                }
           ?>
         </div>
      </div>
   </body>
</html>
