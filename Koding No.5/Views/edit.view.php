<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data</h2>
    <form method="post">
        Nama: <input type="text" name="Nama" value="<?php echo $data['Nama']; ?>" required><br><br>

        jenis_kelamin 
        <select name="jenis_kelamin" required>
            <option value="laki" <?php if ($data['Jenis_kelamin'] == 'laki') echo 'selected'; ?>>laki</option>
            <option value="perempuan" <?php if ($data['Jenis_kelamin'] == 'perempuan') echo 'selected'; ?>>perempuan</option>
        </select><br><br>
        
        tinggi badan:  <input type="number" name="tinggi_badan" value="<?php echo $data['Tinggi_badan']; ?>" required><br><br>

        Berat badan : <input type="number" name="berat_badan" value="<?php echo $data['Berat_badan']; ?>" required><br><br>

        <button type="submit">Simpan</button>
        
    </form>
</body>
</html>
