<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('captain');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Ship $ship)
    {
        return view('livewire.resources.management', [
            'resources' => $ship->resources
        ]);
    }
}
