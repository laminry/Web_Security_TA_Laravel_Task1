<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserModel;

class UserControl extends Controller
{
	  public function __construct(UserModel $users){
		$this->users = $users;
	}

  public function register(Request $request){
		$users = [
			"name" => $request->inputname,
			"email" => $request->inputemail,
			"password" => md5($request->inputpassword)
		];
		$this->users->create($users);
		return redirect()->action('UserControl@all');
	}

	public function all(){
		$allusers = $this->users->all();
		return view('all')->with('userlist', $allusers);
	}


  	public function search($id){
  		$users = $this->users->find($id);
      echo $users;
}


    	public function edit($id){
    		$users = $this->users->find($id);
    		return view('/edit', ['users'=>$users]);
    	}

    public function update(Request $request, $id){
		   $users = [
    		"name" => $request->inputname,
    		"email" => $request->inputemail,
    		"password" => md5($request->inputpassword)
    		  ];
		   $this->users->where('id', $id)->update($users);
       return redirect()->action('UserControl@all');
	}

  public function delete($id){
    $users = $this->users->where('id',$id)->delete();
    //return redirect()->back();
    return redirect()->action('UserControl@all');
 }

}
