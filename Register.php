<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
  </head>
<body>
    <div class="container">
        <div class="box form-box">

        <?php

        include("config.php");
        if(isset($_POST['submit'])){
            $Titel = $_POST['titel'];
            $Fist_Name = $_POST['username'];
            $Last_Name = $_POST['username'];
            $Email = $_POST['email'];
            $Age = $_POST['age'];
            $Phone_No = $_POST['phone_No'];
            $Address = $_POST['address'];
            $Password = $_POST['password'];
            $Confirm_Password = $_POST['password'];

            $verify_query = mysql_
            
        }


          ?>
            <header>Sign Up</header>
            <form action="" method="post">

                <div class="title">
                    <label class="form-label">Title :</label>
                    <select id="TitleId" class="data-title-combo">
                        <option value=""></option>
                        <option value="1">Mr.</option>
                        <option value="2">Mrs.</option>
                        <option value="3">Miss.</option>
                        <option value="4">Dr.</option>
                        <option value="5">Rev.</option>
                        <option value="6">Ms.</option>
                    </select>
                </div>
                

                <div class="field input">
                    <label for="username">Fist Name</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="username">Last Name</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="phone_no">Phone No</label>
                    <input type="text" name="phone_no" id="phone_no" required>
                </div>
                

                <div class="field input">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off"  required>
                </div>

                <div class="field input">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="password" id="password" autocomplete="off"  required>
                </div>

                <div class="field">

                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>

                <div class="links">
                    Already a member? <a href="Login.php">Sing Up Now</a>
                </div>

            </form>
        </div>
    </div>
</body>
</html>