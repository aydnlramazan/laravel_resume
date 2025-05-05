<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Skills;

class ResumeController extends Controller
{
    public function index()
    {
        $about = About::get()->first();
        $contact = Contact::get();
        $experience = Experience::get();
        $skills = Skills::get();
        $education = Education::get();

        return view('index', compact('about', 'contact','experience', 'skills', 'education'));
    }
}
