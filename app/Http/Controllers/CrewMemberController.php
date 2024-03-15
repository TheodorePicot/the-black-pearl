<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CrewMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Ship $ship)
    {
        $crewMembers = $ship->crewMembers;
        return view('livewire.crew.index', [
            'crewMembers' => $crewMembers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ship $ship, User $user)
    {
        $ship->crewMembers()->detach($user->id);
    }
}
