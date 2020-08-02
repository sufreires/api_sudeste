<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Relacoes;
use Illuminate\Http\Request;
use PDF;

/**
 * @SWG\Get(
 *   path="/api/relacoes",
 *   summary="Lista Relações",
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

/**
 * @SWG\Post(
 *   path="/api/relacoes",
 *   summary="Cadastra Relações",
 *   @SWG\Response(response=200, description="successful operation"),
 *   @SWG\Response(response=401, description="Unauthorized"),
 *   @SWG\Response(response=500, description="internal server error"),
 *     @SWG\Parameter(
 *          name="Authentication",
 *          in="header",
 *          required=true,
 *          type="string"
 *      ),
 *     	@SWG\Parameter(
 *          name="dosagem",
 *          in="formData",
 *          required=true,
 *          type="string"
 *      ),
 *     	@SWG\Parameter(
 *          name="id_produto",
 *          in="formData",
 *          required=true,
 *          type="string"
 *      ),
 *     	@SWG\Parameter(
 *          name="id_cultura",
 *          in="formData",
 *          required=true,
 *          type="string"
 *      ),
 *     	@SWG\Parameter(
 *          name="id_praga",
 *          in="formData",
 *          required=true,
 *          type="string"
 *      ),

 * )
 *
 */


class RelacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relacoes = Relacoes::all();

        return response()->json($relacoes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Relacoes::create($request->all());

        return response()->json(['status'=>'Relação cadastrada com sucesso']);
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
