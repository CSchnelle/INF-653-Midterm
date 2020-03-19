<?php include 'view/header.php'; ?>
    <main>
        <h2>Add Vehicle</h2>
        <form action="index.php" method="post" id="add_vehicle_form">
            <input type="hidden" name="action" value="add_vehicle">

            <label>Vehicle:</label>
            <select name="vehicle_id">
            <?php foreach ($vehicles as $vehicle) : ?>
                <option value="<?php echo $vehicles['vehicle_ID']; ?>">        
                </option>
            <?php endforeach; ?>
            </select><br>

            <label>Make:</label>
            <input type="text" name="make" max="20" required><br>

            <label>Model:</label>
            <input type="text" name="model" max="50" required><br>
            
            <label>Year:</label>
            <input type="text" name="year" max="20" required><br>
            
            <label>Price:</label>
            <input type="text" name="price" max="20" required><br>
            <label>&nbsp;</label>
            <input type="submit" value="Add Vehicle" class="button blue"><br>
        </form>
        <p><a href="index.php?action=list_vehicles">View Vehicle List</a></p>
    </main>

<?php include 'view/footer.php'; ?>
