<div style="display:flex; justify-content:space-between; align-items:center;">
    <h2>Danh sách sinh viên</h2>
    <a href="/qlsv/public/sinhvien/tao" class="btn btn-success">Thêm sinh viên</a>
</div>

<table>
    <tr><th>Mã SV</th><th>Họ Tên</th><th>Giới tính</th><th>Ngày sinh</th><th>Mã Lớp</th><th>Hành động</th></tr>
    <?php foreach($sinhviens as $sv): ?>
    <tr>
        <td><?= $sv['ma_sv'] ?></td>
        <td><?= $sv['ho_ten'] ?></td>
        <td><?= $sv['gioi_tinh'] ?></td>
        <td><?= $sv['ngay_sinh'] ?></td>
        <td><?= $sv['ma_lop'] ?></td>
       <td>
    <a href="/qlsv/public/sinhvien/edit/<?= $sv['id'] ?>" 
       style="display: inline-block; padding: 5px 15px; margin-right: 5px; 
          background-color: #ff9d13; color: white; text-decoration: none; 
          border-radius: 4px; font-weight: bold; border: 1px solid #eea236;">
    Sửa
    </a>
    
    <a href="/qlsv/public/sinhvien/delete/<?= $sv['id'] ?>" 
       style="display: inline-block; padding: 5px 15px; 
          background-color: #ce2e28; color: white; text-decoration: none; 
          border-radius: 4px; font-weight: bold; border: 1px solid #d43f3a;" 
   onclick="return confirm('Bạn có chắc chắn muốn xóa?')">
    Xóa</a>
</td>
    </tr>
    <?php endforeach; ?>
</table>