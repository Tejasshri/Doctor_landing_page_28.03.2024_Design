<?php
$sql = "SELECT * FROM surgicalareaexpertise";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<div class='typesofcancer__subcontainer'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='typesofCancer__Card' onclick='displayPopup()'>";

        echo "<img src='" . $row["cardimageUrl"] . "' alt='" . $row["cardText"] . "' />";
        echo "<p>" . $row["cardText"] . "</p>";
        echo "<hr>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "No data found";
}
