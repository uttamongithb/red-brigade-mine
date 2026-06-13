<?php
function downloadImage($url, $savePath) {
    $ch = curl_init($url);
    $fp = fopen($savePath, 'wb');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');
    curl_exec($ch);
    curl_close($ch);
    fclose($fp);
}

downloadImage('https://upload.wikimedia.org/wikipedia/commons/3/36/AIR_PRODUCTS_LOGO.png', 'public/uploads/img/partners/01_new.png');
downloadImage('https://shriramcharitabletrust.org/images/logo.png', 'public/uploads/img/partners/02_new.png');
downloadImage('https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Rotary_Logo.svg/1200px-Rotary_Logo.svg.png', 'public/uploads/img/partners/03_new.png');
downloadImage('https://upload.wikimedia.org/wikipedia/en/e/ed/Azim_Premji_University_logo.png', 'public/uploads/img/partners/04_new.png');
echo "Downloaded successfully.\n";
?>