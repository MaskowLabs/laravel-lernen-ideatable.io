<?php

namespace App\Livewire\App\Authentication;

use App\Http\Requests\Authentication\LoginRequest;
use Livewire\Component;

class PageLogin extends Component {

    public $email;
    public $password;

    protected function rules(): array { return (new LoginRequest())->rules(); }

    public function login(){
        $this->validate();
        
        
    }

    public function render() {
        return view('livewire.app.authentication.page-login');
    }

}
