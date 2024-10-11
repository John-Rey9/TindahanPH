<?php
    session_start();
    include("DBconnection.php");


    if($_SERVER['REQUEST_METHOD']=="POST") {
        $msg = null;
        global $msg;
        $tindahan = $_POST['tindahan'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $category = $_POST['category'];

      if(!empty($tindahan) && !empty($address) && !empty($email) && !empty($category)){

            $query = "insert into sellers(Tindahan, Address, Email, Category) 
            values('$tindahan','$address', '$email', '$category')";
            try{
                mysqli_query($conn, $query);

                $_SESSION['Tindahan'] = $userdata['Tindahan'];
                header("Location: MainMenuUserSell.php");
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
    <title>TindahanPH SignUp</title>
    <link rel="stylesheet" href="SignUpStyle.css">
</head>
<body>

    <div id="logindesign">
            <form method = "post">

                <p id="logintxt">SIMULAN NG MAGTINDA!!!</p>
                <div id=space></div>
                <label id="defaulttext">Name of your Store: </label>
                <input id="text" type="text" name="tindahan"><br/><br/>
                <label id="defaulttext">Address: </label>
                <input id="text" type="text" name="address"><br/><br/>
                <label id="defaulttext">Email Address: </label>
                <input id="text" type="text" name="email"><br/><br/>
                <label id="defaulttext">What's your Stores Category?: </label>
                <input id="passtxt" type="text" name="category"><br/><br/>
                <p id="errormessage"></p>

                <input id="submit2" type="submit" value="Submit"><br/><br/>

            </form>

            <a id="back_href3" href="MainMenuUser.php">
                    
            <span>Back</span> <span>To</span> <span>Main</span> <span>Menu</span>

            </a> <br/>

            <a id="tindahan_already" href="MainMenuUserSell.php">
                    
            <span>Already</span> <span>Have</span> <span>a</span> <span>Tindahan?</span> <span>(Click Here)</span>

            </a>

            <br/>

            <br/>

    </div>
</body>
</html>