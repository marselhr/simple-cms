<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('pages.admin.home');
    }

    public function renderCmsOverview()
    {
        return view('pages.admin.cms.index');
    }
}
