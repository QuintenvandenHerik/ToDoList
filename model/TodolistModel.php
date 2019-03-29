<?php 
    function getTodolist() {
        $db = openDatabaseConnection();
        $sqlSelectAllLists="SELECT * FROM task_list";
        $query = $db->prepare($sqlSelectAllLists);
        $query->execute();
        $db = null;

        return $query->fetchAll();
    }

    function createList($data) {
        $name = $data['name'];
        $db = openDatabaseConnection();
        $sqlCreateList = "INSERT INTO task_list (name) VALUES ('$name')";
        $query = $db->prepare($sqlCreateList);
        $query->execute();
        $db = null;
    }

     function createListItem($data, $id) {
        $name = $data['name'];
        $description = $data['description'];
        $status = $data['status'];
        $time = $data['time'];
        $db = openDatabaseConnection();
        $sqlCreateListItem = "INSERT INTO tasks (task_list_id, task_name, task_description, task_status, task_time) VALUES ('$id', '$name', '$description', '$status', '$time')";
        $query = $db->prepare($sqlCreateListItem);
        $query->execute();
        $db = null;
    }
    
    function getList($id) {
        $db = openDatabaseConnection();
        $sqlSelectList="SELECT * FROM task_list WHERE id = $id";
        $query = $db->prepare($sqlSelectList);
        $query->execute();
        $db = null;
    
        return $query->fetch();
    }

    function getAllListItems($id) {
        $db = openDatabaseConnection();
        $sqlSelectListItems="SELECT * FROM tasks INNER JOIN task_list ON tasks.task_list_id = task_list.id WHERE task_list_id = $id";
        $query = $db->prepare($sqlSelectListItems);
        $query->execute();
        $db = null;
    
        return $query->fetchAll();
    }
    
    function getListItem($id) {
        $db = openDatabaseConnection();
        $sqlSelectListItem="SELECT * FROM tasks WHERE task_id = $id";
        $query = $db->prepare($sqlSelectListItem);
        $query->execute();
        $db = null;
    
        return $query->fetch();
    }
    
    function editList($data) {
        $id = $data['id'];
        $name = $data['name'];
        $db = openDatabaseConnection();
        $sqlEditList = "UPDATE task_list SET name = '$name' WHERE id = $id";        
        $query = $db->prepare($sqlEditList);
        $query->execute();
        $db = null;
    }
    
    function editListItem($data) {
        $id = $data['id'];
        $name = $data['name'];
        $description = $data['description'];
        $status = $data['status'];
        $time = $data['time'];
        $db = openDatabaseConnection();
        $sqlEditList = "UPDATE tasks SET task_name = '$name', task_description = '$description', task_status = '$status', task_time = '$time' WHERE task_id = $id";        
        $query = $db->prepare($sqlEditList);
        $query->execute();
        $db = null;
    }
    
    function deleteList($id) {
        $db = openDatabaseConnection();
        $sqlDeleteList = "DELETE FROM task_list WHERE id= $id";
        $query = $db->prepare($sqlDeleteList);
        $query->execute();
        $db = null;
    }

    function deleteAllListItems($id) {
        $db = openDatabaseConnection();
        $sqlDeleteList = "DELETE FROM tasks WHERE task_list_id= $id";
        $query = $db->prepare($sqlDeleteList);
        $query->execute();
        $db = null;
    }

    function deleteListItem($id) {
        $db = openDatabaseConnection();
        $sqlDeleteListItem = "DELETE FROM tasks WHERE task_id= $id";
        $query = $db->prepare($sqlDeleteListItem);
        $query->execute();
        $db = null;
    }
?>