<?php

namespace App\Http\Controllers;

use App\Models\Cart;
// use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
// use App\Models\Cart::increment;
// namespace App;

class CartController extends Controller
{

    public function index()
    {
       //
    }

    public function shop()
    {
        // $products = Product::all();
        // dd($products);
        // return view('shop')->withTitle();
    }


    public function cart()
    {
        // $cartCollection = \Cart::getContent();
        // return   ($cartCollection);

        $cartCollection = Cart::all();
        return view('estudiante.cart')->withTitle('E-COMERCE STORE ! CART')->with(['cartCollection'=>$cartCollection]);
    }


    public function add(Request $request)
    {
        // return view('estudiante.cart');
        //  return $request;

         //validar datos
        //  $validatedData = $request->validate([
        //     'id' => ['required'], // 'unique:posts', 'max:255'
        //     'nombre' => ['required'],
        //     'direccion' => ['required'],
        //     'telefono' => ['required'],
        //     'descripcion' => ['required'],
        //     'horario' => ['required'],
        //     'imagenT' => ['required'],
        //     'imagen' => ['required'],
        // ]);


        // \Cart::add(array(

            //  'id' => $empresa->id ,
            //  'nombre' => $empresa->nombre,
            //  'direccion' => $empresa->direccion,
            //  'telefono' => $empresa->telefono,
            //  'attributes' => array(
            //      'descripcion' => $empresa->descripcion,
            //      'horario' => $empresa->horario,
            //      'imagenT' =>$empresa->imagenT,
            //      'imagen' =>$empresa->imagen,
            //  ),


             //  nuevo codigo
                //  'id' => $request->id,
                //  'nombre' => $request->nombre,
                //  'direccion' => $request->direccion,
                //  'telefono' => $request->telefono,
                //  'correo' => $request->correo,
                //  'id_ruta' => $request->id_ruta,
                //  'descripcion' => $request->descripcion,

                //  'attributes' => array(
                //      'imagenT' => $request->imagenT,
                //      'imagen' => $request->imagen,
                //      )

                //  ));
        //  return redirect()->route('cart');



        //funcion para agregar un nuevo registro a la Base de datos
        $Cart = new Cart();
        $Cart->id = $request->id;
        $Cart->nit = $request->nit;
        $Cart->precio = $request->precio;
        $Cart->horario = $request->horario;


        $Cart->nombre = $request->nombre;
        $Cart->direccion = $request->direccion;
        $Cart->telefono = $request->telefono;
        $Cart->correo = $request->correo;
        // $Cart->id_ruta = $request->id_ruta;
        $Cart->descripcion = $request->descripcion;
        $Cart->imagenT = $request->imagenT;
        $Cart->imagen = $request->imagen;
        $Cart->save();

        // $institucion->password = $request->password;

        return redirect()->route('EmpresasAgregadas');
    }

    public function remove(Cart $cartCollectionBB)
    {
        // $curso= Curso::where('id', $request->id)->firstOrFail();

        // return $cartCollectionBB;

        $cartCollectionBB->delete();
        return redirect()->route('EmpresasAgregadas');

        // Cart::remove([
        //     'id'=>$request->id,
        // ]);
        // return back();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Cart $cart)
    {
        //
    }


    public function edit(Cart $cart)
    {
        //
    }


    public function update(Request $request, Cart $cart)
    {
        //
    }


    public function destroy(Cart $cart)
    {
        //
    }
}
