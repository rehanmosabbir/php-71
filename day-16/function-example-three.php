
<?php
    require_once 'function-definition.php';
    $myPassword = '';
//    $givenLength = '';
    if (isset($_POST['btn'])){

        $myPassword = createPassword($_POST);
        $givenLength = $_POST['given_length'];
    }

?>

<form action="" method="post">
    <table>
        <tr>
            <td>Enter your password length:</td>
            <td><input type="number" name="given_length" value="<?php echo $givenLength;?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Create password"></td>
        </tr>
        <tr>
            <td>Your password is:</td>
            <td><?php echo $myPassword;?></td>
        </tr>
    </table>
</form>