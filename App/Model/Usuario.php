<?php

require 'ConexaoBD.php';

class Usuario
{
    private $id;
    private $nome;
    private $cpf;
    private $tel;
    private $senha;
    private $email;
    private $pais;

    // public function __construct(string $nome, string $cpf, string $tel, string $senha, string $email, string $pais)
    // {
    //     $this->nome = $nome;
    //     $this->cpf = $cpf;
    //     $this->tel = $tel;
    //     $this->senha = $senha;
    //     $this->email = $email;
    //     $this->pais = $pais;
    // }

    /**
     * Get the value of nome
     */
    public function getnome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setnome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of tel
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getsenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */
    public function setsenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pais
     */
    public function getpais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */
    public function setpais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function cadastrarUsuario()
    {
        try {
            $conn = ConexaoBD::Conexao();
            $sql = $conn->prepare('INSERT INTO findinn.usuario (nome, cpf, email, senha, telefone, locatario, anfitriao, id_pais) VALUES (:nome, :cpf ,:email, :senha, :telefone, :locatario, :anfitriao, :id_pais)');

            $nome = $this->getnome();
            $cpf = $this->getCpf();
            $email = $this->getEmail();
            $senha = $this->getsenha();
            $telefone = $this->getTel();
            $locatario = 0;
            $anfitriao = 0;
            $id_pais = $this->getpais();

            $sql->bindParam("nome", $nome);
            $sql->bindParam("cpf", $cpf);
            $sql->bindParam("email", $email);
            $sql->bindParam("senha", $senha);
            $sql->bindParam("telefone", $telefone);
            $sql->bindParam("locatario", $locatario);
            $sql->bindParam("anfitriao", $anfitriao);
            $sql->bindParam("id_pais", $id_pais);


            $sql->execute();

            $last_id = $conn->lastInsertId();
            $this->setId($last_id);
            return $last_id;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
