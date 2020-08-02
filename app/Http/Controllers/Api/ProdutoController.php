<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Produto;
use Illuminate\Http\Request;

/**
 * @SWG\Get(
 *   path="/api/produtos",
 *   summary="Lista Produtos",
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
 *   path="/api/produtos",
 *   summary="Cadastra Produtos",
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
 *          name="nome",
 *          in="formData",
 *          required=true,
 *          type="string"
 *      ),
 * )
 *
 */

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();

        return response()->json($produtos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Produto::create($request->all());

        return response()->json(['status'=>'Produto cadastrado com sucesso']);
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
