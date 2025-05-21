<!-- <!DOCTYPE html>
<html>
    <head>
        <Style>
            .container{
                border: black solid 10px;
                background-color: grey;
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
            }
            .Login {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 40px rgba(7, 5, 5, 0.1);
            padding: 100px;
            text-align: center;
            overflow: hidden;
            width: 30%;
            }
            .background {
                width: 200px;
            }
            .imageLogin{
                border: 5px solid black;


            }
            p{
                  position: absolute;
                    top: 50%;
                    left: 50%;
                    font-size: 20px;
                    font-style: bold;

            }

        </Style>
    </head>
    <body>
        <div class="container">
            <div class="Login">
                <h1> Erlangga Posyandu </h1>
                <div class="imageLogin">
                    <img class="background" src="House-tree.png">
                    <p> Login </p>
                    
                </div>
                <div class="inputan">
                    <input class="username" type="text" placeholder="Username">
                    <input class="password" type="text" placeholder="Password">
                </div>
            </div>
        </div>
    </body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posyandu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color:rgb(193, 208, 251);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }
        p{
            color: red  ;
        }
        .login-container {
            background-color: white;
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            padding: 30px;
            text-align: center;
            border: black 5px double;
        }
        
        .login-header {
            margin-bottom: 25px;
        }
        
        .login-header h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .login-form .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        
        .login-form label {
            display: block;
            margin-bottom: 8px;
            color: #2c3e50;
            font-weight: 500;
        }
        
        .login-form input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        
        .login-form input:focus {
            outline: none;
            border-color:rgb(9, 161, 29);
        }
        
        .login-button {
            width: 100%;
            padding: 12px;
            background-color:rgb(11, 18, 116);
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .login-button:hover {
            background-color:rgb(22, 64, 218);
        }

        .footer {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        
        <div class="login-header">
            <h1>Erlangga Posyandu</h1>
            <p>Login admin form</p>
        </div>
        
        <form class="login-form" action="" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Masukkan username" name="username">
            </div>
            
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Masukkan password" name="password">
            </div>


            <div class="footer">
                kembali ke user login?  <a href="login.php">login</a>

            
            </div>


            
            <button type="submit" class="login-button">MASUK</button>
        </form>
    </div>
</body>
</html>