<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        // $faqs = Faq::all();
        $faqs = Faq::orderBy('created_at', 'desc')->paginate(10);

        return view('front.faqs.index', compact('faqs'),[
            'page_title' => 'FAQs'
        ]);
    }

    public function create()
    {
        return view('front.faqs.create',[
            'page_title' => 'Create FAQ'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        Faq::create($request->all());

        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully.');
    }

    public function show(Faq $faq)
    {
        return view('front.faqs.show', compact('faq'),[
            'page_title' => 'FAQ Details'
        ]);
    }

    public function edit($id)
{
    $faq = Faq::findOrFail($id);
        return view('front.faqs.edit', compact('faq'),[
            'page_title' => 'Update FAQ'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $faq = Faq::findOrFail($id);
        $faq->update($request->all());

        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}