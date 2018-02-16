<?php

namespace App\Http\Controllers;

use App\Oportunidade;
use Illuminate\Http\Request;

class OportunidadeController extends Controller
{
    public function index(Request $request)
    {
        $dataInicial = $request->query('dataInicial');
        $dataFinal = $request->query('dataFinal');
        $quarter = $request->query('quarter');

        if (!empty($quarter)) {

          $oportunidades = Oportunidade::with(['fasevenda', 'conta'])
              ->where($this->getQuarterQuery($quarter))
              ->get();

        } elseif (!empty($dataInicial) || !empty($dataFinal)) {

          $where = $this->getDateQuery($dataInicial, $dataFinal);
          $oportunidades = Oportunidade::with(['fasevenda', 'conta'])
              ->where($where)
              ->get();

        } else {
          $oportunidades = Oportunidade::with(['fasevenda', 'conta'])->get();
        }

        return response()->json($oportunidades);
    }

    protected function getQuarterQuery($quarter)
    {
        $year = date('Y');
        switch ($quarter) {
          case '1':
            return [
                ['dataAbertura', '>=', $year . '-01-01'],
                ['dataAbertura', '<=', $year . '-03-31']
              ];
            break;
          case '2':
            return [
                ['dataAbertura', '>=', $year . '-04-01'],
                ['dataAbertura', '<=', $year . '-06-30']
              ];
            break;
          case '3':
            return [
                ['dataAbertura', '>=', $year . '-07-01'],
                ['dataAbertura', '<=', $year . '-09-30']
              ];
            break;
          case '4':
            return [
                ['dataAbertura', '>=', $year . '-10-01'],
                ['dataAbertura', '<=', $year . '-12-31']
              ];
            break;
        }
    }

    protected function getDateQuery($dataInicial, $dataFinal) {
      $where = array();

      if (!empty($dataInicial)) {
        $where[] = ['dataAbertura', '>=', $dataInicial];
      }

      if (!empty($dataFinal)) {
        $where[] = ['dataAbertura', '<=', $dataFinal];
      }
      return $where;
    }

    public function show($id)
    {
        $oportunidade = Oportunidade::with(['fasevenda', 'conta'])->find($id);

        if (!$oportunidade) {
            return response()->json([
                'message' => 'Record not found'
            ], 404);
        }

        return response()->json($oportunidade);
    }

    public function store(Request $request)
    {
        $oportunidade = new Oportunidade();
        $oportunidade->fill($request->all());
        $oportunidade->save();

        return response()->json($oportunidade, 201);
    }

    public function update(Request $request, $id)
    {
        $oportunidade = Oportunidade::find($id);

        if(!$oportunidade) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $oportunidade->fill($request->all());
        $oportunidade->save();

        return response()->json($oportunidade);
    }

    public function destroy($id)
    {
        $oportunidade = Oportunidade::find($id);

        if (!$oportunidade) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $oportunidade->delete();
    }
}
