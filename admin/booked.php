<?php
include 'server.php';
?>

<!DOCTYPE html>
<html>
<style>
    td, th {
        border: 1px solid black;
        padding: 10px;
        margin: 5px;
        text-align: center;
    }
</style>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>number</th>
                <th>room_type</th>
                <th>image</th>
                <th>date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($rows)) {
                foreach ($rows as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['number'] . "</td>";
                    echo "<td>" . $row['room_type'] . "</td>";
                    echo "<td>" . $row['image'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php
mysqli_close($conn);
?>
