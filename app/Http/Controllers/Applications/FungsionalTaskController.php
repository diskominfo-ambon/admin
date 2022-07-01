<?php

namespace App\Http\Controllers\Applications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;

class FungsionalTaskController extends Controller
{
    public function index() {
        $task = Application::selectedKey('task')->first();

        return view('internal.about.functional', compact('task'));
    }

    public function store(Request $request) {
        $body = $request->all();

        $task = Application::selectedKey('task')->first();

        if ($task == null) {

            Application::create([
                'key' => 'task',
                'slug' => 'task',
                'content' => $body['content']
            ]);
        } else {

            $task->update($body);
        }

        return redirect()->back()->with('flash', 'Berhasil menyimpan perubahan entry');
    }
}
