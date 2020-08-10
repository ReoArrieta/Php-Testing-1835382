<?php

namespace Unitarias;

class Factura
{
    public function calcularSubtotal(array $productos)
    {
        // Calcular el subtotal de los productos que llegan en el arreglo
        // Acumulador
        $subtotal = 0;
        // Recorrer el arreglo de productos
        foreach ($productos as $producto => $costo) {
            $subtotal += $costo;
        }
        // Retornamos el subtotal
        return $subtotal;
    }
}
