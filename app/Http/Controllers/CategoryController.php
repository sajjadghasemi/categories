<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\createRequestCategory;
use App\Http\Requests\Category\updateRequestCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriesshow=Category::with('childrenRecursive')->where('parent_id',null)
            ->orderBy('number')->paginate(10);
        return view('categories')->with('categoriesshow',$categoriesshow);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        Category::create([
//            'name'=>$request->name,
//            'parent_id'=>$request->parent_id,
//            'number'=>$request->number
//        ]);
//        session()->flash('success','دسته بندی با موفقیت ایجاد شد.');
//        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Category $category)
    {

    }

    public function apiIndex()
    {
        $categories=Category::where('parent_id',null)->get();
        $response=[
            'categories'=>$categories
        ];
        return response()->json($response,200);
    }

    public function selectedCat(Request $request)
    {
        $selectedCat=$request->all();
        return response()->json($selectedCat,200);
    }

    public function ajaxIndex()
    {

    }

    public function ajaxStore(Category $category,createRequestCategory $request)
    {
        $categories   =   Category::create($request->all());

        return Response()->json($categories,200);
    }

    public function ajaxUpdate(Category $category,Request $request)
    {
        if ($request['subName']){
            DB::table('categories')->where('id',$request['id'])->update(['name' => $request['subName']]);
            session()->flash('success','دسته بندی با موفقیت ویرایش شد.');
            return redirect(route('categories.index'));
        }else{
            DB::table('categories')->where('id',$request['id'])->delete();
            session()->flash('success','دسته بندی با موفقیت حذف شد.');
            return redirect(route('categories.index'));
        }
    }
}
