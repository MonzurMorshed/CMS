<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ValidationRepository
{
    public function validate(string $module, array $data): array
    {
        // dd($module);
        $rules = $this->getRules($module);

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return $validator->validated();
    }

    protected function getRules(string $module): array
    {
        return match (strtolower($module)) {
            'systemsetting' => [
                'site_name' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'nullable|string|max:20',
            ],

            // 'ourteam' => [
            //     'name' => 'required|string|max:255',
            //     'position' => 'required|string|max:255',
            //     'photo' => 'nullable|image|max:2048',
            // ],

            // 'services' => [
            //     'title' => 'required|string|max:255',
            //     'description' => 'required|string',
            //     'icon' => 'nullable|string|max:100',
            // ],

            // 'projects' => [
            //     'name' => 'required|string|max:255',
            //     'summary' => 'nullable|string',
            //     'image' => 'nullable|image|max:2048',
            // ],

            default => throw new \InvalidArgumentException("Validation rules for module [$module] not defined."),
        };
    }
}
