<?php
    session_start();
    include("DBconnection.php");

    if($_SERVER['REQUEST_METHOD']=="POST") {
        $msg = null;
        global $msg;
        $username = $_POST['username'];
        $userdisplay = $_POST['userdisplay'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $phnumber = $_POST['number'];
        $email = $_POST['email'];
        $password = $_POST['password'];

      if(!empty($username) && !empty($age) && !empty($address) && !empty($phnumber) && !empty($email) && !empty($password)){

            $query = "insert into users(Name, Username, Age, Address, PhoneNumber, EmailAddress, Password) 
            values('$username','$userdisplay', '$age', '$address', '$phnumber', '$email', '$password')";
            try{
                mysqli_query($conn, $query);
                header("Location: Menu.php");
                die;
            }catch(Exception $e){
                $msg="The Username you entered has been taken!";
            }
        }
        else {
            $msg= "Please enter valid information(s)!";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>TindahanPH Login</title>
    <link rel="stylesheet" href="SignUpStyle.css">
</head>
<body>

    <div id="logindesign">
            <form method = "post">

                <p id="logintxt">MAG SIGN-UP NA!!!</p>
                <div id=space></div>
                <label id="defaulttext">Name: </label>
                <input id="text" type="text" name="username"><br/><br/>
                <label id="defaulttext">Username: </label>
                <input id="text" type="text" name="userdisplay"><br/><br/>
                <label id="defaulttext">Password: </label>
                <input id="text" type="password" name="password"><br/><br/>
                <label id="defaulttext">Age: </label>
                <input id="passtxt" type="age" name="age"><br/><br/>
                <label for="genders" id="defaulttext" name="gender">Gender:</label>
                <select name="genders" id="gender">
                     <option value="sel">Select your Gender</option>
                     <option value="male">Male</option>
                     <option value="female">Female</option>
                     <option value="others">Others</option>
                     <option value="prefer">Prefer not Say</option>
                </select><br/><br/>
                <label id="defaulttext">Address: </label>
                <input id="passtxt" type="address" name="address"><br/><br/>
                <label id="defaulttext">Phone Number: </label>
                <input id="passtxt" type="phonenumber" name="number"><br/><br/>
                <label id="defaulttext">Email Address: </label>
                <input id="passtxt" type="email" name="email"><br/><br/>
                <p id="errormessage"></p>

                <input id="submit" type="submit" value="Submit"><br/><br/>

            </form>

            <a id="back_href" href="MainMenu.php">
                    
            <span>Back</span> <span>To</span> <span>Main</span> <span>Menu</span>

            </a>

            <br/>

            <br/>

            <a id="back_href2" href="Menu.php">
                    
            <span>Already</span> <span>Have</span> <span>An</span> <span>Account?</span> <span>(Back to Log In)</span>

            </a>
    </div>
</body>
</html>