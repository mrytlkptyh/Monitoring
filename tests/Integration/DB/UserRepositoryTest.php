<?php declare(strict_types=1);

namespace Tests\Integration\DB;

use App\Http\Controllers\Controller;
use App\Users\Infrastructure\UserRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class UserRepositoryTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    public function shouldCreateUser()
    {
        $email = $this->faker->email;
        $password = $this->faker->password;
        $repository = new UserRepository();

        $repository->add($email, $password);

        $this->assertDatabaseHas('users', ['email' =>$email, 'password' => $password]);
    }
}
