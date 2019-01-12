
<?php
    require_once 'function-definition.php';
    $stringCounter ='';
    $wordCounter = '';
    $givenString = '';
    if (isset($_POST['btn'])){
        $givenString = $_POST['given_string'];
        $res = wordCharacterCount($_POST);
//        echo '<pre>';
//        print_r($res);
        $stringCounter = $res['totalNumberOfStrings'];
        $wordCounter = $res['totalNumberOfWords'];
    }
?>

<form action="" method="post">
    <table>
        <tr>
            <td>Enter your string here:</td>
            <td><input type="text" name="given_string" value="<?php echo $givenString;?>"></td>
        </tr>
        <tr>
            <td>Total number of characters:</td>
            <td><input type="text" value="<?php echo $stringCounter;?>" disabled></td>
        </tr>
        <tr>
            <td>Total number of words:</td>
            <td><input type="text" value="<?php echo $wordCounter;?>" disabled></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>