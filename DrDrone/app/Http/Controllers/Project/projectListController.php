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
