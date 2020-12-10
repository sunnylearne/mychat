<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="signin-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Sign In</h2>
                <p>Log in to MyChat</p>
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input class="form-control" type="email" name="email" id="" placeholder="someone@site.com" autocomplete="0ff" required>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control" type="password" name="password" id="" placeholder="Password" autocomplete="0ff" required>
            </div>

            <div class="small" >Forget password? <a href="forget_pass.php">Click here</a> </div><br>

            <div class="form-group">
                 <button type="submit" class="btn btn-primary"></button>
            </div>
        </form>
    </div>
</body>
</html>