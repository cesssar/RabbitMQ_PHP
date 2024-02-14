<?php

require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

#inicia conexao
$conn = new AMQPStreamConnection('localhost', 5672, 'usuario', 'ferlkuJSEORvJIWE#432GM');
$channel = $conn->channel();

#declara a fila que será usada
$channel->queue_declare('fila1', false, false, false, false);

#cria a mensagem
$message = new AMQPMessage('RabbitMQ com PHP!');

#envia a mensagem
$channel->basic_publish($message, '', 'fila1');

$channel->close();
$conn->close();

echo "Mensagem enviada!\n";