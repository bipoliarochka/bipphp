<?php
$key = "mysecretkey12345"; // 16, 24 или 32 символа
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));

function encryptData($data, $key, $iv) {
    return openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
}

function decryptData($encryptedData, $key, $iv) {
    return openssl_decrypt($encryptedData, 'aes-256-cbc', $key, 0, $iv);
}

$data = "Это секретные данные!";
echo "Оригинальные данные: $data\n";

$encrypted = encryptData($data, $key, $iv);
echo "Зашифрованные данные: $encrypted\n";

$decrypted = decryptData($encrypted, $key, $iv);
echo "Расшифрованные данные: $decrypted\n";
?>
