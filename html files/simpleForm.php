<!DOCTYPE html>

<html>
<title> Simple PHP Form</title>
<body>
    <form method="post" action="<?php  echo htmlspecialchars("../php files/simplePHPForm.php") ?>">
        <input type="text" name="nameVar" placeholder="Enter Name : " />
        <input type="number" name="age" />
        <input type="submit" value="submit">
    </form>
</body>

</html>