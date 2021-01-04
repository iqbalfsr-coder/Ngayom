<?php

$kurir = $_POST['kurir'];
$kab = $_POST['kabupaten'];
$berat = $_POST['berat'];
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "origin=456&destination=" . $kab . "&weight=" . $berat . "&courier=" . $kurir,
    CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded",
        "key: de59ce0bcc8f64ddc28d9ce4acea0eea"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $array_response = json_decode($response, TRUE);
    $datapaket = $array_response["rajaongkir"]["results"]['0']['costs'];

    echo "<option value=''>Pilih Paket</option>";

    foreach ($datapaket as $key => $tiapaket) {
        echo "<option
        paket='" . $tiapaket['service'] . "'
        ongkir='" . $tiapaket['cost']['0']['value'] . "'
        etd='" . $tiapaket['cost']['0']['etd'] . "'
        >";
        echo $tiapaket['service'] . " ";
        echo "Rp." . number_format($tiapaket['cost']['0']['value']) . " ";
        echo $tiapaket['cost']['0']['etd'] . " Hari";
        echo "</option>";
    }
}
