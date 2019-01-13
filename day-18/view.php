<?php
    $res= '';
    if (isset($_POST['btn'])){
        require_once 'OddEven.php';
        $objOddEven = new OddEven();
        $res = $objOddEven->oddEvenCalculation($_POST);
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
            <td></td>
            <td>
                <input type="radio" name="choice" value="odd">Odd
                <input type="radio" name="choice" value="even">Even
            </td>
        </tr>
        <tr>
            <td>Result:</td>
            <td><textarea cols="30" rows="5"><?php echo $res;?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
