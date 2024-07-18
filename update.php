<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Update_Data</title>
      <link rel="stylesheet" href="./css/style.css" />
   </head>
   <body>
      <div class="wrapper">
         <h3 class="title">Update Borrower Data</h3>
         <form action="" method="post" target="_self">
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
                  <label>Borrowed Book</label>
                  <input type="text" name="borrowed_book" class="input" />
               </div>
               <div class="inputfield">
                  <label>Borrowed Date</label>
                  <input type="date" name="borrowed_date" class="input" />
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
               if(isset($_POST['submit'])) {
                  $con = new mysqli("localhost","root","","library");
                  $id = $_POST['id'];
                  $name = $_POST['name'];
                  $address = $_POST['address'];
                  $phone = $_POST['contact_num'];
                  $gender = $_POST['gender'];
                  $book = $_POST['borrowed_book'];
                  $date = $_POST['borrowed_date'];

                  $sql = "UPDATE borrower_data SET 
                           Name = '$name', 
                           Address = '$address', 
                           Phone_Number = '$phone', 
                           Gender = '$gender', 
                           Borrowed_Book = '$book', 
                           Borrowed_Date = '$date' 
                           WHERE ID = '$id'";

                  $result = mysqli_query($con, $sql);

                  if(!$result) {
                     echo "<br>Sorry! No Record Found for ID $id";
                  } else {
                     echo "<br>Data Successfully Updated";
                  }
               }
            ?>
         </div>
      </div>
   </body>
</html>
