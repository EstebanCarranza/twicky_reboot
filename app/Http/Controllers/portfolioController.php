<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Models\publicationsModel;

class portfolioController extends Controller
{
    
    public function getPublicationList($type){
        $whereData = array();
        if($type == 'IND'){
            array_push($whereData, ['idCategory', '=','1']);
        }else if($type =='COL'){
            array_push($whereData, ['idCategory', '=','2']);
        }
        array_push($whereData, ['active', '=','1']);

        $dbList = DB::table('publication')
        ->where($whereData)->paginate(15);
        if(count($dbList)== 0)
        {
            $dbList = ['current_page' => 0];
        }
        //return response()->json($db);
        $publicationList = array();
        foreach($dbList as $db)
        {
            $publication = new publicationsModel();
            $publication->id = $db->id;
            $publication->title = $db->title;
            $publication->description = $db->description;
            $publication->pathImagePreview = $db->pathImagePreview;
            $publication->idCategory = $db->idCategory;
            $publication->path = $db->path;
            $publication->created_at = $db->created_at;
            $publication->updated_at = $db->updated_at;
            array_push($publicationList, $publication);
        }

        return view('portafolio.index')->with('cardPublications',$publicationList);  
    }
    public function getPublication($type){
        $whereData = array();
        
        array_push($whereData, ['id', '=',$type]);
        array_push($whereData, ['active', '=', '1']);
        

        $dbList = DB::table('publication')
        ->where($whereData)->paginate(1);
        if(count($dbList)== 0)
        {
            $dbList = ['current_page' => 0];
        }
        //return response()->json($db);
        $publicationList = array();
        foreach($dbList as $db)
        {
            $publication = new publicationsModel();
            $publication->id = $db->id;
            $publication->title = $db->title;
            $publication->description = $db->description;
            $publication->pathImagePreview = $db->pathImagePreview;
            $publication->idCategory = $db->idCategory;
            $publication->path = $db->path;
            $publication->created_at = $db->created_at;
            $publication->updated_at = $db->updated_at;
            array_push($publicationList, $publication);
        }

        return view('portafolio.show')->with('cardPublication',$publicationList[0]);  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset($_GET['type']))
            return $this->getPublicationList($_GET['type']);
          else
            return $this->getPublicationList('IND');
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
        return $this->getPublication($id);
        //
        //return redirect()->route('portafolio.index', ['type' => $id]);
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
