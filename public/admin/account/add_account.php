
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Thêm tài khoản</h4>
        <form action="index.php?act=add_account" enctype="multipart/form-data" method="post">
          <div class="form-group">
            <label for="">Tên người dùng</label>
            <input name="username" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Mật khẩu</label>
            <input name="password" type="password" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input name="email" type="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Địa chỉ</label>
            <input name="address" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Ngày đăng ký</label>
            <input name="registration_date" type="date" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Avatar</label>
            <input name="avatar" type="file" accept="image/*" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Tổng kinh nghiệm</label>
            <input name="experience" type="number" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Cấp độ</label>
            <select name="level" class="form-select" required>
              <option value="1">Cấp độ 1</option>
              <option value="2">Cấp độ 2</option>
              <option value="3">Cấp độ 3</option>
            </select>
          </div>

          <div class="form-group mt-3">
            <input class="btn btn-primary" type="submit" name="themmoi" value="Thêm mới">
            <input class="btn btn-secondary" type="reset" value="Nhập lại">
            <a href="index.php?act=list_account"><input class="btn btn-primary" type="button" value="Danh sách"></a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
  if (isset($thongbao) && ($thongbao != "")) {
    echo $thongbao;
  }
  ?>
</div>
