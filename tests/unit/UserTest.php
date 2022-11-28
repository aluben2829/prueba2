<?php
namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use model\User;

class UserTest extends TestCase {
    public function testUserIsAnAdultReturnsFalseForMinors(){
        $user = new User(17);
        $this->assertEquals(false, $user->IsAnAdult());
    }
}