<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luxurious+Script&family=Source+Sans+3:wght@500&display=swap" rel="stylesheet">
    <title>registration page</title>
</head>
<body>
<div class="container">
        <div class="title">
            Registration
        </div>
        <form method="post" action="register.php">
            <div class="user-ditails">
                <div class="input-box">
                    <span class="details">
                        Full Name
                    </span>
                    <input type="text" placeholder="Enter Your Name" required>
                </div>
                    <div class="input-box">
                        <span class="details">
                            Phone Number
                        </span>
                        <input type="text" placeholder="Enter Your Phone Number" required>
                    </div>
                        <div class="input-box">
                            <span class="details">
                                User Name
                            </span>
                            <input type="text" placeholder="Enter Your User Name" required>
                        </div>
                        <div class="input-box">
                            <span class="details">
                                Email
                            </span>
                            <input type="email" placeholder="Enter Your Email" required>
                        </div>
                        <div class="input-box">
                            <span class="details">
                                Password
                            </span>
                            <input type="password" placeholder="Enter Your password" required>
                        </div>
                        <div class="input-box">
                            <span class="details">
                                Confirm Password
                            </span>
                            <input type="password" placeholder="Enter Your Confirm Password" required>
                        </div>
            </div>
        <div class="gender-details">
            <input type="radio" name="gender" id="dot-1">
            <input type="radio" name="gender" id="dot-2">
            <span class="gender-title"> Gender </span>
            <div class="category">
                <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender"> Male</span>
                </label>
                <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Female</span>
                </label>
            </div>
        </div>
<div class="button">
    <input type="submit" value="Register">
</div>
        </form>
    </div>
</body>
</html>