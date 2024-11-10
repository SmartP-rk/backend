<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Plate implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^[A-Z]{3}-\d{4}$/', $value) && !preg_match('/^[A-Z]{3}\d[A-Z]\d{2}$/', $value)) {
            $fail('Insira uma placa válida. Ex: AAA-0000 ou AAA0A00');
        }
    }
}
