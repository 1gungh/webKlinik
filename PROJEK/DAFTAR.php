<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DAFTAR AKUN PASIEN</title>
  <style>
    body {
      font-family: Geneva, Verdana;
      background: linear-gradient(to right, #7da0c4, rgb(196, 215, 244));
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      max-width: 400px;
      width: 100%;
    }

    .form-box {
      background: #7da0c4;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .form-box h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      font-size: 14px;
    }

    button {
      background: #28a745;
      color: white;
      border: none;
      padding: 10px;
      width: 100%;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: rgb(159, 223, 173);
    }

  </style>
</head>
<body>
  <div class="container">
    <div class="form-box">
      <h1>DAFTAR AKUN</h1>
      <form id="form-data" method="POST">

        <label for="nama">Nama Lengkap:</label>
        <input id="nama" type="text" name="nama" required>

        <label for="kelamin">Jenis Kelamin:</label>
        <select name="kelamin" id="kelamin" required>
          <option value="">-- Pilih Jenis Kelamin --</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>

        <label for="tanggalLahir">Tanggal Lahir:</label>
        <input type="date" id="tanggalLahir" name="tanggalLahir" required>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="3" required></textarea>

        <label for="telepon">Nomor Telepon/HP:</label>
        <input type="tel" id="telepon" name="telepon" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Daftar</button>

      </form>
    </div>
  </div>
</body>
</html>
