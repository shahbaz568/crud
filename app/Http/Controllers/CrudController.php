<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Events\StudentCreated;

class CrudController extends Controller
{
    public function index()
    {
        $data['students_data'] = Student::all();
        return view('index', $data);
    }
    public function openForm()
    {
        $data['students_data'] = Student::all();
        return view('form',[]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'mobile' => 'required|unique:students',
            'address' => 'required'
        ]);
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->address = $request->address;
        $student->save();

        $email_data = ['Name' => $request->name, 'email_id' => $request->email];
        event(new StudentCreated($email_data));
        return redirect()->route('get.data')
        ->with('success','Student has been created successfully.');
    }

    public function editData(Request $request, $id)
    {
        $data['edit_data'] = Student::find($id);
        return view('edit', $data);
    }

    public function updateData(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'address' => 'required',
        ]);
        $Student = Student::find($id);
        $Student->name = $request->name;
        $Student->email = $request->email;
        $Student->mobile = $request->mobile;
        $Student->address = $request->address;
        $Student->save();
        return redirect()->route('get.data')
        ->with('success','Student Has Been updated successfully');
    }

    public function deleteData(Request $request, $id)
    {
        $delete_data = Student::find($id)->delete();
        return redirect()->route('get.data')
        ->with('success','Student has been delete successfully.');
    }


}
