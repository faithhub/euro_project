<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Faculties;
use App\Models\Level;

class LevelController extends Controller
{
    
  public function index($dept_id, $faculty_id)
  {
    $data['faculties'] = Faculties::orderBy('name', 'ASC')->get();
    $data['departments'] = Department::orderBy('name', 'ASC')->get();
    $data['levels'] = Level::orderBy('id', 'ASC')->get();
      if (isset($faculty_id) && $faculty_id != Null && isset($dept_id) && $dept_id != Null)
      {
        try {
            $data['department'] = Department::where(['id' => $dept_id, 'faculty_id' => $faculty_id])->with('faculty:id,name,code')->first();
            return view('web.level', $data);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('index');
        }
      }else{
        return redirect('index');
      }
  }
}
