<?php

require 'koneksi.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <style>

            body {
                background-color:rgb(162, 179, 224);
            }
            .container {
                

                
                
            }
            .header {
                display: flex;
                border: black 5px solid; 
                width: 100%;
                height: 100%;
                justify-content: space-between;
                border-radius: 20px;
            }
            .Juding {
                display: flex;
        
                margin-left: 20px;
                align-items: center;
                
            }

            .profile {
               
                display: flex;
                justify-content: flex-end;
                align-items: center;
                
            }

            .Fp {
                width: 50px;
                margin: 10px;
                border: black solid 4px;
                border-radius: 60px;
            }

            .seting {
                width: 50px;
                transition: 0.5s;
            }
            h1 {
                
                
            }

            .seting:hover {
                width: 60px;
                transition: 0.5s;
            }
        </style>
    </head>

    <body>
        
            <div class="container">
                <div class="header">
                    <div class="Juding">                    
                        <a href="settings.php"> <img class="seting" src="iconic.png"> </a>
                        
                    </div>
                    <h1> E-Posyandu </h1>
                    <div class="profile">
                        <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> USER NPC </p>
                        <img class="Fp" src="rrsgs.png">
                    </div>
                </div>

                <div class="Budy">
                    <h2 > Lite Dashboard </h2>
                    <a class="bayi" href="bayi.php">.php Data Bayi </a>
                </div>
            </div>
       
    </body>
</html>