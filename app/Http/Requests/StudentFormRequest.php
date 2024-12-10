<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "firstname" => ["required","string"],
            "lastname" => ["required","string"],
            "class" => "required",
            "gender" => "required"
        ];
    }

    protected  function prepareForValidation()
    {
        $this->merge([
            "firstname" => strip_tags($this->firstname),
            "lastname" => strip_tags($this->lastname),
            "class" => strip_tags($this->class),
            "gender" => strip_tags($this->gender),
        ]);

    }
}
