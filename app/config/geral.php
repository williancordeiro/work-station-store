<?php

const APLICACAO_NOME = 'Work Station Store';

// Se a URL_RAIZ mudar, verifique arquivo .htaccess
const URL_RAIZ = '/work-station-store/app/';

// Os caminhos sempre devem terminar com '/'

define('PASTA_RAIZ', dirname(__DIR__) . '/');

const PASTA_CFG = PASTA_RAIZ . 'config/';

const PASTA_FRAMEWORK = PASTA_RAIZ . '../framework/';

const PASTA_MVC = PASTA_RAIZ . 'src/';
const PASTA_CONTROLADOR = PASTA_MVC . 'controller/';
const PASTA_MODELO = PASTA_MVC . 'model/';
const PASTA_VISAO = PASTA_MVC . 'view/';

const PASTA_SQLS = PASTA_RAIZ . 'sql/';

const PASTA_PUBLICO = PASTA_RAIZ . 'public/';

const PASTA_TESTE = PASTA_RAIZ . 'tests/';

const URL_PUBLICO = URL_RAIZ . 'public/';
const URL_CSS = URL_PUBLICO . 'css/';
const URL_FONTS = URL_PUBLICO . 'fonts/';
const URL_IMG = URL_PUBLICO . 'imgs/';
const URL_JS = URL_PUBLICO . 'js/';
