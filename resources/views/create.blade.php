<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.2.1.js"></script>
    <script src="jquery-migrate-1.4.1.js"></script>
    <script src="create.js"></script>
</head>
<body>
<h2>Signup Form</h2>

<form method="post"  class="form-validate" action="create.php" name="my-form" style="border:1px solid #ccc">
    <div class="container">
        <label><b>Full name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>
        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
        <span><?php echo"duplicate"; ?></span><!--thong bao bang html-->
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <label><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
        <span class="warming">password not same repeat password or password.length < 6</span>
        <input type="checkbox" checked="checked"> Remember me
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <div class="clearfix">
            <button  onclick="getout()" type="button" class="cancelbtn" >Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>
<script src="create.js"></script>
</body>
</html>