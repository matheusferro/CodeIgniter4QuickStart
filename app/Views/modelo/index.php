<?php 

    /**
     * Index da TB_MODELO PW3
     *
     * @category   Form Cadastro da TB_MARCA
     * @package    PW3
     * @author     HELITON MARTINS DE LIMA <helitonmartinsdelima@gmail.com> 
     * @version    0.1
     */

$tabela = new \CodeIgniter\View\Table();

$tabela->setHeading('TB_MODELO_ID', 'TB_MODELO_DESC', 'Alterar', 'Excluir');

echo $tabela->generate($modelo);

?>