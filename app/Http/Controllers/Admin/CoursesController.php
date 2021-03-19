<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CoursesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->create_new = new Course();
    }
    public function create(Request $request)
    {
        if ($_POST) {
            if ($request->id) {
                $rules = array(
                    'name' => ['required', 'max:255'],
                    'faculty_id' => ['required', 'max:255']
                );
                $fieldNames = array(
                    'name'   => 'Department Name',
                    'faculty_id'   => 'Faculty',
                );
                $validator = Validator::make($request->all(), $rules);
                $validator->setAttributeNames($fieldNames);
                if ($validator->fails()) {
                    Session::flash('warning', 'Please check the form again!');
                    return back()->withErrors($validator)->withInput();
                } else {
                    try {                                       
                        $faculty = Department::find($request->id);
                        $faculty->name = $request->name;
                        $faculty->faculty_id = $request->faculty_id;
                        $faculty->save();
                        Session::flash('success', 'Department Updated Successfully');
                        return redirect('admin/departments');
                    } catch (\Throwable $th) {
                        Session::flash('error', $th->getMessage());
                        return redirect('admin/departments');
                    }
                }
            } else {
                $rules = array(
                    'name' => ['required', 'max:255'],
                    'faculty_id' => ['required', 'max:255']
                );
                $fieldNames = array(
                    'name'   => 'Department Name',
                    'faculty_id'   => 'Faculty',
                );
                $validator = Validator::make($request->all(), $rules);
                $validator->setAttributeNames($fieldNames);
                if ($validator->fails()) {
                    Session::flash('warning', 'Please check the form again!');
                    return back()->withErrors($validator)->withInput();
                } else {
                    try {
                        try {
                            $check = Department::where(['name' => $request->name, 'faculty_id' => $request->faculty_id])->count();
                            if ($check > 0) {
                                Session::flash('error', 'Department Name has already been created');
                                return \back();
                            } else {
                                try {
                                    $this->create_new->create($request);
                                    Session::flash('success', 'Department Added Successfully');
                                    return \back();
                                } catch (\Throwable $th) {
                                    Session::flash('error', $th->getMessage());
                                    return \back();
                                }
                            }
                        } catch (\Throwable $th) {
                            Session::flash('error', $th->getMessage());
                            return \back();
                        }
                    } catch (\Throwable $th) {
                        Session::flash('error', $th->getMessage());
                        return \back();
                    }
                }
            }
        } else {
            $data['departments'] = Department::with('faculty:id,name,code')->orderBy('id', 'ASC')->get();
            $data['faculties'] = Faculties::orderBy('id', 'ASC')->get();
            $data['title'] = 'Departments';
            $data['sn'] = 1;
            $data['mode'] = 'create';
            return view('admin.departments.index', $data);
        }
    }
}
