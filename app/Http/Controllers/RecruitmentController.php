<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class RecruitmentController extends Controller
{
    public function index(): View
    {
        return view('recruitment.index', [
            'content' => config('recruitment'),
        ]);
    }
}
