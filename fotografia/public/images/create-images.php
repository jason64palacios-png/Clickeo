<?php
$files = [
    "1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg",
    "6.jpg", "7.jpg", "8.jpg", "9.jpg", "banner.jpg"
];

$dir = __DIR__ . "/images/";

if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

foreach ($files as $file) {
    $path = $dir . $file;
    if (!file_exists($path)) {
        file_put_contents($path, ""); // crea archivo vacío
        echo "Creado: $file\n";
    } else {
        echo "Ya existe: $file\n";
    }
}
