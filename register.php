<?php
    if(isset($_POST['fblogin']))
    {
    require 'fb.php';
    # require 'inserter.php';

    $facebookUser = $facebook->getUser();
        if($facebookUser){
            $userProfile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale,picture');
            
            $userClass = new User;
            $userData = $userClass->checkFBUserData($userProfile);
        } else {
            $id = $userData['id'];
            $fn = $userData['first_name'];
            $ln = $userData['last_name'];
            $gender = $userData['gender'];
            $dp = $userData['picture'];
            $email = $userData['email'];
            
        }
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Registration using Facebook Login</title>
		<link href="http://bootswatch.com/darkly/bootstrap.min.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container">
            <form method="post">
            
            </form>
            <div class="col-lg-offset-3 col-lg-6 well">
                <table class="table table-hover">
                    <tr>
                        <td>Image</td>
                        <td>
                            <img name="fb_img" src="#" class="img-responsive">
                                 
                        </td>
                    </tr>
                    <tr>
                        <td>Full Name</td>
                        <td>
                        
                        </td>
                    </tr>
                    <tr>
                        <td>Email Address</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td></td>
                    </tr>
                </table>
                <br>
                <div class="center-block">
                    <button id="fblogin" type="submit"
                            class="btn btn-block btn-lg btn-info"
                            onclick="return confirm('Are you sure?');">
                    Register using Facebook
                    </button>
                </div>
            </div>
        </div>
    </body>
</html>