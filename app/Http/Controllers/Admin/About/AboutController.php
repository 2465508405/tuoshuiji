<?php

namespace App\Http\Controllers\Admin\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\ProjectModel;
class AboutController extends Controller
{
    /**
     * Create a new controller instance
     * @return void
     */
    public function __construct()
    {
        $this->protectFlag = ProjectModel::first()->type;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $about = new About();

        if($this->protectFlag) {
            $abouts = $about->where('type',1)->paginate(15);
            return view('admin.en.about.index',['abouts'=>$abouts,'request'=>$request]);
        }else{
            $abouts = $about->where('type',0)->paginate(15);
            return view('admin.about.index',['abouts'=>$abouts,'request'=>$request]);
        }

    }

    public function create(Request $request){
        if($this->protectFlag) {
            return view('admin.en.about.create');
        }else{
            return view('admin.about.create');
        }
    }
    /*
     * 添加文章
     */
    public function postCreate(Request $request){
        $about = new About();
        $about->name = $request->input('name');
        $about->content = $request->input('content');
        if($this->protectFlag) {
            $about->type = 1;
        }
        $about->meta_keyword = $request->input('meta_keyword');
        $about->meta_description = $request->input('meta_description');
        $about->status = intval($request->input('status'));
        if($about->save()){
            return redirect('/about/list');
        }
    }
    /*
     * 编辑
     */
    public function edit(Request $request){
        $id = $request->input('id');
        $about = About::where('id',$id)->first();
        if($this->protectFlag) {
            return view('admin.en.about.edit', ['about' => $about]);
        }else{
            return view('admin.about.edit', ['about' => $about]);
        }
    }
    /*
     * 编辑处理
     */
    public function postEdit(Request $request){
        $id = $request->input('id');
        $about = About::where('id',$id)->first();
        $about->name = $request->input('name');
        $about->meta_keyword = $request->input('meta_keyword');
        $about->meta_description = $request->input('meta_description');
        $about->content = $request->input('content');
        $about->status = intval($request->input('status'));
        if($about->save()){
            return redirect('/about/list');
        }
    }

    public function del(Request $request){
        $id = $request->input('id');
        $result = About::where('id',$id)->delete();
        if($request){
            return json_encode(['code'=>0,'msg'=>'删除成功']);
        }
    }
}