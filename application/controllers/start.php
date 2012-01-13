<?php

class Start_Controller extends Controller {

	public $layout = 'home.index';

	protected $markdown = '';

	function __construct()
	{
		$this->markdown = IoC::resolve('markdown');
	}

	public function action_index($method)
	{
		$this->layout->toc  = $this->markdown->transform(File::get(VIEW_PATH.'contents.md'));

		switch ($method) {
			case 'config':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'start/config.md'));
				break;
			case 'routes':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'start/routes.md'));
				break;
			case 'controllers':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'start/controllers.md'));
				break;
			case 'views':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'start/views.md'));
				break;
			case 'interaction':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'start/interaction.md'));
				break;
			case 'libraries':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'start/libraries.md'));
				break;
			case 'validation':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'start/validation.md'));
				break;
			case 'file':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'other/file.md'));
				break;
			case 'text':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'other/text.md'));
				break;
			case 'lang':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'other/lang.md'));
				break;
			case 'crypt':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'other/crypt.md'));
				break;
			case 'ioc':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'start/ioc.md'));
				break;
			default:
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'start/install.md'));
				break;
		}
	}

	public function action_database($method)
	{
		$this->layout->toc  = $this->markdown->transform(File::get(VIEW_PATH.'contents.md'));
		switch ($method) {
			case 'config':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'database/config.md'));
				break;
			case 'usage':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'database/usage.md'));
				break;
			case 'query':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'database/query.md'));
				break;
			case 'eloquent':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'database/eloquent.md'));
				break;
			case 'redis':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'database/redis.md'));
				break;

			default:
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'database/config.md'));
				break;
		}
	}

	public function action_cache($method)
	{
		$this->layout->toc  = $this->markdown->transform(File::get(VIEW_PATH.'contents.md'));
		switch ($method) {
			case 'config':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'cache/config.md'));
				break;
			case 'usage':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'cache/usage.md'));
				break;
			default:
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'cache/config.md'));
				break;
		}
	}

	public function action_session($method)
	{
		$this->layout->toc  = $this->markdown->transform(File::get(VIEW_PATH.'contents.md'));
		switch ($method) {
			case 'config':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'session/config.md'));
				break;
			case 'usage':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'session/usage.md'));
				break;
			default:
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'session/config.md'));
				break;
		}
	}

	public function action_auth($method)
	{
		$this->layout->toc  = $this->markdown->transform(File::get(VIEW_PATH.'contents.md'));
		switch ($method) {
			case 'config':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'auth/config.md'));
				break;
			case 'usage':
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'auth/usage.md'));
				break;
			default:
				$this->layout->contents = $this->markdown->transform(File::get(VIEW_PATH.'auth/config.md'));
				break;
		}
	}

}
