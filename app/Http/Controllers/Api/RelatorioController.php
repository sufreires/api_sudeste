<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Relacoes;
use Illuminate\Http\Request;
use PDF;
use DB;

/**
 * @SWG\Get(
 *   path="/api/relatorio",
 *   summary="Relatório em PDF",
 *   @SWG\Response(response=200, description="successful operation"),
 *   @SWG\Response(response=401, description="Unauthorized"),
 *   @SWG\Response(response=500, description="internal server error"),
 *     @SWG\Parameter(
 *          name="Authorization",
 *          in="header",
 *          required=true,
 *          type="string"
 *      ),
 * )
 *
 */

class RelatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('relacoes')
            ->select('relacoes.id as idr','dosagem','produtos.nome as prodnome', 'culturas.nome as  cnome', 'pragas.nome as pnome')
            ->join('produtos', 'produtos.id', '=', 'relacoes.id_produto')
            ->join('culturas', 'culturas.id', '=', 'relacoes.id_cultura')
            ->join('pragas', 'pragas.id', '=', 'relacoes.id_praga')
            ->get();

        view()->share('relatorio',$data);
        $pdf = PDF::loadView('relatorio/index', $data);

        return $pdf->download('relacoesPDF.pdf');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
