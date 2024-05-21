<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // Use factory to generate 10 users if the table is empty
        if (DB::table('users')->count() == 0) {
            User::factory()->count(10)->create();
        }

        $users = User::all();
        return view('users.index', compact('users'));
    }
}
