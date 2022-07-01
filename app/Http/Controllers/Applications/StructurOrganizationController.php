<?php

namespace App\Http\Controllers\Applications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;

class StructurOrganizationController extends Controller
{
    public function index() {
        $organization = Application::selectedKey('organization')->first();

        return view('internal.about.organization', compact('organization'));
    }

    public function store(Request $request) {

        $request->validate([
            'pictureUrl' => 'required|max:2000|mimes:png,jpg'
        ]);

        $organization = Application::selectedKey('organization')->first();

        $file = $request->file('pictureUrl');
        $path = $file->store('img/organization', ['disk' => 'public']);

        if ($organization == null) {

            Application::create([
                'key' => 'organization',
                'slug' => 'organization',
                'content' => $path
            ]);
        } else {

            $organization->update([
                'content' => $path
            ]);
        }

        return redirect()->back()->with('flash', 'Berhasil menyimpan perubahan entry');
    }
}
