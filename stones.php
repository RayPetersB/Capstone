<?php
require_once("db.php");
if(!isset($_SESSION['user'])){
	header('Location: index.php');
}


if (isset($_POST['itemName'])) {
  $name = mysqli_real_escape_string($con, $_POST['itemName']);
  $query = "INSERT INTO item (name) VALUES ('{$name}')";
  mysqli_query($con, $query);
  header("Location: stones.php");
  exit;
} else if (isset($_GET['delete'])) {
  $query = "DELETE FROM item WHERE id = ".mysqli_real_escape_string($con, $_GET['delete']);
  mysqli_query($con, $query);
  header("Location: stones.php");
  exit;
}


$stones = mysqli_query($con, "SELECT * FROM item");
$stones = $stones->fetch_all(MYSQLI_ASSOC);
?>
<html><head><title></title>

<body>
<!--<header>
  <div style="height:50px; border-bottom: 1px solid #ccc;">
    <div style="width: 49%; text-align: left;">
      <a href="/index.php"><img src="https://via.placeholder.com/150x50.png" />
    </div>
    <div style="width: 49%; text-align: right;">
      <a href="/logout.php">Logout</a>
    </div>
  </div>
</header>
-->
<div id="content">
  <table>
    <thead>
      <th>Item Name</th>
      <th></th>
    </thead>

    <tbody>
  <?php
  foreach ($stones as $s) {
    ?>
    <tr>
      <td>
        <?php echo $s['name']; ?>
      </td>
      <td>
        <a href="?delete=<?php echo $s['id']?>" type='checkbox' /><button type="button">Delete</button></a>
      </td>
    </tr>
    <?php
  }

  ?>
  </tbody>
  </table>
</div>
  <form name="" action="stones.php" method="POST">
    <input type="text" name="itemName" placeholder="Item Name" />
    <input type="submit" value="Add Item" />
  </form>
</body>
</html>
