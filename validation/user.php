<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
    <link rel="stylesheet" href="/style.css">
    <style>
        * {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    margin: 0px;
    padding: 0px;
    outline: none;
    border: none;
    text-decoration: none;

}

.container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;

}

.container.content {
    text-align: center;
}

.container.content h3 {
    font-size: 30px;
    color: #333;
}

.container.content h3 span {
    background-color: red;
    color: #fff;
    border-radius: 5px;
    padding: 0px 15px;
}

.container.content h1 {
    font-size: 50px;
    color: #333;
}

.container.content h1 span {
    color: #ff0000;
}

.container.content p {
    font-size: 25px;
    margin-bottom: 20px;

}

.container.content .btn {
    display: inline-block;
    padding: 10px 30px;
    font-size: 20px;
    background-color: #333;
    color: #fff;
    margin: 0px 5px;
}
    </style>
</head>
<body>
    <div class="container">

        <div class="content">
            <h3> hi ,<span>user</span></h3>
            <h1> welcome <span></span></h1>
            <p>this is an user an page </p>
            <a href="/login.php" class="btn">login</a>
            <a href="/register-form.php" class="btn">register</a>
            <a href="/logout.php" class="btn">logout</a>
        </div>




    </div>
    
</body>
</html>