<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cài đặt tài khoản</title>
    <link rel="stylesheet" href="../assets/css/settingacc.css">
    <script src="../assets/javascript/settingacc.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Cài đặt</h1>
        <ul class="tabs">
            <li class="active-tab" data-tab="account">Tài khoản</li>
            <li data-tab="upload">Hình ảnh</li>
        </ul>

        <!-- Account Settings Form -->
        <div class="tab-content" id="account">
            <h2>Tài khoản</h2>
            <form id="account-form">
                <label for="username">Tên người dùng</label>
                <input type="text" id="username" value="Thuỷ Nguyễn" required>

                <label for="email">E-mail</label>
                <input type="email" id="email" value="anhzaio428@gmail.com" required>

                <label for="phone">Số điện thoại</label>
                <input type="tel" id="phone" placeholder="+84" required>

                <label for="current-password">Mật khẩu hiện tại</label>
                <input type="password" id="current-password">
                <button type="button" onclick="togglePassword('current-password')">Ẩn/Hiện</button>

                <label for="new-password">Mật khẩu mới</label>
                <input type="password" id="new-password">
                <button type="button" onclick="togglePassword('new-password')">Ẩn/Hiện</button>

                <label for="confirm-password">Xác nhận mật khẩu</label>
                <input type="password" id="confirm-password">
                <button type="button" onclick="togglePassword('confirm-password')">Ẩn/Hiện</button>

                <label for="language">Ngôn ngữ giao diện</label>
                <select id="language">
                    <option value="vi">Tiếng Việt</option>
                    <option value="en">Tiếng Anh (Anh)</option>
                    <option value="fr">Tiếng Pháp</option>
                </select>

                <button type="submit">Cập nhật</button>

                <button type="button" class="delete-btn" onclick="confirmDelete()">Xóa tài khoản của tôi</button>
            </form>
        </div>

        <!-- Upload Image Section -->
        <div class="tab-content" id="upload" style="display: none;">
            <h2>Tải ảnh lên</h2>
            <form id="image-form">
                <input type="file" id="image-upload" accept="image/*">
                <button type="submit">Lưu</button>
            </form>
        </div>
    </div>
</body>
</html>
