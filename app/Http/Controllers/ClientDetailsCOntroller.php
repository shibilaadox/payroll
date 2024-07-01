<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;

class ClientDetailsController extends Controller
{

    public function showDetails($id)
    {
        $client = Client::find($id);

        if (!$client) {
            abort(404, 'Client not found');
        }

        $clients = Client::all();
        $projects = Project::where('client', $id)->get();

        $totalAmount = $projects->sum('salary');

        return view('backend.client.details', compact('client', 'clients', 'projects', 'totalAmount'));
    }



}

