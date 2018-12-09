<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;
use Illuminate\Http\Request;

class UsersController extends CrudController{

	public function all($entity){
		parent::all($entity);

		$this->filter = \DataFilter::source(new \App\User);
		$this->filter->add('nume', 'Nume', 'text');
		$this->filter->add('email', 'Email', 'text');
		$this->filter->submit('search');
		$this->filter->reset('reset');
		$this->filter->build();

		$this->grid = \DataGrid::source($this->filter);
		$this->grid->add('nume', 'Nume');
		$this->grid->add('email', 'Email');
		$this->grid->add('prezentare', 'Prezentare');
		// $this->grid->add('changepass', 'Able to change pass?');
		$this->grid->add('infoarena', 'InfoArena');
		$this->grid->add('repogithub', 'Repository');
		$this->grid->add('oras', 'Oraș');
		$this->grid->add('telefon', 'Telefon');
		$this->grid->add('web', 'Web');
		$this->grid->add('gamedev', 'GameDev');
		$this->grid->add('algoritmica', 'Algoritmică');
		$this->grid->add('numeproiect', 'Nume Proiect');
		$this->grid->add('created_at', 'Înscriere');

		$this->addStylesToGrid();

		return $this->returnView();
	}

	public function  edit($entity){

		parent::edit($entity);

		$this->edit = \DataEdit::source(new \App\User());

		$this->edit->label('Edit User');

		$this->edit->add('nume', 'Nume', 'text');
		$this->edit->add('telefon', 'Telefon', 'text');
		$this->edit->add('email', 'Email', 'text');
		$this->edit->add('facebook', 'Facebook', 'text');
		$this->edit->add('marime_tricou', 'Marime tricou', 'text');

		$this->edit->add('prezentare', 'Prezentare', 'text');
		$this->edit->add('changepass', 'Can change pass?', 'text');
		$this->edit->add('infoarena', 'InfoArena', 'text');
		$this->edit->add('repogithub', 'Repository', 'text');
		$this->edit->add('oras', 'Oraș', 'text');
		$this->edit->add('varsta', 'Vârsta', 'text');
		$this->edit->add('email_confirmation_token', 'Email Confirmation Token', 'text');
		$this->edit->add('email_confirmed', 'Email Confirmed', 'number');
		$this->edit->add('scoala', 'Școala', 'text');
		$this->edit->add('web', 'Web', 'radiogroup')->option('1', 'Participă')->option('0', 'Nu participă');
		$this->edit->add('gamedev', 'GameDev', 'radiogroup')->option('1', 'Participă')->option('0', 'Nu participă');
		$this->edit->add('algoritmica', 'Algoritmică', 'radiogroup')->option('1', 'Participă')->option('0', 'Nu participă');
		$this->edit->add('numeproiect', 'Nume Proiect', 'text');
		$this->edit->add('created_at', 'Înscriere', 'date');

		$this->edit->add('nume2', 'Nume 2', 'text');
		$this->edit->add('telefon2', 'Telefon 2', 'text');
		$this->edit->add('email2', 'Email 2', 'text');
		$this->edit->add('facebook2', 'Facebook 2', 'text');
		$this->edit->add('marime_tricou2', 'Marime tricou 2', 'text');

		$this->edit->add('nume3', 'Nume 3', 'text');
		$this->edit->add('telefon3', 'Telefon 3', 'text');
		$this->edit->add('email3', 'Email 3', 'text');
		$this->edit->add('facebook3', 'Facebook 3', 'text');
		$this->edit->add('marime_tricou3', 'Marime tricou 3', 'text');

		return $this->returnEditView();
	}
}
