<?php

namespace App\Http\Controllers;

use App\Models\Bwc;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BwcController extends Controller
{

    public function index()
    {
        return Bwc::get();
    }

    public function store(Request $request)
    {

        $serial = $request->get('bwcserial') ?? '';
        $filename = $request->get('filename') ?? '';
        $hash = $request->get('hash') ?? '';

        if (empty($serial) && empty($filename) && empty($hash)) {
            return response()->json(['error' => 'Todos os campos estao ausentes. Pelo menos um campo deve ser fornecido.'], 400);
        }

        DB::transaction(function() use($request){
            $bwc = Bwc::create([
                'serial' => $request->get('bwcserial'),
                'filename' =>  $request->get('filename'),
                'hash' =>  $request->get('hash'),
            ]);

        });

        return response()->json(status: JsonResponse::HTTP_CREATED);
    }


    public function show(string $id)
    {
        return abort(400);
    }

    public function update(Request $request, string $id)
    {
        return abort(400);
    }


    public function destroy(string $id)
    {
        return abort(400);
    }
}
