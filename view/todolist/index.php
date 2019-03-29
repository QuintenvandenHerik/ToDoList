<?php
    foreach($getList as $list) {
        printf("<h2><a href='%stodolist/view/%s'>%s</a> &nbsp <a href='%stodolist/edit/%s'>edit</a> &nbsp <a href='%stodolist/delete/%s'>x</a></h2>", 
            URL, $list["id"], $list["name"], URL, $list["id"], URL, $list["id"]);
    }
?>
<p><a href="<?= URL ?>todolist/create">+ Toevoegen</a></p> 
