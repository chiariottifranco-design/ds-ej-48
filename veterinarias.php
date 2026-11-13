<?php

header("Content-Type: application/json");

require_once 'modelo/duenio.php';
require_once 'modelo/mascota.php';
require_once 'modelo/veterinaria.php';

$resp = [];

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
$vet-> Id = 1;
$vet-> Nombre = 'Patitas Felices';
$vet-> Ciudad = 'Rosario';
$vet-> Mascota[] = $m;
$vet-> Mascota[] = $m1;

$d2 = new Duenio();
$d2-> Id = 1;
$d2-> Nombre = 'José Hernandez';
$d2-> Telefono = '341-2345678';

$d3 = new Duenio();
$d3-> Id = 2;
$d3-> Nombre = 'María Juarez';
$d3-> Telefono = '341-9876543';

$m2 = new Mascota();
$m2-> Id = 1;
$m2-> Nombre = 'Felix';
$m2-> Especie = 'Tortuga';
$m2-> Edad = '24';
$m2-> Duenio [] = $d2;

$m3 = new Mascota();
$m3-> Id = 2;
$m3-> Nombre = 'Lomito';
$m3-> Especie = 'Perro';
$m3-> Edad = '12';
$m3-> Duenio [] = $d3;

$vet1 = new Veterinaria();
$vet1-> Id = 2;
$vet1-> Nombre = 'El Ladrido';
$vet1-> Ciudad = 'Pueblo Esther';
$vet1-> Mascota[] = $m2;
$vet1-> Mascota[] = $m3;

$resp[] = $vet;
$resp[] = $vet1;


echo json_encode($resp);