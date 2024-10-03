<?php
session_start();
ob_start();

// include '../model/PDO.php';
include 'header.php';
// include '../model/comment.php';
// include '../model/bill.php';
// include '../model/categori.php';
// include '../model/product.php';
// include '../model/user.php';
// include '../model/statistical.php';
// //controller
// unset($_SESSION['admin_cart']);
if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
      //khoahoc
    case 'add_khoahoc': 
        include './khoahoc/add_khoahoc.php';
        break;
      
    case 'list_khoahoc':
      include "./khoahoc/list_khoahoc.php";
      break;
    case 'delete_khoahoc':
      include './khoahoc/list_khoahoc.php';
      break;
    case 'update_khoahoc':
      include "./khoahoc/update_khoahoc.php";
      break;
    case 'update_khoahoc':
      
      include "./khoahoc/list_khoahoc.php";
      break;
      // baihoc
    case 'add_baihoc':
      
      include './baihoc/add_baihoc.php';
      break;
    case 'list_baihoc':
      
      include "./baihoc/list_baihoc.php";
      break;
    case 'delete_baihoc':
      
      include "./baihoc/list_baihoc.php";
      break;
    case 'update_baihoc':
      include "./baihoc/update_baihoc.php";
      break;
    case 'update_baihoc':
      include "./baihoc/list_baihoc.php";
      break;
      //account
    case 'list_account':
      // $list_account = load_all_account();
      include "./account/list_account.php";
      break;
    case 'delete_account':
      
      include "./account/list_account.php";
      break;
      case 'add_account':
      
        include "./account/add_account.php";
        break;
    case 'logout':
      session_unset();
      header('Location:login_admin.php');
      break;
      break;
    case 'update_account':
      
      include "./account/update_account.php";
      break;

      //nguphap
    case 'list_nguphap':
    //lấy danh sách
    // $listbl = load_all_comment();
    include 'nguphap/list_nguphap.php';
    break;
    case 'delete_nguphap':
      include 'nguphap/list_nguphap.php';
      break;
    case 'update_nguphap':
      include "./nguphap/update_nguphap.php";
      break;
    case 'add_nguphap':
        include "./nguphap/add_nguphap.php";
        break;
  
    ////
    case 'list_vocabulary':

      include 'Vocabulary./list_vocabulary.php';
      break;

    case 'add_vocabulary':

      include 'Vocabulary./add_vocabulary.php';
      break;
    
    case 'delete_vocabulary':

      include 'Vocabulary./delete_vocabulary.php';
      break;
    
    case 'update_vocabulary':

      include 'Vocabulary./update_vocabulary.php';
      break;


    ///
    case 'list_answer_question':

      include 'answer_question./list_answer_question.php';
      break;
    
    case 'add_answer_question':

      include 'answer_question./add_answer_question.php';
      break;
    case 'delete_answer_question':

      include 'answer_question./delete_answer_question.php';
      break;
    case 'update_answer_question':

      include 'answer_question./update_answer_question.php';
      break;
  }
} 

include 'footer.php';
ob_end_flush();
