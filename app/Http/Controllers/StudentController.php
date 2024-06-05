<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Course;
use App\Models\Student;
=======
>>>>>>> origin/main
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //method untuk menampilkan data student
    public function index(){
        // menarik data dari database
        $students = Students::all();
        

        // panggil view dan kirim data students
        return view('admin.contents.student.index',[
            'students' => $students
        ]);
    }
<<<<<<< HEAD
    // method untuk menampilkan form tambah student
    public function create(){
        // mendapatkan data courses
        $courses = Course::all();

        return view('admin.contents.student.create', [
            'courses' => $courses
        ]);
    }

    // method untuk menyimpan data student baru
    public function store(Request $request){
        // validasi request 
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
            'course_id' => 'nullable',
        ]);

        // simpan ke database
        Students::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
            'course_id' => $request->course_id,
        ]);

        // kembalikan kehalaman student
        return redirect('/admin/student')->with('message', 'Berhasil Menambahkan Student');
    }

    // method untuk menampilkan halaman edit
    public function edit($id,){
        // cari data student berdasarkan id
        $student = Students::find($id); // Select * FOM students WHERE id = $id;
        
        return view('admin.contents.student.edit', [
            'student' => $student
        ]);
    }

    //method untuk menyimpan hasil update
    public function update($id, Request $request){
         // cari data student berdasarkan id
         $student = Students::find($id); // Select * FOM students WHERE id = $id;

         // validasi request 
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
        ]);

        // simpan perubahan
        $student->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
        ]);
         // kembalikan kehalaman student
         return redirect('/admin/student')->with('message', 'Berhasil Mengedit Student');

    }

    // method untuk menghapus student
    public function destroy($id){
         // cari data student berdasarkan id
         $student = Students::find($id); // Select * FOM students WHERE id = $id;

         // hapus student
         $student->delete();

         // kembalikan kehalaman student
         return redirect('/admin/student')->with('message', 'Berhasil Mengedit Student');
    }
=======
>>>>>>> origin/main

}
