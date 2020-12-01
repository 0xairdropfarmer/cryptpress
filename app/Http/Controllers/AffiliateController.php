<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;

class AffiliateController extends Controller
{
    public function index()
    {
        return view('backend.affiliate.index');
    }

    public function create()
    {
        return view('backend.affiliate.create');
    }

    public function edit(Affiliate $affiliate)
    {
        return view('backend.affiliate.edit', compact('affiliate'));
    }
}
