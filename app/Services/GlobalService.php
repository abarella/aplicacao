<?php

namespace App\Services;

use App\Models\Produto\ProdutoAtividade;
use Illuminate\Support\Facades\DB;

/**
 * Uma especie de classe facade com todas as procedures necessária para o sistema
 *
 * @author Alberto Barella Junior <alberto@abjinfo.com.br>
 */
class GlobalService {


    public static  function populaTabelas(){

        $result = "";
        $dbh = DB::connection()->getPdo();

        $sql = "EXEC laravel.dbo.sp_teste";

        $sth = $dbh->prepare($sql);
        $sth->execute();
        $obj = $sth->fetchObject();

        if (!is_null($obj)) {
           $result = DB::select($sql);
        }

        $result = array_map(function ($value){
            return (array)$value;
        },$result);
        //dd($result);
        return $result;


    }

    public static  function retornaUsuariosCadastrados(){

        $result = "";
        $dbh = DB::connection()->getPdo();

        $sql = "set nocount on;EXEC [PORTAL_CORPORATIVO].[dbo].[sp_Permissao_Usuario] 'alberto.j-basis'";

        $sth = $dbh->prepare($sql);
        $sth->execute();
        $obj = $sth->fetchObject();

        if (!is_null($obj)) {
           $result = DB::select($sql);
        }

        $result = array_map(function ($value){
            return (array)$value;
        },$result);
        //dd($result);
        return $result;


    }


}
