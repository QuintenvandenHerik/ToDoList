<?php 
    function getTodolist() {
        $db = openDatabaseConnection();
        $sql_select_all="SELECT * FROM task_list";
        $query = $db->prepare($sql_select_all);
        $query->execute();
        $db = null;

        return $query->fetchAll();
    }

    function createList($data) {
        $name = $data['name'];
        $db = openDatabaseConnection();
        $sql_add_post = "INSERT INTO task_list (name) VALUES ('$name')";
        $query = $db->prepare($sql_add_post);
        $query->execute();
        $db = null;
    }
    
    function getList($id) {
        $db = openDatabaseConnection();
        $sql_select_all="SELECT name, id FROM task_list WHERE id = $id";
        $query = $db->prepare($sql_select_all);
        $query->execute();
        $db = null;
    
        return $query->fetch();
    }

    function getListItem($id) {
        $db = openDatabaseConnection();
        $sql_select_all="SELECT * FROM tasks WHERE task_list_id = $id INNER JOIN task_list ON tasks.task_list_id = task_list.id";
        $query = $db->prepare($sql_select_all);
        $query->execute();
        $db = null;
    
        return $query->fetch();
    }
    
    function editList($data) {
        $id = $data['id'];
        $name = $data['name'];
        $db = openDatabaseConnection();
        $sql_edit_post = "UPDATE task_list SET name = '$name' WHERE id = $id";        
        $query = $db->prepare($sql_edit_post);
        $query->execute();
        $db = null;
    }
    
    function deleteList($id) {
        $db = openDatabaseConnection();
        $sql_delete_id = "DELETE FROM task_list WHERE id= $id";
        $query = $db->prepare($sql_delete_id);
        $query->execute();
        $db = null;
    }
?>