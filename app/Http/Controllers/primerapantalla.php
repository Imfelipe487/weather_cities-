<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class primerapantalla extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $var = Cities::all();
        return view('main', compact('var'));

    }

    public function next(Request $request)
    {   
        $valor = $request -> precio;
        $pais = $request -> pais;
        $simbolo = $request -> simbolo;
        $id = $request -> id;
        $lugares = Place::where('placecity',$id)->get();

        $clima = $this -> weather($pais);
        $precio = $this -> moneda($valor,$simbolo);
        
        
        return view('secondScreen',compact('clima','precio'));
    
    }

    public function weather($pais){
        $url = Http::GET("https://api.openweathermap.org/data/2.5/weather?q=".$pais."&appid=cd1144b3efc40e2f27d29b4fee6acdf3")->json();
        
        $temp_kelvin = $url['main']['temp'];  
        // Convertir a Celsius
        $temp_celsius = $temp_kelvin - 273.15;
        if ($url['cod'] == "200") {
            $data = [
                "clima"=>$url['weather'][0]['description'],
                "temp_celsius" => round($temp_celsius, 2),
                "icon" => $url['weather'][0]['icon'],
                "name" => $url['name'] 
            ];
        }else{
            $data = [
                "clima"=>"Error",
                "temp_celsius"=>"Error",
                "icon"=>"Error",
                "name"=>"Error"
            ];
        }
        return($data);
    }

    public function moneda($valor, $simbolo){
        $urlprecio = Http::GET("https://api.fastforex.io/convert?from=COP&to=".$simbolo."&amount=".$valor."&api_key=e8dd30b502-89568f0cd6-sixy8j")->json();
        $data = [
            "precio"=>$urlprecio['result'][$simbolo],
            "rate" => $urlprecio['result']['rate'],
            "moneda" => $simbolo
        ];
        return ($data);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
