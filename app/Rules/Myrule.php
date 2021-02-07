<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Myrule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($n)
    {
        $this->num = $n;
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    // ルールの通過条件を設定
    public function passes($attribute, $value)
    {
        return $value % $this->num == 0;
        //
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    // 問題発生時のメッセージを返すメソッド。
    public function message()
    {
        return $this->num . 'で割り切れる値が必要です。';
        // return 'The validation error message.';
    }
}
