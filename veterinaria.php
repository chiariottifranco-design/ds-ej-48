<?php

header("Content-Type: application/json");

require_once 'modelo/duenio.php';
require_once 'modelo/mascota.php';
require_once 'modelo/veterinaria.php';

$d = new Duenio();
$d-> Id = 1;
$d-> Nombre = 'Laura Díaz';
$d-> Telefono = '341-5551234';

$d1 = new Duenio();
$d1-> Id = 2;
$d1-> Nombre = 'Pedro Suarez';
$d1-> Telefono = '341-5559876';

$m = new Mascota();
$m-> Id = 1;
$m-> Nombre = 'Rocky';
$m-> Especie = 'Perro';
$m-> Edad = '4';
$m-> Duenio [] = $d;

$m1 = new Mascota();
$m1-> Id = 2;
$m1-> Nombre = 'Michi';
$m1-> Especie = 'Gato';
$m1-> Edad = '2';
$m1-> Duenio [] = $d1;

$vet = new Veterinaria();
$vet-> Id = $_GET['id'];
$vet-> Nombre = 'Patitas Felices';
$vet-> Ciudad = 'Rosario';
$vet-> Mascota[] = $m;
$vet-> Mascota[] = $m1;

echo json_encode($vet);