<?php

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    private Calculadora $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculadora();
    }

    // --- soma ---

    public function testUmMaisUmEhDois(): void
    {
        $this->assertSame(2, $this->calc->soma(1, 1));
    }

    public function testSomaNumerosMaiores(): void
    {
        $this->assertSame(100, $this->calc->soma(60, 40));
    }

    public function testSomaComNegativo(): void
    {
        $this->assertSame(0, $this->calc->soma(5, -5));
    }

    // --- subtrai ---

    public function testSubtraiRetornaResultadoCorreto(): void
    {
        $this->assertSame(3, $this->calc->subtrai(5, 2));
    }

    public function testSubtraiPodeRetornarNegativo(): void
    {
        $this->assertSame(-1, $this->calc->subtrai(1, 2));
    }

    // --- multiplica ---

    public function testMultiplicaDoisPorTres(): void
    {
        $this->assertSame(6, $this->calc->multiplica(2, 3));
    }

    public function testMultiplicaPorZeroEhZero(): void
    {
        $this->assertSame(0, $this->calc->multiplica(99, 0));
    }

    // --- divide ---

    public function testDivideDezPorDoisEhCinco(): void
    {
        $this->assertSame(5.0, $this->calc->divide(10, 2));
    }

    public function testDividePorZeroLancaExcecao(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->calc->divide(10, 0);
    }
}
