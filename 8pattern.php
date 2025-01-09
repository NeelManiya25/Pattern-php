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
            $totalRows = $num;
            for ($i = 1; $i <= $totalRows; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo $char;
                    $char++; 
                }
                echo "<br>";
            }
        }
?>
</body>
</html>