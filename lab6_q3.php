<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
        function calculateArea($length, $width) {
            return $length * $width;
        }
        
        $length = 5;
        $width = 10;
        $area = calculateArea($length, $width);
        
        echo "<p>The area of the rectangle with length $length and width $width is $area.</p>";
    ?>
</body>
</html>
