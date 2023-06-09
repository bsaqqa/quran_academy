<?php

namespace App\Http\Controllers\API;

use App\Classes\Responder;
use App\Http\Controllers\Controller;
use App\Http\Requests\AyatCalculatorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuranCalcPages extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(AyatCalculatorRequest $request)
    {
        // database QuranAyat table
        // quran_ayat table: surah, aya, page, hezb, juze, verse_key (1:5), rub
        // get verse_form and verse_to from request
        $verse_key_from = $request->input('verse_key_from');
        $verse_key_to = $request->input('verse_key_to');

        // calculate pages from verses and return it
        // get page from verse_form
        $page_form = DB::table('quran_ayat')
            ->where('verse_key', $verse_key_from)
            ->value('page');


        // get page from verse_to
        $page_to = DB::table('quran_ayat')
            ->where('verse_key', $verse_key_to)
            ->value('page');

        // return page_to - page_form + 1
        return Responder::init()
            ->setData([
                'pages_count' => $page_to - $page_form + 1
            ])
            ->setMessage(trans('api.messages.retrieved_successfully'))
            ->success()
            ->respond();
    }
}
