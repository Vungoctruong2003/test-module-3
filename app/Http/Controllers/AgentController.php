<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgentRequest;
use App\Models\Agents;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function index()
    {
        $agents = Agents::all();
        return view('index', compact('agents'));
    }

    public function store(AgentRequest $request)
    {
        $agent = new Agents();
        $agent->name = $request->input('name');
        $agent->phone_number = $request->input('phone_number');
        $agent->email = $request->input('email');
        $agent->address = $request->input('address');
        $agent->manager = $request->input('manager');
        $agent->status = $request->input('status');
        $agent->save();
        return redirect()->route('index');
    }

    public function edit($id)
    {
        $agent = Agents::findOrFail($id);
        return view('edit', compact('agent'));
    }

    public function update(AgentRequest $request, $id)
    {

        $agent = Agents::findOrFail($id);
        $agent->name = $request->input('name');
        $agent->phone_number = $request->input('phone_number');
        $agent->email = $request->input('email');
        $agent->address = $request->input('address');
        $agent->manager = $request->input('manager');
        $agent->status = $request->input('status');
        $agent->save();
        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $agent = Agents::findOrFail($id);
        $agent->delete();
        return redirect()->route('index');
    }

    public function search(Request $request)
    {
        try {
            $key = $request->input('key');
            $agents = Agents::where("name", 'like', '%' . $key . '%')->get();
            return view('index', compact('agents'));
        } catch (ModelNotFoundException $exception) {
            return back()->withErrors($exception->getMessage())->withInput();
        }
    }
}
