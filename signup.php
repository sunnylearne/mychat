<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new accout</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="signup-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Sign Up</h2>
                <p>Fill out this form and start chatting with your friends</p>
            </div>

            <div class="form-group">
                <label for="">Username</label>
                <input class="form-control" type="text" name="user_name" id="" placeholder="Example: sunnylenz" autocomplete="0ff" required>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control" type="password" name="user_pass" id="" placeholder="Password" autocomplete="0ff" required>
            </div>

            <div class="form-group">
                <label for="">Email Address</label>
                <input class="form-control" type="email" name="user_email" id="" placeholder="someone@site.com" autocomplete="0ff" required>
            </div>

            <div class="form-group">
                <label for="">Country</label>
               <select name="user_country" class="form-control" requred>
                   <option disabled="">Select a Country</option>
                   <option>Nigeria</option>
                   <option>United states of America</option>
                   <option>India</option>
                   <option>Ghana</option>
                   <option>France</option>
               </select>
            </div>

            <div class="form-group">
                <label for="">Gender</label>
               <select name="user_gender" class="form-control" requred>
                   <option disabled="">Select your Gender</option>
                   <option>Male</option>
                   <option>Female</option>
                   <option>Others</option>
               </select>
            </div>

            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required> I accept the <a href="#">Terms of Use</a>&amp; <a href="#">Privacy Policy</a></label>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control" type="password" name="password" id="" placeholder="Password" autocomplete="0ff" required>
            </div>

            <div class="form-group">
                 <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
            </div>
        </form>

        <div class="text-center small" style="color: #67428B";>Already have an account? <a href="signin.php">Sign in here</a></div>
    </div>
</body>
</html>