<?php

// require 'ConexaoBD.php';

// class UsuarioDAO
// {
//     public function cadastrarUsuario($usuario)
//     {
//         try {
//             $conn = ConexaoBD::Conexao();
//             $sql = $conn->prepare("insert into findinn.usuario (nome, cpf, email, senha, telefone, locatario, anfitriao, id_pais) values (:nome, :cpf ,:email, :senha, :telefone, :locatario, :anfitriao, :id_pais)");
//             $sql->bindParam("nome", $nome);
//             $sql->bindParam("cpf", $cpf);
//             $sql->bindParam("email", $email);
//             $sql->bindParam("senha", $senha);
//             $sql->bindParam("telefone", $telefone);
//             $sql->bindParam("locatario", $locatario);
//             $sql->bindParam("anfitriao", $anfitriao);
//             $sql->bindParam("id_pais", $id_pais);

//             $nome = $usuario->getnome();
//             $cpf = $usuario->getCpf();
//             $email = $usuario->getEmail();
//             $senha = $usuario->getsenha();
//             $telefone = $usuario->getTel();
//             $locatario = 0;
//             $anfitriao = 0;
//             $id_pais = $usuario->getpais();

//             $sql->execute();

//             $last_id = $conn->lastInsertId();
//             $usuario->setId($last_id);

//             echo 'Cadastrou manoww';
//             return $last_id;
//         } catch (PDOException $e) {
//             return 0;
//         }
//     }
// }
