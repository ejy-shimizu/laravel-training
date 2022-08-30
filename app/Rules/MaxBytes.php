<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MaxBytes implements Rule
{
    private $MaxBytes;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(int $length)
    {
        $this->MaxBytes = $length;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {   
        return $this->MaxBytes >= strlen(str_replace(array("\r\n", "\r", "\n"), "", $value));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ":attributeは{$this->MaxBytes}byte以下で入力してください";
    }
}
