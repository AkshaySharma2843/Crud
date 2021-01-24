<?php
include ("connection.php");
$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total!=0)
{
?>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 70%;
}

th, td {
  padding: 15px;
}
</style>
<table>
<tr>
<th>ID</th>
<th>NAME</th>
<th>PURPOSE</th>
<th>PURPOSE_DETAILS</th>
<th>DATE</th>
<th>TIME</th>  

</tr>
<?php
while($result = mysqli_fetch_array($data))
{
echo "<tr>
<td>".$result['id']."</td>
<td>".$result['name']."</td>
<td>".$result['purpose']."</td>
<td>".$result['purpose_details']."</td>
<td>".$result['date']."</td>
<td>".$result['time']."</td>
<td><a href ='Update.php?id=$result[id]'>Edit</a></td>
<td><a href ='delete.php?id=$result[id]' onClick='return checkdelete()'>Delete</a></td>  

</tr>";
}

}

else
{
    echo "No Record Found";
    $result ['id']."".$result['name']." ".$result['purpose']." ".$result['purpose_detais']."<br></br>";
}

?>
</table>

<script>
function checkdelete()
{
 return confirm('Are you sure you want to delete this data?');
}
</script>