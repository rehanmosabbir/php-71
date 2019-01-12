
<?php
    $result = '';
    if(isset($_POST['btn'])){
        $startingNumber = $_POST['starting_number'];
        $endingNumber = $_POST['ending_number'];

        $result = 0;
        for($i = $startingNumber; $i <= $endingNumber; $i++){
            $result += $i;
        }
    }

?>


<form action="" method="post">

    <table>
        <tr>
            <td>Starting Number:</td>
            <td><input type="number" name="starting_number" value="<?php echo $startingNumber;?>"></td>
        </tr>
        <tr>
            <td>Ending Number:</td>
            <td><input type="number" name="ending_number" value="<?php echo $endingNumber;?>"></td>
        </tr>
        <tr>
            <td>Result</td>
            <td><input type="text" value="<?php echo $result;?>" disabled></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>