<?php

namespace App\Http\Controllers\Client\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use function dd;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return view('client.user.show', compact('user'));
    }
}
