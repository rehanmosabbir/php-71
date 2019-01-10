<?php

    $result = '';
    if(isset($_POST['btn'])) {
//        echo '<pre>';
//        print_r($_POST);
        $startingNumber = $_POST['starting_number'];
        $endingNumber = $_POST['ending_number'];
        $choice = $_POST['choice'];

        if($startingNumber <= $endingNumber){
            if ($choice == 'odd') {
                for ($i = $startingNumber; $i <= $endingNumber; $i++) {
                    if ($i % 2 != 0) {
                        $result .= $i.' ';
                    }
                }
            }else{
                for ($i = $startingNumber; $i <= $endingNumber; $i++) {
                    if ($i % 2 == 0) {
                        $result .= $i.' ';
                    }
                }
            }
        } else {
            if ($choice == 'odd') {

                for ($i = $startingNumber; $i >= $endingNumber; $i--) {
                    if ($i % 2 != 0) {
                        $result .= $i.' ';
                    }
                }
            }else{
                for ($i = $startingNumber; $i >= $endingNumber; $i--) {
                    if ($i % 2 == 0) {
                        $result .= $i.' ';
                    }
                }
            }
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
            <td>Your Choice</td>
            <td>
                <input type="radio" name="choice" value="odd"> Odd
                <input type="radio" name="choice" value="even"> Even
            </td>
        </tr>
        <tr>
            <td>Result:</td>
            <td><textarea cols="30" rows="10"><?php echo $result;?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>

</form>