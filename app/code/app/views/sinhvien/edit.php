
<div style="max-width: 500px; margin: 0 auto 20px auto; display: flex; justify-content: center; gap: 15px;">
     <a href="/qlsv/public/sinhvien/index" style="position: absolute; left: 5;background: #f3f4f6; color: #333; padding: 8px 15px; border-radius: 4px; text-decoration: none; font-weight: bold; border: 1px solid #ddd; font-size: 14px;">
        &larr; Quay lại
    </a>
    <h2 style="margin: 0;">Sửa Thông Tin Sinh Viên</h2>
</div>

<div style="max-width: 500px; margin: 0 auto; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
    <form action="/qlsv/public/sinhvien/edit/<?= $sv['id'] ?>" method="POST">
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Mã sinh viên</label>
            <input type="text" name="ma_sv" value="<?= htmlspecialchars($sv['ma_sv']) ?>" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Họ và Tên</label>
            <input type="text" name="ho_ten" value="<?= htmlspecialchars($sv['ho_ten']) ?>" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Mã lớp</label>
            <input type="text" name="ma_lop" value="<?= htmlspecialchars($sv['ma_lop']) ?>" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Ngày sinh</label>
            <input type="date" name="ngay_sinh" value="<?= htmlspecialchars($sv['ngay_sinh']) ?>" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold;">Giới tính</label>
                <select name="gioi_tinh" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                    <option value="Nam" <?= $sv['gioi_tinh'] == 'Nam' ? 'selected' : '' ?>>Nam</option>
                    <option value="Nữ" <?= $sv['gioi_tinh'] == 'Nữ' ? 'selected' : '' ?>>Nữ</option>
                </select>
            </div>
        <div style="display: flex; gap: 10px;">
                <button type="submit" style="background: #15803d; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">Cập nhật</button>
              
            </div>
    </form>
</div>
</div>