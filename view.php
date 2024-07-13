<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="view.css">
       <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
    <div class="header">
        <h1>Credit Card System</h1>
    </div>
    <br>
    <div align="right">
    <form method="post" action="search.php">
        <!-- <label  for="">Enter Employee Id</label>
        <input type="number" name="search_id" id="">
        <input type="submit" name="btnsearch" value="search"> -->
        <a href="view.php">Click To View All</a>
    </form>
    </div>
   <br>
</body>
<br>

<?php

$query = "select * from credit";
$run = mysqli_query($con,$query);
$totalRows = mysqli_num_rows($run);
if($totalRows !=0){
    ?>
<table border="1">
    <thead>
        <tr>
            <td>CardId</td>
            <td>CardNumber</td>
            <td>CardHolder</td>
            <td>ExpMonth</td>
            <td>ExpYear</td>
            <td>CVV</td>
            <td>Delete</td>
            
        </tr>
    </thead>
    <tbody>
<?php
while($data = mysqli_fetch_array($run)){
    echo "<tr>
    <td>".$data[0] . "</td>
    <td>".$data[1] . "</td>
    <td>".$data[2] . "</td>
    <td>".$data[3] . "</td>
    <td>".$data[4] . "</td>
    <td>".$data[5] . "</td>
    
    <td><a href ='delete.php'?CardId=$data[CardId]>Delete</a></td>
 
    </tr>";


}
echo "</tbody>";
}
else{
    echo "<script>
    alert('No rows found')
    </script>
    ";
}
?>
</table>
</html>