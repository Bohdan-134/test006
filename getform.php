<?php
$data = [
	"flow" => 17118,
	"country" => "hu",
	"offer" => 5066,
	"ip" => $_SERVER["HTTP_CF_CONNECTING_IP"] ? $_SERVER["HTTP_CF_CONNECTING_IP"] : ( $_SERVER["HTTP_X_FORWARDED_FOR"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"] ),
	"name" => isset( $_POST["name"] ) ? $_POST["name"] : "",
	"phone" => isset( $_POST["phone"] ) ? $_POST["phone"] : "",
	"comm" => isset( $_POST["comment"] ) ? $_POST["comment"] : "",
	"email" => isset( $_POST["email"] ) ? $_POST["email"] : "",
	"ua" => $_SERVER["HTTP_USER_AGENT"],
    "us" => isset( $_POST["utm_source"] ) ? $_POST["utm_source"] : "",
	"uc" => isset( $_POST['utm_campaign'] ) ? $_POST['utm_campaign'] : "",
	"un" => isset( $_SERVER["HTTP_HOST"] ) ? $_SERVER["HTTP_HOST"] : "",
	"ut" => isset( $_POST["name"] ) ? $_POST["name"] : "",
	"um" => isset( $_POST["phone"] ) ? $_POST["phone"] : "",
];
$curl = curl_init( "https://cpaua.space/api/wm/push.json?id=37-28b7e9c31de22146afa4f57fccb9ac3f" );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $curl, CURLOPT_TIMEOUT, 30 );
curl_setopt( $curl, CURLOPT_POST, 1 );
curl_setopt( $curl, CURLOPT_POSTFIELDS, $data );
$result = json_decode( curl_exec( $curl ), true );
curl_close( $curl );
if ( $result["id"] ) {
	$name = $_POST['name'];
    $phone = $_POST['phone'];
	header( "Location: ok.php?id={$result['id']}&name=$name&phone=$phone");
} else header( "Location: /?error=" . $result["error"] );
die();
?>