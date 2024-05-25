<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
</head>
<body>
    <?php
        $students = [
            "S001" => "Ali",
            "S002" => "Babu",
            "S003" => "Chong",
            "S004" => "Dinesh",
            "S005" => "Elena"
        ];
    ?>
    <table border="1">
        <tr>
            <th>Student ID</th>
            <th>Name</th>
        </tr>
        <?php
            foreach ($students as $id => $name) {
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$name</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
