<?php 

// $mahasiswa = [
//     [
//         "nama" => "Muhammad Syahril Aprialsyah",
//         "nrp" => "2217020056",
//         "email" => "gearfour020@gmail.com"
//     ],
//     [
//         "nama" => "Muhammad Raja Faiz",
//         "nim" => "2217020165",
//         "email" => "muhammadrajafaiz25@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=projek_iap', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>