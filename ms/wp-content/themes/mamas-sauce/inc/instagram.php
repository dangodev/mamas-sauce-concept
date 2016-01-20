<?php

// *************************************
//
//   Instagram
//   -> Retrieval of “What’s on Press” images by hashtag
//
// *************************************

// -------------------------------------
//   Settings
// -------------------------------------

// ----- What to Search ----- //

$hashtag = 'whatsonpress'; // no “#”
$user_id = '10607377'; // Mama’s Insta ID

// ----- API Keys ----- //

$client_id = '17314a670b6a4dd882e88df66babb1e0';
$client_secret = '14e852090a154bf0b24b4a28c9e1b79c';

// -------------------------------------
//   Init
// -------------------------------------

function get_wop() {
  $ch = curl_init('https://api.instagram.com/v1/users/' . $user_id . '/media/recent/?client_id=' . $client_id);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 8);
  $result = json_decode(curl_exec($ch));
  return $result;
}

?>