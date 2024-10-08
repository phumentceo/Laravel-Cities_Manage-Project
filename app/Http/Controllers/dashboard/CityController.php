<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\District;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){
        
        if($request->get('search')){
        
            // i want to search with cityname or district name 
            $cities = City::with('districts')->where('name', 'LIKE', '%'.$request->get('search').'%')
            ->orWhereHas('districts', function ($query) use ($request) {
                $query->where('name', 'LIKE', '%'.$request->get('search').'%');
            })->paginate(5);
        }else{

            $cities = City::orderBy('id','DESC')->with('districts')->paginate(5);
        }
      
        

        
        return view('Dashboard.list',[
            'cities' => $cities
        ]);
    }


    public function detail(Request $request){
        $city = City::with('districts')->find($request->city);
        return response([
            'status' => 200,
            'data'   => $city
        ]);
    }

   
    public function create()
    {
       $districts = District::orderBy('id','DESC')->get();
       $cities    = City::orderBy('id','DESC')->get();
        return view('Dashboard.create',[
            'districts' => $districts,
            'cities'  => $cities
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

   

  
    public function edit(string $id)
    {
        $districts = District::orderBy('id','DESC')->get();
        $cities    = City::orderBy('id','DESC')->get();
        $city = City::find($id);
        $data['cities'] = $cities;
        $data['districts'] = $districts;
        $data['city'] = $city;
        return view('Dashboard.edit',$data);
    }

    public function getCity(Request $request){
        $city = City::with('districts')->find($request->city);
        return response([
           'status' => 200,
            'data'   => $city
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        
        if($request->destrict){
            $districts = $request->destrict;
           
            foreach($districts as $key => $value){
                 $district = District::find($value);
                 $district->city_id  = $request->city;
                 $district->update();
            }

        } 

        //update city
        $city = City::find($request->city);
        //move image 
        if($request->file('image') != null){
            $file = $request->file('image');
            $image = rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path("uploads"),$image);
            
            $city->image = $image;
           
        }

       
        $city->update();

        return redirect()->route('city.list')->with('success', 'City Updated Successfully!');
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = City::find($id);
        $city->delete();
        return redirect()->route('city.list')->with('success', 'City Deleted Successfully!');
    }
}
