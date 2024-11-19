<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'task_name' => ['required', 'string', 'max:255'],
            'task_description' => 'required | string',
            'task_is_done' => 'required | boolean',
            'task_observation' => ['required' ,'string']

            ];
    }
    public function messages(): array
    {
        return [
            'task_name.required' => 'El nombre de la tarea es requerido',
            'task_description.required' => 'Task description is required',
            'task_is_done.required' => 'Task is done is required',
            'task_observation.required' => 'Task observation is required'
        ];
    }
}
