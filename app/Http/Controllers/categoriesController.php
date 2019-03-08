<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests\categoriesRequest;
class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCategories=Category::orderBy('id','ASC')->paginate(5);
        return view('admin.categories.index')->with('categories',$allCategories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(categoriesRequest $request)
    { $category=new Category($request->all());
       $category->save();
       Flash::success("The Category ".$category->name." has been registered correctly!");
       return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryData= Category::find($id);
        return view('admin.categories.edit')->with('category',$categoryData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {$category=Category::find($id);

         $category->fill($request->all());
         $category->save();
         Flash::warning("The Category ".$category->name." has been update correctly!");
           return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        Flash::error("The user ".$category->name." has been deleted correctly!");
        return redirect()->route('categories.index');
    }
}
