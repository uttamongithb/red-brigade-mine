<?php
function http($url, $post=null, &$cookieFile=null) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_HEADER, true);
    if ($cookieFile) curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieFile);
    if ($cookieFile) curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile);
    if ($post !== null) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    $res = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);
    return [$res, $info];
}
$base = 'http://127.0.0.1:8000';
$cookie = sys_get_temp_dir() . '/rb_cookies.txt';
list($body, $info) = http($base.'/login', null, $cookie);
if (!$body) { echo "No response from server\n"; exit(1); }
// extract CSRF token from body (name="_token" value="...")
if (preg_match("/name=\\\"_token\\\"\s*value=\\\"([^\\\"]+)\\\"/", $body, $m)) {
    $token = $m[1];
    echo "Got token: $token\n";
} elseif (preg_match("/name=\\\'_token\\\'\s*value=\\\'([^\\']+)\\\'/", $body, $m2)) {
    $token = $m2[1];
    echo "Got token (alt): $token\n";
} else {
    echo "No CSRF token found\n";
    exit(1);
}
$post = http_build_query(['_token'=>$token,'email'=>'admin@local.test','password'=>'Admin@1234']);
list($resp, $info2) = http($base.'/login', $post, $cookie);
echo "POST HTTP code: " . $info2['http_code'] ."\n";
// show redirect location header if any
if (preg_match('/Location:\s*(.*)\\r\\n/i', $resp, $h)) {
    echo "Redirect to: " . trim($h[1]) . "\n";
}
// show brief response body snippet
echo "Body snippet: \n" . substr(strip_tags($resp),0,500) . "\n";
// check if authenticated by requesting dashboard
list($dashBody,$dashInfo) = http($base.'/main-admin/dashboard', null, $cookie);
echo "Dashboard HTTP code: " . $dashInfo['http_code'] . "\n";
echo "Dashboard snippet: \n" . substr(strip_tags($dashBody),0,500) . "\n";
?>