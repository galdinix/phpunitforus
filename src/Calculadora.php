<?php

class Calculadora
{
    public function soma(int $a, int $b): int
    {
        return $a + $b;
    }

    public function subtrai(int $a, int $b): int
    {
        return $a - $b;
    }

    public function multiplica(int $a, int $b): int
    {
        return $a * $b;
    }

    public function divide(float $a, float $b): float
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Divisão por zero não é permitida.");
        }
        return $a / $b;
    }
}
