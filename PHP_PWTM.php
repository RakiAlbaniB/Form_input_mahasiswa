<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Output Data Mahasiswa</title>
<style>
body {
    background-color: #F2EFE5; /* background halaman pastel */
    color: #303030; /* warna teks hitam */
    margin: 0;
    padding: 0;
}

.lalezar-regular {
  font-family: "Lalezar", system-ui;
  font-weight: 400;
  font-style: normal;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff; /* Warna putih */
    border-radius: 20px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.1); /* Efek bayangan pada border */
}

.container1 {
    margin-top: 60px;
    margin-left: 20px;
    align-items: left;
}

.container1 a {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    background-color: black; /* Warna latar belakang tombol */
    color: white; /* Warna teks tombol */
    border-radius: 40px;
}

.container1 a:hover {
    background-color: #333; /* Warna latar belakang tombol saat dihover */
}

header {
    background-color: #303030; /* Warna latar belakang footer */
    color: #fff; /* Warna teks footer */
    text-align: center;
    padding: 20px 0;
    position: fixed;
    right: 0;
    top: 0;
    width: 100%;
}

footer {
    background-color: #303030; /* Warna latar belakang footer */
    color: #fff; /* Warna teks footer */
    text-align: center;
    padding: 10px 0;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
}

h2 {
    color: #303030; /* Warna teks hitam untuk judul */
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #303030; /* Border hitam */
}

th, td {
    padding: 10px;
}

th {
    background-color: #fff;
    color: #303030;
}

tr:nth-child(even) {
    background-color: #C7C8CC; /* Warna abu-abu untuk baris genap */
}

tr:nth-child(odd) {
    background-color: #fff; /* Warna putih lebih gelap untuk baris ganjil */
}
</style>
</head>
<body>
    <header>

    </header>
    <main>
    <div class="container1">
    <h3><a href="HTML_PWTM.html">Kembali</a></h3>
</div>
<div class="container">
    <?php
    /* set timezone ke jakarta */
    date_default_timezone_set("Asia/Jakarta");

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $tgl_lahir = date('d F Y', strtotime($_POST['tgl_lahir']));
        $program_studi = getProgramStudi($nim);

        echo "<h2>Data Mahasiswa (^0~0^)</h2>";
        echo "<table>";
        echo "<tr><th>NIM</th><td>$nim</td></tr>";
        echo "<tr><th>Nama</th><td>$nama</td></tr>";
        echo "<tr><th>Tanggal Lahir</th><td>$tgl_lahir</td></tr>";
        echo "<tr><th>Program Studi</th><td>$program_studi</td></tr>";
        echo "<tr><th>Tanggal Cetak</th><td>" . date('d F Y H:i:s') . "</td></tr>";
        echo "</table>";
    }

    function getProgramStudi($nim) {
        $kode_prodi = substr($nim, 2, 3);
        switch ($kode_prodi) {
            case '115':
                return 'Teknik Informatika S1';
            case '225':
                return 'Sistem Informasi S1';
            case '335':
                return 'Sistem Komputer S1';
            case '223':
                return 'Manajemen Informatika D3';
            default:
                return 'Program Studi tidak dikenali';
        }
    }
    ?>
</div>
    </main>
<footer>
    arigatouuu (^0~0^)
</footer>
</body>
</html>
