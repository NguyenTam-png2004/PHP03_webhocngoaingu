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

  .btn2 {
    padding-left: 30px;
    padding-right: 30px;
  }

  .table1 thead tr th {
    font-weight: 600;
    font-size: 1rem;
  }
</style>

<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Answer_Question</h4>
        <div class="table-responsive">
          <table class="table text-center table-bordered table1">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nội dung câu hỏi</th>
                <th>Nội dung câu trả lời</th>
                <th style="width: 22%;">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Câu hỏi mẫu 1?</td>
                <td>Câu trả lời mẫu 1.</td>
                <td class="btn1">
                  <a href="index.php?act=update_answer_question">
                    <input class="btn btn-gradient-primary btn2" type="button" value="Sửa">
                  </a>
                  <a href="index.php?act=delete_answer_question" onclick="return confirm('Bạn muốn xóa câu hỏi này?')">
                    <input class="btn btn-gradient-danger btn2" type="button" value="Xóa">
                  </a>
                </td>
              </tr>
              <!-- Thêm các dòng khác ở đây -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="thaotac">
  <div class="">
    <a href="index.php?act=add_answer_question">
      <input class="btn btn-gradient-primary" type="button" value="Thêm mới câu hỏi và câu trả lời">
    </a>
  </div>
</div>

<?php
  if (isset($thongbao) && ($thongbao != "")) {
    echo $thongbao;
  }
?>
