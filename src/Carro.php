<?php

namespace App;

// Classe: Molde
// Objeto: Coisa que vai utilizar o molde

// Componentes da Classe:

// Propriedades: variáveis que armazenam os dados que os objetos da classe têm
// Métodos: funções/ações que os objetos fazem

// Private: a própria classe altera suas próprias propriedades
// Protegida: a própria classe e as que herdam podem alterar suas propriedades
// Pública: todo mundo pode alterar as propriedades

class Carro {
    
    // Visibilidade esta diretamente relacionada com o encapsulamento

    // Public, private e protected
    protected string $nome;
    private string $marca;
    private string $modelo;
    private string $ano;

    // Extensões para getters e setters
    // Getters & Setters
    
    // Getters: para você pegar (não precisa de um parâmetro) -> Busca
    // Setters: setar, definir (precisa de um parâmetro) -> Envio

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    // Quando se usa Getts & Setters não é necessário o construtor

    // Construtor (Recebe os parâmetros)
    // public function __construct($marca, $modelo, $ano) {
    //     $this->marca = $marca;
    //     $this->modelo = $modelo;
    //     $this->ano = $ano;
    // }

    // Método (Ação)
    public function exibirInformacoes() {

        // this -> a própria classe é que inicializa a propriedade
        // $this->modelo = "Tesla Model S";
        // $this->ano = "2024";
        // $this->marca = "Tesla";

        return "Nome: $this->nome, Marca: $this->marca, Modelo: $this->modelo, Ano: $this->ano";
    }
}


?>