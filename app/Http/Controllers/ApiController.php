<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bebida;
use App\Models\Alcohol;
use App\Models\Noalcohol;

class ApiController extends Controller
{
    public function inicio(){
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://www.thecocktaildb.com/api/json/v1/1/search.php?s=vodka');
        $datos = json_decode($response->getBody()->getContents(), true);
        
        //Recorrer el arreglo
        $bebidas = [];

        foreach ($datos['drinks'] as $bebida){
            $nuevabebida=new Bebida;
            $nuevabebida->idbebida=$bebida['idDrink'];
            $nuevabebida->nombre=$bebida['strDrink'];
            $nuevabebida->categoria=$bebida['strCategory'];
            $nuevabebida->tipo=$bebida['strAlcoholic'];
            $nuevabebida->vaso=$bebida['strGlass'];
            $nuevabebida->instruccion_pr=$bebida['strInstructions'];
            $nuevabebida->instruccion_de=$bebida['strInstructionsDE'];
            $nuevabebida->instruccion_it=$bebida['strInstructionsIT'];
            $nuevabebida->imagen=$bebida['strDrinkThumb'];
            $nuevabebida->ingrediente1=$bebida['strIngredient1'];
            $nuevabebida->ingrediente2=$bebida['strIngredient2'];
            $nuevabebida->ingrediente3=$bebida['strIngredient3'];
            $nuevabebida->ingrediente4=$bebida['strIngredient4'];
            $nuevabebida->ingrediente5=$bebida['strIngredient5'];
            $nuevabebida->ingrediente6=$bebida['strIngredient6'];
            $nuevabebida->ingrediente7=$bebida['strIngredient7'];
            $nuevabebida->cantidad1=$bebida['strMeasure1'];
            $nuevabebida->cantidad2=$bebida['strMeasure2'];
            $nuevabebida->cantidad3=$bebida['strMeasure3'];
            $nuevabebida->cantidad4=$bebida['strMeasure4'];
            $nuevabebida->cantidad5=$bebida['strMeasure5'];
            $nuevabebida->cantidad6=$bebida['strMeasure6'];
            $nuevabebida->cantidad7=$bebida['strMeasure7'];
            $nuevabebida->modificacion=$bebida['dateModified'];
            $nuevabebida->save();
            $bebidas[] = [
                'id'=>$bebida['idDrink'],
                'nombre' =>$bebida['strDrink'],
                'categoria' => $bebida['strCategory'],
                'tipo'=>$bebida['strAlcoholic'],
                'vaso'=>$bebida['strGlass'],
                'instruccion1'=>$bebida['strInstructions'],
                'intruccion2'=>$bebida['strInstructionsDE'],
                'instruccion3'=>$bebida['strInstructionsIT'],
                'imagen'=>$bebida['strDrinkThumb'],
                'ingrediente1'=>$bebida['strIngredient1'],
                'ingrediente2'=>$bebida['strIngredient2'],
                'ingrediente3'=>$bebida['strIngredient3'],
                'ingrediente4'=>$bebida['strIngredient4'],
                'ingrediente5'=>$bebida['strIngredient5'],
                'ingrediente6'=>$bebida['strIngredient6'],
                'ingrediente7'=>$bebida['strIngredient7'],
                'cantidad1'=>$bebida['strMeasure1'],
                'cantidad2'=>$bebida['strMeasure2'],
                'cantidad3'=>$bebida['strMeasure3'],
                'cantidad4'=>$bebida['strMeasure4'],
                'cantidad5'=>$bebida['strMeasure5'],
                'cantidad6'=>$bebida['strMeasure6'],
                'cantidad7'=>$bebida['strMeasure7'],
                'modificacion'=>$bebida['dateModified'],
            ];
        }
        
        return view('index', ['bebidas'=>$bebidas]);
    }
    public function detalle($id){
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','www.thecocktaildb.com/api/json/v1/1/lookup.php?i='.$id);
        $bebidaseparada = json_decode($response->getBody()->getContents(), true);
        
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://www.thecocktaildb.com/api/json/v1/1/random.php');
        $random1 = json_decode($response->getBody()->getContents(), true);

        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://www.thecocktaildb.com/api/json/v1/1/random.php');
        $random2 = json_decode($response->getBody()->getContents(), true);
        
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://www.thecocktaildb.com/api/json/v1/1/random.php');
        $random3 = json_decode($response->getBody()->getContents(), true);
        

        return view('detalle', ['bebidaseparada'=>$bebidaseparada,'random1'=>$random1,'random2'=>$random2,'random3'=>$random3]);
    }
    public function informacion($in){
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://www.thecocktaildb.com/api/json/v1/1/search.php?i='.$in);
        $info = json_decode($response->getBody()->getContents(), true);
        
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://www.thecocktaildb.com/api/json/v1/1/random.php');
        $random1 = json_decode($response->getBody()->getContents(), true);

        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://www.thecocktaildb.com/api/json/v1/1/random.php');
        $random2 = json_decode($response->getBody()->getContents(), true);
        
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://www.thecocktaildb.com/api/json/v1/1/random.php');
        $random3 = json_decode($response->getBody()->getContents(), true);
        return view('detallei',['info'=>$info,'random1'=>$random1,'random2'=>$random2,'random3'=>$random3]);
    }
    public function noalcohol(){
        
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Non_Alcoholic');
        $data = json_decode($response->getBody()->getContents(), true);

        $bebidas=[];

        foreach($data['drinks'] as $bebida){
        $nuevabebida=new Noalcohol;
        $nuevabebida->idbebida=$bebida['idDrink'];
        $nuevabebida->nombre=$bebida['strDrink'];
        $nuevabebida->imagen=$bebida['strDrinkThumb'];
        $nuevabebida->save();
            $bebidas[]=[
                'id'=>$bebida['idDrink'],
                'nombre' =>$bebida['strDrink'],
                'imagen'=>$bebida['strDrinkThumb'],
            ];
        }
        return view('noalcoholicas',['bebidas'=>$bebidas]);
    }
    public function alcohol(){
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Alcoholic');
        $data = json_decode($response->getBody()->getContents(), true);

        $bebidas=[];

        foreach($data['drinks'] as $bebida){
        $nuevabebida=new Alcohol;
        $nuevabebida->idbebida=$bebida['idDrink'];
        $nuevabebida->nombre=$bebida['strDrink'];
        $nuevabebida->imagen=$bebida['strDrinkThumb'];
        $nuevabebida->save();
            $bebidas[]=[
                'id'=>$bebida['idDrink'],
                'nombre' =>$bebida['strDrink'],
                'imagen'=>$bebida['strDrinkThumb'],
            ];
        }
        return view('alcoholicas',['bebidas'=>$bebidas]);
    }
    public function apivodka(){
        $bebidas = Bebida::all();
        return response()->json(['bebidas'=>$bebidas]);
    }
    public function apialcohol(){
        $bebidas = Alcohol::all();
        return response()->json(['bebidas'=>$bebidas]);
    }
    public function apinoalcohol(){
        $bebidas = Noalcohol::all();
        return response()->json(['bebidas'=>$bebidas]);
    }
}