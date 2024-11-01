<?php

    class SiteController {
        public function index($request) {
          header ('Content-Type: application/json');
        
            if (isset($request['cep'])) {
                $cep = file_get_contents("https://viacep.com.br/ws/{$request['CEP']}/json/");
                echo json_encode($cep);
        } else {
            echo json_encode(['erro' => 'CEP não encontrado']);
        }
    }
}
?>
