<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Carlist;
use App\User_general;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->admin) {
            $cars = DB::table('carlists')->get();
            $car_list = array();
            foreach ($cars as $key => $car) {
                $temp_array = array();
                $temp_array['car'] = $car;
                $general = DB::table('user_generals')->where('car_id',$car->id)->get();
                // $desired_object = $general->filter(function($item) {
                //     return $item->id == $car->id;
                // });
                $temp_array['general'] = $general;
                array_push($car_list, $temp_array);
                // array_merge($car_list, $temp_array);
            }
            // foreach ($car_list as $key => $info) {
            //     print_r($info);exit;
               
            // }
            // exit;
            // print_r($car_list[0]['car']);exit;
            // print_r($car_list[0]['general'][0]);exit;
            return view('adminPanel', compact('car_list'));
        }
        else {
            return redirect('/home');
        }
    }
    public function ToObject($Array) {
        // Create new stdClass object
        $object = new stdClass();
        // Use loop to convert array into object
        foreach ($Array as $key => $value) {
            if (is_array($value)) {
                $value = ToObject($value);
            }
            $object->$key = $value;
        }
        return $object;
    }
    public function getcar()
    {
        $useremail = Auth::user() -> email;
        $cars = DB::table('carlists')->get();
        $car_list = array();
        foreach ($cars as $key => $car) {
            $temp_array = array();
            $temp_array['car'] = $car;
            $general = User_general::where('car_id',$car_id)->where('email',$useremail)->get();
            $temp_array['general'] = $general;
            $result.push($temp_array);
        }
        return view('table', $car_list);
    }

    public function newCar(Request $request)
    {
        if(Auth::user()->admin) {
            $name = $request->input('name');
            $type = $request->input('type');
            $period = $request->input('period');
            $price = $request->input('price');
            DB::insert('insert into carlists (name,type,period,price) values(?,?,?,?)',[$name,$type,$period,$price]);
            return redirect('/admin-panel');
        }
    }

    public function removecar(Request $request)
    {
        if(Auth::user()->admin) {
            $id = $request->input('id');
            $result = DB::table('carlists')->where('name',$id)->delete();
            return response()->json(array('result'=> $result), 200);

            // return view('adminPanel', 'data' => $result)->render();
            // $view = view("adminPanel")->render();
            // echo response()->json(array('result'=> $result), 200);
        }
    }
}
