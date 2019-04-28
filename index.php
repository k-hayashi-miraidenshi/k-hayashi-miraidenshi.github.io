<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <div class="container">
        <div class="header-left">
          <p>portfolio</p>
        </div>
        <div class="header-right">
          <a href="#" class="login">TOP</a>
        </div>
      </div>
    </header>
    <div class="top-wrapper">
      <div class="container">
        <h5>WELCOME TO THIS PAGE.</h5>
        <h1>KAZUKI HAYASHI</h1>
        <h3>1999.1.20</h3>
        <h3>The place I was born: Toyama Prefecture</h3>
        <div class="btn-wrapper">
          <div class="Mypicture">
            <img src="Screenshot_20190330-120431~2[39].png">
          </div>
          <p>My account</p>
          <a href="https://www.facebook.com/kazuki.hayashi.5876" class="btn facebook"><span class="fab fa-facebook"></span>Facebook</a>
          <a href="https://twitter.com/KH53064030" class="btn twitter"><span class="fab fa-twitter"></span>Twitter</a>
          <a href="https://www.instagram.com/?hl=ja"class="btn instagram"><span class="fab fa-instagram"></span>instagram</a>
        </div>
      </div>
    </div>
    <div class="lesson-wrapper">
      <div class="container">
        <div class="heading">
          <h2>My favorite books</h2>
        </div>
        <div class="lessons">
          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://images-na.ssl-images-amazon.com/images/I/81vpau-X9fL.jpg">
            </div>
            <p class="txt-contents">
              <p>2015-Laplace's Witch</p> 
              <p>An elderly man died of hydrogen sulfide poisoning. There is no incident. If this were a murder case, the murderer would have predicted the natural phenomenon that happened there. At that time, a girl appeared who could predict natural phenomena.</p>
            </p>
          </div>
          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://images-na.ssl-images-amazon.com/images/I/51JUi83dGXL._SX357_BO1,204,203,200_.jpg">
            </div>
            <p class="txt-contents">
                <p>2012-Good luck</p>
                <p>The protagonist who works at the publisher has lived without knowing that people are familiar with people and making friends. How do she take the next step when she notices the wonder of being in love and being connected to someone? </p>
              </p>
          </div>
          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://images-fe.ssl-images-amazon.com/images/I/51j8O570MSL.jpg">

            </div>
            <p class="txt-contents"> 
              <p>2007-An elephant that makes dreams come true</p>
              <p>A story in which very ordinary office workers change their lives by the instruction of the mysterious creature Ganesha who calls "God".</p>
            </p>
          </div>
          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://images-na.ssl-images-amazon.com/images/I/614PbMKEQxL.jpg">
            </div>
            <p class="txt-contents">
                <p>2015-Sheep and steel forest</p>
                <p>The protagonist sees a chance that a tuning teacher tunes the grand piano in the gymnasium after school one day in the second semester of the second year of high school. That led him to live his life as a tuner.</p>
              </p>
          </div>
        </div>
<div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <form method="post" action="sent.php">
        <div class="form-item">名前</div>
        <input type="text" name="name">

        <div class="form-item">年齢</div>
        <select name="age">
          <option value="未選択">選択してください</option>
          <!-- for文を用いて6歳から100歳までをoptionで選べるようにしましょう -->
          <?php 
            for($i=6;$i<=100;$i++){
              echo "<option value='{$i}'>{$i}</option>";
            }
          ?>
        </select>

        <div class="form-item">お問い合わせの種類</div>
        <?php 
          $types = array('Progateに関するお問い合わせ', 'Progateに対する意見', '採用に関するお問い合わせ', '取材・メディア関連のお問い合わせ', '料金に関するお問い合わせ', 'その他');
         ?>
        <!-- この下にselectタグを書いていきましょう -->
        <select name="category">
           <option value="未選択">選択してください</option>
             <?php
             foreach ($types as $type) {
              echo "<option value='{$type}'>{$type}</option>";
             }
            ?>
        </select>
        
        <div class="form-item">内容</div>
        <textarea name="body"></textarea>

        <input type="submit" value="送信">
      </form>
    </div>

      </div>
    </div>
    <footer>
      <div class="container">
        <p>Learning Programing language</p>
        <ul>
        <li class="fab fa-html5 fa-5x"></li>
        <li class="fab fa-css3-alt fa-5x"></li>
        <li class="fab fa-python fa-5x"></li>
        <li class="fab fa-java fa-5x"></li>
        </ul>
        <a href="https://www.miraidenshi-tech.jp/" class="btn signup">miraidenshi</a>
      </div>
    </footer>
  </body>
</html>