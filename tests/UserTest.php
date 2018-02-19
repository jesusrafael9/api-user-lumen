<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use Illuminate\Http\Response;
use App\User;
use Illuminate\Http\Request;

class UserTest extends TestCase
{
    /**
     * A basic get User.
     *
     * @return void
     */
    public function testGetUsers()
    {
        $response = $this->json('GET', 'api/users');
        $this->assertResponseStatus(200);
    }

    /**
     * A basic test not exist User.
     *
     * @return void
     */
    public function testNoExistUser()
    {
        $id_user = 10000;

        $response = $this->json('GET', 'api/user/'.$id_user);

        $this->assertResponseStatus(401);
    }

    /**
     * A basic test delete Email.
     *
     * @return void
     */
    public function testDeleteUser()
    {
        $id_user = 2;

        $response = $this->json('DELETE', 'api/delete/'.$id_user);

        $this->assertResponseStatus(200);
    }




}
