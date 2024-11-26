<?php

use PHPUnit\Framework\TestCase;
use Singleton\UserRegistry;

class SingletonTest extends TestCase
{
    public function testSingletonInstance()
    {
        $userRegistry1 = UserRegistry::getInstance();
        $userRegistry2 = UserRegistry::getInstance();

        // Verifica se as duas instâncias são iguais
        $this->assertSame($userRegistry1, $userRegistry2);
    }

    public function testAddUser()
    {
        $userRegistry = UserRegistry::getInstance();
        $userRegistry->addUser("John Doe");

        // Verifica se o usuário foi adicionado
        $this->assertContains("John Doe", $userRegistry->getUsers());
    }
}
?>
