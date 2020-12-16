<?php
$id_provinsi_terpilih = $_POST['id_provinsi'];
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=" . $id_provinsi_terpilih,
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
    $datakota = $array_response["rajaongkir"]["results"];

    echo "<option value=''>Pilih Kabupaten/Kota</option>";

    foreach ($datakota as $key => $tiapkota) {
        echo "<option value=''
        id_kab='" . $tiapkota['city_id'] . "'
        nama_provinsi='" . $tiapkota['province'] . "'
        nama_kota='" . $tiapkota['city_name'] . "'
        tipe='" . $tiapkota['type'] . "'
        kodepos='" . $tiapkota['postal_code'] . "'
        >";
        echo $tiapkota['type'] . " ";
        echo $tiapkota['city_name'];
        echo "</option>";
    }
}
