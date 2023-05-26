<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $ime=$_POST["ime"];
    $email=$_POST["email"];
    $opis=$_POST["opis"];
    $cena=$_POST["cena"];

    $user=array("ime"=>$ime, "email"=>$email, "opis"=>$opis, "cena"=>$cena);
    addToJson("users.json", $user);
}
function addToJson($fileName, $newElement)
{
    if(!file_exists($fileName) || filesize($fileName)==0 )
{
    $userArray=array($newElement);
    $userJson=json_encode($userArray);
    file_put_contents($fileName, $userJson);
}
else
{
    $jsonContent=file_get_contents($fileName);
    $jsonContent=json_decode($jsonContent);
    array_push($jsonContent, $newElement);
    $jsonContent=json_encode($jsonContent);
    file_put_contents($fileName, $jsonContent);
}
}
