<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MinBytes implements Rule
{
    private $MinBytes;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(int $length)
    {
        $this->MinBytes = $length;
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
        return $this->MinBytes <= strlen(str_replace(array("\r\n", "\r", "\n"), "", $value));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ":attributeは{$this->MinBytes}byte以上で入力してください";
    }
}
