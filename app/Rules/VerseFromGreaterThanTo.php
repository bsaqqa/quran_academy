<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class VerseFromGreaterThanTo implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param string $attribute
     * @param mixed $value
     * @param \Closure(string): PotentiallyTranslatedString $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // verse_key = sura + ':' + aya
        $sura_from = request()->input('sura_form');
        $sura_to = request()->input('sura_to');
        $aya_from = request()->input('verse_form');
        $aya_to = request()->input('verse_to');

        // check if sura_from > sura_to
        if($sura_from > $sura_to){
            $fail(trans('api.messages.sura_from_greater_than_sura_to'));
        }
        // check if sura_from == sura_to
        if($sura_from == $sura_to){
            // check if aya_from > aya_to
            if($aya_from > $aya_to){
                $fail(trans('api.messages.aya_from_greater_than_aya_to'));
            }
            // check if aya_from == aya_to
            if($aya_from == $aya_to){
                $fail(trans('api.messages.aya_from_equal_aya_to_sura_from_equal_sura_to'));
            }
        }

    }
}
