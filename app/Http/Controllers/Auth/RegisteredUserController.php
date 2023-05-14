<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{

    public function menu() 
    {
        return view('users.menu');
    }

    public function index()
    {
        return view('users.index', [
            'users' => User::all()
        ]);
    }

    public function destroy($id)
    {
        $user = User::where('userid', $id)->first();
        $user->delete();
        return redirect()->back();
    }

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'accesslevel' => ['required', 'integer']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'accesslevel' => $request->accesslevel,
        ]);

        event(new Registered($user));

        // The below function automatically logs in after the user registers succesfully
        // Auth::login($user);

        return redirect(route('users.index'));
    }
}
