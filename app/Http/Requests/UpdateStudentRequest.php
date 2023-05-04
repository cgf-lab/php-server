<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {

        $method = $this->method();

        if($method == 'PUT'){
            return [
                'name' => ['required','string','max:255'],
                'birthday' => ['required','string'],
                'group' => ['required','string'],
                'status' => ['required', Rule::in(['Active', 'Inactive'])],
                'gender' => ['required', Rule::in(['M', 'F'])],
            ];
        }else{
            return  [
                'name' => ['sometimes','required','string','max:255'],
                'birthday' => ['sometimes','required','string'],
                'group' => ['sometimes','required','string'],
                'status' => ['sometimes','required', Rule::in(['Active', 'Inactive'])],
                'gender' => ['sometimes','required', Rule::in(['M', 'F'])],
            ];
        }
        
    }
}
