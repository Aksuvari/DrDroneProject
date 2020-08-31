<?php

namespace App\Http\Controllers\project;

use App\Http\Controllers\Controller;
use App\Models\Project\projectModel;
use App\Models\user;
use Dnsimmons\OpenWeather\OpenWeather;
use Illuminate\Http\Request;

class projectAddController extends Controller
{
    public function projectAddShow(){

        $weather = new OpenWeather();
        $current= $weather->getCurrentWeatherByCityName("adana","metric");
        return view('Admin.Project.projectAdd',compact('current'));
    }
    public function projectAddPost(Request $request){
        $weather = new OpenWeather();
        $current= $weather->getCurrentWeatherByCityName("adana","metric");

        $request->validate([
            'project_name'=>'min:3',
            'image'=>'required|image|mimes:jpeg,png,gif,jpg,svg|max:2048  '
        ]);

        $project=new projectModel();
        $project->project_name=$request->project_name;
        if($request->hasFile('image')){
            $imageName=$request->project_name.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $project->image='uploads/'.$imageName;
        }
        $project->project_analysis_id=1;
        $project->updated_at=now();
        $project->created_at=now();
        $project->save();


        return view('Admin.Project.projectAdd',compact('current'));
    }
}
