

<?php

$productos=[
    [ 
        "nombre"=>"Auriculares Genius",
        "descripcion"=> "auriculares inalambricos de primera calidad",
        "precio"=> 4899


    ],
    [
        "nombre"=>"Mouse Inalambrico",
        "descripcion"=>"imponente mouse inalambrico de la marca LOGITECH",
        "precio"=>2599
    ]

    ];


    foreach ($productos as $producto) {
        echo "<h1>". $producto["nombre"]."</h1><br>";
        echo "<h3>Descripcion: ".$producto["descripcion"]."</h3>";
        echo "<h3> Precio :$".$producto["precio"]."</h3><br>";
    }



?>