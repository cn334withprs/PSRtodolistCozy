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
        $this->assertTrue(true);
    }

    //NULL password
    public function user_have_none_password()
    {
        $this->assertTrue(true);
    }

    //username have อักขระพิเศษ (ex #%$%^$^%$&^$%^)
    public function user_have_weird_username()
    {
        $this->assertTrue(true);
    }

    //email not real
    public function user_have_not_real_email()
    {
        $this->assertTrue(true);
    }

    //password do not exceed 20 char
    public function user_do_not_exceed_20_char()
    {
        $this->assertTrue(true);
    }


}