<?php 
class Pessoa{
    private string $nome;
    private int $idade;
    private int $cpf;

    public function __construct(string $nome, int $idade, int $cpf)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }
}

$pessoa01 = new Pessoa('silva', 20, 10504335695);

class Produto{
    private string $nome_produto;
    private string $categoria;
    private int $preco;
    private int $quantidade;

    public function _construct(string $nome_produto, string $categoria, int $preco, int $quantidade){
        $this->nome_produto = $nome_produto;
        $this->categoria = $categoria;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function PegarNome() {
        return $this->nome_produto;
    }
    public function PegarCategoria() {
        return $this->categoria;
    }
    public function PegarPreco() {
        return $this->preco;
    }
    public function PegarQuantidade() {
        return $this->quantidade;
    }
}

?>