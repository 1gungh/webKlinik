<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Praktik Dokter Muh.Abd.Waris</title> 
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
      padding: 12px 30px; 
      flex-wrap: wrap; 
      box-shadow: 0 2px 5px rgba(0,0,0,0.1); 
    }

    .nav-links { 
      display: flex; 
      gap: 25px; 
      flex-wrap: wrap; 
      list-style: none; 
      padding-left: 0; 
    }

    .nav-links a { 
      color: white; 
      text-decoration: none; 
      font-weight: bold; 
      padding: 8px 15px; 
      border-radius: 5px; 
      transition: background-color 0.3s ease, color 0.3s ease; 
      cursor: pointer; 
    }
    .nav-links a:hover, .nav-links a.active {
      background-color: rgba(255, 255, 255, 0.2); 
    }
    .nav-buttons {
      display: flex; 
      gap: 10px; 
      align-items: center; 
    }
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

    main { 
      flex: 1; 
      padding: 0;
      background-color: #ffffff; 
    }

    #home-logged-out, #home-logged-in, #other-sections {
        padding: 40px 20px;
    }

    .hero { 
      margin-bottom: 50px; 
      text-align: center; 
    }

    .hero img { 
      width: 130px; 
      height: auto; 
      margin-bottom: 20px; 
    }

    .hero h1 { 
      color: #2a2a2a; 
      margin-bottom: 15px; 
      font-size: 28px; 
    }

    .hero p { 
      font-size: 18px;
      color: #555; 
      max-width: 600px; 
      margin: 0 auto 30px auto; 
      line-height: 1.6; 
    }

    .features { 
      display: flex; 
      flex-wrap: wrap; 
      justify-content: center; 
      gap: 30px; 
      margin-top: 40px; 
    }

    .feature-card { 
      background-color: #eef5fc; 
      padding: 25px; 
      border-radius: 10px; 
      width: 280px; 
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08); 
      transition: transform 0.3s ease, box-shadow 0.3s ease; 
      border: 1px solid #dbe9f9; 
      text-align: center; 
    }

    .feature-card:hover { 
      transform: translateY(-5px); 
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.12); 
    }

    .feature-card h3 { 
      margin-bottom: 12px; 
      color: #005c99; 
      font-size: 18px; 
    }

    .feature-card p {
      color: #555; 
      font-size: 15px; 
      line-height: 1.5; 
    }

    #home-logged-in h2 { 
      text-align: center;
      margin-bottom: 25px; 
      color: #333; 
      font-size: 26px; 
    }
      
    .table-responsive-wrapper { 
      overflow-x: auto; 
      margin-bottom: 20px; 
      border: 1px solid #ddd; 
      border-radius: 8px; 
    }

    #patient-table { 
      width: 100%;
      border-collapse: collapse;
      min-width: 800px; 
    }
        
    #patient-table thead {
      background-color: #eef5fc; 
    }

    #patient-table th, #patient-table td { 
      border: 1px solid #ddd; 
      padding: 12px 15px;
      text-align: left;
      vertical-align: middle;
      font-size: 14px; 
    }

    #patient-table th { 
      font-weight: bold;
      color: #333; 
    }

    #patient-table tbody tr:nth-child(even) {
      background-color: #f9f9f9; 
    }

    #patient-table tbody tr:hover { 
      background-color: #f1f1f1; 
    }

    .action-buttons button { 
      padding: 5px 10px;
      margin-right: 5px;
      border: none; 
      border-radius: 5px; 
      cursor: pointer; 
      font-size: 12px; 
      font-weight: bold; 
      transition: opacity 0.3s ease; 
    }

    .action-buttons button:hover { 
      opacity: 0.8; 
    }

    .btn-riwayat { 
      background-color: #007bff; 
      color: white; 
    }

    .btn-reservasi { 
      background-color: #28a745; 
      color: white; 
    }

    .action-buttons button:last-child { 
      margin-right: 0; 
    }

    #tambahPasienBtn { 
      display: block; 
      margin: 20px auto 0 auto; 
      padding: 10px 25px; 
      background-color: #7da0c4; 
      color: white; 
      border: none; 
      border-radius: 25px; 
      font-size: 15px; 
      font-weight: bold; 
      cursor: pointer; 
      transition: background-color 0.3s ease; 
    }

    #tambahPasienBtn:hover { 
      background-color: #5a8ab8; 
    }

    /* Profil Dokter Styles */
    .profile-container {
      padding: 40px 20px;
      background-color: white;
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .profile-photo {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      border: 3px solid #7da0c4;
    }

    .profile-details {
      max-width: 600px;
      padding: 20px;
    }

    .profile-details h2 {
      margin-bottom: 15px;
      color: #2a2a2a;
      font-size: 24px;
    }

    .profile-details p {
      font-size: 16px;
      color: #555;
      margin-bottom: 12px;
      line-height: 1.6;
    }

    .profile-details strong {
      color: #005c99;
    }

    footer { 
      background-color: #333; 
      color: #e0e0e0; 
      text-align: center; 
      padding: 25px 15px; 
      font-size: 14px; 
      line-height: 1.6; 
    }

    footer p { 
      margin-bottom: 8px; 
    }
    footer p:last-child { 
      margin-bottom: 0; 
    }

    .modal { 
      display: none; 
      position: fixed; 
      z-index: 1000; 
      left: 0; 
      top: 0; 
      width: 100%; 
      height: 100%; 
      overflow: auto; 
      background-color: rgba(0, 0, 0, 0.5); 
      justify-content: center; 
      align-items: center; 
    }

    .modal-content {
      background: #7da0c4; 
      padding: 30px 35px; 
      border-radius: 15px; 
      max-width: 450px; 
      width: 90%; 
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); 
      position: relative; 
      animation: fadeInModal 0.3s ease-out; 
    }
    @keyframes fadeInModal { 
        from { opacity: 0; transform: translateY(-20px); } 
        to { opacity: 1; transform: translateY(0); } 
    }
    .modal h1 { 
      text-align: center; 
      margin-bottom: 25px; 
      color: white; 
      font-size: 24px; 
    }
    .modal label { 
      display: block; 
      margin-bottom: 8px; 
      font-weight: bold; 
      color: white; 
      font-size: 14px; 
    }

    .modal input[type="text"], 
    .modal input[type="date"], 
    .modal input[type="tel"], 
    .modal input[type="password"], 
    .modal input[type="email"], 
    .modal select, 
    .modal textarea { 
      width: 100%; 
      padding: 12px; 
      margin-bottom: 18px; 
      border: 1px solid #ccc; 
      border-radius: 8px; 
      font-size: 15px; 
      transition: border-color 0.3s ease; 
    }
    .modal input:focus, 
    .modal select:focus, 
    .modal textarea:focus { 
      border-color: #7da0c4; 
      outline: none; 
      box-shadow: 0 0 0 2px rgba(125, 160, 196, 0.3); 
    }
    .modal textarea { 
      resize: vertical; 
      min-height: 80px; 
    }
    .modal button[type="submit"] { 
      background-color: #28a745; 
      color: white; 
      padding: 12px 25px; 
      border: none; 
      border-radius: 25px; 
      cursor: pointer; 
      font-weight: bold; 
      font-size: 16px; 
      width: 100%; 
      margin-top: 10px; 
      transition: background-color 0.3s ease; 
    }
    .modal button[type="submit"]:hover { 
      background-color: #218838; 
    }
    .close { 
      position: absolute; 
      top: 15px; 
      right: 20px; 
      font-size: 28px; 
      color: #aaa; 
      cursor: pointer; 
      font-weight: bold; 
      line-height: 1; 
      transition: color 0.3s ease; 
    }
    .close:hover { 
      color: #333; 
    }

    @media (max-width: 768px) {
      nav { 
        flex-direction: column; 
        align-items: flex-start; 
        padding: 15px 20px; 
      }
      .nav-links { 
        flex-direction: column; 
        gap: 5px; 
        width: 100%; 
        margin-top: 10px; 
        margin-bottom: 15px; 
      }
      .nav-links a { 
        padding: 10px 15px; 
        width: 100%; 
        text-align: left; 
      }
      .nav-links a:hover { 
        background-color: rgba(255, 255, 255, 0.15); 
      }
      .nav-buttons { 
        width: 100%; 
        justify-content: flex-end; 
        margin-top: 10px; 
      }

      main section {
         padding: 20px 10px;
      }

      .hero h1 { 
        font-size: 24px; 
      }

      .hero p { 
        font-size: 16px; 
      }

      .features { 
        flex-direction: column; 
        align-items: center; 
        gap: 20px; 
      }

      .feature-card { 
        width: 90%; 
        max-width: 350px; 
      }

      #home-logged-in h2 { 
        font-size: 22px; 
      }

      #patient-table th, #patient-table td { 
        padding: 8px 10px; 
        font-size: 13px; 
      }

      #tambahPasienBtn { 
        font-size: 14px; 
        padding: 10px 20px; 
      }

      .modal-content { 
        padding: 25px 20px; 
      }
      
      .profile-container {
        padding: 30px 15px;
      }
      
      .profile-photo {
        width: 120px;
        height: 120px;
      }
    }

  </style>
