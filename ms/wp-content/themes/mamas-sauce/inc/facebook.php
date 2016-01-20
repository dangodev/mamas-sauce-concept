<?php

// *************************************
//
//   Facebook
//   -> curl script for retrieiving FB comment count
//
// *************************************

function fb_comment_count($url) {
  $fql = "SELECT comment_count FROM link_stat WHERE url = '" . $url . "'";
  $ch = curl_init('https://api.facebook.com/method/fql.query?format=json&query=' . urlencode($fql));
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 8);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $result = json_decode(curl_exec($ch));
  curl_close($ch);
  $count = $result[0]->comment_count;
  return (empty($count)) ? '0' : $count;
}

?>