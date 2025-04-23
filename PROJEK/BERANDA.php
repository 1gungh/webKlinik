<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Praktik Dokter Muh.Abd.Waris - Beranda</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      flex-direction: column;
    }

      nav {
        background-color: #7da0c4;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 30px;
        flex-wrap: wrap;
      }

    .nav-links {
      display: flex;
      gap: 30px;
      flex-wrap: wrap;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      padding: 8px 12px;
      border-radius: 5px;
      transition: background 0.3s ease;
    }

    .nav-links a:hover {
      background-color: rgb(135, 192, 215);
    }

    .btn-login, .btn-daftar {
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 20px;
      border: 2px solid white;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-login { 
      background-color: transparent;
      color: white;
      margin-right: 10px;
    }

    .btn-login:hover {
      background-color: white;
      color: #005c99;
    }

    .btn-daftar {
      background-color: white;
      color: #7da0c4;
    }

    .btn-daftar:hover {
      background-color: #f1f9ff;
      color: #005c99;
      border-color: #005c99;
    }

    main {
      flex: 1;
      padding: 60px 20px;
      background: white;
      text-align: center;
    }

    .hero img {
      width: 150px;
      margin-bottom: 20px;
    }

    .hero h1 {
      color: #2a2a2a;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 18px;
      color: #555;
      margin-bottom: 30px;
    }

    .hero-cta {
      margin-top: 20px;
    }

    .cta-btn {
      background-color: #28a745;
      color: white;
      padding: 10px 20px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .cta-btn:hover {
      background-color: #218838;
    }

    .features {
      margin-top: 50px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .feature-card {
      background-color: #e7f0fa;
      padding: 20px;
      border-radius: 10px;
      width: 250px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .feature-card h3 {
      margin-bottom: 10px;
      color: #333;
    }

    .feature-card p {
      color: #555;
      font-size: 14px;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 20px 10px;
      font-size: 14px;
    }

    /* Modal Style */
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.5);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background: #7da0c4;
      padding: 30px;
      border-radius: 20px;
      max-width: 400px;
      width: 90%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      position: relative;
    }

    .modal h1 {
      text-align: center;
      margin-bottom: 20px;
      color: white;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: white;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    .close {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 20px;
      color: white;
      cursor: pointer;
    }

    
    
    @media (max-width: 700px) {
      nav {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }

      .nav-links {
        flex-direction: column;
        gap: 10px;
      }

      .features {
        flex-direction: column;
        align-items: center;
      }

      .btn-login, .btn-daftar {
        align-self: flex-end;
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

  <nav>
    <div class="nav-links">
      <a href="#">Beranda</a>
      <a href="#">Jadwal Dokter</a>
      <a href="#">Reservasi</a>
      <a href="#">Profile Dokter</a>
    </div>

    <div>
      <button class="btn-login" onclick="openLoginModal()">Login</button>
      <button class="btn-daftar" onclick="openModal()">Daftar Sekarang</button>
    </div>
  </nav>

  <main>
    <section class="hero">
      <img src="https://cdn-icons-png.flaticon.com/512/3774/3774299.png" alt="Dokter Icon">
      
      <h1>Selamat Datang di Praktik Dokter Muh.Abd.Waris</h1>
      <p>Platform modern untuk kemudahan layanan kesehatan Anda.</p>
    </section>

    <section class="features">
      <div class="feature-card">
        <h3>Jadwal Dokter</h3>
        <p>Cek ketersediaan dokter hari ini</p>
      </div>

      <div class="feature-card">
        <h3>Dokter Terpercaya</h3>
        <p>Ditangani oleh dokter profesional dan berpengalaman.</p>
      </div>

      <div class="feature-card">
        <h3>Riwayat Periksa</h3>
        <p>Cek riwayat konsultasi dan resep secara digital & aman.</p>
      </div>

    </section>
  </main>

  <!-- Modal Pendaftaran -->
  <div id="modalDaftar" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>

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

  <!-- Modal Login -->
  <div id="modalLogin" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeLoginModal()">&times;</span>

      <h1>LOGIN</h1>
      <form id="form-login" method="POST">
      <label for="login-email">Email atau No. Telepon:</label>
      <input type="text" id="login-email" name="login-email" required>

      <label for="login-password">Password:</label>
      <input type="password" id="login-password" name="login-password" required>

      <button type="submit">Masuk</button>
    </form>
  </div>
</div>  
</div>

  <footer>
    <p>&copy; Praktik Dokter Muh.Abd.Waris. All rights reserved.</p>
    <p>Alamat: Jl. Bromo center No.2, Krajan II, Kalisat, Kec. Kalisat, Kabupaten Jember, Jawa Timur 68193 | Telepon: (0331)7845872</p>
  </footer>

  <script> 
    function openModal() {
      document.getElementById("modalDaftar").style.display = "flex";
    }

    function closeModal() {
      document.getElementById("modalDaftar").style.display = "none";
    }

    function openLoginModal() {
      document.getElementById("modalLogin").style.display = "flex";
    }

    function closeLoginModal() {
      document.getElementById("modalLogin").style.display = "none";
    }

    window.onclick = function(event) {
      const modalDaftar = document.getElementById("modalDaftar");
      const modalLogin = document.getElementById("modalLogin");
      if (event.target === modalDaftar) closeModal();
      if (event.target === modalLogin) closeLoginModal();
    }
  </script>

</body>
</html>