<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomepageRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['required', 'string', 'max:255'],
            'about_us' => ['required', 'string'],
            'about_us_image' => ['file', 'mimes:png,jpg,jpeg,webp,gif,svg', 'max:2048'],
            'vision' => ['required', 'string'],
            'cta_label' => ['required', 'string', 'max:255'],
            'cta_url' => ['required', 'string', 'max:255'],
            'bidang_kesehatan' => ['required', 'string'],
            'bidang_pendidikan' => ['required', 'string'],
            'bidang_kepemudaan' => ['required', 'string'],
            'bidang_lingkungan' => ['required', 'string'],
        ];
    }
}
