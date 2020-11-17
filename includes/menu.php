<?php
session_start();
$user_type = $_SESSION["user_type"];
$mid=$_SESSION["mid"];
// if ($user_type == NULL) {
//   header("Location: login.php");
// }
?>

<div class='container'>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="homepage.php">NKUST-MESO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              系上活動
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="eventschedule.php">活動行事曆</a>
              <a class="dropdown-item" href="questionnaire.php">活動問卷統計</a>
              <a class="dropdown-item" href="acphoto.php">活動剪影</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              系上導覽
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="introduction.php">系所簡介</a>
              <a class="dropdown-item" href="member.php">系所成員</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              會員福利
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="game.php">互動式遊戲(開發中)</a>
              <a class="dropdown-item" href="reuters.php">留言板</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href=" CooperativeStore.php">MESO合作店家</a>
            </div>
          </li>
          
          <li class='nav-item'>
          <a class='nav-link' href='students.php' tabindex='-1' aria-disabled='true'>會員管理</a>
         </li>
          <?php
          if($user_type!=NULL){
            echo "<li class='nav-item'>";
            echo" <a class='nav-link' href='logout.php'>登出</a>";
            echo "</li>";
          }
          else{
            echo "<li class='nav-item'>";
            echo" <a class='nav-link' href='login.php'>登入</a>";
            echo "</li>";
          }
          ?>
        </ul>
      </div>
    </nav>
</div>