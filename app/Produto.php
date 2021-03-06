<?php

namespace demanda;

use Illuminate\Database\Eloquent\Model;

/**
 * Classe model do Produto
 * @var array
 */
class Produto extends Model
{
  //Tabela utilizada
  protected $table    = 'produtos';
  public $timestamps  = false;
  //Dados a serem prenchidos para que não ocorra erro de inserção em massa
  protected $fillable = array('nome','descricao', 'valor', 'quantidade', 'usuario_criou');
  //Atributo que não poderá ser alterado
  protected $guarded  = ['id'];
}
