<?php
	require(ROOT . "model/TodolistModel.php");

	function index() {
		render("todolist/index", array(
			"getList" => getTodolist()
		));	
	}

	function view($id) {
		render("userlist/view", array(
			"id" => $id,
			"getAllListItems" => getAllListItems($id)
		));	
	}

	function create() {
		render("userList/create");
	}

	function createAction() {
		createList($_POST);
		header('Location: ' . URL . 'todolist/index');
	}

	function createItem($id) {
		render("userList/createItem", array('id' => $id));
	}

	function createItemAction($id) {
		createListItem($_POST, $id);
		header('Location: ' . URL . 'todolist/view/' . $id);
	}

	function edit($id) {
		$edit = getList($id);
		if ($edit == null) die('stuk');

		render("userList/edit", $edit);
	}

	function editItem($id) {
		$editItem = getListItem($id);
		if ($editItem == null) die('stuk');

		render("userList/editItem", $editItem
		);
	}

	function editAction() {
		editList($_POST);
		header('Location: ' . URL . 'todolist/index');
	}

	function editItemAction($listId) {
		editListItem($_POST);
		header('Location: ' . URL . 'todolist/view/' . $listId);
	}

	function delete($id) {
		deleteList($id);
		deleteAllListItems($id);
		header('Location: ' . URL . 'todolist/index');
	}

	function deleteItem($id, $listId) {
		deleteListItem($id);
		header('Location: ' . URL . 'todolist/view/' . $listId);	
	}
?>