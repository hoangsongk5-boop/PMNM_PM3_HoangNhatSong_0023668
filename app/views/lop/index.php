<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <h2 style="color: #333;">Danh sách lớp học</h2>
    <a href="/qlsv/public/lop/tao" class="btn" style="background-color: #2bc862; color: white; text-decoration: none; padding: 8px 15px; border-radius: 4px; font-size: 14px;">+ Thêm lớp học</a>
</div>

<div style="background-color: #f8f9fa; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
    <form action="/qlsv/public/lop/index" method="GET" style="display: flex; gap: 10px; align-items: center;">
        <input type="text" name="search" value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>" placeholder="Tìm theo mã lớp hoặc tên lớp..." style="padding: 8px 12px; width: 300px; border: 1px solid #ccc; border-radius: 4px; outline: none;">
        <button type="submit" style="background-color: #3d79f3; color: white; padding: 8px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px;">Tìm kiếm</button>
        <a href="/qlsv/public/lop/index" style="background-color: white; color: #333; padding: 8px 20px; border: 1px solid #ccc; border-radius: 4px; text-decoration: none; font-size: 14px;">Đặt lại</a>
    </form>
</div>

<table style="width: 100%; border-collapse: collapse; text-align: left; background: white; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
    <thead style="background-color: #554f4f; color: white;">
        <tr>
            <th style="padding: 12px; border-bottom: 1px solid #ddd; width: 5%;">STT</th>
            <th style="padding: 12px; border-bottom: 1px solid #ddd; width: 15%;">Mã lớp</th>
            <th style="padding: 12px; border-bottom: 1px solid #ddd; width: 25%;">Tên lớp</th>
            <th style="padding: 12px; border-bottom: 1px solid #ddd; width: 35%;">Ghi chú</th>
            <th style="padding: 12px; border-bottom: 1px solid #ddd; width: 20%;">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php 

        $stt = ($currentPage - 1) * $pageSize + 1; 
        foreach($lops as $lop): 
        ?>
        <tr style="border-bottom: 1px solid #eee;">
            <td style="padding: 12px;"><?= $stt++ ?></td>
            <td style="padding: 12px;">
                <span style="background-color: #9aa0a6; color: white; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: bold;">
                    <?= htmlspecialchars($lop['ma_lop']) ?>
                </span>
            </td>
            <td style="padding: 12px;"><?= htmlspecialchars($lop['ten_lop']) ?></td>
            <td style="padding: 12px;"><?= htmlspecialchars($lop['ghi_chu']) ?></td>
            <td style="padding: 12px;">
                <a href="/qlsv/public/lop/edit/<?= $lop['id'] ?>" style="background-color: #e2b93b; color: white; padding: 5px 12px; text-decoration: none; border-radius: 3px; font-size: 12px; margin-right: 5px;">Sửa</a>
                <a href="/qlsv/public/lop/delete/<?= $lop['id'] ?>" style="background-color: #d9534f; color: white; padding: 5px 12px; text-decoration: none; border-radius: 3px; font-size: 12px;" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>