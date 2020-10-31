<?php require_once 'php_action/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
 <style type="text/css">
  .manageMembers {
      width: 50%;
      margin: auto;
  }

  table {
      width: 100%;
      margin-top: 20px;
  } 
  </style>


</head>
<body>

<div class="manageMember">
 <a href="create.php"><button type="button"> Add Members </button></a>
 <table border="1"cellspacing="0" cellpadding="0">
     <thead>
       <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Contact</th>
        <th>Option</th> 
      </tr>  
     </thead> 
     <tbody>
       <?php
       
       $sql ="SELECT * FROM members WHERE active = 1";
       $result = $connect->query($sql);

       if($result->num_rows > 0){

        while($row = $result ->fetch_assoc()){
          echo "<tr>
                 <td>" .$row['fname']." ".$row['lname']."</td>
                   <td>".$row['contact']."</td>
                      <td>".$row['age']."</td>
                         <td>

                            <a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                             <a href='remove.php?id=".$row['id']."'><button type='button'>Remove</button></a>
              
                         </td>
               </tr>"; 
                }
            } else{
              echo "<tr><td colspan='5'><center>NO data!</center></td></tr>";
            }
       ?>
     </tbody> 
   </table>
</div>   
    
</body>
</html>