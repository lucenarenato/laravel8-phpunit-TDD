<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Str;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Eloquent\Factories\Factory;


// usando anotetion = /** @test */
class UserTest extends TestCase
{
    /** @test */
    // public function check_if_user_column_is_correct()
    // {
    //     //$this->assertTrue(true);
    //     $user = new User;

    //     $expected = [
    //         'name',
    //         'email',
    //         'password'
            
    //     ];

    //     $arrayCompared = array_diff($expected, $user->getFillable());
    //     //dd($arrayCompared);

    //     $this->assertEquals(0, count($arrayCompared));
    // }

    /** @test */
    /*public function test_create_user()
    {
        $user = User::create([
            'name' => 'User',
            'email' => 'user@teste.com.br',
            'password' => Hash::make('testpassword') ////'password' => bcrypt(Str::random(0))
        ]);
        //dd($user);

        //$this->assertDatabaseMissing('users', [ 'name' => 'User']);

        //$this->seeInDatabase('users', [ 'name' => 'User']);
    }*/

}

/**
 * UnitOfWork_StateUnderTest_ExpectedBehavior
 * ActionVerb_WoOrWhatToDo_ExpectedBehavior
 * check_if_user_column_is_correct
 * 
 */