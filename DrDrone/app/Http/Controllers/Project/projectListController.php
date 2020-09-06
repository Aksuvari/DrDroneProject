<?php

namespace App\Http\Controllers\project;

use App\Http\Controllers\Controller;
use App\Models\Project\projectModel;
use Dnsimmons\OpenWeather\OpenWeather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class projectListController extends Controller
{
    public function projectListShow(){
        $weather = new OpenWeather();
        $current= $weather->getCurrentWeatherByCityName("adana","metric");

        $project=projectModel::orderBy('created_at','ASC')->get();
        return view('Admin.Project.projectList',compact('current','project'));
    }
    public function projectUpdatePage($id){
        $weather = new OpenWeather();
        $current= $weather->getCurrentWeatherByCityName("adana","metric");
        $project=projectModel::find($id);
        return view('Admin.Project.projectUpdate',compact('current','project'));
    }
    public function projectUpdatePagePost($id,Request $request){
        $weather = new OpenWeather();
        $current= $weather->getCurrentWeatherByCityName("adana","metric");
        $request->validate([
            'project_name'=>'min:3',
            'image'=>'image|mimes:jpeg,png,gif,jpg,svg|max:2048  '
        ]);
        $project=projectModel::findOrFail($id);
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

        return back();
    }
    public function projectDeletePost($id,Request $request){
        $weather = new OpenWeather();
        $current= $weather->getCurrentWeatherByCityName("adana","metric");
        $project=projectModel::find($id);
        $project->delete();
        return back();

    }




    /*public function projectUpdatePage($id){
        $weather = new OpenWeather();
        $current= $weather->getCurrentWeatherByCityName("adana","metric");
        $project=projectModel::find($id);
       // $project=projectModel::orderBy('ASC','created_at')->get();
        return Storage::download($project->path,$project->title);
    }
    public function projectUpdatePagePost($id,Request $request){
        $weather = new OpenWeather();
        $current= $weather->getCurrentWeatherByCityName("adana","metric");
        $project=projectModel::find($id);
        $project->project_name=$request->project_name;
        $project->image=$request->image;
        $project->save();
        return redirect('/projectList');
    }*/
}
