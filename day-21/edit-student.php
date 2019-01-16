<?php
    require_once 'vendor/autoload.php';
    use App\classes\StudentInfo;

    $id = $_GET['id'];
    $queryResult = StudentInfo::getStudentInfoById($id);
    $studentById = mysqli_fetch_assoc($queryResult);
//    echo '<pre>';
//    print_r($studentById);
    $message = '';
    if(isset($_POST['btn'])){
        StudentInfo::updateStudentInfo($_POST);
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
            <td>
                <input type="text" name="name" value="<?php echo $studentById['name'];?>">
                <input type="hidden" name="id" value="<?php echo $studentById['id'];?>">
            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" value="<?php echo $studentById['email'];?>"></td>
        </tr>
        <tr>
            <td>Number:</td>
            <td><input type="tel" name="mobile" value="<?php echo $studentById['mobile'];?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Update"></td>
        </tr>
    </table>
</form>