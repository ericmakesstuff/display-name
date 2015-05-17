<?php

namespace EricMakesStuff\DisplayName\Test;

use EricMakesStuff\DisplayName\DisplayName;

class DisplayNameTest extends \PHPUnit_Framework_TestCase
{
    protected $displayName;

    public function setUp()
    {
        $this->displayName = new DisplayName;
    }
    /**
     * @dataProvider names
     */
    public function testFullName($name)
    {
        $this->assertEquals($this->displayName->fullName($name), $name);
    }

    /**
     * @dataProvider names
     */
    public function testFirstName($name, $variants)
    {
        $this->assertEquals($this->displayName->firstName($name), $variants['firstName']);
    }

    /**
     * @dataProvider names
     */
    public function testFirstNameLastInitial($name, $variants)
    {
        $this->assertEquals($this->displayName->firstNameLastInitial($name), $variants['firstNameLastInitial']);
    }

    /**
     * @dataProvider names
     */
    public function testFirstNameLastInitialWithPeriod($name, $variants)
    {
        $this->assertEquals(
            $this->displayName->firstNameLastInitialWithPeriod($name),
            $variants['firstNameLastInitialWithPeriod']
        );
    }

    /**
     * @dataProvider names
     */
    public function testInitials($name, $variants)
    {
        $this->assertEquals($this->displayName->initials($name), $variants['initials']);
    }

    /**
     * @dataProvider names
     */
    public function testInitialsWithPeriods($name, $variants)
    {
        $this->assertEquals($this->displayName->initialsWithPeriods($name), $variants['initialsWithPeriods']);
    }

    /**
     * @dataProvider names
     */
    public function testInitialsWithSpaces($name, $variants)
    {
        $this->assertEquals($this->displayName->initialsWithSpaces($name), $variants['initialsWithSpaces']);
    }

    /**
     * @dataProvider names
     */
    public function testFormat($name, $variants)
    {
        // With no arguments, show the first name and last initial
        $this->assertEquals($this->displayName->format($name), $variants['firstNameLastInitial']);

        $this->assertEquals($this->displayName->format($name, 'fullName'), $name);

        // We should be able to call $displayName->format('John Smith', 'firstName') and get 'John'
        // The same goes for every function
        foreach ($variants as $method => $result) {
            $this->assertEquals($this->displayName->format($name, $method), $result);
        }
    }

    public function names()
    {
        return array(
            array("John Smith", array(
                'firstName' => 'John',
                'initials' => 'JS',
                'initialsWithPeriods' => 'J.S.',
                'initialsWithSpaces' => 'J S',
                'firstNameLastInitial' => 'John S',
                'firstNameLastInitialWithPeriod' => 'John S.',
            )),
            array("Bob R. Johnson", array(
                'firstName' => 'Bob',
                'initials' => 'BRJ',
                'initialsWithPeriods' => 'B.R.J.',
                'initialsWithSpaces' => 'B R J',
                'firstNameLastInitial' => 'Bob J',
                'firstNameLastInitialWithPeriod' => 'Bob J.',
            )),
            array("Sally Moore Stevenson", array(
                'firstName' => 'Sally',
                'initials' => 'SMS',
                'initialsWithPeriods' => 'S.M.S.',
                'initialsWithSpaces' => 'S M S',
                'firstNameLastInitial' => 'Sally S',
                'firstNameLastInitialWithPeriod' => 'Sally S.',
            )),
            array("Leo deMarco", array(
                'firstName' => 'Leo',
                'initials' => 'LD',
                'initialsWithPeriods' => 'L.D.',
                'initialsWithSpaces' => 'L D',
                'firstNameLastInitial' => 'Leo D',
                'firstNameLastInitialWithPeriod' => 'Leo D.',
            )),
            array("Jack", array(
                'firstName' => 'Jack',
                'initials' => 'J',
                'initialsWithPeriods' => 'J.',
                'initialsWithSpaces' => 'J',
                'firstNameLastInitial' => 'Jack',
                'firstNameLastInitialWithPeriod' => 'Jack',
            )),
            array("", array(
                'firstName' => '',
                'initials' => '',
                'initialsWithPeriods' => '',
                'initialsWithSpaces' => '',
                'firstNameLastInitial' => '',
                'firstNameLastInitialWithPeriod' => '',
            )),
        );
    }
}
