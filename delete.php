<?php
include ("connection.php");
$id_std= $_GET['id'];
$query = "DELETE FROM form WHERE id='$id_std'";
$data = mysqli_query($conn, $query);

if($data)
{
  echo "<script>alert ('Record Deleted') </script>";
  ?>
<META HTTP-EQUIV = "Refresh" CONTENT = "0; URL= http://localhost/Crud/display.php">

  <?php
}
else
{
    echo "<font color = 'red'>Sorry, Delete Process failed";
}

?>