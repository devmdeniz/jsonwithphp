<?php
if(isset($_GET["role2"])) {
    $role2 = 1;    
} else {
    $role2 = 0;
}
if(isset($_GET["role1"])) {
    $role1 = 1;    
} else {
    $role1 = 0;
}

$fan4 = $_GET["fan4"];
$fan3 = $_GET["fan3"];
$fan2 = $_GET["fan2"];
$fan1 = $_GET["fan1"];


$fanhizlari = file_get_contents('../fanspeeds.json');
$rolebilgisi = file_get_contents('../write.json');
$fandatasi = json_decode($fanhizlari, true);
$roledatasi = json_decode($rolebilgisi, true);
$fandatasi["fan1"] = $fan1;
$fandatasi["fan2"] = $fan2;
$fandatasi["fan3"] = $fan3;
$fandatasi["fan4"] = $fan4;
$roledatasi["role1"] = $role1;
$roledatasi["role2"] = $role2;
// $data["fan1"] = 300;
$yenifanbilgisi = json_encode($fandatasi);
$yenirolebilgisi = json_encode($roledatasi);
file_put_contents('../fanspeeds.json', $yenifanbilgisi);
file_put_contents('../write.json', $yenirolebilgisi);

header("Location: ../index.php");
// print_r($data["fan1"]);

echo  $role2."<br>".$role1."<br>".$fan1."<br>".$fan2."<br>".$fan3."<br>".$fan4."<br>";
?>