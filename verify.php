<?php
$access_token = 'j39Fje4bllT+dKIJRWnZiTpeAjDc7HE6k1DvrgPJBH8a+6KPy1sqC0Vw9EmBV49nZXGqm9xyP7hPBuj0yqDFTKraecBy4tULF/zrfgd9uWL4X5BV+qVo+U0hDAiwa+JanrAIZG+Dimi9SH1ifmB4OAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>