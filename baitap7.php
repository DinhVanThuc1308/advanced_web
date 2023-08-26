

<style>
table{
    width: 100%;
}
table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: center;
}

</style>


 <table >
 <tr >
 <td> STT </td>
 <td> Tên sách </td>
 <td> Nội dung sách </td>
 </tr>

 <?php
for ($i=1; $i <= 100; $i++) {
    echo "<tr>";
    echo "<td> $i </td>";
    echo "<td> Tên sách $i </td>";
    echo "<td> Nội dung sách $i </td>";
    echo "</tr>";
}
?>
</table >    

