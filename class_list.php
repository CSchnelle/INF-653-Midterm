<?php include 'view/header.php'; ?>
<main>
    <h2>Classes List</h2>
    <section>
        <table>
            <tr>
                <th colspan="2">Name</th>
            </tr>        
            <?php foreach ($classes as $class) : ?>
            <tr>
                <td><?php echo $class['className']; ?></td>
                <td>
                    <form action="." method="post">
                        <input type="hidden" name="action" value="delete_class">
                        <input type="hidden" name="class_id"
                            value="<?php echo $type['class_id']; ?>"/>
                        <input type="submit" value="Remove" class="button red" />
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>    
        </table>
    </section>
    <section>
        <h2>Add Class</h2>
        <form action="." method="post" id="add_vehicle_form">
            <input type="hidden" name="action" value="add_vehicle">

            <label>Name:</label>
            <input type="text" name="class_name" max="20" required><br>

            <label>&nbsp;</label>
            <input id="add_class_button" type="submit" class="button blue" value="Add Class"><br>
        </form>
    </section>
    <section>
        <p><a href="index.php">View Vehicles List</a></p>
    </section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Zippy Used Autos</p>
</footer>
</body>
</html>
