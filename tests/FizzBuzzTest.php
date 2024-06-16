<?php

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {

   /* public function testCuandoLeDoyElNumeroTresMeDevuelveFizz(): void {
        $fizzBuzz = new FizzBuzz();
        $resultado = $fizzBuzz->diNumero(3);
        $this->assertEquals('Fizz', $resultado);
    }

    public function testCuandoLeDoyElNumeroCincoMeDevuelveBuzz(): void {
        $fizzBuzz = new FizzBuzz();
        $resultado = $fizzBuzz->diNumero(5);
        $this->assertEquals('Buzz', $resultado);
    }

    public function testCuandoLeDoyElNumeroQuiceMeDevuelveFizzBuzz(): void {
        $fizzBuzz = new FizzBuzz();
        $resultado = $fizzBuzz->diNumero(15);
        $this->assertEquals('FizzBuzz', $resultado);
    }

    public function testCuandoLeDoyElNumeroUnoMeDevuelveUno(): void {
        $fizzBuzz = new FizzBuzz();
        $resultado = $fizzBuzz->diNumero(1);
        $this->assertEquals(1, $resultado);
    }*/
    //el array representa al dataProvider
    public function casosDeUso(): array {
        return [
            [3, 'Fizz'],
            [5, 'Buzz'],
            [15, 'FizzBuzz'],
            [1, 1]
        ];
    }
    /**
     *  @dataProvider casosDeUso
     *  @covers App\test\FizzBuzzTest
    */
    public function testFizzBuzz($numeroATestear, $resultadoEsperado){
        $fizzBuzz = new FizzBuzz();
        $resultado = $fizzBuzz->diNumero($numeroATestear);
        $this->assertEquals($resultadoEsperado, $resultado);
    }
}