<?php require 'config.php'; ?>
<table border = 1>
    <tr>
        <td>S.No</td>
        <td>Name</td>
        <td>Email</td>
        <td>Age</td>
        <td>Role</td>
        <td>Cleanliness</td>
        <td>StaffService</td>
        <td>Facilities</td>
        <td>Comfortable</td>
        <td>Amenities</td>
        <td>WorthForMoney</td>
        <td>Recomment</td>
</tr>
<?php 
$i=1;
$rows = mysqli_query($conn, "SELECT * FROM entry_details");
foreach($rows as $row) :
?>
<tr>
    <td> <?php echo $i++; ?> </td>
    <td> <?php echo $row["name"]; ?> </td>
    <td> <?php echo $row["email"]; ?> </td>
    <td> <?php echo $row["age"]; ?> </td>
    <td> <?php echo $row["role"]; ?> </td>
    <td> <?php echo $row["cleanliness"]; ?> </td>
    <td> <?php echo $row["staffservice"]; ?> </td>
    <td> <?php echo $row["facilities"]; ?> </td>
    <td> <?php echo $row["comfortable"]; ?> </td>
    <td> <?php echo $row["amenities"]; ?> </td>
    <td> <?php echo $row["worthformoney"]; ?> </td>
    <td> <?php echo $row["recommend"]; ?> </td>
</tr>

<?php endforeach; ?>
</table>

