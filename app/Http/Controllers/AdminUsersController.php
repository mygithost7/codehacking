<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UsersRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get array and bring back
        $roles = Role::lists('name','id')->all();

        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //first step check request
        /*if($request->file('photo_id')){

            return 'photo exist';
        }*/

        if(trim($request->password)==''){

            $input = $request->except('password');

        }else{

            //second step - array with inputs
            $input = $request->all();

        }

        //check if photo added
        if($file = $request->file('photo_id')){

            //save name of photo with timestamp
            $name = time() . $file->getClientOriginalName();
            //will create a images folder for us in public directory
            $file->move('images', $name);
            //add in photo table name photo
            $photo = Photo::create(['file'=>$name]);//showd be array
            //add photo id in photo_id field table
            $input['photo_id'] = $photo->id;
        }
        //encrypt password
        $input['password'] = bcrypt($request->password);
        //add to User table all inputs
        User::create($input);

        return redirect('/admin/users');

        /*return $request->all();*/

        /*User::create($request->all());
        return redirect('/admin/users');*/

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
        return view('admin.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::findOrFail($id);

        $roles = Role::lists('name', 'id')->all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        if(trim($request->password)==''){

            $input = $request->except('password');

        }else{

            $input = $request->all();

        }


        $user = User::findOrFail($id);

        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

        //encrypt password
        $input['password'] = bcrypt($request->password);

        $user->update($input);

        return redirect('/admin/users');


        //check if work
        //return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
