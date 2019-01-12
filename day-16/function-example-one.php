<?php
    require_once 'function-definition.php';
    $result = '';
    $firstName = '';
    $lastName = '';
    if (isset($_POST['btn'])){
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $result = makeFullName($_POST);
    }
?>

<form action="" method="post">
    <table>
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="first_name" value="<?php echo $firstName;?>"></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="last_name" value="<?php echo $lastName;?>"></td>
        </tr>
        <tr>
            <td>Full Name:</td>
            <td><input type="text" value="<?php echo $result;?>" disabled></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>