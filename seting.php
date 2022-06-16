<?php

$dbb= new PDO('mysql:host=localhost;dbname=resencemment','root','');
$countries= $dbb->prepare("SELECT * FROM ville");
$countries -> execute();

$data = $countries->fetchAll(PDO::FETCH_ASSOC) ;




?>