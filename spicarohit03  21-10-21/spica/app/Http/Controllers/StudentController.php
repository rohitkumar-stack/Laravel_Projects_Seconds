<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Student;

class StudentController extends Controller
{

    // start-login after open dashborad otherwise not open dashboard
    //checking of login
    public function __construct() {
        $this->middleware('auth');
    }

    // End-login after open dashborad otherwise not open dashboard



    //perfect
    public function perfect()
    {
      return view ('dashboard.perfect');  
    }


    
    //index

    public function index()
    {
    	return view ('dashboard.index');
    }

    //login
    public function login()
    {
    	return view ('dashboard.login');
    }
    
    //register
    public function register()
    {
    	return view ('dashboard.register');
    }

 // -------------- [ Edit-Update post ] ---------------
    //Edit page 
    public function edit($id)
    {
        $student = Student::find($id);
        // die('hj');
        if($student)
        {

            return response()->json([
                'status'=>200,
                'student'=> $student,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Student Found.'
            ]);
        }

    }

//update page with validation
       public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'firstname'=> 'required|max:191',
            'lastname'=> 'required|max:191',
            'email'=>'required|email|max:191',
            'gender'=> 'required|max:191',
            'date'=> 'required|max:191',
            
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else
        {
            $student = Student::find($id);
            if($student)
            {
                $student->firstname = $request->input('firstname');
                $student->lastname = $request->input('lastname');
                $student->email = $request->input('email');
                $student->gender = $request->input('gender');
                $student->date = $request->input('date');

                $student->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'Student Updated Successfully.',
                    'student_detail'=>$student,
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'No Student Found.'

                ]);
            }

        }
    }


//<------------  End -Edit-Update-------->





    // -------------- [ Delete post ] ---------------
       public function destroy($id)
    {

        $student = Student::find($id);

        if($student)
        {
            // die('hj');
            $student->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Student Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Student Found.'
            ]);
        }
    }

//<------------  End -Delete-------->


// Start-display page 
     public function indexs(){
        $data["students"] = Student::get();
        // dd($data);
        return view('dashboard.index', $data);
    }
    
    public function fetchstudent(Request $request){
        $input = $request->input();
        // $input['created_by'] = Auth::User()->id;
        $student_detail = Student::create($input);
        return response()->json([
            'status'=>200,
            "student_detail" => $student_detail,
            'message'=>'Student Added Sucessfully',
        ]);
    }

// End- display page t_detail,


    // Start-ajax help with showing validator

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'firstname'=>'required|max:191',
            'lastname'=>'required|max:191',
            'email'=>'required|email|max:191',
            'gender'=>'required|max:191',
            'date'=>'required|max:191',
        ]);
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }
        else{
            $student = new Student;
            $student->firstname = $request->input('firstname');
            $student->lastname = $request->input('lastname');
            $student->email = $request->input('email');
            $student->gender = $request->input('gender');
            $student->date = $request->input('date');

            $student->save();
            return response()->json([
                'status'=>200,
                'message'=>'Student Added Sucessfully',
                'student_detail'=>$student,
            ]);


        }

    }


// End-ajax help with showing validator



}
