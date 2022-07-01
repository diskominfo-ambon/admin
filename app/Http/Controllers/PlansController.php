<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Plan;

class PlansController extends Controller
{
    public function index()
    {
        $plans = Plan::latest()->paginate(20);
        return view('internal.plan.index', compact('plans'));
    }

    public function create()
    {
        return view('internal.plan.new');
    }


    public function store(Request $request)
    {
        $body = $request->merge([
            'slug' => Str::of($request->title)->slug(),
        ]);

        Plan::create($body->all());

        return redirect()->route('plan.index')
            ->with('flash', 'Berhasil menambahkan entry baru');
    }


    public function edit(int $id)
    {
        $plan = Plan::findOrFail($id);

        return view('internal.plan.edit', compact('plan'));
    }


    public function update(Request $request, int $id)
    {
        $body = $request->merge([
            'slug' => Str::of($request->title)->slug(),
        ]);
        $plan = Plan::findOrFail($id);
        $plan->update($body->all());

        return redirect()->route('plan.index')
            ->with('flash', 'Berhasil mengubah entry');
    }

}
