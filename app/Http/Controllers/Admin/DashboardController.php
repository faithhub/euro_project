<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Faculties;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $data['sn'] = 1;
        $data['faculties'] = Faculties::orderBy('id', 'ASC')->get();
        $data['students'] = User::where('role', 'Student')->count();
        $data['lecturers'] = User::where('role', 'Lecturer')->count();
        return view('admin.dashboard.index', $data);
    }
}
