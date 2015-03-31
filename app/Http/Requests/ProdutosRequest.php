<?php namespace estoque\Http\Requests;

use estoque\Http\Requests\Request;

class ProdutosRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'nome' => 'required|max:100',
			'descricao' => 'required|max:255',
			'valor' => 'required|numeric'
		];
	}

	public function messages()
	{
	    return [
	        'nome.required' => 'The :attribute field can not be empty.',
	    ];
	}

}
