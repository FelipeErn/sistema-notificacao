<?php

namespace Singleton;

class UserRegistry {
    private static $instance;
    private $user;

    private function __construct() {
        // Impede a criação de uma nova instância fora da classe
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Método para registrar um novo usuário
    public function registerUser($user) {
        $this->user = $user;
        echo "Usuário registrado: $user\n";
    }

    // Método para alterar o usuário registrado
    public function setUser($user) {
        $this->user = $user;
        echo "Usuário alterado para: $user\n";
    }

    // Método para obter o usuário registrado
    public function getUser() {
        return $this->user;
    }
}
