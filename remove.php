<?php
 
  require_once 'php_action/db_connect.php';

  if($_GET['id']){
       $id = $_GET['id'];
  $sql = "SELECT * FROM members WHERE id = {$id}";
  $result = $connect->query($sql);
  $data = $result->fetch_assoc();

  $connect ->close();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove member</title>
</head>
<body>
 <h3>Do you really want to remove?</h3>
 <form action="php_action/remove.php" method="post">
     <input type="hidden" name="id" value="<?php echo $data['id']?>"/>
     <button type="submit">Save changes</button>
     <a href="index.php"><button type="button">Back</button></a>
 </form>
    
</body>
</html>
