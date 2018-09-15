<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class ContactsController extends CrudController{

	public function all($entity){
		parent::all($entity);



		$this->filter = \DataFilter::source(new \App\Contact);
		$this->filter->add('name', 'Name', 'text');
		$this->filter->submit('search');
		$this->filter->reset('reset');
		$this->filter->build();

		$this->grid = \DataGrid::source($this->filter);
		$this->grid->add('name', 'Name');
		$this->grid->add('email', 'Email');
		$this->grid->add('subject', 'Subiect');
		$this->grid->add('mesaj', 'Mesaj');
		$this->grid->add('created_at', 'Scris la');
		$this->addStylesToGrid();


		return $this->returnView();
	}

	public function edit($entity){

		parent::edit($entity);


		$this->edit = \DataEdit::source(new \App\Contact());

		$this->edit->label('Edit Contacts');

		$this->edit->add('name', 'Name', 'text');
		$this->edit->add('email', 'Email', 'text')->rule('required');
		$this->edit->add('subject', 'Subiect', 'text')->rule('required');
		$this->edit->add('mesaj', 'Mesaj', 'textarea')->rule('required');
		$this->edit->add('created_at', 'Scris la', 'date');


		return $this->returnEditView();
	}
}
