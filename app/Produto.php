<?php namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

	protected $table = 'produtos';
	public $timestamps = false;

	protected $fillable = array('nome', 
		'descricao', 'valor', 'quantidade');
}
