<?php
	require(ROOT . "model/TodolistModel.php");

	function index() {
		render("todolist/index", array(
			"getUserList" => getTodolist()
		));	
	}

	function view($id) {
		render("userlist/view", array(
			"getListItem" => getListItem($id)
		));	
	}

	function create() {
		render("userList/create");
	}

	function createAction() {
		// hier update uitvoeren 
		// functie aanroepen vanuit model en data als parameter aan modellaag meegeven
		createList($_POST);
		header('Location: ' . URL . 'todolist/index');
	}

	function edit($id) {
		$edit = getList($id);
		// TODO: check if the person exists; if not then exit with errormessage (redirect)
		if ($edit == null) die('stuk');

		render("userList/edit", $edit);
	}

	function editAction() {
		// hier update uitvoeren 
		// functie aanroepen vanuit model en data als parameter aan modellaag meegeven

		editList($_POST);
		header('Location: ' . URL . 'todolist/index');
	}

	function delete($id) {
		deleteList($id);
		header('Location: ' . URL . 'todolist/index');
	}
?>