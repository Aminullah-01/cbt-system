<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 1.5rem;
        }
        .input-group {
            margin-bottom: 1rem;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 1rem;
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #28a745;
        }
        .login-button {
            width: 100%;
            padding: 12px;
            background-color: #28a745; /* Modern Green */
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-button:hover {
            background-color: #218838; /* Darker Green */
        }
        .message {
            text-align: center;
            margin-top: 1rem;
            color: #d9534f;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <form action="authentication.php" method="post">
            <h2>Login Here</h2>
            <div class="input-group">
                <input type="text" name="reg_no" placeholder="Registration Number">
                
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password">
            </div>
            <button type="submit" name="loginBTN" class="login-button">Login</button>
        </form>

        <?php
        
            $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            if(strpos($fullurl, "msg=empty") == true){
                echo "<p class='error' style='color: red;'> you did not fill in all the field</p>";
            }
            elseif(strpos($fullurl, "msg=invalidinput") == true){
                echo "<p class='error' style='color: red;'> invalid input</p>";
            }
       
        ?>
    </div>

</body>
</html>