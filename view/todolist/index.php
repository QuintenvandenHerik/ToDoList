<?php
    foreach($getUserList as $list) {
        printf("<h2><a href='%stodolist/view/%s'>". $list["name"] . "</a> &nbsp <a href='%stodolist/edit/%s'>edit</a> &nbsp <a href='%stodolist/delete/%s'>x</a></h2>", 
            URL, $list["id"], URL, $list["id"], URL, $list["id"]);
    }
?>
<p><a href="<?= URL ?>todolist/create">+ Toevoegen</a></p> 
