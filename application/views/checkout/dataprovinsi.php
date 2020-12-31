<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
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
    $dataprovinsi = $array_response["rajaongkir"]["results"];

    echo "<option value=''>Pilih Provinsi</option>";

    foreach ($dataprovinsi as $key => $tiapprovinsi) {
        echo "<option value='" . $tiapprovinsi['province_id'] . "'  id_provinsi='" . $tiapprovinsi['province_id'] . "'>";
        echo $tiapprovinsi['province'];
        echo "</option>";
    }
}
