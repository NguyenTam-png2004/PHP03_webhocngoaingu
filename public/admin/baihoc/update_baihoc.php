<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Cập nhật bài học</h4>
        <form action="index.php?act=update_baihoc" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label for="">Thứ tự bài học</label>
            <input name="name" type="text" class="form-control" required>
          </div>
 
          <div class="form-group">
            <label for="">Tên bài học</label>
            <input name="name" type="text" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="">Ảnh sản phẩm</label>
            <input name="image" type="file" accept="image/*" class="form-control" required>
            <div class="form-control mb-2" style="width:147px">
             
            </div>
            <input class="form-control" type="file" name="img" id="">
          </div>

          <div class="form-group mt-3">
            <input type="hidden" name="size_id">
            <input type="hidden" name="product_id" value="<?= $product_id ?>">
            <input class="btn btn-primary" type="submit" name="capnhatpr" value="Cập nhật">
            <input class="btn btn-secondary" type="reset" value="Nhập lại">
            <a href="index.php?act=list_baihoc"><input class="btn btn-primary" type="button" value="Danh sách"></a>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <?php if (isset($thongbao) && ($thongbao != "")): ?>
    <div class="alert alert-info">
      <?= $thongbao ?>
    </div>
  <?php endif; ?>
</div>
