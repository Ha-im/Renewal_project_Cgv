<?php

?>
  <div class="container container_all">
    <div class="allpage">
      <div class="title1">
        <h2>회원가입</h1>
      </div>
      <div class="title2">
        <h3>기본정보</h3>
        <p>*전체 항목은 필수 입력입니다</p>
      </div>
      <form action="" method="POST">
        <div class="input">
          <input type="text" name="username" id="username" placeholder="이름을 입력해주세요." required>
          <div id="name-error" class="error-message"></div>
        <div class="checkId">
          <input type="text" name="userid" id="userid" placeholder="아이디를 입력해주세요." required>
          <button type="button" class="idok">중복확인</button>
        </div>
          <div id="id-error" class="error-message"></div>
          <div id="ok-error" class="ok-message"></div>
          <input type="password" name="password" id="password" placeholder="비밀번호를 입력해주세요." required>
          <div id="pw-error" class="error-message"></div>
          <input type="password" name="passwordok" id="passwordok" placeholder="비밀번호 확인" required>
          <div id="pwok-error" class="error-message"></div>
          <input type="email" name="email" id="email" placeholder="이메일을 입력해주세요." required>
          <div id="email-error" class="error-message"></div>
        </div>
        <button type="submit" id="submitBtn">가입하기</button>
      </form>
      <div class="reset">
        <a href="login.php">돌아가기</a>
      </div>
    </div>
  </div>