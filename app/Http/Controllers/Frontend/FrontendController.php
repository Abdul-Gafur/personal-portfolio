<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class FrontendController extends Controller
{
    public function index() {
        return view('frontend.index');
    }

    public function downloadResume(): BinaryFileResponse
    {
        $filePath = storage_path('app/public/resume/resume.pdf');

        if (file_exists($filePath)) {
            return response()->download($filePath, 'Abdul\'s-Resume');
        } else {
            abort(404, 'Resume not found.');
        }
    }
}
