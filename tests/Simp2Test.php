<?php
require_once __DIR__ . '/../src/Simp2.php';

class Simp2Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName() //1st test case
    {
        $simple2 = new Simp2();
        $simple2->setName('Danae');
        $this->assertEquals($simple2->getName(), 'Danae');
    }

    public function testGetAge()
    {
        $simple2 = new Simp2();
        $simple2->setAge(22);
        $this->assertEquals($simple2->getAge(), 22);
    }

    public function testFaveColor()
    {
        $simple2 = new Simp2();
        $simple2->setFaveColor('Yellow');
        $this->assertEquals($simple2->getFaveColor(), 'Yellow');
    }

    public function testGetNameCheckString()
    {
        $simple2 = new Simp2();
        $simple2 ->setName('Danae');
        $this->assertIsString($simple2->getName(), 'Danae');
    }

    public function testGetAgeCheckInt()
    {
        $simple2 = new Simp2();
        $simple2->setAge(22);
        $this->assertIsInt($simple2->getAge(), 22);
    }

    public function testGetAgeCheckNumeric()
    {
        $simple2 = new Simp2();
        $simple2->setAge(22);
        $this->assertIsNumeric($simple2->getAge(), 22);
    }
    
    public function testFaveColorCheckString()
    {
        $simple2 = new Simp2();
        $simple2->setFaveColor('Yellow');
        $this->assertIsString($simple2->getFaveColor(), 'Yellow');
    }

    public function testGetTogetherInput()
    {
        $simple2 = new Simp2();
        $simple2->setTogetherInput('Danae', 22, 'Yellow');
        $this->assertEquals($simple2->getTogetherInput(), 'Danae', 22, 'Yellow');
    }

}