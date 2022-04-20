<?php

class LoginBAT {
    
    //user not register
    public function testUserNotRegister()
    {
        $this->assertTrue(true);
    }

    //weird user (ex #%$%^$^%$&^$%^)
    public function testWeirdUser()
    {
        $this->assertTrue(true);
    }

    //weird password (ex #%$%^$^%$&^$%^)
    public function testWeirdPassword()
    {
        $this->assertTrue(true);
    }

    //none email
    public function nonEmail()
    {
        $this->assertTrue(true);
    }

    //non password
    public function nonPassword()
    {
        $this->assertTrue(true);
    }

}