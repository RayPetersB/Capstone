<?php
?>
<html><head><title></title>

<body>

<table>
  <thead>
    <th></th>
    <th>Item Name</th>
  </thead>

  <tbody>
<?php
$query = "SELECT * FROM item";
$result = mysqli_query($query);

// Fetch all (?)
$result = mysqli_fetch_assoc($result);

foreach ($result as $row) {
  echo "<tr><input type='checkbox' name='select[itemid]' value='{$row['iditem']}' /></td><td>".$row['itemName']."</td></tr>";


  //// OR ////

  ?>
  <tr>
    <td>
      <input type='checkbox' name='select[itemid]' value='<?=$row['iditem']?>' />
    </td>
    <td>
      <?=$row['itemName']?>
    </td>
  </tr>
  <?
}

?>
</tbody>
</table>
<form name="" action="" method="POST">
  <input type="text" name="itemName" placeholder="Item Name" />
  <input type="submit" value="Add Item" />
</form>
</body>
</html>
