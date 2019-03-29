    <form action="<?= URL ?>todolist/editAction" method="post">
        <input type="text" value="<?= $name; ?>" name="name" required="" placeholder="name">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <input type="submit" name="submit" value="Edit list">
    </form>