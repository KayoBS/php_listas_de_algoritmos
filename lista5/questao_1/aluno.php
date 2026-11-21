<?php
class Aluno {
    private $_matricula;
    private $_nome;
    private $_endereco;
    private $_media;

    public function __construct($matricula, $nome, $endereco, $media) {
        $this->_matricula = $matricula;
        $this->_nome = $nome;
        $this->_endereco = $endereco;
        $this->_media = $media;
    }
    public function __destruct(){}

    public function print() {
        echo "<hr/>";
        echo "Nome: $this->_nome<br/>";
        echo "Matricula: $this->_matricula<br/>";
        echo "Endereco: $this->_endereco<br/>";
        echo "Media: $this->_media<br/>";
    }

    //getters
    public function get_nome() {
        return $this->_nome;
    }

    public function get_matricula() {
        return $this->_matricula;
    }

    public function get_endereco() {
        return $this->_endereco;
    }

    public function get_media() {
        return $this->_media;
    }

    //setters
    public function set_nome($nome) {
        $this->_nome = nome;
    }

    public function set_matricula($matricula) {
        $this->_matricula = matricula;
    }

    public function set_endereco($endereco) {
        $this->_endereco = endereco;
    }

    public function set_media($media) {
        $this->_media;
    }
}
