<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ahmad Fatchul Huda</title>
    <style type="text/css">
    * {
      font-family: "Trebuchet MS";
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      background-color: lightgrey;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
      margin: 0;
    }
    h1 {
      text-transform: uppercase;
      color: #3498db;
    }
    button {
      background-color: blue;
      color: darkblue;
      padding: 10px;
      text-decoration: none;
      font-size: 12px;
      border: 0px;
      margin-top: 20px;
      cursor: pointer;
      width: 100px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
      color: #333;
    }
    input, select, textarea {
      padding: 10px;
      width: 100%;
      box-sizing: border-box;
      background: #fff;
      border: 2px solid #3498db;
      outline-color: #3498db;
      margin-bottom: 10px;
    }
    div {
      width: 100%;
      height: auto;
      background: repeating-radial-gradient(circle, #f5f5f5, #f5f5f5 5px, #fff 5px, #fff 10px);
      padding: 20px;
      margin-top: 20px;
      border-radius: 10px;
    }
    .base {
      width: 500px;
      height: auto;
      padding: 40px;
      background: #ecf0f1;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
  </head>
  <body>
      <center>
        <h1>Tambah Pegawai</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama</label>
          <input type="text" name="nama" autofocus="" required="" />
        </div>
        <div>
          <label>Nim</label>
         <input type="text" name="nim" required="" />
        </div>
        <div>
        <label for="jeniskelamin">Jenis Kelamin</label>
    <select id="jeniskelamin" name="jeniskelamin" required="" />
      <option value="Laki-Laki">Pria</option>
      <option value="Perempuan">Wanita</option>
    </select>
  </div>
  <div>
        <label for="alamat">Alamat:</label>
    <textarea id="alamat" name="alamat" rows="4" required></textarea>
  </div>
        <div>
          <label>Jurusan</label>
         <input type="text" name="jurusan" required="" />
        </div>
        <div>
          <label>Fakultas</label>
         <input type="text" name="fakultas" required="" />
        </div>
        <div>
          <label>Email</label>
         <input type="text" name="email" required="" />
        </div>
        <div>
          <label for="posisi">Posisi</label>
    <select id="posisi" name="posisi" required="" />
      <option value="Unit_SDM">Unit_SDM</option>
      <option value="Unit_KOMINFO">Unit_Kominfo</option>
      <option value="Unit_Usaha">Unit_Usaha</option>
      <option value="Unit_Pengembangan">Unit_Pengembangan</option>
    </select>
        </div>
        <div>
          <label>Gambar</label>
         <input type="file" name="gambar" required="" />
        </div>
        <div>
         <button type="submit">Simpan</button>
         <button type="submit"><a style="text-decoration: none" href="halaman_admin.php">
          Kembali</a></button>
        </div>
        </section>
      </form>
  </body>
</html>