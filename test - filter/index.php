<?php

require_once "db.php";

?>

<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <title>Filter</title>

</head>
<body>

<form action="index.php" method="post">
    <input type="text" name="valueToSearch" placeholder="от"><br><br>
    <input type="submit" name="search" value="Filter"><br><br>

    <table>
        <tr>
            <th>Id</th>
            <th>Type</th>
            <th>Price</th>
            <th>Square</th>
            <th>City_id</th>
        </tr>

        <!-- populate table from mysql database -->
        <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['type'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['square'];?></td>
                <td><?php echo $row['city_id'];?></td>
            </tr>
        <?php endwhile;?>

    </table>
</form>

</body>
</html>
