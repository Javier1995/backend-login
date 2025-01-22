<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\storeUserRequest;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('view', 'users');
        return UserResource::collection(User::paginate());
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(storeUserRequest $request)
    {
        Gate::authorize('edit', 'users');
        $user = User::create(
        $request->only('first_name', 'last_name', 'email', 'role_id')+ ['password' => Hash::make('11')]);
        

        return response(new UserResource($user), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
        return new UserResource(User::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Gate::authorize('edit', 'users');
        $user = User::findOrFail($id);
        $user->update($request->only('first_name', 'last_name', 'email'));

        return response(new UserResource($user), Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gate::authorize('edit', 'users');
        User::destroy($id);
        return response(null, Response::HTTP_NO_CONTENT);
    }


    public function listUsers()
    {
        $users = User::with('role')->paginate(15);
        return view('user.list', compact('users'));
    }
    
}
