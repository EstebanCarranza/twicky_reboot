<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Models\publicationsModel;
use Illuminate\Database\QueryException;

class portfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Crear arreglo para leer los errores
        $errorsList = array();
        //Crear arreglo para búsquedas dinámicas en la base de datos (where)
        $whereData = array();
        //Añadir la validación de mostrar solamente los activos
        array_push($whereData, ['active', '=','1']);
        //Si no está definida la variable de busqueda fijar la categoria 1 (individual)
        if(!isset($_GET['type'])){
            //Agregar la condición de la categoria default
            array_push($whereData, ['idCategory', '=','1']);
            //Obtener los registros de la base de datos
            
            try{
                $publicationList = publicationsModel::where($whereData)
                ->orderBy('release_date', 'desc')
                ->take(10)
                ->get();
            }catch(QueryException $ex){
                //return "no conection bd";
                array_push($errorsList, 'No hay conexión con el servidor, intenta más tarde :('); //$ex->getMessage());
                $publicationList = array();
            }
        }
        else{
            //Agregar condición de busqueda directamente a los criterios
            array_push($whereData, ['idCategory', '=', $_GET['type']]);
            try{
                //Obtener los registros con base a los criterios
                $publicationList = publicationsModel::where($whereData)
                ->orderBy('release_date', 'desc')
                ->take(10)
                ->get();
            }catch(QueryException $ex){
                //return "no conection bd";
                array_push($errorsList, 'No hay conexión con el servidor, intenta más tarde :('); //$ex->getMessage());
                $publicationList = array();
            }
        }
        //Enviar los resultados a la vista para mostrarlos
        return view('portafolio.index')->with('cardPublications',$publicationList)->with('errorList',$errorsList);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('portafolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Crear arreglo para leer los errores
        $errorsList = array();
        //Inicializar arreglo para criterios dinámicos (where)
        $whereData = array();
        //Agregar los criterios de búsqueda
        array_push($whereData, ['active', '=', '1']);
        array_push($whereData, ['id', '=',$id]);
        //Intentar obtener los registros
        try{
            //Obtener los registros con base a los criterios de búsqueda
            $publicationList = publicationsModel::where($whereData)
            ->orderBy('release_date', 'desc')
            ->take(1)
            ->get(); 
        }catch(QueryException $ex){
            //return "no conection bd";
            array_push($errorsList, 'No hay conexión con el servidor, intenta más tarde :('); //$ex->getMessage());
            $publicationList = array(new publicationsModel());
        }
        //Enviar los datos obtenidos a la vista para mostrarlos
        return view('portafolio.show')->with('cardPublication',$publicationList[0])->with('errorList',$errorsList);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
