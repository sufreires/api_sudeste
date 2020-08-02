<?php

namespace App\Http\Controllers\Api;

use App\Cultura;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


/**
 * @SWG\Get(
 *   path="/api/culturas",
 *   summary="Lista Culturas",
 *   @SWG\Response(response=200, description="successful operation"),
 *   @SWG\Response(response=401, description="Unauthorized"),
 *   @SWG\Response(response=500, description="internal server error"),
 * 		@SWG\Parameter(
 *          name="Authentication",
 *          in="header",
 *          required=true,
 *          type="string"
 *      ),
 *
 * )
 *
 */

/**
 * @SWG\Post(
 *   path="/api/culturas",
 *   summary="Cadastra Cultura",
 *   @SWG\Response(response=200, description="successful operation"),
 *   @SWG\Response(response=401, description="Unauthorized"),
 *   @SWG\Response(response=500, description="internal server error"),
 *  	@SWG\Parameter(
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


class CulturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $culturas = Cultura::all();

        return response()->json($culturas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cultura::create($request->all());

        return response()->json(['status'=>'Cultura cadastrada com sucesso']);
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
