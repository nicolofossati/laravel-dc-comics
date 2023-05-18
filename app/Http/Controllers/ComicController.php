<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //Viene usato per prendere dal DB tutti i record di un’entità e passarli ad una view.
    {
        $comics = Comic::All();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:65535',
            'thumb' => 'required|max:255',
            'price' => 'required|max:10',
            'series' => 'required|max:100',
            'sale_date' => 'required|max:20',
            'type' => 'required|max:100',
        ]);

        $form = $request->all();

        $newComic = new Comic();
        $newComic->title = $form['title'];
        $newComic->description = $form['description'];
        $newComic->thumb = $form['thumb'];
        $newComic->price = $form['price'];
        $newComic->series = $form['series'];
        $newComic->sale_date = $form['sale_date'];
        $newComic->type = $form['type'];
        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:65535',
            'thumb' => 'required|max:255',
            'price' => 'required|max:10',
            'series' => 'required|max:100',
            'sale_date' => 'required|max:20',
            'type' => 'required|max:100',
        ]);

        $form = $request->all();
        $comic->update($form);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}