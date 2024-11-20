<?php

namespace App;

class Visitor
{
    public string $name;
    public int $age;
    public array $hours;


    public function Visit()
    {
        print_r('i am visiting');
    }

}