<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var bool */
    public $remember = false;

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required'],
    ];

    public function authenticate()
    {
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));

            return;
        }

        $message = redirect()->with('success', 'Login Successfully');
        if (Auth::user()->role == 'admin') {
            return $message->intended(route('admin.dashboard'));
        } else if (Auth::user()->role == 'creator') {
            return $message->intended(route('creator.dashboard'));
        }
        return $message->intended(route('index'));
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.auth');
    }
}
