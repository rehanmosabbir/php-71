<?php
//    require_once 'demo.php';
//
//    $objDemo = new Demo();
//    echo $objDemo->addition();

//    require_once 'example.php';
//
//    $objExample = new ExampleTwo(10);
//    $objExample->addition(10,20);
    $result = '';
    if(isset($_POST['btn'])){
        require_once 'fullName.php';
        $objFullName = new FullName();
        $result = $objFullName->makeFullName($_POST);
    }

?>

    <form action="" method="post">
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="first_name"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="last_name"></td>
            </tr>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" value="<?php echo $result;?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn" value="Submit"></td>
            </tr>
        </table>
    </form>
