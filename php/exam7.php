<?php

// 把一个含有多条url的文件中的url按公司名分别单独写成文件。
/*
`cat /tmp/urls.txt`
  http://stackoverflow.com/questions/13246597/how-to-read-a-file-line-by-line-in-php
  https://mail.google.com/mail/u/1/#inbox
  https://my.oschina.net/u/943306/blog/131269
  http://www.cnblogs.com/ghj1976/archive/2013/02/28/2936595.html
  http://www.bysocket.com/?p=1732
  http://www.bysocket.com/?p=173

 */


$filename = "/tmp/urls.txt";
$fd = fopen($filename, 'r');

$map = array();
if ($fd) {
    while (($line = fgets($fd) ) !== false) {
        $line = trim(preg_replace('/\s+/', '', $line));
        $arr = parse_url($line);
        $host = $arr['host'];
        $tmpArr = explode('.', $host);
        if (count($tmpArr) < 2) {
            continue;
        }
        $company = $tmpArr[count($tmpArr) - 2];
        if (isset($map[$company])) {
            $map[$company][] = $line;
        } else {
            $map[$company] = array($line);
        }
    }
    fclose($fd);
    foreach($map as $k => $v) {
        $filename = '/tmp/' . $k . '.txt';
        $fd = fopen($filename, 'w');
        fwrite($fd, implode("\n", $v));
        fclose($fd);
    }
} else {
    echo('error when open file ' . $filename);
}