<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 01</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    body{
    background-image: url(https://images.unsplash.com/photo-1531415074968-036ba1b575da?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=472642856008b6ddb3e596e45ca4263d&auto=format&fit=crop&w=1494&q=80);   
    background-size:1500px 800px;
}

table{
    border:1px solid black;
    border-collapse:collapse ;
	padding:0px;
}

th{
    padding:10px;
    border:1px solid black;
	
}

td{
    padding:10px;
     border:1px solid black;
	text-align:left;
}

tr:nth-child(even)
{
      background-color:blue;
}

tr:nth-child(odd)
{
      background-color:#eee;
}
</style>
</head>
<body>
<?php

$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
?>

<h3 class="text-warning  ">Daftar Nilai Siswa</h3>
<table border="1" width="100%">
<thead>
    <tr class="text-danger">
        <th>No</th><th>NIM</th><th>UTS</th>
        <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
    </tr>
</thead>
<tbody>
    <?php
        $nomor = 1;
        foreach($ar_nilai as $ns){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$ns['nim'].'</td>';
            echo '<td>'.$ns['uts'].'</td>';
            echo '<td>'.$ns['uas'].'</td>';
            echo '<td>'.$ns['tugas'].'</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
            $nomor++;
    }
    ?>
</tbody>
</table>
</body>
</html>
