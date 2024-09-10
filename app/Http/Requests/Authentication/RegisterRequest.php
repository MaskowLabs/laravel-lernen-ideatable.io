<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest {

    public function authorize(): bool {
        return false;
    }

    public function rules(): array {
        return [
            "name" => ["required", "string", "min:3", "max:50"],
            "email" => ["required", "email", "unique:users,email"],
            "password" => ["required", "min:6"]
        ];
    }

}
