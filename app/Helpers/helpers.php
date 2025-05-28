<?php

if (!function_exists('generate_slug')) {
    /**
    * Generate a URL-friendly slug from a given string.
     *
     * @param string $string
     * @return string
     */
    function generate_slug($string)
    {
        return \Str::slug($string);
    }
}

if(!function_exists('sanitizeToLowerAlphaOnly')) {
    function sanitizeToLowerAlphaOnly($string) {
        // Remove all non-alphabetic characters
        $onlyLetters = preg_replace('/[^a-zA-Z]/', '', $string);
        // Convert to lowercase
        return strtolower($onlyLetters);
    }
}

if(!function_exists('fileUpload')) {
    function fileUpload($attachment,$model) {
        foreach ($attachment as $key => $value) {
            if ($value instanceof \Illuminate\Http\UploadedFile) {
                $data[$key] = $value->store("uploads/" . strtolower($model), 'public');
            }
        }

        return $data;
    }
}
