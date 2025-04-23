<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Dokter - Praktik Dokter Muh.Abd.Waris</title>

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

    .profile-container {
      padding: 60px 20px;
      background-color: white;
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .profile-photo {
      width: 150px;
      border-radius: 50%;
      margin-bottom: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .profile-details {
      max-width: 600px;
    }

    .profile-details h2 {
      margin-bottom: 10px;
      color: #2a2a2a;
    }

    .profile-details p {
      font-size: 16px;
      color: #555;
      margin-bottom: 10px;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 20px 10px;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <!-- Navbar tetap sama -->
  <nav>
    <div class="nav-links">
      <a href="index.html">Beranda</a>
      <a href="jadwal.html">Jadwal Dokter</a>
      <a href="reservasi.html">Reservasi</a>
      <a href="riwayat.html">Riwayat Periksa</a>
    </div>

    <div>
      <button class="btn-login" onclick="openLoginModal()">Login</button>
      <button class="btn-daftar" onclick="openModal()">Daftar Sekarang</button>
    </div>
  </nav>

  <!-- Konten Profil -->
  <main class="profile-container">
    <img src="FOTO/DR.Waris.jpg" alt="Foto Dokter" class="profile-photo">
    <div class="profile-details">

      <h2>Dr. Muh. Abd. Waris</h2>
      <p><strong>Dokter:</strong> Dokter Umum</p>
      <p><strong>Pengalaman:</strong> Lebih dari 25 tahun praktik sebagai dokter umum</p>
      <p><strong>Pendidikan:</strong> Universitas Airlangga - Fakultas Kedokteran</p>
      <p><strong>Profil Singkat:</strong> Dokter Waris dikenal sebagai dokter yang ramah dan profesional, melayani pasien dengan pendekatan holistik serta pemahaman yang mendalam tentang keluhan yang dialami oleh pasien.</p>
    </div>
  </main>

    <!-- Modal Login & Daftar-->
<style>
  .btn-login, .btn-daftar, .btn-logout {
      font-weight: bold; 
      padding: 8px 18px; 
      border-radius: 20px; 
      border: 2px solid white; 
      cursor: pointer; 
      transition: all 0.3s ease; 
      background: none; 
      color: white; 
      font-size: 14px;
    }

    .btn-login:hover { 
      background-color: white; 
      color: #005c99; 
    }

    .btn-daftar {
      background-color: white; 
      color: #7da0c4; 
      border-color: white; 
    }
    
    .btn-daftar:hover {
      background-color: #f1f9ff; 
      color: #005c99; 
      border-color: #005c99; 
    }

    .btn-logout {
      background-color: #dc3545; 
      border-color: #dc3545;
    }

    .btn-logout:hover {
      background-color: #c82333;
       border-color: #c82333; 
      }
      </style>

  <!-- Footer -->
  <footer>
    <p>&copy; Praktik Dokter Muh.Abd.Waris. All rights reserved.</p>  
    <p>Alamat: Jl. Bromo center No.2, Krajan II, Kalisat, Kec. Kalisat, Kabupaten Jember, Jawa Timur 68193
        Telepon: (0331) 7845872</p>
  </footer>

  <!-- Script Modal (copy dari halaman utama) -->
  <script>
    function openModal() {
      document.getElementById("modalDaftar")?.style.display = "flex";
    }

    function closeModal() {
      document.getElementById("modalDaftar")?.style.display = "none";
    }

    function openLoginModal() {
      document.getElementById("modalLogin")?.style.display = "flex";
    }

    function closeLoginModal() {
      document.getElementById("modalLogin")?.style.display = "none";
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
