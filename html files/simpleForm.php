<?php
include_once "../includes/autoloader.inc.php"
?>

<!DOCTYPE html>

<html>
<title> Simple PHP Form</title>
<body>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="text" name="nameVar" placeholder="Enter Name : "/>
    <input type="number" name="age"/>
    <input type="submit" value="submit"/>
</form>
</body>


</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["nameVar"];
    $userAge = $_POST["age"];
    echo $userAge."<br>".$username;
}
$interfaceDemoObj = new InterfaceDemo();
echo $interfaceDemoObj->connectionOpen();
echo InterfaceDemo::databaseAccessOperations();
echo $interfaceDemoObj->connectionClose();
?>

