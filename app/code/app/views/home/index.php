<h2>Chào mừng trở lại hệ thống quản lý!</h2>
<hr>
<div style="display:flex; gap:20px; margin-top:20px;">
    <div style="background:#2563eb; color:white; padding:20px; border-radius:8px; flex:1;"
     onclick="window.location.href='/qlsv/public/lop/index'">
        <h3>Tổng số lớp học</h3>
        <p style="font-size:30px; font-weight:bold;"><?= $totalLop ?></p>
    </div>
    <div style="background:#16a34a; color:white; padding:20px; border-radius:8px; flex:1;"
          onclick="window.location.href='/qlsv/public/sinhvien/index'">
        <h3>Tổng số sinh viên</h3>
        <p style="font-size:30px; font-weight:bold;"><?= $totalSV ?></p>
        
    </div>
</div>