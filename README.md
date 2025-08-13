# Renewal_project_Cgv

**GitHub:** [Ha-im/Renewal_project_Cgv](https://github.com/Ha-im/Renewal_project_Cgv)  
**데모 사이트:** [닷홈 배포 버전](http://gungsun1.dothome.co.kr/Renewal_project_Cgv/)

---

## 프로젝트 개요

CGV 사이트 리뉴얼 프로젝트입니다.  
PHP와 MySQL을 백엔드로 사용하며, 프론트엔드는 HTML, CSS, JavaScript(jQuery 포함)로 구현했습니다.  
영화 예매, 영화 소개, 관리자 페이지 등 주요 기능을 포함합니다.

---

## 👥팀원 구성 및 역할 분담

| 이름     | 역할         | 담당 파트 및 설명                              |
|----------|--------------|-----------------------------------------------|
| 박경선   | 팀장 / 로그인 | 로그인 관련 전체 (세션 관리, 인증, 관리자 라우팅 등) |
| 박연미   | 기능 / 디자인 | 메인 페이지 공통, 영화 예매 페이지 구현 및 디자인     |
| 김영태   | 기능 구현    | 영화 소개 페이지 구현                           |

---

## 📂폴더 구조

Renewal_project_Cgv/  
├── admin/                         # 관리자 페이지 관련 파일  
├── assets/  
│   ├── css/                      # CSS 파일  
│   ├── js/                       # JavaScript 파일  
│   └── images/  
│       └── homepage_screen/      # 미리보기용 스크린샷 이미지  
├── includes/                     # DB 연결, 공통 함수 등  
├── db/                           # DB 초기화 SQL 파일  
├── login.php                     # 로그인 페이지  
├── logout.php                    # 로그아웃 처리  
├── index.php                     # 메인 페이지  
├── movie.php                     # 영화 상세 및 예매 페이지  
└── README.md                     # 프로젝트 설명 문서  

---

## 🎯 주요 기능 및 부가기능

- 회원가입, 로그인 (일반회원 및 관리자 구분)  
- 영화 목록 조회 및 예매 기능  
- 관리자 페이지 (영화 관리, 예매 관리, 회원 관리 등)  
- 세션 기반 로그인 인증 및 권한 분기  
- 반응형 UI 기본 지원  
- jQuery를 이용한 UI 인터랙션 구현  
- 간단한 검색 및 필터 기능  

---

## 🛠 기술 스택

- **Language**: PHP 8.x  
- **Database**: MySQL/MariaDB  
- **Web Server**: Apache (XAMPP/MAMP/LAMP)  
- **Frontend**: HTML5, CSS3, JavaScript(ES6+) *(필요 시 jQuery/Bootstrap 사용)*  
- **Auth**: PHP 세션 기반 로그인/권한 관리  
- **Etc.**: Composer(선택), dotenv(선택), Git & GitHub  

---

## 라우팅 안내

| 경로               | 설명                         |  
|--------------------|------------------------------|  
| `/login.php`        | 로그인 페이지                 |  
| `/logout.php`       | 로그아웃 처리                 |  
| `/index.php` 또는 `/` | 메인 페이지                  |  
| `/movie.php?id=XXX` | 영화 상세 및 예매 페이지       |  
| `/admin/*`          | 관리자 페이지 (관리자만 접근) |  

---

## 🔐 로그인 테스트 계정

| 종류       | ID      | 비밀번호    | 비고                    |  
|------------|---------|-------------|-------------------------|  
| 관리자     | admin   | admin123!   | 관리자 페이지 접근 가능 |  
| 일반 회원  | 별도 회원가입 | -       | 일반 회원 메인페이지 이동 |  

---

## 미리보기

아래 주요 화면 스크린샷은 프로젝트 내 `/images/homepage_screen` 폴더에 저장되어 있습니다.

![메인 페이지](/images/homepage_screen/main_pullpage.png)  
*메인 페이지 화면*  

![관리자 페이지 초기화면](/images/homepage_screen/admin_pullpage.png)  
*관리자 로그인 후 초기 화면*  

---

## 설치 및 실행 (로컬 개발 환경 기준)

1. 저장소 클론 및 이동  

```bash
git clone https://github.com/Ha-im/Renewal_project_Cgv.git
cd Renewal_project_Cgv
```

2. XAMPP 또는 Apache + PHP 환경 준비  
- `Renewal_project_Cgv` 폴더를 `htdocs` 등에 복사  
- 예시: `C:\xampp\htdocs\Renewal_project_Cgv`

3. 데이터베이스 생성 및 초기화  
- MySQL에서 새 데이터베이스 생성  
- `db/` 폴더 내 SQL 파일을 사용해 테이블과 초기 데이터 적용

4. DB 접속 정보 수정  
- `includes/db_connect.php` (또는 프로젝트 내 DB 연결 파일)에서 MySQL 접속 정보 수정

5. 웹서버 실행 후 접속  
- 메인 페이지: `http://localhost/Renewal_project_Cgv/`  
- 로그인 페이지: `http://localhost/Renewal_project_Cgv/login.php`

---

## 📦 배포 가이드

1. 프로젝트 전체 파일을 FTP로 닷홈 서버에 업로드  
2. 닷홈 MySQL 환경에 맞게 DB 생성 및 초기화  
3. DB 접속 정보 재설정  
4. 도메인 또는 서브도메인 연결 후 접속 확인  
5. 권한 및 캐시 설정 점검  

---

## 외부 자료 및 참고 링크

- PPT 발표 자료: [Figma Slides](https://www.figma.com/slides/xhYQIPhYWHqIumk73Xyssf/%EC%82%BC%EB%8F%8C%EC%9D%B4%ED%8C%80-ppt?node-id=497-950&t=yBumxaWzbfPrf7Mg-1)  
- 디자인 원본: [Figma 디자인](https://www.figma.com/design/cNWqo63kkdZgcqTbzLOIxy/%EC%82%BC%EB%8F%8C%EC%9D%B4%ED%8C%80-%EB%93%9C%EB%9E%98%ED%94%84%ED%8A%B8?node-id=151-92&t=mmAqOWMc5pQzQ0Ki-1)  

---

## 코드 컨벤션

- [HTML 컨벤션](docs/html.md)  
- [CSS 컨벤션](docs/css.md)  
- [JavaScript 컨벤션](docs/javascript.md)  
- [PHP 컨벤션](docs/php.md)  