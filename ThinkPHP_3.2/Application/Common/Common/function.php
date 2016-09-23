<?php
function merge_password_salt($password, $salt) {
    if (empty($salt)) {
        return $password;
    }

    return $password.'{'.$salt.'}';
}

function demerge_password_salt($merged_string) {
    if (empty($merged_string)) {
        return array('', '');
    }

    $password = $merged_string;
    $salt = '';
    $saltBegins = strrpos($merged_string, '{');

    if (false !== $saltBegins && $saltBegins + 1 < strlen($merged_string)) {
        $salt = substr($merged_string, $saltBegins + 1, -1);
        $password = substr($merged_string, 0, $saltBegins);
    }

    return array($password, $salt);
}

/**
 * 生成密码
 * @param unknown $raw
 * @param unknown $salt
 * @param string $algorithm
 * @return string
 */
function encode_password($raw, $salt, $algorithm = 'sha256') {
    $salted = merge_password_salt($raw, $salt);
    $digest = hash($algorithm, $salted, true);

    // "stretch" hash
    for ($i = 1; $i < 5000; $i++) {
        $digest = hash($algorithm, $digest.$salted, true);
    }

    return base64_encode($digest);
}