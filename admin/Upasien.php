<?php
 //Disini akan digunakan kode PHP untuk memproses data
 //Ambil koneksi ke basisdata, karena data ini akan disimpan didalam
 require_once "../config/koneksi.php";
 //cek form yang di kirim
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
 //ambil data dari form, simpan dalam variabel
 $idpsn=$_POST['idpsn']; //yg didalam tanda kutip harus sama dengan name di form
 $kd=$_POST['kd'];
 $nmpsn=$_POST['nmpsn'];
 $umr=$_POST['umr'];
 $almt=$_POST['almt'];
 $join=$_POST['join'];

 //buat SQL untuk simpan data
 $updatepasien="UPDATE krt_pasien SET kode='$kd', nama='$nmpsn', usia='$umr', alamat='$almt', tglgabung='$join' WHERE id='$idpsn'";

 //Proses ke mysql server, menggunakan mysqli_query()
 if(mysqli_query($koneksi,$updatepasien))
 {
 //redirect ke halaman tampildata.php jika proses simpan berhasil
 echo "<script> alert('Data sudah diupdate'); 
 window.location.assign('index.php?page=pasien'); 
  </script>";
 } 
 }
 //Sampai disini program sudah siap, kita coba jalankan.
 //Ok. program untuk tambah data (save) sudah selesai.
 //ketika input jgn menggunakan nim yg sama karena nim adalah primary key, jika ingin kontrol dari sistem jg bisa...kita bahas pertemuan berikutnya.