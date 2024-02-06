<?php

namespace App\Http\Requests\Category;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
<<<<<<< HEAD:app/Http/Requests/Category/CategoryStoreRequest.php
            'name' => 'required|string|min: 3|max:25',
            'poster'=>'required|image:jpg,jpeg,png|max:10240',
=======
            'name'          => 'required|string|min:3|max:25',
            'description'   => 'string|min:3|max:25',
            'content'       => 'required|string|min:10',
            'poster'        => 'required|image:jpg,jpeg,png|max:10240',
            'category_ids'  => 'array',
            'category_ids.*'=> 'sometimes|integer',
>>>>>>> origin/main:app/Http/Requests/PostStoreRequest.php
        ];
    }
}
