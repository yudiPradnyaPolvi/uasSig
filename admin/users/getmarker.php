<?php
header('Content-Type: application/json');
 
require_once("../../koneksi.php");
 
$sql = "SELECT * FROM wifi";
$data=$mysqli->query($sql) or die ("query gagal dijalankan: ".$mysqli->error);
 
$json   = array();
 
if (!empty($data)) {
    $json = '{"data": {';
    $json .= '"marker":[ ';
	while($x = $data->fetch_object()){
        $json .= '{';
        $json .= '"id":"'.$x->id.'",
                 "nama":"'.htmlspecialchars_decode($x->nama).'",
                 "alamat":"'.htmlspecialchars_decode($x->alamat).'",
                 "deskripsi":"'.$x->deskripsi.'",
                 "tipe":"'.$x->tipe.'",
                 "latitude":"'.$x->lat.'",
                 "longitude":"'.$x->lng.'",
				 
                 },';
    }
    $json = substr($json,0,strlen($json)-1);
    $json .= ']';
    $json .= '}}';
    
    echo $json;
}