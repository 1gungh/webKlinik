<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Sehat - Riwayat</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0; 
      padding: 0;
      background-color: #f4f4f4;
    }

    nav {
      background-color: #7da0c4;
      display: flex;  
      justify-content:left;
      
    }

    nav a {
      color: whitesmoke;
      padding: 10px 10px;
      border-radius: 5px;
      text-decoration: none;
      text-indent: 50px;
      font-weight: bold;
    }

    nav a:hover {
      background-color:rgb(135, 192, 215);
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 20px 10px;
      font-size: 14px;

    }

/*tabel*/

.tbl{ 
      font-family:Cochin;
      margin: 0; padding: 0;
      background-color: #f4f4f4;
    }

#customers {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin: 90px auto;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color:#7da0c4;}

#customers tr:hover {background-color: #052659;}

#customers th {
  padding-top: 10px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #052659;
  color: white;
}
  </style>
</head>

<body>
<nav>
  <a href="#">Beranda</a>
  <a href="#">Jadwal Dokter</a>
  <a href="#">Reservasi</a>
  <a href="#">Riwayat Periksa</a> 
</nav>

<table id="customers">
  <tr>
    <th>Tanggal Periksa</th>
    <th>Nama Dokter</th>
    <th>Nama Pasien</th>
    <th>Diagnosa</th>
    <th>Catatan Dokter</th>
  </tr>
</table>
  
<footer>
    <p>&copy; Praktik Dokter Muh.Abd.Waris. All rights reserved.</p>
  </footer>

</body>
</html>