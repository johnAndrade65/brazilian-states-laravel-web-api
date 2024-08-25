<?php

namespace App\Http\Controllers;

class StatesOfBrazilController extends Controller
{
    public function getAllBrazilianStates() {
        $states = $this->getStates();

        return response()->json($states);
    }

    public function getBrazilianStateByUf($uf){
        $stateByUf = '';

        foreach($this->getStates() as $state) {
            if (strtolower($state['uf']) == strtolower($uf)) {
                $stateByUf = $state; 
            } 
        }

        return $stateByUf ? response()->json($stateByUf) : response()->json(['error' => 'UF not found'], 404);
    }

    protected function getStates(){
        return [
            [
                'name' => 'Acre',
                'uf' => 'AC',
                'zip_start' => '69900-000',
                'zip_end' => '69999-999'
            ],
            [
                'name' => 'Alagoas',
                'uf' => 'AL',
                'zip_start' => '57000-000',
                'zip_end' => '57999-999'
            ],
            [
                'name' => 'Amapá',
                'uf' => 'AP',
                'zip_start' => '68900-000',
                'zip_end' => '68999-999'
            ],
            [
                'name' => 'Amazonas',
                'uf' => 'AM',
                'zip_start' => '69000-000',
                'zip_end' => '69299-999'
            ],
            [
                'name' => 'Bahia',
                'uf' => 'BA',
                'zip_start' => '40000-000',
                'zip_end' => '48999-999'
            ],
            [
                'name' => 'Ceará',
                'uf' => 'CE',
                'zip_start' => '60000-000',
                'zip_end' => '63999-999'
            ],
            [
                'name' => 'Distrito Federal',
                'uf' => 'DF',
                'zip_start' => '70000-000',
                'zip_end' => '72799-999'
            ],
            [
                'name' => 'Espírito Santo',
                'uf' => 'ES',
                'zip_start' => '29000-000',
                'zip_end' => '29999-999'
            ],
            [
                'name' => 'Goiás',
                'uf' => 'GO',
                'zip_start' => '72800-000',
                'zip_end' => '76799-999'
            ],
            [
                'name' => 'Maranhão',
                'uf' => 'MA',
                'zip_start' => '65000-000',
                'zip_end' => '65999-999'
            ],
            [
                'name' => 'Mato Grosso',
                'uf' => 'MT',
                'zip_start' => '78000-000',
                'zip_end' => '78899-999'
            ],
            [
                'name' => 'Mato Grosso do Sul',
                'uf' => 'MS',
                'zip_start' => '79000-000',
                'zip_end' => '79999-999'
            ],
            [
                'name' => 'Minas Gerais',
                'uf' => 'MG',
                'zip_start' => '30000-000',
                'zip_end' => '39999-999'
            ],
            [
                'name' => 'Pará',
                'uf' => 'PA',
                'zip_start' => '66000-000',
                'zip_end' => '68899-999'
            ],
            [
                'name' => 'Paraíba',
                'uf' => 'PB',
                'zip_start' => '58000-000',
                'zip_end' => '58999-999'
            ],
            [
                'name' => 'Paraná',
                'uf' => 'PR',
                'zip_start' => '80000-000',
                'zip_end' => '87999-999'
            ],
            [
                'name' => 'Pernambuco',
                'uf' => 'PE',
                'zip_start' => '50000-000',
                'zip_end' => '56999-999'
            ],
            [
                'name' => 'Piauí',
                'uf' => 'PI',
                'zip_start' => '64000-000',
                'zip_end' => '64999-999'
            ],
            [
                'name' => 'Rio de Janeiro',
                'uf' => 'RJ',
                'zip_start' => '20000-000',
                'zip_end' => '28999-999'
            ],
            [
                'name' => 'Rio Grande do Norte',
                'uf' => 'RN',
                'zip_start' => '59000-000',
                'zip_end' => '59999-999'
            ],
            [
                'name' => 'Rio Grande do Sul',
                'uf' => 'RS',
                'zip_start' => '90000-000',
                'zip_end' => '99999-999'
            ],
            [
                'name' => 'Rondônia',
                'uf' => 'RO',
                'zip_start' => '76800-000',
                'zip_end' => '76999-999'
            ],
            [
                'name' => 'Roraima',
                'uf' => 'RR',
                'zip_start' => '69300-000',
                'zip_end' => '69399-999'
            ],
            [
                'name' => 'Santa Catarina',
                'uf' => 'SC',
                'zip_start' => '88000-000',
                'zip_end' => '89999-999'
            ],
            [
                'name' => 'São Paulo',
                'uf' => 'SP',
                'zip_start' => '01000-000',
                'zip_end' => '19999-999'
            ],
            [
                'name' => 'Sergipe',
                'uf' => 'SE',
                'zip_start' => '49000-000',
                'zip_end' => '49999-999'
            ],
            [
                'name' => 'Tocantins',
                'uf' => 'TO',
                'zip_start' => '77000-000',
                'zip_end' => '77999-999'
            ]
        ];
    }
}
