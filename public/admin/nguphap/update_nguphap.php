<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Cập nhật ngữ pháp</h4>

        <form class="forms-sample" action="index.php?act=update_nguphap" method="post">
          
          <div class="form-group">
            <label for="">Nội dung ngữ pháp</label>
            <input name="categori_name" type="text" value="Nội dung mẫu" class="form-control" required>
          </div>
          <div class="form-group mt-3">
            <input class="btn btn-gradient-primary me-2" type="submit" name="capnhat" value="Cập nhật">
            <input class="btn btn-secondary" type="reset" value="Nhập lại">
            <a href="index.php?act=list_nguphap">
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
