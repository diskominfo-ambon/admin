<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    public function index()
    {
        $annos = Announcement::latest()->paginate(20);

        return view('internal.anno.index', compact('annos'));
    }


    public function create()
    {
        return view('internal.anno.new');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'attachment' => 'required|mimes:pdf|max:30000'
        ]);

        $body = $request->all();

        $file = $request->file('attachment');
        $name = $file->getClientOriginalName();
        $path = $file->store('announcement', ['disk' => 'public']);


        Announcement::create(
            array_merge($body, [
                'slug' => Str::of($request->title)->slug(),
                'attachment' => $name,
                'attachmentUrl' => $path
            ])
        );

        return redirect()->route('anno.index')->with('flash', 'Berhasil menambahkan entry baru');
    }


    public function update(Request $request, int $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'attachment' => 'mimes:pdf|max:30000'
        ]);

        $body = $request->all();
        $anno = Announcement::findOrFail($id);

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $name = $file->getClientOriginalName();
            $path = $file->store('announcement', ['disk' => 'public']);

            $body['attachment'] = $name;
            $body['attachmentUrl'] = $path;
        }

        $anno->update(array_merge($body, [
            'slug' => Str::of($request->title)->slug(),
        ]));

        return redirect()->route('anno.index')->with('flash', 'Berhasil menggubah entry baru');
    }


    public function edit(int $id)
    {
        $anno = Announcement::findOrFail($id);

        return view('internal.anno.edit', compact('anno'));
    }
}
