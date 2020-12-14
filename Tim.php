<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class Tim extends Controller
{
   
    public function sec1(){
        $altura =21;
        $menor = 15;
        $mayor = 20;
        $area = $altura * ($menor + $mayor) / 2;
        return view('sec1', ['altura' => $altura, 'menor' => $menor, 'mayor' => $mayor, 'area' => $area]);
    }
    public function sec2(){
        $lado = 30;
        $apotema = $lado / 2;
        return view('sec2', ['lado' => $lado, 'apotema' => $apotema]);
    }
    public function sec3( ){
        $diametro = 30;
        $altura = 28;
        $volumen = ((3.1416 + $diametro) * $altura)/3;
        return view('sec3', ['diametro' => $diametro, 'altura' => $altura, 'volumen' => $volumen]);
    }
    public function sec4(){
        $base = 20;
        $altura = 33;
        $area = ($base*$altura) / 2;
        return view('sec4', ['base' => $base, 'altura' => $altura, 'area' => $area]);
    }
    public function sec5(){
        $diametro = 33;
        $circun = ($diametro) * 3.1416;
        return view('sec5', ['diametro' => $diametro, 'circun' => $circun]);
    }
    public function dec1(){
        $edad=18;
        if($edad>=18)
        {echo"Puede votar";}
        else
        {echo"No puede votar";}
        return view('dec1')
   -> with  ('edad', $edad);
    }
    public function dec2(){
        $hora=50;
        $sueldo=10;
        if($hora>=40)
        {$acumulador=$hora-40;
            $total=(40*$sueldo)+($acumulador*2*$sueldo);
        }else{$total=$hora*$sueldo;}
        return view('dec2')
       -> with  ('hora', $hora)
       -> with  ('sueldo', $sueldo)
       -> with  ('acumulador', $acumulador)
       -> with  ('total', $total);
    }
    public function dec3(){
        $dinero=1000;
    if($dinero<=10)
    {echo"Puedes regalar una tarjeta";
    }else if($dinero<=100)
    {echo"Puedes regalar chocolates";
    }else{}if($dinero<=250)
    {echo"Puedes regalar flores";
    }else{}if($dinero>=250){echo"Puedes regalar joyas";}
    return view('dec3')
   -> with  ('dinero', $dinero);
    }
    public function dec4(){
    $hora=20;
    if($hora<=2)
    {$total=$hora*2;
    }else if($hora<=5)
    {$total=10+(($hora-2)*4);
    }else if($hora<=10)
    {$total=22+(($hora-5)*3);
    }else{$total=37+(($hora-8)*2);}
    return view('dec4')
   -> with  ('hora', $hora)
   -> with  ('total', $total);
    }
    public function dec5(){
    $cali =8;
    if($cali==10)
    {echo"A";}
    else if($cali==9)
    {echo"B";
    }else if($cali==8)
    {echo"C";}
    else if($cali==6)
    {echo"D";}
    else if($cali<=5)
    {echo"F";}
    return view('dec5')
   -> with  ('cali', $cali);
    }
    public function ciclo1(){
    $n=1;
    $i=0;
    $sala=1000;
    $salaf=0;
    while($i<=6)
    {$salaf=($sala*10)+$salaf;
    $i++;}
    return view('ciclo1' , 
    ['i' => $i, 'sala' => $sala,'salaf' => $salaf]);
    }
    public function ciclo2(){
        $n=1;
        $i=1;
        $num=-1;
        $acu1=0;
        $acu2=0;
        $acu3=0;
        while($i<=$n){
        if($num>0)
        {echo"Es mayor a cero";
        $acu1++;}
        else if($num<0)
        {echo"Es menor a cero";
        $acu2++;}
        else
        {echo"Es igual a cero";$acu3++;}$i++;}
        return view('ciclo2' , 
        ['n' => $n, 'i' => $i,'num' => $num, 'acu1' => $acu1, 'acu2' => $acu2, 'acu3' => $acu3]);
        }
        public function ciclo3(){
            $num=3; 
            $total = 0;
            echo "<h4>Tabla del $num:</h4>";
            $i=1;
            while ($i<=10) {
                  echo "$num x $i = ".$num*$i."<br/>";
                  $i++;
                  }
            return view('ciclo3' , 
            ['i' => $i, 'num' => $num, 'total' => $total]);
            }
            public function login(){
                return view ('login');
            }
            public function validarLogin(Request $request){
                $user = $request -> input ('user');
                $password = $request -> input ('password');
                $key = Hash::make($request->input('key'));
                if ($user === 'justin.bieber'){
                    $url= 'dashboard';
                } else {
                    $url = 'login';
                }
                return view($url, [
                    'user' => $request->input('user'),
                    'key'=>$key
                ]);
            }

            public function index(){
                $usuarios = DB::table('usuarios')
                ->orderBy('user','asc')
                ->get();
                return view('login.showusers',['usuarios'=> $usuarios]);
            }
            public function save (Request $request){
                $usuario = DB::table('usuarios')->insert([
                    'user'=>$request->input('usuario'),
                    'password'=>$request->input('clave'),
                    'key'=>$request->input('llave')
                ]);
                return redirect()->action('Tim@index');
            }
            public function nuevo (){
                return view ('login.altausuario');
            }
            public function show($id){
                $usuarios = DB::table('usuarios')
                ->where('idUsario','=', $id)
                ->first();
                return view('login.altausuario',['usuarios'=> $usuarios]);
            }
            public function update(Request $request){
                $usuario = DB::table('usuarios')
                ->where('idUsario','=', $request->input('id'))
                ->update([
                    'user'=>$request->input('usuario'),
                    'password'=>$request->input('clave'),
                    'key'=>$request->input('llave')
                ]);
                return redirect()->action('Tim@index');
            }
            public function destroy($id){
                $usuario = DB::table('usuarios')
                ->where('idUsario','=', $id)
                ->delete();
                return redirect()->action('Tim@index')
                ->with('status', 'usuario eliminado');
            }
}

