<?php
namespace App\Controller;

use App\Model\Aluno;

final class AlunoController {
    
    public static function cadastro() : void {
        $model = new Aluno();
        //$model->id = 1;
        $model->nome = 'Amanda';
        $model->ra = 24536672;
        $model->curso = 'Secretária';
        $model->save();
        echo 'Aluno cadastrado com Sucesso!';
    }

    public static function litar() : void {      
        $aluno = new Aluno;
        $lista = $aluno->getAllRows();
        var_dump($lista);
    }
}