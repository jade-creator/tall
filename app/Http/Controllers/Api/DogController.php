<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DogRequest;
use App\Models\Dog;

class DogController extends Controller
{
    public function index(): mixed
    {
        $dogs = Dog::whereUserId(auth()->user()->id)
            ->latest()
            ->get();

        return response([
            'message' => 'Get liked dogs',
            'data' => $dogs,
        ]);
    }

    public function destroy(string $name): mixed
    {
        $dog = Dog::whereUserId(auth()->user()->id)
            ->whereName($name)
            ->first();

        if ($dog instanceof Dog) {
            $dog->delete();
        }

        return response([
            'message' => trans('Dog successfully unliked.'),
        ]);
    }
}
