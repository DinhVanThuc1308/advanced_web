<style>
    table {
        width: 100%;
    }

    table,
    th,
    td {
        border: 3px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 15px;
        text-align: center;
    }
</style>
<?php
if (isset($_GET['detail']) && $_GET['detail'] > 0) {
    echo "Tên sách : sách " . $_GET['detail'];
} else {
?>


    <table>
        <tr>
            <td> STT </td>
            <td> Tên sách </td>
            <td> Nội dung sách </td>
        </tr>

    <?php
    for ($i = 1; $i <= 100; $i++) {
        echo "<tr>";
        echo "<td> $i </td>";
        echo "<td> <a href='?detail=$i' >Tên sách $i </a></td>";
        echo "<td> Nội dung sách $i </td>";
        echo "</tr>";
    }
}
    ?>
    </table>