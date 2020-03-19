<?php include 'view/header.php'; ?>
<main>
    <h2>Types List</h2>
    <section>
        <table>
            <tr>
                <th colspan="2">Name</th>
            </tr>        
            <?php foreach ($types as $type) : ?>
            <tr>
                <td><?php echo $type['typeName']; ?></td>
                <td>
                    <form action="." method="post">
                        <input type="hidden" name="action" value="delete_type">
                        <input type="hidden" name="type_id"
                            value="<?php echo $type['type_id']; ?>"/>
                        <input type="submit" value="Remove" class="button red" />
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>    
        </table>
    </section>
    <section>
        <h2>Add Type</h2>
        <form action="." method="post" id="add_vehicle_form">
            <input type="hidden" name="action" value="add_vehicle">

            <label>Name:</label>
            <input type="text" name="type_name" max="20" required><br>

            <label>&nbsp;</label>
            <input id="add_type_button" type="submit" class="button blue" value="Add Type"><br>
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
