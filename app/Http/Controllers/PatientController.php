<?php
/**
 * Created by PhpStorm.
 * User: Jaggesher
 * Date: 16-Mar-18
 * Time: 12:08 AM
 */

namespace App\Http\Controllers;


use App\date;
use App\doctor;
use App\serial;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\patient;
use Hash;
use Auth;

class PatientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:patient', ['except' => 'ViewPatient']);
    }


    public function ViewPatient($id)
    {
        $dbVar = patient::find($id);
        if ($dbVar != null) {
            $dbVar1 = serial::where('patient',$id)->with('date')->get();
            return View('Patient.ViewPatient')->with('Personal', $dbVar)->with('info',$dbVar1);
        }
        return redirect('error');

    }

    public function EditPatient()
    {
        $id = Auth::guard('patient')->user()->id;
        $dbVar = patient::find($id);
        return view('Patient.EditPatient')->with('Personal', $dbVar);
    }

    public function Info()
    {
        $id = Auth::guard('patient')->user()->id;
        $dbVar = patient::find($id);
        return view('Info.info')->with('Personal', $dbVar);
    }


    public function EditPatientSubmit(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required|string|max:20',
            'lname' => 'required|string|max:20',
         
            'phone' => 'required|numeric',
      
        ]);

        $id = Auth::guard('patient')->user()->id;
        $dbVar = patient::find($id);
        $dbVar->fname = $request['fname'];
        $dbVar->lname = $request['lname'];
       
        $dbVar->phone = $request['phone'];
     

        $dbVar->save();

        return redirect()->route('ViewPatient', ['id' => $id]);
    }

     public function EditPatientPetSubmit(Request $request)
    {
        $this->validate($request, [
            'pname' => 'required|string|max:20',
            'jenishewan' => 'required|string|max:20',
            'ras' => 'required|string|max:20',
            'age' => 'required|integer',
            'gender' => 'required|string',
        ]);

        $id = Auth::guard('patient')->user()->id;
        $dbVar = patient::find($id);
        $dbVar->pname = $request['pname'];
        $dbVar->jenishewan = $request['jenishewan'];
        $dbVar->ras = $request['ras'];
        $dbVar->age = $request['age'];
        $dbVar->gender = $request['gender'];

        $dbVar->save();

        return redirect()->route('ViewPatient', ['id' => $id]);
    }

    public function EditPatientPicSubmit(Request $request)
    {
        $this->validate($request, [
            'fileToUpload' => 'required|image|mimes:jpeg,jpg,png|max:2500',
        ]);

        $file = $request->file('fileToUpload');
        $id = Auth::guard('patient')->user()->id;;
        $dbVar = patient::find($id);
        $destinationPath = "profilePicture";
        $fileName = $id . 'P.' . $file->getClientOriginalExtension();
        $uploadSuccess = $file->move($destinationPath, $fileName);
        if ($uploadSuccess) {
            $dbVar->img = $destinationPath . '/' . $fileName;
            $dbVar->save();
            return redirect()->route('ViewPatient', ['id' => $id]);
        }
        //Here just send a flush message for for someting wrong for storing picture
        $request->session()->flash('wrong', 'Something Went Wrong. Please Try Latter');

        return redirect()->back();
    }

    public function EditPatientPassSubmit(Request $request)
    {
        $id = Auth::guard('patient')->user()->id;
        $dbVar = patient::find($id);
        $hashedPassword = $dbVar->password;

        $this->validate($request, [
            'old_password' => 'required|max:15|min:6',
            'password' => 'required|max:15|min:6|confirmed',
        ]);

        if (Hash::check($request->old_password, $hashedPassword)) {
            $dbVar->password = bcrypt($request['password']);
            $dbVar->save();
            return redirect()->route('ViewPatient', ['id' => $id]);
        }

        //Here just send a flush message for invalid old password
        $request->session()->flash('no_match', 'Invalid Old Password');

        return redirect()->back();
    }

    public function bookSerial($id)
    {
        $dbVar = date::find($id);
        $dbVar2 = doctor::find($dbVar->doctor);
        $dbVar1 = serial::where('serial_date', $id)->get();
        //return $dbVar;
        return view('Patient/serial')->with('Date', $dbVar)->with('Doctor', $dbVar2)->with('Serials', $dbVar1);
    }

    public function bookedSerial(Request $request)
    {
        $id = Auth::guard('patient')->user()->id;
        $dbVar = serial::find($request->optradio);
        if ($dbVar != null && $dbVar->patient == null) {
            $dbVar->patient = $id;
            $dbVar->save();
            return redirect()->route('ViewPatient', ['id' => $id]);
        }
        return redirect()->back();
    }

}