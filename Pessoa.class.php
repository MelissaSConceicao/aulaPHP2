<?php //tipo do documento

class Pessoa{//crinado a classe "Pessoa"
    private $nome;//criando a variavel privada "nome"
    private $endereco;//criando a variavel privada "endereco"
    private $bairro;//criando a variavel privada "bairro"
    private $cep;//criando a variavel privada "cep"
    private $cidade;//criando a variavel privada "cidade"
    private $estado;//criando a variavel privada "estado"

    //ENCAPSULANDO AS VARIAVEIS

    //método set: está pegando os valores dessas variáveis; com retorno

    public function setNome($nome){ //encapsulando "nome"
        $this->nome = $nome;//$this: está indicando que a variável encapsulada é igual à da variável do parâmetro(variável global)
    }

    public function setEndereco($endereco){//encapsulando "endereco"
        $this->endereco = $endereco;
    }

    public function setBairro($bairro){//encapsulando "bairro"
        $this->bairro = $bairro;
    }

    public function setCep($cep){//encapsulando "cep"
        $this->cep = $cep;
    }

    public function setCidade($cidade){//encapsulando "cidade"
        $this->cidade = $cidade;
    }

    public function setEstado($estado){//encapsulando "estado"
        $this->estado = $estado;
    }

    //método get: está alterando os valores dessas variáveis; sem retorno


    public function getNome(){//encapsulando "nome"
        return $this->nome;
    }

    public function getEndereco(){//encapsulando "endereco"
        return $this->endereco;
    }

    public function getBairro(){//encapsulando "bairro"
        return $this->bairro;
    }

    public function getCep(){//encapsulando "cep"
        return $this->cep;
    }

    public function getCidade(){//encapsulando "cidade"
        return $this->cidade;
    }

    public function getEstado(){//encapsulando "estado"
        return $this->estado;
    }
}
?>//fim do documento