<?php

namespace App\Http\Controllers\Dashboard\UserDashboard;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserDashboardController extends Controller {
    public function UserDashboardPage() {
        $users = User::all();
        return view('dashboard-user', compact('users'));
    }
}
