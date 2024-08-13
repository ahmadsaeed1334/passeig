<?php

namespace App\Http\Controllers;

use App\Models\BestService;
use Illuminate\Http\Request;

class BestServiceController extends Controller
{
    public function index()
    {
        $bestService = BestService::first();

        return view('front.best_services.index', compact('bestService'), [
            'page_title' => 'Best Services Section'
        ]);
    }

    public function create()
    {
        $bestService = BestService::first();
        if ($bestService) {
            return redirect()->route('best_services.edit', $bestService->id);
        }

        return view('front.best_services.create', [
            'page_title' => 'Create Best Services Section'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'top_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'description_2' => 'required|string',
        ]);

        BestService::create($request->all());

        return redirect()->route('best_services.index')->with('success', 'Best Services section created successfully.');
    }

    public function edit(BestService $bestService)
    {
        return view('front.best_services.edit', compact('bestService'), [
            'page_title' => 'Edit Best Services Section'
        ]);
    }

    public function update(Request $request, BestService $bestService)
    {
        $request->validate([
            'top_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'description_2' => 'required|string',
        ]);

        $bestService->update($request->all());

        return redirect()->route('best_services.index')->with('success', 'Best Services section updated successfully.');
    }
}
