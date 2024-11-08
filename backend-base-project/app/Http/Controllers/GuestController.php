namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return Guest::all();
    }

    public function show($id)
    {
        return Guest::findOrFail($id);
    }

    public function store(Request $request)
    {
        $guest = Guest::create($request->all());
        return response()->json($guest, 201);
    }

    public function update(Request $request, $id)
    {
        $guest = Guest::findOrFail($id);
        $guest->update($request->all());
        return response()->json($guest);
    }

    public function destroy($id)
    {
        Guest::destroy($id);
        return response()->json(null, 204);
    }
}
