<?php



// ------------------------------------------------------
// diretivas
// require
// import
//include_once

// Forma antiga
// include_once 'Carro.php';
// include_once 'Hibrido.php';

// Forma moderna (Padrão FIG -> conjunto de normas para o desenvolvimento moderno (PSR4))

// Gerenciador de pacotes: composer
// composer init -> para iniciar o composer

require 'vendor/autoload.php';
use App\Carro;
use App\Hibrido;


// --------------------------------------------------
// Exemplo de uso do protected com herança
// A propriedade protegida pode ser acessada pela classe que herda

$carrohibrido = new Hibrido('dasdsa');
$carrohibrido->setMarca('Oi');
$carrohibrido->setModelo('2010');
$carrohibrido->setAno('Corola');
echo $carrohibrido->exibirInformacoes();

// ---------------------------------------------------

// Instanciar o objeto
// Carro agora você recebe uma nova instância da classe carro
$meucarro = new Carro();

// Se as propriedades estão privadas, não dá pra fazer isso:
// $meucarro->marca = 'a';
// $meucarro->modelo = 'b';
// $meucarro->ano = 'c';
// Agora, se as variáveis estiverem pública, isso dará certo

// ----------------------------------------------------

// Com Getters & Setters
$meucarro->setMarca('Chevrole');
$meucarro->setModelo('2010');
$meucarro->setAno('Corola');

// echo $meucarro->exibirInformacoes();



?>