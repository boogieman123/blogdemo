<?php namespace App\Repositories;

use App\Post;

class BlogRepository extends BaseRepository{
	
	/**
	 * Create a new BlogRepository instance.
	 *
	 * @param  App\Post $post
	 * @return void
	 */
	public function __construct(Post $post)
	{
		$this->model = $post;
	}

	/**
	 * Create a query for Post.
	 *
	 * @return Illuminate\Database\Eloquent\Builder
	 */
  	private function queryActiveWithUserOrderByDate()
	{	
		return $this->model
		->select('id', 'title', 'slug', 'user_id', 'description', 'body', 'created_at', 'updated_at')
		->with('user')
		->latest();
	}

	/**
	 * Get post collection.
	 *
	 * @param  int  $n
	 * @return Illuminate\Support\Collection
	 */
	public function indexFront($n)
	{
		$query = $this->queryActiveWithUserOrderByDate();

		return $query->paginate($n);
	}
	
	/**
	 * Get post collection.
	 *
	 * @param  int     $n
	 * @param  int     $user_id
	 * @param  string  $orderby
	 * @param  string  $direction
	 * @return Illuminate\Support\Collection
	 */
	public function index($n, $user_id = null, $orderby = 'created_at', $direction = 'desc')
	{
		$query = $this->model
		->select('posts.id', 'posts.created_at', 'title', 'user_id', 'slug', 'name')
		->join('users', 'users.id', '=', 'posts.user_id')
		->orderBy($orderby, $direction);

		if($user_id) 
		{
			$query->where('user_id', $user_id);
		} 

		return $query->paginate($n);
	}

	/**
	 * Get post collection.
	 *
	 * @param  string  $slug
	 * @return array
	 */
	public function show($slug)
	{
		$post = $this->model->with('user')->whereSlug($slug)->firstOrFail();
		return compact('post');
	}

	/**
	 * Get post collection.
	 *
	 * @param  int  $id
	 * @return array
	 */
	public function edit($id)
	{
		$post = $this->model->findOrFail($id);
		return compact('post');
	}

	/**
	 * Update a post.
	 *
	 * @param  array  $inputs
	 * @param  int    $id
	 * @return void
	 */
	public function update($inputs, $id, $user_id)
	{
		$post = $this->getById($id);
		$post = $this->savePost($post, $inputs, $user_id);
	}	

	/**
	 * Create a post.
	 *
	 * @param  array  $inputs
	 * @param  int    $user_id
	 * @return void
	 */
	public function store($inputs, $user_id)
	{
		$post = new $this->model;	
		$post = $this->savePost($post, $inputs, $user_id);
	}

	/**
	 * Destroy a post.
	 *
	 * @param  int $id
	 * @return void
	 */
	public function destroy($id)
	{
		$model = $this->getById($id);		
		$model->delete();
	}	

	/**
	 * Create or update a post.
	 *
	 * @param  App\Post $post
	 * @param  array  $inputs
	 * @param  int   $user_id
	 * @return App\Post
	 */
  	private function savePost($post, $inputs, $user_id)
	{	
		$post->title = $inputs['title'];
		$post->description = $inputs['description'];	
		$post->body = $inputs['body'];	
		$post->slug = $inputs['slug'];
		$post->user_id = $user_id;

		$post->save();

		return $post;
	}

	/**
	 * Get post slug.
	 *
	 * @param  int  $comment_id
	 * @return string
	 */
	public function getSlug($comment_id)
	{
		return $this->comment->findOrFail($comment_id)->post->slug;
	}	

}