<?php

namespace App\Livewire\App\Authentication;

use App\Http\Requests\Authentication\RegisterRequest;
use App\Models\User;
use Livewire\Component;

class PageRegister extends Component {

    public $name;
    public $email;
    public $password;

    protected function rules(): array { return (new RegisterRequest())->rules(); }

    public function register(){
        $this->validate();

        $password = bcrypt($this->password);

        User::create([
            "name" => $this->name,
            "email" => $this->email,
            "password" => $password
        ]);

        $this->reset();

        $this->redirect(route("login"), true);
    }

    public function render() {
        return view('livewire.app.authentication.page-register');
    }

}
