<div style="max-width: 500px; margin: 0 auto 20px auto; display: flex; justify-content: center; align-items: center; position: relative;">
    <a href="/qlsv/public/lop/index" style="position: absolute; left: -300px; background: #f3f4f6; color: #333; padding: 8px 15px; border-radius: 4px; text-decoration: none; font-weight: bold; border: 1px solid #ddd; font-size: 14px;">
        &larr; Quay lại
    </a>
    <h2 style="margin: 0;">Sửa Thông Tin Lớp Học</h2>
</div>

<div style="max-width: 500px; margin: 0 auto; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
    <form action="/qlsv/public/lop/edit/<?= $lop['id'] ?>" method="POST">
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Mã lớp</label>
            <input type="text" name="ma_lop" value="<?= htmlspecialchars($lop['ma_lop']) ?>" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
        </div>
        
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Tên lớp</label>
            <input type="text" name="ten_lop" value="<?= htmlspecialchars($lop['ten_lop']) ?>" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
        </div>
        
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Ghi chú</label>
            <input type="text" name="ghi_chu" value="<?= htmlspecialchars($lop['ghi_chu']) ?>" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
        </div>
        
        <button type="submit" style="background: #15803d; color: white; padding: 12px 15px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; width: 100%; font-size: 16px;">Cập nhật</button>
    </form>
</div>