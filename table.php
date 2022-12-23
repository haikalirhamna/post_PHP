<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                        <th>Jurusan</th>
                        <th>Tahun Masuk</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $_POST['NIM'] ?></td>
                        <td><?= $_POST['name'] ?></td>
                        <td><?= $_POST['gender'] ?></td>
                        <td><?= $_POST['date'] ?></td>
                        <td><?= $_POST['placeofBirth'] ?></td>
                        <td><?= $_POST['jurusan'] ?></td>
                        <td><?= $_POST['tahunMasuk'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <div class="bg-image">
        <img src="img/wallpaperflare.com_wallpaper.jpg" alt="">
    </div>
</body>
</html>