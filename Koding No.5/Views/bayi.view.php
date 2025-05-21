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
            .seting:hover {
                width: 60px;
                transition: 0.5s;
            }
            h1 {
                
                
            }

            .UI_atas {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            table th {
                border: black 5px solid;
                margin: 10px;
            }

            td {
                border: black 5px solid;
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
                <div class="UI_atas">
                    <a class="kembali" href="dashboard.php"> <- kembali ke dashboard lite  </a>
                    <h2> Data Bayi </h2>
                    <a href="tambah.bayi.php"> Tambah data </a>
                </div>

                <div>
                    <table>
                            <thead class="kepaMeja">
                                <tr>
                                    <th> id </th>
                                    <th> Nama </th>
                                    <th> jenis kelamin </th>
                                    <th> Tinggi badan </th>
                                    <th> Berat badan </th>
                                    <th> edit / hapus </th>
                               </tr>
                             </thead>
                             <tbody>
                                <?php
                                    $no = 1; 
                                    // foreach ($barang as $item) {
                                    while ($item = mysqli_fetch_assoc($rows))
                                    {
                                ?>

                                <tr>
                                    <td> <?= $no; ?></td>
                                    <td> <?= $item["Nama"] ?></td>
                                    <td> <?= $item["Jenis_kelamin"] ?></td>
                                    <td> <?= $item["Tinggi_badan"] ?></td>
                                    <td> <?= $item["Berat_badan"] ?></td>
                                    <td> 
                                        <a href="Edit_barang.php?id=<?=$item['id']?>">  edit </a>
                                        <a href="hapus_barang.php?id=<?=$item['id']?>" onclick="return confirm('Hapus data ini?')"> hapus </a>
                                    </td>
                                    <!-- <td> <a href="#"> edit </a> <a href="#">Hapus</a> </td> -->
                                </tr>

                                <?php

                                $no += 1;
                                    }
                                ?>
                             </tbody>
                    </table>
                </div>
            </div>

    </body>
</html>