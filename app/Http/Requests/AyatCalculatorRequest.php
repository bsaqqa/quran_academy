<?php

namespace App\Http\Requests;

use App\Rules\VerseFromGreaterThanTo;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AyatCalculatorRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // verse_form
        // sura_form
        // verse_to
        // sura_to
        return [
            'verse_form' => ['required', 'integer', 'min:1', 'max:286', 'exists:quran_ayat,aya'],
            'sura_form' => ['required', 'integer', 'min:1', 'max:114', 'exists:quran_ayat,sura'],
            'verse_to' => ['required', 'integer', 'min:1', 'max:286', 'exists:quran_ayat,aya'],
            'sura_to' => ['required', 'integer', 'min:1', 'max:114', 'exists:quran_ayat,sura'],
            'verse_key_from' => ['required', 'string', 'exists:quran_ayat,verse_key'],
            'verse_key_to' => ['required', 'string', 'exists:quran_ayat,verse_key',  new VerseFromGreaterThanTo()],
        ];
    }

    protected function prepareForValidation()
    {
        // verse_key
        // sura + ':' + aya
        $this->merge([
            'verse_key_from' => $this->input('sura_form') . ':' . $this->input('verse_form'),
            'verse_key_to' => $this->input('sura_to') . ':' . $this->input('verse_to'),
        ]);
    }

    // messages

}
