<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8"><title>Đăng Nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center;}
        .login-card {background: white; border-radius: 20px; padding: 40px; max-width: 420px; width: 100%; box-shadow: 0 20px 40px rgba(0,0,0,0.2);}
    </style>
</head>
<body>
    <div class="login-card">
        <h2 class="text-center mb-4 fw-bold">ĐĂNG NHẬP</h2>
        <form action="/qlsv/public/auth/login" method="post">
            <div class="mb-3">
                <label class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Đăng Nhập</button>
        </form>
    </div>
</body>
</html>