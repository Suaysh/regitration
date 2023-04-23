<html>
    <head>
        </head>
        <body>
      <table>
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>iaddress</th>
            <th>mobile</th>
            <th>gender</th>

</thead>
<tbody>
    <?php
    include("datasource.php");
    $sql="SELECT * FROM `student_tbl`";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        ?>
        <tr>
            <td><?php echo $row ['id'];?></td>
            <td><?php echo $row ['name'];?></td>
            <td><?php echo $row ['email'];?></td>
            <td><?php echo $row ['password'];?></td>
            <td><?php echo $row ['address'];?></td> 
            <td><?php echo $row ['mobile'];?></td>
            <td><?php echo $row ['gender'];?></td>
            <td> <a href="edit.php?id=<?php echo $row['id'];?>">edit</a></td>
            <td> <a href="delete.php?id=<?php echo $row['id'];?>">delete</a></td>
    
    </tr>
    <?php
    }
?>
</tbody>
</table>
</body>
</html>