<?php

// Verifica se o parâmetro 'data' foi passado via GET
if(isset($_GET['data'])) {
    // Obtém o valor do parâmetro 'data'
    $data = $_GET['data'];
    
    // Constrói a URL do Sofascore com base na data fornecida
    $url = "https://api.sofascore.com/api/v1/sport/football/scheduled-events/$data";

    // Obtém o conteúdo JSON da URL do Sofascore
    $json = file_get_contents($url);

    // Verifica se foi possível obter o conteúdo
    if($json !== false) {
        // Decodifica o JSON para um array associativo
        $data = json_decode($json, true);

        // Obtém o timestamp do início do dia atual
        $inicio_do_dia_atual = strtotime('today');

        // Filtra os eventos para incluir apenas aqueles que começam hoje
        $eventos_filtrados = array_filter($data['events'], function($evento) use ($inicio_do_dia_atual) {
            return isset($evento['startTimestamp']) && $evento['startTimestamp'] >= $inicio_do_dia_atual;
        });

        // Atualiza o array de eventos apenas com os eventos filtrados
        $data['events'] = array_values($eventos_filtrados);

        // Define o cabeçalho como JSON
        header('Content-Type: application/json');

        // Imprime o JSON retornado pelo Sofascore, agora filtrado por eventos do dia atual
        echo json_encode($data);
    } else {
        // Se houver um erro ao obter o conteúdo, retorna uma mensagem de erro
        echo json_encode(array('error' => 'Erro ao obter dados.'));
    }
} else {
    // Se o parâmetro 'data' não foi passado, retorna uma mensagem de erro
    echo json_encode(array('error' => 'Parâmetro "data" não foi fornecido.'));
}
?>
