<table class="table table-bordered table-hover">
<?php 


foreach ($data as $id => $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "<td><a href='$delURL$id'>Delete</a></td></tr>";
}

?>
</table>