<?php

namespace Unitarias\Test;

// Incluir el autoload para cargar automatica de clases
require dirname(__DIR__) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";
// Cargar las dependencias de PHPunit
use PHPUnit\Framework\TestCase;

class PrimerTest extends TestCase
{
    public function testVariableSeaTrue()
    {
        // Definir datps de prueba
        $mi_variable = true;
        // Afirmación para verificar que la varible tenga el valor de true
        $this->assertTrue($mi_variable, "En la variable debe estar el valor true");
    }
    public function testCompararDatoSea10()
    {
        $mi_variable = 10;
        $this->assertEquals(10, $mi_variable, "La variable debe tener el valor 10");
    }
}
