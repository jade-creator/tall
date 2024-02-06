<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DogRequest extends FormRequest
{
    /** @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string> */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'image' => 'required|string',
        ];
    }
}
