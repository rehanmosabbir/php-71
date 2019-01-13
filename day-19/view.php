<?php

    if (isset($_POST['btn'])){
        require_once 'ExampleTwo.php';
        $objExampleTwo = new App\classes\ExampleTwo();
        $res = $objExampleTwo->wordCharacterCount($_POST);
    }
?>

<form action="" method="post">
    <table>
        <tr>
            <td>Put your string here:</td>
            <td><input type="text" name="given_string" value="<?php if (isset($_POST['btn'])) {echo $_POST['given_string'];}?>" size="25"></td>
        </tr>
        <tr>
            <td>Total number of characters:</td>
            <td><input type="text" value="<?php if (isset($_POST['btn'])) {echo $res['string_length'];}?>" disabled></td>
        </tr>
        <tr>
            <td>Total number of words:</td>
            <td><input type="text" value="<?php if (isset($_POST['btn'])) {echo $res['word_length'];}?>" disabled></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
