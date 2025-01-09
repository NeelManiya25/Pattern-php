<html>
<body>
    <form method="POST">
        <label for="num">Enter a number:</label>
        <input type="number" id="num" name="num" min="1" required>
        <input type="submit" name="submit" value="submit">
    </form>

<?php
        if (isset($_POST['submit'])) {
            $num = $_POST['num'];
                $char = 'A';  
                $count = 1; 
            do {
                echo str_repeat($char, $count) . "<br>";
                    $char++;
                    $count++;
                    } while ($count <= $num);       
        }
?>
</body>
</html>