<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:90',
            'thumb' => 'nullable|url',
            'price' => 'nullable',
            'series' => 'nullable|max:100',
            'type' => [
                'nullable',
                Rule::in(['comic book','graphic novel'])
            ],
            'sale_date' => 'nullable|date',
            'description' => 'nullable|max:500',
        ]);

        $data = $request->all();



        $comic = new Comic();

        
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
            
            
        $comic->save();


    //  @dd($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    //public function show(Comic $comic)con l'uso delle depencies inkection
    public function show(String $id)
    {
        $comic = Comic::findOrFail($id);

         return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title' => 'required|max:90',
            'thumb' => 'nullable|url',
            'price' => 'nullable',
            'series' => 'nullable|max:100',
            'type' => [
                'nullable',
                Rule::in(['comic book','graphic novel'])
            ],
            'sale_date' => 'nullable|date',
            'description' => 'nullable|max:500',
        ]);

        $data = $request->all();

        $comic_update= Comic::findOrFail($id);

        $comic_update->update($data);

        return redirect()->route('comics.show', $comic_update->id);
    }

    /**
     * Remove the specified resource from storage.
     */
   
    public function destroy(Comic $comic)
    {
        
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
