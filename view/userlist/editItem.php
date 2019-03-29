    <form action="<?= URL ?>todolist/editItemAction/<?= $task_list_id ?>" method="post">
        <input type="text" value="<?= $task_name; ?>" name="name" required="" placeholder="name">
        <input type="text" value="<?= $task_description; ?>" name="description" required="" placeholder="description">
        <input type="text" value="<?= $task_status; ?>" name="status" required="" placeholder="status">
        <input type="text" value="<?= $task_time; ?>" name="time" required="" placeholder="time">
        <input type="hidden" name="id" value="<?= $task_id; ?>">
        <input type="submit" name="submit" value="Edit list">
    </form>