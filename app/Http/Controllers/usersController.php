<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\userRequest;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $allUsers=User::orderBy('id','ASC')->paginate(5);
      return view('admin.users.index')->with('users',$allUsers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Lo cambie para usar los manejadores de errores crendo mi propio Request (public function store(Request $request))
    public function store(userRequest $request)
    {
       $user=new User($request->all());
       $user->password=bcrypt($user->password);
       $user->save();
      // dd('User inserted succefull');
      //Creamos el  mensaje:
      Flash::success("The user ".$user->name." has been registered correctly!");
      return redirect()->route('users.index');


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
    { $userData= User::find($id);
      return view('admin.users.edit')->with('user',$userData);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { $user=User::find($id);
     // $user->name=$request->name;
     // $user->email=$request->email;
     // $user->type=$request->type;
     //this one is better
      $user->fill($request->all());
      $user->save();
      Flash::warning("The user ".$user->name." has been update correctly!");
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      // print($id);
        $user=User::find($id);
        $user->delete();
        Flash::error("The user ".$user->name." has been deleted correctly!");
        return redirect()->route('users.index');

    }
}
