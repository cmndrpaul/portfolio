<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::orderBy('sort_order', 'asc')->get();
        return view('pages.certificates.index', compact('certificates'));
    }
}
