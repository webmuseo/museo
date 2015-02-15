<?php
class AdminEntradasController extends AdminController{
	/**
	 * Post Model
	 * @var Post
	 */
	protected $entrada;
	
	/**
	 * Inject the models.
	 * @param Post $post
	 */
	public function __construct(Entrada $entrada)
	{
		parent::__construct();
		$this->entrada = $entrada;
	}
	
	/**
	 * Show a list of all the entrada posts.
	 *
	 * @return View
	 */
	public function getIndex()
	{
		// titulo
		$title = Lang::get('admin/entradas/title.entry_management');
	
		// Grab all the entrada posts
		$entradas = $this->entrada;
	
		// Show the page
		return View::make('admin/entradas/index', compact('entradas', 'title'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		// titulo
		$title = Lang::get('admin/entradas/titulo.create_a_new_entry');
		
	
		// Show the page
		return View::make('admin/entradas/create_edit', compact('title'));
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postCreate()
	{
		// Declare the rules for the form validation
		$rules = array(
				'titulo'   => 'required|min:3',
				'contenido' => 'required|min:3',
				'categoria' => 'required|min:3',
				'subtitulo' => 'required'
		);
	
		// Validate the inputs
		$validator = Validator::make(Input::all(), $rules);
	
		// Check if the form validates with success
		if ($validator->passes())
		{
			// Create a new entrada post
			$user = Auth::user();
	
			// Update the entrada post data
			$this->entrada->titulo            = Input::get('titulo');
			$this->entrada->subtitulo         = Input::get('subtitulo');
			$this->entrada->contenido         = Input::get('contenido');
			$this->entrada->categoria         = Input::get('categoria');
			$this->entrada->user_id			  = $user->id;
	
			// Was the entrada post created?
			if($this->entrada->save())
			{
				// Redirect to the new entrada post page
				return Redirect::to('admin/entradas/' . $this->entrada->id . '/edit')->with('success', Lang::get('admin/entradas/messages.create.success'));
			}
	
			// Redirect to the entrada post create page
			return Redirect::to('admin/entradas/create')->with('error', Lang::get('admin/entradas/messages.create.error'));
		}
	
		// Form validation failed
		return Redirect::to('admin/entradas/create')->withInput()->withErrors($validator);
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param $post
	 * @return Response
	 */
	public function getShow($entrada)
	{
		// redirect to the frontend
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param $post
	 * @return Response
	 */
	public function getEdit($entrada)
	{
		// titulo
		$title = Lang::get('admin/entradas/title.entry_update');
		$urls = $entrada->urls();
		// Show the page
		return View::make('admin/entradas/create_edit', compact('entrada', 'title','urls'));
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param $post
	 * @return Response
	 */
	public function postEdit($entrada)
	{
	
		// Declare the rules for the form validation
		$rules = array(
				'titulo'   => 'required|min:3',
				'contenido' => 'required|min:3'
		);
	
		// Validate the inputs
		$validator = Validator::make(Input::all(), $rules);
	
		// Check if the form validates with success
		if ($validator->passes())
		{
			// Update the entrada post data
			$entrada->titulo            = Input::get('titulo');
			$entrada->subtitulo         = Input::get('subtitulo');
			$entrada->contenido         = Input::get('contenido');
	
			// Was the entrada post updated?
			if($entrada->save())
			{
				// Redirect to the new entrada post page
				return Redirect::to('admin/entradas/' . $entrada->id . '/edit')->with('success', Lang::get('admin/entradas/messages.update.success'));
			}
	
			// Redirect to the entradas post management page
			return Redirect::to('admin/entradas/' . $entrada->id . '/edit')->with('error', Lang::get('admin/entradas/messages.update.error'));
		}
	
		// Form validation failed
		return Redirect::to('admin/entradas/' . $entrada->id . '/edit')->withInput()->withErrors($validator);
	}
	
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param $post
	 * @return Response
	 */
	public function getDelete($entrada)
	{
		// titulo
		$title = Lang::get('admin/entradas/title.entry_delete');
	
		// Show the page
		return View::make('admin/entradas/delete', compact('entrada', 'title'));
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param $post
	 * @return Response
	 */
	public function postDelete($entrada)
	{
		// Declare the rules for the form validation
		$rules = array(
				'id' => 'required|integer'
		);
	
		// Validate the inputs
		$validator = Validator::make(Input::all(), $rules);
	
		// Check if the form validates with success
		if ($validator->passes())
		{
			$id = $entrada->id;
			$entrada->delete();
	
			// Was the entrada post deleted?
			$entrada = Entrada::find($id);
			if(empty($entrada))
			{
				// Redirect to the entrada posts management page
				return Redirect::to('admin/entradas')->with('success', Lang::get('admin/entradas/messages.delete.success'));
			}
		}
		// There was a problem deleting the entrada post
		return Redirect::to('admin/entradas')->with('error', Lang::get('admin/entradas/messages.delete.error'));
	}
	
	/**
	 * Show a list of all the entrada posts formatted for Datatables.
	 *
	 * @return Datatables JSON
	 */
	public function getData()
	{
		$entradas = Entrada::select(array('entradas.id', 'entradas.titulo', 'entradas.categoria', 'entradas.created_at'));
	
		return Datatables::of($entradas)
	
		->add_column('actions', '<a href="{{{ URL::to(\'admin/entradas/\' . $id . \'/edit\' ) }}}" class="btn btn-default btn-xs iframe" >{{{ Lang::get(\'button.edit\') }}}</a>
                <a href="{{{ URL::to(\'admin/entradas/\' . $id . \'/delete\' ) }}}" class="btn btn-xs btn-danger iframe">{{{ Lang::get(\'button.delete\') }}}</a>
            ')
	
	     ->remove_column('id')
	
	     ->make();
	}
}