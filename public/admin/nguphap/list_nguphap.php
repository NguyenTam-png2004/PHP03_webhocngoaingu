<style>
  .thaotac {
    display: flex;
    flex-direction: row;
    gap: 10px;
  }

  a {
    text-decoration: none;
  }

  td {
    line-height: 40px;
  }

  .btn1 input:nth-child(1) {
    margin-right: 10px;
  }

  .table1 thead tr th {
    font-weight: 600;
    font-size: 1rem;
  }

  .table1 thead tr th:nth-child(6) td {
    width: 200px;
    word-break: break-all;
  }

  .btn2 {
    padding-left: 30px;
    padding-right: 30px;
  }

  .boloc2 {
    display: flex;
    justify-content: space-between;
  }

  .boloc select {
    height: 38px;
  }

  .list_page {
    margin-top: 1rem;
  }

  .list_page ul {
    display: flex;
    justify-content: end;
    gap: 10px;
    list-style: none;
  }

  .list_page ul li {
    background-color: grey;
    padding: 0.2rem 0.6rem;
    border-radius: .3rem;
  }

  .list_page ul li a {
    color: #FFFFFF;
  }
</style>

<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Ngữ pháp</h2>
        <form class="boloc" action="index.php?act=list_nguphap" method="post">
          <div class="boloc2 form-group">
            <div class="thaotac">
              <a href="index.php?act=add_nguphap"><input class="btn btn-gradient-primary" type="button" value="Thêm ngữ pháp"></a>
            </div>
            <div class="boloc3 d-flex">
              <select name="categori_id" id="" class="form-select" style="height:50px; width:100px;padding:5px 10px;border:1px solid #ebedf2">
                <option value="">Tất cả</option>
                <option value="1">Danh mục 1</option>
                <option value="2">Danh mục 2</option>
              </select>
              <input type="text" name="kyw" class="form-control" placeholder="Search..." style="width:260px;margin: 0 10px;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search...'">
              <button type="submit" class="btn btn-gradient-primary" name="search_dm" value="Search">Search</button>
            </div>
          </div>
        </form>

        <div class="table-responsive">
          <table class="table text-center table-bordered table1">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nội dung ngữ pháp</th>
                <th style="width: 22%;">Thao tác</th> <!-- Cột thao tác -->
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Ngữ pháp mẫu 1</td>
                <td>
                  <a href="index.php?act=update_nguphap" class="btn btn-gradient-primary btn2">Sửa</a>
                  <a href="index.php?act=delete_nguphap" class="btn btn-gradient-danger btn2">Xóa</a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Ngữ pháp mẫu 2</td>
                <td>
                  <a href="index.php?act=update_nguphap" class="btn btn-gradient-primary btn2">Sửa</a>
                  <a href="index.php?act=delete_nguphap" onclick="return confirm('Bạn muốn xóa?')">
                    <input class="btn btn-gradient-danger btn2" type="button" value="Xóa">
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- <div class="list_page">
          <ul>
            <li><a href="index.php?act=list_nguphap&page=1">1</a></li>
            <li><a href="index.php?act=list_nguphap&page=2">2</a></li>
          </ul>
        </div> -->
      </div>
    </div>
  </div>
</div>
