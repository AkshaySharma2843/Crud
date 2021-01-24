<?php
include ("connection.php");
?>
<html>
<head>
</head>
<body>
<h1>Form</h1>
<form action= "" method= "POST">
NAME <input type="text" name="name" value=""><br></br>
<label for="purpose">Choose a Purpose:</label>
<select id="purpose" name="purpose">
  <option value="training">Training</option>
  <option value="internship">Internship</option>
  <option value="full_time">Full Time</option>
</select><br></br>
PURPOSE DETAILS <input type="text" name ="purpose_details" value=""><br></br>
<label for="date">DATE:</label>
  <input type="date" id="date" name="date"><br></br>
  <label for="time">Select a time:</label>
  <input type="time" id="time" name="time"><br></br>
<input type ="Submit" name ="Submit" Value = "Submit"/>

</form>
<?php

if(isset($_POST['Submit']))
{
  /* print_r ($_POST); */
    $name = $_POST['name'];
    $pur = $_POST['purpose'];
    $purd= $_POST['purpose_details'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    if($name!="" && $pur!="" && $purd!="" && $date!="" && $time!="")
    {

         $query = "INSERT INTO form (`name`, `purpose`, `purpose_details`, `date`, `time`)
         VALUES ('$name','$pur','$purd','$date','$time')";

        $form = mysqli_query($conn, $query);
        
        if ($form)
        {
        echo "Form is Submitted";
        }
        
    }
    else
    {
       echo "Please fill the required field";
    }
}

?>
</body>
</html>