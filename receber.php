<?php

require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;

#inicia conexao
$conn = new AMQPStreamConnection('localhost', 5672, 'usuario', 'ferlkuJSEORvJIWE#432GM');
$channel = $conn->channel();

#declara a fila que será usada
$channel->queue_declare('fila1', false, false, false, false);

#função de recebimento
$callback = function ($msg) {
    echo "Mensagem recebida: ", $msg->body, "\n";
};

#adiciona a função para receber na fila
$channel->basic_consume('fila1', '', false, true, false, false, $callback);

#mantém a função escutando a fila ate que seja encerrada
while (count($channel->callbacks)) {
    $channel->wait();
};

$channel->close();
$conn->close();