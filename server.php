<?php
    $content = file_get_contents(__DIR__ . "/dischi.json");
    $discs = json_decode($content, true);
    $apiKey = 'hk234dbh894yh523456trf564ckj';

    if(is_null($discs)){
        $discs = [];
    }

    //api key 
    if(isset($_GET['api_key']) && $_GET['api_key'] === $apiKey){
        //lascio i dati
    }
    else{
        //limito i dati da passare (es. togliendo alcune info tipo l'immagine)
        foreach ($discs as $disc) {            
            unset($disc['poster']);
            $newDiscs[] = $disc;
        }
        $discs = $newDiscs;
        
        //oppure non gli do accesso ai dati
        //$discs = ['error'=> 'invalid/null api key'];
         
    }

    //elaboro i dati presi dal db limitando l'utente
    
    header('Content-Type: application/json');//serve a dire al browser che andrà a ricevere come risposta alla chiamata axios un file di tipo json
    echo json_encode($discs);
?>