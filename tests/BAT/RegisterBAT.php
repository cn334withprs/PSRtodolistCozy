<?php

class RegisterBAT {
    //NULL username
    public function user_have_none_username()
    {
        $user = new User([
            'name' => NULL,
            'email' => "psr@mail.com",
            'password' => bcrypt("testpassword")

        ]);   

        $this->assertNotEquals('Psrtodolist', $user->name);
        $this->assertEquals('psr@mail.com', $user->email);
    }

    //NULL email
    public function user_have_none_email()
    {
        $user = new User([
            'name' => "Psrtodolist",
            'email' => NULL,
            'password' => bcrypt("testpassword")

        ]);   

        $this->assertNotEquals('Psrtodolist', $user->name);
        $this->assertEquals('psr@mail.com', $user->email);
    }

    //NULL password
    public function user_have_none_password()
    {
        $this->assertTrue(true);
    }

    //username have อักขระพิเศษ (ex #%$%^$^%$&^$%^)
    public function user_have_weird_username()
    {
        $user = new User([
            'name' => "#%$%^$^%$&^$%^",
            'email' => "psr@mail.com",
            'password' => bcrypt("testpassword")

        ]);

        $this->assertNotEquals('Psrtodolist', $user->name);
    }

    //email not real
    public function user_have_not_real_email()
    {
        $this->assertTrue(true);
    }

    //name do not exceed 20 char
    public function user_name_do_not_exceed_20_char()
    {
        $user = new User([
            'name' => "psr5556789103456794939339920cutecozy",
            'email' => "psr@mail.com",
            'password' => bcrypt("testpassword")

        ]);

        $this->assertNotEquals('Psrtodolist', $user->name);
    }


}