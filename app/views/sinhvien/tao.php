<div style="max-width: 500px; margin: 0 auto 20px auto; display: flex; justify-content: center; gap: 15px;">
    <a href="/qlsv/public/sinhvien/index" style="position: absolute; left: 5;background: #f3f4f6; color: #333; padding: 8px 15px; border-radius: 4px; text-decoration: none; font-weight: bold; border: 1px solid #ddd; font-size: 14px;">
        &larr; Quay lại
    </a>
    <h2 style="margin: 0;">Thêm Sinh Viên Mới</h2>
</div>

<div style="max-width: 500px; margin: 0 auto; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
    <form action="/qlsv/public/sinhvien/store" method="POST">
        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold; display: block; margin-bottom: 5px;">Mã sinh viên</label>
            <input type="text" name="ma_sv" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
        </div>
        
        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold; display: block; margin-bottom: 5px;">Họ và tên</label>
            <input type="text" name="ho_ten" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold; display: block; margin-bottom: 5px;">Lớp học</label>
            <select name="ma_lop" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                <?php foreach($lops as $lop): ?>
                    <option value="<?= $lop['ma_lop'] ?>"><?= $lop['ten_lop'] ?? $lop['ma_lop'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold; display: block; margin-bottom: 5px;">Ngày sinh</label>
            <input type="date" name="ngay_sinh" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
        </div>

        <div style="margin-bottom: 20px;">
            <label style="font-weight: bold; display: block; margin-bottom: 5px;">Giới tính</label>
            <select name="gioi_tinh" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>
        
        <button type="submit" style="background: #15803d; color: white; padding: 12px; border: none; border-radius: 4px; cursor: pointer; width: 100%; font-weight: bold; font-size: 16px;">Lưu sinh viên</button>
    </form>
</div>