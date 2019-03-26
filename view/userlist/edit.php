    <form action="<?= URL ?>todolist/editAction" method="post">
        <input type="text" value="<?php echo $name; ?>" name="name" required="" placeholder="name">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="submit" value="Edit birthday">
    </form>