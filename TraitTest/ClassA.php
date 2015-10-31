<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClassA
 *
 * @author mzijlstra
 */
trait HelloSayer {
    public function sayHello($name) {
        return "Hello $name";
    }
}
class ClassA {
    use HelloSayer;
}
class ClassB {
    use HelloSayer;
}
