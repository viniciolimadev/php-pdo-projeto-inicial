<?php

$caminhoBanco = __DIR__ . '/banco.sql';

$pdo = new PDO('sqlite:' . $caminhoBanco);

echo 'Conectado';