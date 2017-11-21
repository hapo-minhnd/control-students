<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.2.1.min.js"></script>
    <script src="jquery-3.2.1.js"></script>
    <script src="jquery-migrate-1.4.1.js"></script>
    <script src="js.js"></script>
</head>
<body>
<h2>Update information</h2>
<strong><?php
    echo $_SESSION["account"];
    ?>
</strong>
<p><span class="error">* required field.</span></p>
<form method="post"  class="form-validate" name="my-form" action="tester.php" style="border:1px solid #ccc">
    Name: <input type="text" name="name" class="name" value="<?php echo $name ; ?>">
    <span class="error-name">*pls input name</span>
    <br><br>
    Locaiton: <input type="text" name="location">
    <br><br>
    Phone: <input type="text" name="phone">
    <br><br>
    Job: <input type="text" name="job">
    <span class="error-website">*pls input web</span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error-radio">*pls pick gender</span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
<script src="js.js"></script>
</html>