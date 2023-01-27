<?php
    $content = file_get_contents(__DIR__ . "/dischi.json");
    $discs = json_decode($content, true);

    //elaboro i dati presi dal db limitando l'utente

    echo json_encode($discs);
?>