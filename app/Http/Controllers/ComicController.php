<?php
use Illuminate\Http\Request;
use App\Models\Comic;

public function index()
{
$comics = Comic::all();
return view('comics.index', compact('comics'));
}

public function show($id)
{
$comic = Comic::findOrFail($id);
return view('comics.show', compact('comic'));
}

public function create()
{
return view('comics.create');
}

public function store(Request $request)
{
// VALIDAZIONE DATI
$validatedData = $request->validate([
'title' => 'required|string',
'description' => 'required|string',
'thumb' => 'required|url',
'price' => 'required|numeric',
'series' => 'required|string',
'sale_date' => 'required|date',
'type' => 'required|string',
'artists' => 'required|array',
'writers' => 'required|array',
]);

// CREA FUMETTO
$comic = Comic::create($validatedData);

// REINDIRIZZAMENTO
return redirect()->route('comics.show', $comic->id)->with('success', 'Fumetto creato con successo');
}

public function edit(Comic $comic)
{
return view('comics.edit', compact('comic'));
}

public function update(Request $request, Comic $comic)
{
// VALIDAZIONE DATI
$validatedData = $request->validate([
'title' => 'required|string',
'description' => 'required|string',
'thumb' => 'required|url',
'price' => 'required|numeric',
'series' => 'required|string',
'sale_date' => 'required|date',
'type' => 'required|string',
'artists' => 'required|array',
'writers' => 'required|array',
]);

// AGGIORNA FUMETTO
$comic->update($validatedData);

// REINDIRIZZA + MSG SUCCESSO
return redirect()->route('comics.show', $comic->id)->with('success', 'Fumetto aggiornato con successo');
}

public function destroy(Comic $comic)
{
// ELIMINA FUMETTO
$comic->delete();

// REINDIRIZZA + MSG SUCCESSO
return redirect()->route('comics.index')->with('success', 'Fumetto eliminato con successo');
}