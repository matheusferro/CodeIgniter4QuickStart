<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>

<?php
/**
 * Lista da TB_CLIENTE PW3
 *
 * @category   Lista da TB_CLIENTE
 * @package    PW3
 * @author     MATHEUS SOUZA FERRO <matheussouzaferro@gmail.com>
 * @author     AMANDA BATISTA <EMAIL@GMAIL.COM>
 * @author     VICTOR HENRIQUE <EMAIL@GMAIL.COM>
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */



$tb = new \CodeIgniter\View\Table();

$template = [
        'table_open' => '	<table id="simple-table" class="table  table-bordered table-hover">'
];

$tb->setTemplate($template);

$tb->setHeading('TB_CLIENTE_ID','TB_CLIENTE_NOME', 'TB_CLIENTE_TEL', 'TB_CLIENTE_SEXO', 'TB_CLIENTE_EMAIL', 'TB_CLIENTE_SENHA', 'TB_CLIENTE_ENDERECO', 'TB_CLIENTE_COMPLEMENTO',
                    'TB_CLIENTE_BAIRRO','TB_CLIENTE_CIDADE','TB_CLIENTE_UF','TB_CLIENTE_DT_NASC','TB_CLIENTE_DT_CAD', 'Alterar', 'deletar');
echo $tb -> generate($dados);


?>

<?= $this->endSection() // ENCERRA A SECTION?>
