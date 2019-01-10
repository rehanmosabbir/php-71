
<?php

    $result = '';
    if(isset($_POST['btn'])){
        $firstNumber = $_POST['first_number'];
        $secondNumber = $_POST['second_number'];
        $btn = $_POST['btn'];



        switch ($btn){
            case '+':
                $result = $firstNumber + $secondNumber;
                break;
            case '-':
                $result = $firstNumber - $secondNumber;
                break;
            case '*':
                $result = $firstNumber * $secondNumber;
                break;
            case '/':
                if ($secondNumber != 0){
                    $result = $firstNumber / $secondNumber;
                }else {
                    $result = "Second Number Can't be zero";
                }
                break;
            case '%':
                $result = $firstNumber % $secondNumber;
                break;
        }
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
            <td><input type="text" value="<?php echo $result;?>" size="25" disabled></td>
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