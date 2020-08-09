<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function insert(Request $request) {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|min:5|max:25',
            'address' => 'min:5|max:100',
            'phone' => 'numeric'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }
        else {

        $newData = new Employee();
        $newData->full_name = $request->fullname;
        $newData->email = $request->email_address;
        $newData->address = $request->address;
        $newData->phone = $request->phone;

        $newData->save();
        }

        return redirect('/home');
    }

    public function view() {
        $data = Employee::paginate(3);

        return view('home',['data' => $data]);
    }

    public function update($id) {
        $data = Employee::find($id);

        return view('update',['data' => $data]);
    }

    public function updatePost(Request $request) {

        $data = Employee::find($request->id);
        $data->full_name = $request->full_name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->phone = $request->phone;

        $data->save();

        return redirect('/home');
    }

    public function delete($id) {
        $data = Employee::find($id);

        $data->delete();

        return redirect('/home');
    }

    public function search(Request $request) {
        $data = Employee::where('full_name',$request->search)->first();

        return view('search-result',['data' => $data]);
    }
}
