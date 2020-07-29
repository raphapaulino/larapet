<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    public function index(Request $request)
    {
        $animals = Animal::paginate();
        return $animals;
    }

    public function store(Request $request)
    {
        $animal = Animal::create($request->all());
        $animal->refresh();
        return $animal;
    }

    public function update(Request $request, Animal $animal)
    {
        $animal = $animal->fill($request->all());
        $animal->save();
        return $animal;
    }

    public function destroy(Animal $animal)
    {
        $animal->delete();
        return response()->json([], 204);
    }
}