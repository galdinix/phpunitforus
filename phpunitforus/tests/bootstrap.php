<?php

// Bootstrap dos testes.
// Registra um autoloader simples que mapeia qualquer classe para src/NomeDaClasse.php
// Não é necessário Composer — o phpunit.phar já está em libs/

spl_autoload_register(function (string $classe): void {
    $arquivo = __DIR__ . '/../src/' . str_replace('\\', '/', $classe) . '.php';
    if (file_exists($arquivo)) {
        require $arquivo;
    }
});
