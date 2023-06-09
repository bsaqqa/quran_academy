<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuranCalcPages extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // database QuranAyat table
        // quran_ayat table: surah, aya, page, hezb, juze, verse_key (1:5), rub
        // get verse_form and verse_to from request
        $verse_form = $request->input('verse_form');
        $verse_to = $request->input('verse_to');
        $sura_form = $request->input('sura_form');
        $sura_to = $request->input('sura_to');

        // calculate pages from verses and return it

        // get page from verse_form
        $page_form = DB::table('quran_ayat')
            ->where('verse_key', $sura_form. ':'. $verse_form)
            ->value('page');

        // get page from verse_to
        $page_to = DB::table('quran_ayat')
            ->where('verse_key', $sura_to. ':'. $verse_to)
            ->value('page');

        // return page_to - page_form + 1
        return $page_to - $page_form + 1;
    }
}
