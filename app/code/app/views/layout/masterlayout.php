<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8"><title>Quản lý sinh viên</title>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:Arial,sans-serif;}
        body{background:#f4f6f9;}
        .header{background:#2563eb;color:white;padding:15px 40px;display:flex;justify-content:space-between;align-items:center;}
        .menu a{color:white;text-decoration:none;margin-left:20px;font-weight:500;}
        .content{width:90%;max-width:1200px;margin:30px auto;}
        .card{background:white;padding:25px;border-radius:10px;box-shadow:0 2px 10px rgba(0,0,0,0.08);}
        table{width:100%;border-collapse:collapse;margin-top:15px;}
        table th{background:#2563eb;color:white;padding:12px;text-align:left;}
        table td{padding:12px;border-bottom:1px solid #ddd;}
        .btn{display:inline-block;padding:8px 14px;border-radius:6px;text-decoration:none;color:white;border:none;}
        .btn-primary{background:#2563eb;}.btn-success{background:#16a34a;}.btn-danger{background:#dc2626;}
        .footer{text-align:center;padding:20px;margin-top:40px;color:#666;}
    </style>
</head>
<body>
<header class="header">
    <div class="logo">🎓 Quản Lý Sinh Viên</div>
    <div class="menu">
        <a href="/qlsv/public/home/index">Trang chủ</a>
        <a href="/qlsv/public/lop/index">Quản lý lớp học</a>
        <a href="/qlsv/public/sinhvien/index">Quản lý sinh viên</a>
        <a href="/qlsv/public/auth/logout">Đăng xuất</a>
    </div>
</header>
<div class="content">
    <div class="card">
        <?php require_once '../app/views/' . $viewname . '.php'; ?>
    </div>
</div>
<footer class="footer">© <?= date('Y') ?> - Hệ thống quản lý sinh viên</footer>
</body>
</html>