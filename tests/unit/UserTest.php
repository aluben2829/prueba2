<?php
namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use model\User;

class UserTest extends TestCase {
    public function testUserIsAnAdultReturnsFalseForMinors(){
        $user = new User(17);
        $this->assertEquals(false, $user->IsAnAdult());
    }
    public function testIsAnAdultReturnsTrueForPeopleOrderThanTreshold(){
        $user = new User(19);
        $this->assertTrue($user->isAnAdult());

        $user = new User(55);
        $this->assertTrue($user->isAnAdult());

        $user = new User(102);
        $this->assertTrue($user->isAnAdult());  
    }
    public function testIsAnAdultReturnsTrueForPeopleThanTreshold(){
        $user = new User(18);
        $this->assertTrue($user->isAnAdult());
    }
}