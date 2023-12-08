<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <h2 class="text-center mt-4">Login</h2>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="username">Username or Email</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username or email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    
                    <div class="submit-btn">
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </div>
                    <div class="d-flex justify-content-center align-items-end p-4">
                            <p>Dont have Account?<a href="signup.php">SignUp</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
