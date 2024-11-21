// app/Http/Controllers/LoginUserController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('login_user');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard_user');
        }

        return back()->withErrors(['message' => 'Invalid username or password']);
    }
}
