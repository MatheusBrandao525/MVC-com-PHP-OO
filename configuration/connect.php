<?php 
 // Arquivo de Conexão com Banco de Dados

 // Variáveis para estabelecer conexao
 define('HOST','localhost'); 
 define('DATABASENAME','projeto_padrao');
 define('USER','root');
 define('PASSWORD','');

 // Classe de conexão
 class Connection 
 {
   // Variavel que recebe a query de conexão
   protected $conn;

   // Função que chama a conexão assim que a classe é instanciada
   function __construct()
   {
      $this->connect();
   }

   // Função que faz a conexão com o banco de dados
   function connect()
   {
      try{

         $this->conn = new PDO('mysql:host'.HOST.';dbname='.DATABASENAME,USER,PASSWORD);

         // Se a conexão der certo exibe uma mensagem de 'Conectado com sucesso!'
         echo 'Conectado com Sucesso!';

      }catch (PDOException $e){
         // Caso a conexão de algum erro, exibe uma menssagem de erro
         echo 'Erro de conexão'.$e;
      }
   }
 }
