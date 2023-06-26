<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rubro;
use App\Models\Documento;
use App\Models\DocumentoRubroComuna;
use App\Models\Comuna;
use App\Models\User;

class SurveyController extends Controller
{
    public function index()
    {
      

        $userId = Auth::id();
        $user = User::find($userId);

        if($user->rubro_id == null){
            $rubros = Rubro::all();
            $comunas = Comuna::all();
            return view('survey.index', compact('rubros', 'comunas'));
        }
        
        $documentos = $this->documents($user);

        return view('steps.index', ['documentos' => $documentos]);

    }

    public function store(Request $request)
    {
        $userId = Auth::id();
        $rubroId = $request->input('rubro');
        $comunaId = $request->input('comuna');
    
        $user = User::find($userId);
        $user->rubro_id = $rubroId;
        $user->comuna_id = $comunaId;
        $user->save();

        $documentos = $this->documents($user);
        
        return view('steps.index', ['documentos' => $documentos]);
    }

    private function documents(User  $user)
    {
        return  Documento::join('documento_rubro_comunas', 'documento_rubro_comunas.documento_id', '=', 'documentos.id')
        ->where('documento_rubro_comunas.rubro_id', $user->rubro_id)
        ->where('documento_rubro_comunas.comuna_id', $user->comuna_id)
        ->get();
    }
}
