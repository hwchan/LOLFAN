<div class = "row">
    <div class="col-md-4 border-right">
        <h4>Champion selection</h4>
        <select name="champions" id="btn-champ">
            <?php
for($i=0; $i < 25; $i++){
    $sql = "SELECT Name FROM championstats LIMIT $i, 1";
    $itemList = $conn->query($sql);
    while($row = $itemList->fetch_assoc()) {
        echo "<option value =$i>" . $row['Name'] . "</option>";
    }
}
            ?>
        </select>
    </div>

    <div class="col-md-8">
        <h4 class="align">Please click to select your items</h4>
        <div class="btn-group">
            <select name="items1" id="items1">
                <?php
for($i=0; $i < 45; $i++){
    $sql = "SELECT Name FROM items LIMIT $i, 1";
    $itemList = $conn->query($sql);
    while($row = $itemList->fetch_assoc()) {
        echo "<option value =$i>" . $row['Name'] . "</option>";
    }
}
                ?>
            </select>
        </div>

        <div class="btn-group">
            <select name="items2" id="items2">
                <?php
for($i=0; $i < 45; $i++){
    $sql = "SELECT Name FROM items LIMIT $i, 1";
    $itemList = $conn->query($sql);
    while($row = $itemList->fetch_assoc()) {
        echo "<option value =$i>" . $row['Name'] . "</option>";
    }
}
                ?>
            </select>
        </div>
        <div class="btn-group">
            <select name="items3" id="items3">
                <?php
for($i=0; $i < 45; $i++){
    $sql = "SELECT Name FROM items LIMIT $i, 1";
    $itemList = $conn->query($sql);
    while($row = $itemList->fetch_assoc()) {
        echo "<option value =$i>" . $row['Name'] . "</option>";
    }
}
                ?>
            </select>
        </div>
        <!--                    </div>-->
        <!--                        <div class="row">-->
        <div class="btn-group">
            <select name="items4" id="items4">
                <?php
for($i=0; $i < 45; $i++){
    $sql = "SELECT Name FROM items LIMIT $i, 1";
    $itemList = $conn->query($sql);
    while($row = $itemList->fetch_assoc()) {
        echo "<option value =$i>" . $row['Name'] . "</option>";
    }
}
                ?>
            </select>
        </div>
        <div class="btn-group">
            <select name="items5" id="items5">
                <?php
for($i=0; $i < 45; $i++){
    $sql = "SELECT Name FROM items LIMIT $i, 1";
    $itemList = $conn->query($sql);
    while($row = $itemList->fetch_assoc()) {
        echo "<option value =$i>" . $row['Name'] . "</option>";
    }
}
                ?>
            </select>
        </div>
        <div class="btn-group">
            <select name="items6" id="items6">
                <?php
for($i=0; $i < 45; $i++){
    $sql = "SELECT Name FROM items LIMIT $i, 1";
    $itemList = $conn->query($sql);
    while($row = $itemList->fetch_assoc()) {
        echo "<option value =$i>" . $row['Name'] . "</option>";
    }
}
                ?>
            </select>
        </div>
    </div>
</div>