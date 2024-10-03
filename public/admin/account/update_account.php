<style>
  .role {
    margin-left: 1rem;
  }
</style>
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Cập nhật tài khoản</h4>
        <?php
        if (!empty($account)) {
          extract($account);
        }
        ?>
        <form action="index.php?act=update_account" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="">Tên người dùng</label>
            <input type="text" class="form-control"required>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control"required>
          </div>
          <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control"required>
          </div>
          <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Ngày đăng ký</label>
            <input type="date" class="form-control"required>
          </div>
          <div class="form-group">
            <label for="">Tổng kinh nghiệm</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Cấp độ</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Avatar</label>
            <img style="width: 120px;" src="<?= $avatar ?>" class="form-control" alt="ảnh">
            <input class="form-control mt-2" type="file" name="file" id="" multiple="multiple">
          </div>
          <div class="form-group">
            <label for="">Status</label> <br>
            <input type="text" class="form-control" required>
          </div>
          <input type="hidden" name="user_id" value="<?= $user_id ?>">
          <button type="submit" class="mt-3 btn btn-primary" name="update_account_one">Cập nhật</button>
          <input type="reset" class="mt-3 btn btn-primary" value="Nhập lại">
        </form>
      </div>
    </div>
  </div>