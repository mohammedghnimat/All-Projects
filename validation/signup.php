<!DOCTYPE html>
<html>
<head>
    <title>Signup Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <style>
        body{
            background-color: #eeeeee;
        }
        .container{
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
                        padding: 50px;

            margin-top: 50px;
        }
        .submit-btn{
            display: flex;
            justify-content: end;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mt-4">Signup</h2>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required  oninput="validatename()">
                        <p id="nameError"></p>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" oninput="validateEmailAddress()" required>
                        <p id="emailError"></p>
                    </div>
                    <div class="form-group">
                        <label for="Mobile">Mobile</label>
                        <input type="Mobile" class="form-control" id="mobile" name="mobile" placeholder="Enter your Mobile" oninput="validatemobileAddress()" required>
                        <p id="mobileError"></p>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" oninput="validatepass()" required>
                        <p id="erorrpass"></p>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password" oninput="validatepass2()" required>
                        <p id="erorrpass2"></p>
                    </div>
                    <select name="user-type">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                    <div class="submit-btn">
                        <button type="submit" id="but1" name="signup" value="signup" class="btn btn-primary">Sign Up</button>
                    </div>
                    <div class="d-flex justify-content-center">
                            <p id="but2">Have Account?<a href="login.php">Login</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="a.js"></script>
</body>
</html>