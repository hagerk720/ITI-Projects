<?php
require_once('home.php');

$xmlDoc = simplexml_load_file("data.xml");
$index = $_SESSION["index"] ?? 0;

if(isset($_POST["next"])&& $index < count($xmlDoc->user)-1){
    $_SESSION["index"] ++;
};

if(isset($_POST["prev"])&& $index >= 0){
    $_SESSION["index"] --;
};
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    if(isset($_POST['delete'])){
        $user = $xmlDoc->xpath("//user[id='$id']")[0];
        unset($user[0]);
        $xmlDoc->asXML('data.xml');
        $_SESSION["index"] = 0 ;
    }
    else if(isset($_POST['update'])){
        $user = $xmlDoc->xpath("//user[id='$id']")[0];
        $user->name = $name;
        $user->phone = $phone;
        $user->address = $address;
        $user->email = $email;
        $xmlDoc->asXML('data.xml');
        $_SESSION["index"] = 0 ;
    }
    else if(isset($_POST['insert'])){
        $user = $xmlDoc->addChild('user');
        $user->addChild('id', uniqid());
        $user->addChild('name', $name);
        $user->addChild('phone', $phone);
        $user->addChild('address', $address);
        $user->addChild('email', $email);
        $dom = new DomDocument();
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($xmlDoc->asXML());
		$dom->save('data.xml');
    }
    }
?>