<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\BlackAnalysisWords;

class NGAnalysisWord implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        return !BlackAnalysisWords::where('analysis_ng_word', '=', $value)->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Error has occured due to ng analysis word was passed';
    }
}
