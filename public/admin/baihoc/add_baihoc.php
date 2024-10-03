<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Thêm bài học</h4>
        <form action="index.php?act=add_baihoc" enctype="multipart/form-data" method="post">
            <!-- <div class="form-group">
              <label for="">ID</label>
              <input disabled name="product_id" type="text" class="form-control">
            </div>  -->
            <div class="form-group">
              <label for="">Tên bài học</label>
              <input name="baihoc_name" type="text" class="form-control" required>
            </div>
            
            <div class="form-group">
              <label for="">Hình ảnh</label>
              <input name="img" multiple="multiple" type="file" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="">Mô Tả</label>
              <input name="mo_ta" type="text" class="form-control" required>
            </div>
           

              <div class="form-group mt-3">
                <input class="btn btn-primary" type="submit" name="themmoi" value="Thêm mới">
                <input class="btn btn-secondary" type="reset" value="Nhập lại">
                <a href="index.php?act=list_baihoc"><input class="btn btn-primary" type="button" value="Danh sách"></a>
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