<?php

namespace App\Services;

use App\Models\Produto\ProdutoAtividade;
use Illuminate\Support\Facades\DB;

/**
 * Uma especie de classe facade com todas as procedures necessária para o sistema
 *
 * @author Alberto Barella Junior <albertoabjinfo.com.br>
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


}
