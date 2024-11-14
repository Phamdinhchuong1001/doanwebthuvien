<div >
  <h2>Danh sách sinh viên</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">STT</th>
        <th class="text-center">Họ và tên </th>
        <th class="text-center">Email</th>
        <th class="text-center">MSSV</th>
        <th class="text-center">Ngành học</th>
      </tr>
    </thead>
    <?php
      include_once "../config/ketnoi.php";
      $sql="SELECT * from users where isAdmin=0";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["firstName"]?> <?=$row["lastName"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["mssv"]?></td>
      <td><?=$row["nganh"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>
  