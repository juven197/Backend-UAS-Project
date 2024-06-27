<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
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
            'title' => '',
            'genre_id' => '',
            'min_price' => '',
            'max_price' => '',
            'price' => ''
        ];
    }

    public function validatedAndFormatData()
    {
        $data = $this->validated();

        $data['title'] = $this->filled('title') ? $data['title'] : '';
        $data['min_price'] = $this->filled('min_price') ? $data['min_price'] : 0;
        $data['genre_id'] = $this->filled('genre_id') ? $data['genre_id'] : 0;
        $data["max_price"] = $this->filled('max_price') ? $data["max_price"] : 100000;
        $data['price'] = [$data['min_price'], $data["max_price"]];

        return $data;
    }
}
