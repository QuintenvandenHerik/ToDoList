    <form action="<?= URL ?>todolist/createItemAction/<?= $id ?>" method="post">
        <input type="text" name="name" required="" placeholder="name">
        <input type="text" name="description" required="" placeholder="description">
        <input type="text" name="status" required="" placeholder="status">
        <input type="number" name="time" required="" placeholder="time">
        <input type="submit" name="submit" value="Add task">
    </form>