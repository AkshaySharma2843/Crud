<?php
include ("connection.php");
?>
<html>
<head>
</head>
<body>
<h1>Form</h1>
<?php
if(!isset($_POST['Submit'])){
$id_student= $_GET['id'];
$query = "SELECT * FROM form WHERE id='$id_student'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_array($data);
?>
<form action= "" method= "POST">
<input type="hidden" name="id" value="<?php echo $result['id']?>"/>
NAME <input type="text" name="name" value="<?php echo $result['name']?>"/><br></br>
<label for="purpose">Choose a Purpose:</label>
<select id="purpose" name="purpose">
  <option value="training">Training</option>
  <option value="internship">Internship</option>
  <option value="full_time">Full Time</option>
</select><br></br>
PURPOSE DETAILS <input type="text" name ="purpose_details" value="<?php echo $result['purpose_details'] ?>"/><br></br>
<input type ="Submit" name ="Submit" Value = "Update"/>

</form>
<?php

}
if(isset($_POST['Submit']))
{
    /*print_r($_POST);*/
   $name = $_POST ['name'];
   $purpose = $_POST ['purpose'];
   $purpose_details = $_POST ['purpose_details'];
   $id = $_POST['id'];

   $query = "UPDATE form SET `name`='$name', purpose='$purpose',purpose_details='$purpose_details' WHERE  id='$id' ";
   $data = mysqli_query($conn, $query);
   if($data)
   {
       echo "Data Updated Successfully";
       ?>
       <META HTTP-EQUIV = "Refresh" CONTENT = "0; URL= http://localhost/Crud/display.php">
       <?php
   }
}
else
{
 echo "<font color ='blue'>Click On Update to Save changes";    
}
?>
</body>
</html>