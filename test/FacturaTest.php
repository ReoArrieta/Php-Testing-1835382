<?php

namespace Unitarias\Test;

// Incluir el autoload para cargar automatica de clases
require dirname(__DIR__) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";
// Cargar las dependencias de PHPunit
use PHPUnit\Framework\TestCase;
// Cargar la clase Factura
use Unitarias\Factura;

class FacturaTest extends TestCase
{
    public function testCacularSubtotalEsCorrecto()
    {
       // Arrange
       $productos = [
           "papa" => 1000,
           "cebolla" => 2500,
           "platano" => 1100
       ];
       // Objeto que calcula mi subtotal de productos
       $factura = new Factura();
       // Act
       $subtotal = $factura -> calcularSubtotal($productos);
       // Assert
       $this -> assertEquals(4600, $subtotal, "En este test, el subtotal debe ser 4600"); 
    }
}
