<?php

namespace App\Http\Controllers;

use App\Models\Petition;
use Illuminate\Http\Request;
use App\Http\Resources\PetitionResource;
use App\Http\Resources\PetitionCollection;
use Illuminate\Http\Response;

class PetitionController extends Controller
{
    /**
     * [index description]
     *
     * @return  [type]  [return description]
     */
    public function index()
    {
        //
        // return new PetitionCollection(Petition::all()); // from petition collection
        //return PetitionResource::collection(Petition::all()); // from petition resource
        return response()->json(new PetitionCollection(Petition::all()),Response::HTTP_OK);
    }

    /**
    * [store description]
    *
    * @param   Request  $request  [$request description]
    *
    * @return  [type]             [return description]
    */
    public function store(Request $request)
    {
        //
        $petition = Petition::create($request->only([
            'title', 'description', 'category', 'author', 'signees'
        ]));

        return new PetitionResource($petition);
    }

    /**
    * [show description]
    *
    * @param   Petition  $petition  [$petition description]
    *
    * @return  [type]               [return description]
    */
    public function show(Petition $petition)
    {
        //
        return new PetitionResource($petition);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petition $petition)
    {
        //
        $petition->update($request->only([
            'title', 'description', 'category', 'author', 'signees'
        ]));
        
        return new PetitionResource($petition);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petition $petition)
    {
        //
        $petition->delete();

        return response()->json(null,Response::HTTP_NO_CONTENT);
    }
}
