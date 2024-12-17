<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    
    public function index()
    {
        return Specialist::all();
    }

    public function store(Request $request)
    {
        $record = new Specialist();
        $record->fill($request->all());
        $record->save();
    }
    
    public function show(string $id)
    {
        return Specialist::find($id);
    }

    public function update(Request $request, string $id)
    {
        $user = Specialist::find($id);
        $user->fill($request->all());
        $user->save();
    }

    public function destroy(string $id)
    {
        Specialist::find($id)->delete();
    }
}
