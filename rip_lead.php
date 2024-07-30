<?php
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL            => "https://cpa.ruki-iz-plech.ru/api/leads/create",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING       => "",
    CURLOPT_MAXREDIRS      => 10,
    CURLOPT_TIMEOUT        => 30,
    CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST  => "POST",
    CURLOPT_POSTFIELDS     => json_encode([
        "phone"   => "74991106316", // номер клиента, обязательно
        "message" => "Комментарий", // комментарий, не обязательно
    ], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES),
    CURLOPT_HTTPHEADER     => [
        "auth: dba5f410b6d118e29d57400b95fd5710e93ba3e8ac2fcde2d1db661b732d98fe3cac19df3d1b5156", // токен со страницы Настройки, обязательно
        "content-type: application/json",
    ],
]);
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}


