<?php

namespace App\Livewire\App\Authentication;

use App\Http\Requests\Authentication\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PageLogin extends Component {

    public $email;
    public $password;

    protected function rules(): array { return (new LoginRequest())->rules(); }

    public function login(){
        $this->validate();
        
        $login_success = Auth::attempt([
            "email" => $this->email,
            "password" => $this->password
        ]);

        if($login_success){
            $this->reset();
        } else {
            $this->addError("email", "Email or password is incorrect.");
            $this->password = "";
        }

    }

    public function logout(){
        Auth::logout();
    }

    public function render() {
        return view('livewire.app.authentication.page-login');
    }

}
