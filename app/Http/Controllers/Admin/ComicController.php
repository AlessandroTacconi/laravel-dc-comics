<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
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

    //         $request->validate([
    //         'title' => 'required|unique:comics|max:75',
    //         'thumb' => 'max:75|ends_with:jpg,png',
    //         'price' => 'required|max:10',
    // ]);

        $data = $request->all();

$form_data = $this->validation($request->all());

        $comic = new Comic();

        $comic->title = $data['title'];
        $comic->price = $data['price'];
        $comic->save();

        return redirect()->route('comics.show', $comic->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {

        return view('comics.show', compact('comic')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
$form_data = $this->validation($request->all());

        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }


private function validation($data)
{
    $validator = Validator::make($data, [
            'title' => 'required|unique:comics|max:75',
            'thumb' => 'max:75',
            'price' => 'required|max:10',
    ], [
        'title.required' => 'Il titolo è obbligatorio',
        'title.unique' => 'Il titolo è già presente',
        'title.max' => 'Il titolo può avere massimo :max caratteri',
        'thumb.max' => 'immagine non valida',
        'price.required' => 'Il prezzo è obbligatorio',
        'price.max' => 'Il prezzo può avere massimo :max caratteri',
    ])->validate();

    return $validator;
}
}



