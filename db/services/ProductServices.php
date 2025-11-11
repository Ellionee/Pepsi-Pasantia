<?php

    function get_all_productos($pdo){
         $stmt = $pdo->query("SELECT * FROM pdoproductos");

        $pdoproductos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $pdoproductos;
    }

?>