<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Cập nhật khóa học</h4>

        <form class="forms-sample" action="index.php?act=update_khoahoc" method="post">
          <div class="form-group">
            <label for="">Thứ tự khóa học</label>
            <input disabled name="categori_id" value="1" type="text" class="form-control">
            <input type="hidden" name="categori_id" value="1">
          </div>
          <div class="form-group">
            <label for="">Tên khóa học</label>
            <input name="categori_name" type="text" value="Khóa học mẫu" class="form-control" required>
          </div>
          <div class="form-group mt-3">
            <input class="btn btn-gradient-primary me-2" type="submit" name="capnhat" value="Cập nhật">
            <input class="btn btn-secondary" type="reset" value="Nhập lại">
            <a href="index.php?act=list_khoahoc">
              <input class="btn btn-gradient-primary me-2" type="button" value="Danh sách">
            </a>
          </div>
        </form>

      </div>
    </div>
  </div>
  <div class="col-md-12">
    <p>Thông báo mẫu</p>
  </div>
</div>
