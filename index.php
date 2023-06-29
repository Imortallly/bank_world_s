<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Bank World | Login</title>
</head>

<body>
    <main>
        <div class="screen-left-login">
            <form method="get" action="#">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="exampleInputEmail1">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <?php
                    $LOGIN =  $_GET['exampleInputEmail1'];
                    $PASSWORD = $_GET['exampleInputPassword1'];

                    $CLIENT = array(
                        'user' => 'joaovitor.jgn@gmail.com',
                        'password' => 'joaovitor16'
                    );

                    if ($LOGIN === $CLIENT['user'] && $PASSWORD === $CLIENT['password']) {
                        echo "<span>Login sucefully!</span>";
                    } else {
                        echo "<span>Login failed!</span>"; 
                    }
                ?>
                <br><br>
                <button type="submit" class="btn btn-primary" style="width: 20rem">Login</button>
                <div class="terms-and-services">
                <span>Copyright © 2023 BankWorld, LLC. Bank World™ is a <br> trademark of Bank World, LLC. </span><br>
                <span><a rel="stylesheet" href="#">Terms of Service</a> | <a rel="stylesheet" href="#">Privacy Policy</a></span>
            </div>
            </form>
        </div>
        <div class="screen-right-image"></div>
    </main>
</body>

</html>