<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESERVASI</title>
  <style> 

     .booking-container {
        max-width: 600px;
        margin: 50px auto;
        text-align: center;
     }

     .booking-container h2 {
      color: #052659;
      margin-bottom: 20px;
     }

     .time-slots {
     display: flex;
     flex-wrap: wrap;
     justify-content: center;
     gap: 15px;
     }

     .time-btn {
     background-color: #e4efff;
     border: 2px solid #7da0c4;
     color: #052659;
     padding: 12px 20px;
     border-radius: 10px;
     font-size: 16px;
     cursor: pointer;
     transition: all 0.3s ease;
     min-width: 100px;
     }

     .time-btn:hover {
     background-color: #cde2ff;
     }

     .time-btn.selected {
      background-color: #052659;
      color: white;
      border-color: #052659;
     }

     .box-behind{
      background-color: #052659;
      padding: 20px;
      border-radius: 10px;
      box-shadow:black;
     }
     </style>
     </head>
     <body>

     <div class="booking-container">
  <h2>Pilih Jam Reservasi</h2>

  <div class= "box-behind">
  <div class="time-slots">
    <button class="time-btn">08:00</button>
    <button class="time-btn">09:00</button>
    <button class="time-btn">10:00</button>
    <button class="time-btn">11:00</button>
    <!-- Tambah sesuai kebutuhan -->
  </div>
  </div>
</div>
     </body>


