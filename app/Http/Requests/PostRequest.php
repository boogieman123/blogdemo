<?php namespace App\Http\Requests;

use App\Post;

class PostRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{		
		if($this->blog)
		{
			if($this->user()->isAdmin()) return true;

			return Post::where('id', $this->blog)
					   ->where('user_id', $this->user()->id)->exists();
		}

		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$id = $this->blog ? ',' . $this->blog : '';
		return [
			'title' => 'required|max:255',
			'description' => 'required|max:60000',
			'body' => 'required|max:60000',
			'slug' => 'required|unique:posts,slug' . $id
		];
	}

}