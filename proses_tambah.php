<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $nama          = $_POST['nama'];
  $nim           = $_POST['nim'];
  $jeniskelamin  = $_POST['jeniskelamin'];
  $alamat        = $_POST['alamat'];
  $jurusan       = $_POST['jurusan'];
  $fakultas      = $_POST['fakultas'];
  $email         = $_POST['email'];
  $posisi        = $_POST['posisi'];
  $gambar        = $_FILES['gambar']['name'];


//cek dulu jika ada gambar produk jalankan coding ini
if($gambar != "") {
  $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO pegawai (nama, nim, jeniskelamin, alamat, jurusan, fakultas, email, posisi, gambar) VALUES ('$nama', '$nim', '$jeniskelamin', '$alamat', '$jurusan', '$fakultas', '$email',     
                  '$posisi', '$nama_gambar_baru')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='halaman_admin.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah.php';</script>";
            }
} else {
   $query = "INSERT INTO pegawai (nama, nim, jeniskelamin, alamat, jurusan, fakultas, email, posisi, gambar) VALUES ('$nama', '$nim', '$jeniskelamin', '$alamat', '$jurusan', '$fakultas', '$email',     
                  '$posisi', null)";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='halaman_admin.php';</script>";
                  }
}

 
