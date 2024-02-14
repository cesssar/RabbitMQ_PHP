# RabbitMQ com PHP e Docker

> Utiliza Docker para executar uma instância do RabbitMQ e bibliotecas em Python para enviar e receber mensagens

<img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white" /> <img src="https://img.shields.io/badge/docker-%230db7ed.svg?style=for-the-badge&logo=docker&logoColor=white" /> <img src="https://img.shields.io/badge/Rabbitmq-FF6600?style=for-the-badge&logo=rabbitmq&logoColor=white" />

## 💻 Pré-requisitos

- PHP
- Composer
- Docker 

## 🚀 Preparando ambiente para execução

Instalar o Composer: https://getcomposer.org/
Instalar o PHP: https://www.php.net/


## 🚀 Executando o RabbitMQ

```
docker-compose up -d 
```

## 🚀 Iniciando os robôs que recebem mensagens

```
php receber.php
```

## 🚀 Enviando mensagem para todas as filas (queue)

```
php enviar.php
```

<img src="https://github.com/cesssar/RabbitMQ_PHP/blob/main/Screenshot.png" />
