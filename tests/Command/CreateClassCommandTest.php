<?php

use Html\Command\CreateClassCommand;
use PHPUnit\Framework\TestCase;

final class CreateClassCommandTest extends TestCase
{
    public function testCreateClassSuccess()
    {
        $command = new CreateClassCommand('make:class');
        $result = $command->getClassName('ValidClassName');
        $this->assertTrue($result);
    }

    public function testCreateClassFailure()
    {
        $command = new CreateClassCommand('make:class');
        $result = $command->getClassName('');
        $this->assertFalse($result);
    }

    public function testCreateClassEdgeCase()
    {
        $command = new CreateClassCommand('make:class');
        $result = $command->getClassName('ClassWithSpecial@Name');
        $this->assertFalse($result);
    }

    public function testCreateClassWithWhitespace()
    {
        $command = new CreateClassCommand('make:class');
        $result = $command->getClassName('   ');
        $this->assertFalse($result);
    }
}
