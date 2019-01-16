<?php
    require_once 'vendor/autoload.php';
    use App\classes\StudentInfo;
    $message = '';
    if(isset($_POST['btn'])){
        $message = StudentInfo::addStudentInfo($_POST);
    }
?>
<a href="add-student.php">Add Student</a> ||
<a href="view-student.php">View Student</a>

<hr>
<h1 style="color: green;"><?php echo $message;?></h1>
<hr>
<form action="" method="post">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Number:</td>
            <td><input type="tel" name="mobile"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>