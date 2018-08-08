<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class NewsfeedsController extends CrudController{

	public function all($entity){
		parent::all($entity);

		$this->filter = \DataFilter::source(new \App\Newsfeed);
		$this->filter->add('title', 'Title', 'text');
		$this->filter->submit('search');
		$this->filter->reset('reset');
		$this->filter->build();

		$this->grid = \DataGrid::source($this->filter);
		$this->grid->add('title', 'Titlu');
		$this->grid->add('content', 'Conținut');
		$this->grid->add('aprecieri', 'Aprecieri');
		$this->grid->add('created_at', 'Scris la');
		$this->addStylesToGrid();

		return $this->returnView();
	}

	public function  edit($entity){

		parent::edit($entity);


		$this->edit = \DataEdit::source(new \App\Newsfeed());

		$this->edit->label('Edit Newsfeed');

		$this->edit->add('title', 'Titlu', 'text')->rule('required');
		$this->edit->add('content', 'Conținut', 'textarea')->rule('required');
		$this->edit->add('aprecieri', 'Aprecieri', 'text');

		return $this->returnEditView();
	}
}
