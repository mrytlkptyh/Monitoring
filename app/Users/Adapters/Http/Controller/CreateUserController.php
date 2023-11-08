<?php declare(strict_types=1);

namespace App\Users\Adapters\Contracts;

use App\Http\Controllers\Controller;
use App\User;
use App\Users\Adapters\Http\Requests\CreateUser;
use App\Users\Adapters\Http\Responses\DataResponse;
use App\Users\Infrastructure\UserRepository;
use Symfony\Component\HttpFoundation\Response;

class CreateUserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function __invoke($email, CreateUserRequest $request)
    {
        $this->userRepository->add($email, $request->get('password'));

        return response()->json(DataResponse::fromData([
            'email'=> $email
        ]), Response::HTTP_CREATED);
    }
}
