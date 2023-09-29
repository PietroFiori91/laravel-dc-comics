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