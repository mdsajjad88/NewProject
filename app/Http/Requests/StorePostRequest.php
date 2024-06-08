<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Form;
class StorePostRequest extends FormRequest
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
            'inputs.*.name' => 'required',
           
            
            'inputs.*.email' => 'required|unique:forms',
            'inputs.*.photo' => 'required',    
        ];
    }
    public function messages(): array
{
    return [
        'inputs.*.name' => 'Name Field is Required.',
        
        'imputs.*.email.unique' => 'Email Are Duplicate',
        'inputs.*.email' => 'Email Must be Input',
        'inputs.*.photo' => 'Photo Must Be Input',
        
    ];
}
}
