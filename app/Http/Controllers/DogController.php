<?php

namespace App\Http\Controllers;

use App\Http\Requests\DogRequest;
use App\Models\Dog;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\View\View;
use LogicException;

class DogController extends Controller
{
    public function list(): View
    {
        return view('dogs.list');
    }

    public function index(): View
    {
        $data = User::with('dogs')
            ->latest()
            ->paginate(10);

        return view('dogs.index', compact('data'));
    }

    public function store(DogRequest $request): mixed
    {
        $userId = auth()->user()->id;

        try {
            if (Dog::whereUserId($userId)->count() === 3) {
                throw new LogicException(trans('Unable to like more than 3 breeds.'));
            }

            Dog::updateOrCreate(
                [
                    'name' => $request->input('name'),
                    'user_id' => $userId,
                ],
                $request->validated()
            );
        } catch (Exception $e) {
            report($e);

            return redirect()
                ->route('dogs.list')
                ->dangerBanner($e->getMessage());

        } catch (LogicException $le) {
            report($le);

            return redirect()
                ->route('dogs.list')
                ->dangerBanner($le->getMessage());
        }

        return redirect()
            ->route('dogs.list')
            ->banner(trans('Dog added to liked.'));
    }
}
