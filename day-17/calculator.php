
<?php

    $finalResult = ' ';
    if (isset($_POST['btn'])){
        require_once 'TestCalculator.php';
        $testCalculator = new TestCalculator();
        $finalResult = $testCalculator->makeCalculator($_POST);
    }
?>

<form action="" method="post">
    <table>
        <tr>
            <td>First Number:</td>
            <td><input type="number" name="first_number" value="<?php echo $_POST['first_number'];?>"></td>
        </tr>
        <tr>
            <td>Second Number:</td>
            <td><input type="number" name="second_number" value="<?php echo $_POST['second_number'];?>"></td>
        </tr>
        <tr>
            <td>Result:</td>
            <td><input type="number" value="<?php echo $finalResult;?>"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn" value="+">
                <input type="submit" name="btn" value="-">
                <input type="submit" name="btn" value="*">
                <input type="submit" name="btn" value="/">
                <input type="submit" name="btn" value="%">
            </td>
        </tr>
    </table>
</form>