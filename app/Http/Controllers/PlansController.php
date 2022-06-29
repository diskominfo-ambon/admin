<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index()
    {
        return view('internal.plan.index');
    }

    public function create()
    {
        return view('internal.plan.new');
    }


    public function store(Request $request)
    {
        $request->validated();
        $post = $request->all();

        Plan::create($post);

        return redirect()->route('plan.index')
            ->with('flash', 'Berhasil menambahkan entry baru');
    }


    public function edit(Plan $post)
    {

        return view('plan.edit', compact('post'));
    }


    public function update(Request $request, Plan $post)
    {
        $body = $request->all();
        $post->update($body);

        return redirect()->route('plan.index')
            ->with('flash', 'Berhasil mengubah entry');
    }

}
