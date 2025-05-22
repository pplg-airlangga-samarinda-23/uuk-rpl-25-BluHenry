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
        
        umur :  <input type="number" name="umur" value="<?php echo $data['Umur']; ?>" required><br><br>

        id_anggota : <input type="number" name="id_anggota" value="<?php echo $data['id_anggota']; ?>" required><br><br>

        <button type="submit">Simpan</button>
        
    </form>
</body>
</html>
