<?php 
 require_once '../../database/dbkoneksi.php';
?>
<?php 
   $_tanggal = $_POST['tanggal'];
   $_quantity = $_POST['quantity'];
   
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_tanggal; // ? 2
   $ar_data[]=$_quantity;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (tanggal,quantity) VALUES (?,?)";
   }else if($_proses == "Update"){
      // update data 
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pesanan SET tanggal=?,quantity=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: index.php');
?>