<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\models\UserModel;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
	{
		return view('panel.user.index', ['items' => UserModel::all()
		]);
	}

	public function add() 
	{
        $action ="Agregar";
        return view('panel.user.form',compact('action'), [
            'user' => new UserModel(),
        ]);
    }

    public function edit($id)
    {
        $action ="Editar";
        $user = UserModel::find($id);
        return view('panel.user.form')->with(['user' => $user,'action' => $action]);
    }

    public function delete($id)
    {
        $oldUser = UserModel::find($id);
        unlink(substr($oldUser->photo,1));
        rmdir('img/usuarios/'.$oldUser->username);
        UserModel::destroy($id);
        session()->flash('messages', 'success|El usuario se borro satisfactoriamente.');
        return redirect()->route('user');
    }

    public function save(Request $request, UserModel $user) 
    {
        if ($request->input("flag")!=2)
        {
            if ($request->input("flag")!=0) 
            {
                $user->password = bcrypt($request->input('password'));
            }
        }
        else
        {
            $user->password = bcrypt($request->input('password'));
            $routePicture = UserController::ctrCrearImagen($_FILES["newPicture"],$request->input('username'),"usuarios",50,50);
            $user->photo = $routePicture;
        }
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->role = $request->input('role');
        $user->last_login = now();
        $user->save();
        session()->flash('messages', 'success|Cambios guardados correctamente.' );
        return redirect()->route('user');
    }

    public function ctrCrearImagen($foto,$id,$folder,$nuevoAncho,$nuevoAlto)
    {
        $ruta;
        list($ancho,$alto) = getimagesize($foto["tmp_name"]);
        mkdir("img/".$folder."/".$id,0755);  
        if ($foto["type"] == "image/jpeg")
        {
            $aleatorio = mt_rand(100,999);
            $ruta = "img/".$folder."/".$id."/".$aleatorio.".jpg";
            $origen = imagecreatefromjpeg($foto["tmp_name"]);
            $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
            imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
            imagejpeg($destino,$ruta);
        }
        if ($foto["type"] == "image/png")
        {
            $aleatorio = mt_rand(100,999);
            $ruta = "img/".$folder."/".$id."/".$aleatorio.".png";
            $origen = imagecreatefrompng($foto["tmp_name"]);
            $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
            imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
            imagepng($destino,$ruta);
        }
        return "/".$ruta;
    }
}
