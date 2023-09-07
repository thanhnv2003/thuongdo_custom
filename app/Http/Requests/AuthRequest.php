<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [];

        $currentAction = $this->route()->getActionMethod();
        switch ($this->method()):
            case 'POST':
                switch ($currentAction):
                    case 'register':
                        $rules = [
                            'name' => 'required',
                            'password' => 'required',
                            'email' => 'required|email|unique:users',
                            'phone' => 'required'
                        ];
                        break;
                    default:
                        break;
                        endswitch;
            endswitch;

        return $rules;
    }
}
