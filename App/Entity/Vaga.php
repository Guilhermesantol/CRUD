<?php

   namespace App\Entity;

   use App\Db\Database;
   use \PDO;

   class Vaga{

       public $id;

       public $titulo;

       public $descricao;

       public $ativo;

       public $data;

       //cadastra uma nova vaga
       public function cadastrar(){
        //definir a hora
           $this->data = date('Y-m-d H:i:s');

           //inserir vaga no banco
           $obDatabase = new Database('vagas');
           $this->id = $obDatabase->insert([
               'titulo' => $this->titulo,
               'descricao' => $this->descricao,
               'ativo' => $this->ativo,
               'data' => $this->data
           ]);

           //retornar se sucedido
           return true;
       }

       public function atualizar(){
           return (new Database('vagas'))->update('id = '.$this->id, [
               'titulo' => $this->titulo,
               'descricao' => $this->descricao,
               'ativo' => $this->ativo,
               'data' => $this->data
           ]);
       }

       public function excluir(){
           return (new Database('vagas'))->delete('id = '.$this->id);
       }

       public static function getVagas($where = null, $limit = null){
           return (new Database('vagas'))->select($where,$order,$limit)
                                                ->fetchAll(\PDO::FETCH_CLASS,self::class);
       }

       public static function getVaga($id){
           return (new Database('vagas'))->select('id='.$id)
                                                ->fetchObject(self::class);

       }

   }
