<?php
    foreach($getListItem as $item) {
        printf("<h2>". $item["name"]["description"]["status"]["time"] . " &nbsp <a href='%stodolist/edit/%s'>edit</a> &nbsp <a href='%stodolist/delete/%s'>x</a></h2>", 
            URL, $item["id"], URL, $item["id"]);
    }
?>
<p><a href="<?= URL ?>todolist/create">+ Toevoegen</a></p> 