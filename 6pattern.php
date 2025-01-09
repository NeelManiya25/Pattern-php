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
    $currentnumber = 1;  
    $i = 1;  
    do {
        $j = 1;  
        do {
        echo $currentnumber;  
        $currentnumber++;  
        $j++; 
        } while ($j <= $i); 
            echo "<br>";  
            $i++;  
        } while ($i <= $num);   
	}
    ?>
</body>
</html>

