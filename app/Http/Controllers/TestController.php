<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * index de teste.
     *
     * @return array
     *
     * @SWG\Get(path="/test", tags={"/test"}, summary="Retorna uma lista de teste", produces={"application/json"},
     * @SWG\Response(response="200", description="JSON informando status da operação e objeto inserido"),
     * @SWG\Response(response="400", description="Invalid ID supplied"))
     */
    public function index()
    {
        return [];
    }
}
