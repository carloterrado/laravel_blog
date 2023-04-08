<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AuthorLoginForm extends Component
{
    public $email, $password;

    public function render()
    {
        return view('livewire.author-login-form');
    }

    public function LoginHandler()
    {
        $this->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:5',
        ],[
            'email.required' => 'Email address is required',
            'email.email' => 'Invalid email address',
            'email.exist' => 'Email address not found',
            'password.required' => 'Password is required'

        ]);

        $creds = array('email'=>$this->email, 'password'=>$this->password);
        if(Auth::guard('web')->attempt($creds))
        {
            $checkUser = User::where('email', $this->email)->first();
            if($checkUser->blocked === 1)
            {
                Auth::guard('web')->logout();
                return redirect()->back()->with('fail','Your account had been blocked');

            } else {
                return redirect()->route('author.home');
            }
        } else {
            session()->flash('fail', 'Incorrect email or password');
        }
    }

}
