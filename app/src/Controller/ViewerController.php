<?php
namespace Controller;

use \Framework\DW3Controlador;
use \Framework\DW3Sessao;
use \Model\User;

/* Métodos úteis da visão */
trait ViewerController {
    /* Caso o campo tenha um erro, retorna a classe CSS de erro */
    protected function getErroCss($campoNome)
    {
        return $this->temErro($campoNome) ? 'is-invalid' : '';
    }
}
?>