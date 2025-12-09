<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Inertia\Inertia;

class TrackController extends Controller
{
    public function index()
    {
        $tracks = Track::all();
        return Inertia::render('Tracks/Index', [
            'tracks' => $tracks,
        ]);
    }
}
