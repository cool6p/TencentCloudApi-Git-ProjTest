<?php
$appid = "";
$bucket = "";
$secret_id = "";
$secret_key = "";
$expired = time() + 3600;
$onceExpired = 0;
$current = time();
$rdm = rand();
$fileid ="/$appid/$bucket/$文件名";
$multi_effect_signature = 'a='.$appid.'&b='.$bucket.'&k='.$secret_id.'&e='.$expired.'&t='.$current.'&r='.$rdm.'&f=';
$once_signature='a='.$appid.'&b='.$bucket.'&k='.$secret_id.'&e='.$onceExpired.'&t='.$current.'&r='.$rdm.'&f='.$fileid;
$multi_effect_signature = base64_encode(hash_hmac('SHA1', $multi_effect_signature, $secret_key, true).$multi_effect_signature); $once_signature = base64_encode(hash_hmac('SHA1',$once_signature,$secret_key, true).$once_signature); echo $multi_effect_signature."\n"; echo $once_signature."\n";
echo $multi_effect_signature;
?>