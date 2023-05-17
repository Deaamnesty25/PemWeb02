<?php 
 require_once '../../database/dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['nama'];
   $_ukuran = $_POST['ukuran'];
   $_warna = $_POST['warna'];
   $_stok = $_POST['stok'];
   $_harga = $_POST['harga'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_ukuran;
   $ar_data[]=$_warna;
   $ar_data[]=$_stok;
   $ar_data[]=$_harga;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pakaian (nama,ukuran,warna,stok,harga) VALUES (?,?,?,?,?)";
   }else if($_proses == "Update"){
      // update data 
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pakaian SET nama=?,ukuran=?,warna=?,stok=?,harga=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: index.php');
?>