</head>
<body>

  <nav>
    <div class="nav-links">
      <a id="berandaLink">Beranda</a> 
      <a id="jadwalLink">Jadwal Dokter</a>
      <a id="reservasiLink">Reservasi</a>
      <a id="riwayatLink">Riwayat Periksa</a>
      <a id="profilLink">Profil Dokter</a>
    </div>
    <div class="nav-buttons">
      <button class="btn-login" id="loginBtn">Login</button>
      <button class="btn-daftar" id="daftarBtn">Daftar Sekarang</button>
      <button class="btn-logout" id="logoutBtn" style="display: none;">Logout</button> 
    </div>
  </nav>

  <main id="main-content">

    <section id="home-logged-out">
        <div class="hero">
          <img src="FOTO/DR.Waris.jpg" alt="Ikon Stetoskop Dokter">
          <h1>Selamat Datang di Praktik Dokter Muh.Abd.Waris</h1>
          <p>Platform digital terintegrasi untuk memudahkan akses layanan kesehatan Anda kapan saja, di mana saja.</p>
        </div>
        <div class="features">
          <div class="feature-card">
            <h3>Jadwal Dokter Real-time</h3>
            <p>Lihat ketersediaan jadwal dokter secara langsung dan akurat.</p>
          </div>
          <div class="feature-card">
            <h3>Dokter Profesional</h3>
            <p>Dapatkan penanganan dari dokter yang berpengalaman dan terpercaya di bidangnya.</p>
          </div>
          <div class="feature-card">
            <h3>Riwayat Kesehatan Digital</h3>
            <p>Akses riwayat konsultasi dan resep obat Anda dengan mudah, aman, dan terstruktur.</p>
          </div>
        </div>
    </section>

    <section id="home-logged-in" style="display: none;"> 
      <h2>Daftar Data Pasien</h2>
      <p style="text-align:center; margin-bottom: 20px; color: #555;">Kelola data pasien Anda di sini.</p>
      <div class="table-responsive-wrapper">
          <table id="patient-table">
              <thead>
                  <tr>
                      <th>Nama Lengkap</th>
                      <th>Jenis Kelamin</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>No. Telepon</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody id="patient-list-body">
              </tbody>
          </table>
      </div>
      <button id="tambahPasienBtn">Tambah Pasien Baru</button>
    </section>

    <section id="jadwal-dokter-section" style="display: none;">
        <h2>Jadwal Dokter</h2>
        <p>Konten jadwal dokter akan ditampilkan di sini...</p>
    </section>
    
    <section id="reservasi-section" style="display: none;">
        <h2>Reservasi Kunjungan</h2>
        <p>Formulir atau informasi reservasi akan ditampilkan di sini...</p>
    </section>
    
    <section id="riwayat-section" style="display: none;">
        <h2>Riwayat Periksa</h2>
        <p>Riwayat pemeriksaan pasien akan ditampilkan di sini (membutuhkan login)...</p>
    </section>
    
    <section id="profil-section" style="display: none;">
      <div class="profile-container">
        <img src="FOTO/DR.Waris.jpg" alt="Foto Dokter" class="profile-photo">
        <div class="profile-details">
          <h2>Dr. Muh. Abd. Waris</h2>
          <p><strong>Spesialisasi:</strong> Dokter Umum</p>
          <p><strong>Pengalaman:</strong> Lebih dari 25 tahun praktik sebagai dokter umum</p>
          <p><strong>Pendidikan:</strong> Universitas Airlangga - Fakultas Kedokteran</p>
          <p><strong>Profil Singkat:</strong> Dokter Waris dikenal sebagai dokter yang ramah dan profesional, melayani pasien dengan pendekatan holistik serta pemahaman yang mendalam tentang keluhan yang dialami oleh pasien.</p>
        </div>
      </div>
    </section>

  </main>

  <div id="modalDaftar" class="modal" role="dialog" aria-modal="true" aria-labelledby="daftarModalTitle">
    <div class="modal-content">
      <span class="close" id="closeDaftarBtn">&times;</span>
      <h1 id="daftarModalTitle">Formulir Data Pasien</h1>
      <form id="form-data" method="POST">
         <label for="nama">Nama Lengkap:</label>
        <input id="nama" type="text" name="nama" required placeholder="Masukkan nama lengkap Anda">
        <label for="kelamin">Jenis Kelamin:</label>
        <select name="kelamin" id="kelamin" required>
          <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
        <label for="tanggalLahir">Tanggal Lahir:</label>
        <input type="date" id="tanggalLahir" name="tanggalLahir" required max="2025-04-21">
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="3" required placeholder="Masukkan alamat lengkap"></textarea>
        <label for="telepon">Nomor Telepon/HP Aktif:</label>
        <input type="tel" id="telepon" name="telepon" required placeholder="Contoh: 081234567890" pattern="[0-9]{10,15}">
        <label for="password">Password Akun:</label> 
        <input type="password" id="password" name="password" required minlength="8" placeholder="Minimal 8 karakter (untuk login)">
        <button type="submit">Simpan Data</button>
      </form>
    </div>
  </div>

  <div id="modalLogin" class="modal" role="dialog" aria-modal="true" aria-labelledby="loginModalTitle">
    <div class="modal-content">
      <span class="close" id="closeLoginBtn">&times;</span>
      <h1 id="loginModalTitle">LOGIN AKUN</h1>
      <form id="form-login" method="POST">
        <label for="login-identifier">Email atau No. Telepon:</label>
        <input type="text" id="login-identifier" name="login-identifier" required placeholder="Masukkan email atau nomor telepon">
        <label for="login-password">Password:</label>
        <input type="password" id="login-password" name="login-password" required placeholder="Masukkan password Anda">
        <button type="submit">Masuk</button>
      </form>
    </div>
  </div>

  <footer>
    <p>&copy; <span id="currentYear"></span> Praktik Dokter Muh.Abd.Waris. All rights reserved.</p>
    <p>Alamat: Jl. Bromo center No.2, Krajan II, Kalisat, Kec. Kalisat, Kabupaten Jember, Jawa Timur 68193</p>
    <p>Telepon: (0331) 7845872</p>
  </footer>

  <script>
    let isLoggedIn = false;
    let patients = [
        { id: 1678886401000, nama: 'Budi Santoso', kelamin: 'Laki-laki', tanggalLahir: '1995-03-15', alamat: 'Jl. Merdeka No. 10, Surabaya', telepon: '081234560011', password: 'password123' },
        { id: 1678886402000, nama: 'Citra Lestari', kelamin: 'Perempuan', tanggalLahir: '1988-11-20', alamat: 'Jl. Pahlawan No. 5, Surabaya', telepon: '087654321122', password: 'password456' }
    ];

    const mainContent = document.getElementById('main-content');
    const homeLoggedOutView = document.getElementById('home-logged-out');
    const homeLoggedInView = document.getElementById('home-logged-in');
    const jadwalSection = document.getElementById('jadwal-dokter-section');
    const reservasiSection = document.getElementById('reservasi-section');
    const riwayatSection = document.getElementById('riwayat-section');
    const profilSection = document.getElementById('profil-section');

    const loginBtn = document.getElementById('loginBtn');
    const daftarBtn = document.getElementById('daftarBtn');
    const logoutBtn = document.getElementById('logoutBtn');

    const modalDaftar = document.getElementById("modalDaftar");
    const modalLogin = document.getElementById("modalLogin");
    const closeDaftarBtn = document.getElementById("closeDaftarBtn");
    const closeLoginBtn = document.getElementById("closeLoginBtn");
    const formDaftar = document.getElementById('form-data');
    const formLogin = document.getElementById('form-login');
    const tambahPasienBtn = document.getElementById('tambahPasienBtn');
    const patientListBody = document.getElementById('patient-list-body');

    const berandaLink = document.getElementById('berandaLink');
    const jadwalLink = document.getElementById('jadwalLink');
    const reservasiLink = document.getElementById('reservasiLink');
    const riwayatLink = document.getElementById('riwayatLink');
    const profilLink = document.getElementById('profilLink');

    function openModal(modalElement) { if (modalElement) modalElement.style.display = "flex"; }
    function closeModal(modalElement) { if (modalElement) modalElement.style.display = "none"; }

    function renderPatientList() {
        patientListBody.innerHTML = '';
        if (!isLoggedIn) {
             patientListBody.innerHTML = '<tr><td colspan="6" style="text-align: center; padding: 20px;">Silakan login untuk melihat data pasien.</td></tr>';
            return;
        }
         if (patients.length === 0) {
             patientListBody.innerHTML = '<tr><td colspan="6" style="text-align: center; padding: 20px;">Belum ada data pasien.</td></tr>';
             return;
        }
        patients.forEach(patient => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${patient.nama}</td>
                <td>${patient.kelamin}</td>
                <td>${patient.tanggalLahir}</td>
                <td>${patient.alamat}</td>
                <td>${patient.telepon}</td>
                <td class="action-buttons">
                    <button class="btn-riwayat" data-patient-id="${patient.id}">Riwayat</button>
                    <button class="btn-reservasi" data-patient-id="${patient.id}">Reservasi</button>
                </td>
            `;
            patientListBody.appendChild(row);
        });
    }

    function hideAllSections() {
        homeLoggedOutView.style.display = 'none';
        homeLoggedInView.style.display = 'none';
        jadwalSection.style.display = 'none';
        reservasiSection.style.display = 'none';
        riwayatSection.style.display = 'none';
        profilSection.style.display = 'none';
    }

    function updateView(activeSectionId = null) {
        hideAllSections(); 
        if (activeSectionId) {
             const sectionToShow = document.getElementById(activeSectionId);
             if(sectionToShow) sectionToShow.style.display = 'block';
        } else {
            if (isLoggedIn) {
                homeLoggedInView.style.display = 'block';
                renderPatientList();
            } else {
                homeLoggedOutView.style.display = 'block';
            }
        }

        if (isLoggedIn) {
            loginBtn.style.display = 'none';
            daftarBtn.style.display = 'none'; 
            logoutBtn.style.display = 'inline-block';
        } else {
            loginBtn.style.display = 'inline-block';
            daftarBtn.style.display = 'inline-block';
            logoutBtn.style.display = 'none';
        }
    }

    berandaLink.addEventListener('click', (e) => {
        e.preventDefault();
        updateView();
    });
    
    jadwalLink.addEventListener('click', (e) => {
        e.preventDefault();
        updateView('jadwal-dokter-section');
    });
    
    reservasiLink.addEventListener('click', (e) => {
        e.preventDefault();
        updateView('reservasi-section');
    });
    
    riwayatLink.addEventListener('click', (e) => {
        e.preventDefault();
         if (!isLoggedIn) {
             alert("Silakan login untuk melihat riwayat periksa.");
             openModal(modalLogin);
             return;
         }
        updateView('riwayat-section');
    });
    
    profilLink.addEventListener('click', (e) => {
        e.preventDefault();
        updateView('profil-section');
    });

    loginBtn.addEventListener('click', () => openModal(modalLogin));
    closeLoginBtn.addEventListener('click', () => closeModal(modalLogin));
    formLogin.addEventListener('submit', (event) => {
        event.preventDefault();
        console.log('Login attempt...');
        isLoggedIn = true;
        alert('Login Berhasil!');
        updateView(); 
        closeModal(modalLogin);
    });

    logoutBtn.addEventListener('click', () => {
        isLoggedIn = false;
        alert('Logout Berhasil!');
        patients = [];
        updateView(); 
    });

    daftarBtn.addEventListener('click', () => {
        formDaftar.reset();
        openModal(modalDaftar);
    });

    tambahPasienBtn.addEventListener('click', () => {
        if (!isLoggedIn) return; 
        formDaftar.reset();
        openModal(modalDaftar);
    });

    closeDaftarBtn.addEventListener('click', () => closeModal(modalDaftar));

    formDaftar.addEventListener('submit', (event) => {
        event.preventDefault();
        const newPatient = {
            id: Date.now(),
            nama: document.getElementById('nama').value,
            kelamin: document.getElementById('kelamin').value,
            tanggalLahir: document.getElementById('tanggalLahir').value,
            alamat: document.getElementById('alamat').value,
            telepon: document.getElementById('telepon').value,
            password: document.getElementById('password').value
        };

        if(isLoggedIn) {
             patients.push(newPatient);
             renderPatientList(); 
             alert('Data pasien baru berhasil ditambahkan!');
        } else {
            console.log("Data pendaftaran diterima (simulasi):", newPatient);
            alert('Pendaftaran berhasil! Silakan login untuk melanjutkan.');
        }

        console.log('Data Form Disimpan (simulasi):', newPatient);
        formDaftar.reset();
        closeModal(modalDaftar);
    });

    patientListBody.addEventListener('click', (event) => {
        const target = event.target;
        if (!isLoggedIn) return;

        if (target.classList.contains('btn-riwayat')) {
            const patientId = target.getAttribute('data-patient-id');
            const patient = patients.find(p => p.id == patientId);
            console.log(`Klik Riwayat untuk pasien ID: ${patientId}, Nama: ${patient?.nama}`);
            alert(`Riwayat untuk ${patient?.nama} (ID: ${patientId}) - Fitur belum ada.`);
        }
        if (target.classList.contains('btn-reservasi')) {
            const patientId = target.getAttribute('data-patient-id');
             const patient = patients.find(p => p.id == patientId);
            console.log(`Klik Reservasi untuk pasien ID: ${patientId}, Nama: ${patient?.nama}`);
            alert(`Reservasi untuk ${patient?.nama} (ID: ${patientId}) - Fitur belum ada.`);
        }
    });

    window.addEventListener('click', (event) => {
      if (event.target === modalDaftar) closeModal(modalDaftar);
      if (event.target === modalLogin) closeModal(modalLogin);
    });

    window.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            if (modalDaftar.style.display === 'flex') closeModal(modalDaftar);
            if (modalLogin.style.display === 'flex') closeModal(modalLogin);
        }
    });

    document.getElementById('currentYear').textContent = new Date().getFullYear();

    updateView();

  </script>

</body>
</html>