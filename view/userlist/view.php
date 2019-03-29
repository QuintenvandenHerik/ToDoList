<?php
    foreach($getAllListItems as $item) {
        printf("<div><h2> %s </h2>%s<pre>status: %s<pre>time: %s<pre><a href='%stodolist/editItem/%s'>edit</a> &nbsp <a href='%stodolist/deleteItem/%s/%s'>x</a></div>", 
            $item["task_name"], $item["task_description"], $item["task_status"], $item["task_time"], URL, $item["task_id"], URL, $item["task_id"], $item["task_list_id"]);
    }
?>
<p><a href="<?= URL ?>todolist/createItem/<?= $id ?>">+ Toevoegen</a></p>