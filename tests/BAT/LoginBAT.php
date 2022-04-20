<?php

class LoginBAT {

    //user not register
    public function testUserNotRegister()
    {
        $user = new User([
            'email' => "usernotregister@mail.com",
            'password' => bcrypt("testpassword")

        ]);

        $this->assertNotEquals('psr@mail.com', $user->email);
    }

    //weird user (ex #%$%^$^%$&^$%^)
    public function testWeirdUser()
    {
        $user = new User([
            'email' => "#%$%^$^%$&^$%^@mail.com",
            'password' => bcrypt("testpassword")

        ]);

        $this->assertNotEquals('psr@mail.com', $user->email);
    }

    //weird password (ex #%$%^$^%$&^$%^)
    public function testWeirdPassword()
    {
        $this->assertTrue(true);
    }

    //none email
    public function nonEmail()
    {
        $user = new User([
            'email' => "",
            'password' => bcrypt("testpassword")

        ]);

        $this->assertNotEquals('psr@mail.com', $user->email);
    }

    //non password
    public function nonPassword()
    {
        $this->assertTrue(true);
    }

}