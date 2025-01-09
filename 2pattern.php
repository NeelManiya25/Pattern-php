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
        $i = 1;
        do {
            $j = 1;
            do {
                echo $j;
                $j++;
            } while ($j <= $i);
            $i++;
            echo "<br>";
        } while ($i <= $num); 
        }
    ?>
</body>
</html>
