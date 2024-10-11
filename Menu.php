<?php
    session_start();
    include("DBconnection.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $msg = null;
        global $msg;
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password)){

            $query = "select * from users where Username = '$username' limit 1";
            $result = mysqli_query($conn, $query);

            if($result){
                if($result && mysqli_num_rows($result)>0){
                    $userdata = mysqli_fetch_assoc($result);
        
                    if($userdata['Password'] === $password){

                        //This part manages to update the users personal information oif the user logs in his/her account.
                        //You can update as much as possible, follow the format bellow.

                        $_SESSION['Username'] = $userdata['Username'];
                        $_SESSION['id'] = $userdata['id'];
                        header("Location:MainMenuUser.php");
                    }
                }
            }
            $msg = "Wrong username or password!";
           
        }
        else{
            $msg = "Please enter valid information(s)!";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>TindahanPH Login</title>
    <link rel="stylesheet" href="MenuStyle.css">
</head>
<body>

    <img id="sun" src="sun.png">

    <div id="Logo"> <span style="font-family:Impact; font-size:500% ;color:dodgerblue">Tindahan</span>
        <span style="font-family:Impact; font-size:500% ;color:firebrick">PH</span>
    </div>

    <div id="logindesign">
            <form method = "post">

                <p id="logintxt">LOGIN</p>
                <div id=space></div>
                <label id="userNAME">Username: </label>
                <input id="text" type="text" name="username"><br/><br/>
                <label id="userPASS">Password: </label>
                <input id="passtxt" type="password" name="password"><br/><br/>

                <p id="errormessage"><?php if (isset($msg)){echo $msg;}?></p>

                <input id="btn" type="submit" value="Log In"><br/><br/>

                <input type="button" id="signBtn" value="Sign Up" onClick="document.location.href='SignUp.php'">

            </form>
    </div>

    <a id="back_href" href="MainMenu.php">
                    
        <span>Back</span> <span>To</span> <span>Main</span> <span>Menu</span>

    </a>

</body>
</html>