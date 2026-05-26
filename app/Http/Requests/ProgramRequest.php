<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProgramRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $programId = $this->route('program')?->id;

        return [
            'name' => 'required|string|max:255',
            'slug' => ['required', 'string', 'max:255', Rule::unique('programs', 'slug')->ignore($programId)],
            'description' => 'nullable|string',
            'curriculum_data' => 'nullable|string',
            'degree_type' => 'required|string|max:100',
            'duration' => 'required|string|max:50',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ];
    }
}
