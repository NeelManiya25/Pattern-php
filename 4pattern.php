<html>
<body>
    <form method="POST">
        <label for="num">Enter a number:</label>
        <input type="number" id="num" name="num" min="1" required>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $num = $_POST['num'];
        for($i = 1;$i<=$num;$i++){
            for($s = 1;$s<=($num-$i);$s++){
                  echo "&nbsp;&nbsp;&nbsp;";
            }
            for($j = 1;$j<=$i;$j++){
                  echo "*&nbsp;&nbsp;&nbsp;";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>    