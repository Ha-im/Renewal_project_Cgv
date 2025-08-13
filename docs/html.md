# html 컨벤션

## 문서 구조
- 모든 HTML 문서는 반드시 `<!DOCTYPE html>` 선언으로 시작합니다.  
- `<html>` 태그에는 반드시 `lang="ko"` 속성을 명시합니다.

## 들여쓰기 및 태그
- 들여쓰기는 스페이스 2칸을 사용합니다.  
- 태그와 속성은 모두 소문자로 작성합니다.  
- 속성 값은 항상 큰따옴표(" ")로 감쌉니다.

## 네이밍 규칙
- 클래스 네이밍은 BEM(Block Element Modifier) 방식을 권장합니다.  
  예: `.header__logo`, `.button--primary`

## 시맨틱 태그 활용
- 의미에 맞는 시맨틱 태그를 사용합니다 (`<section>`, `<article>`, `<header>`, `<footer>` 등).

## 접근성
- 이미지 태그에는 반드시 `alt` 속성을 작성합니다.  
- 필요한 경우 ARIA 속성(`aria-label`, `aria-hidden` 등)을 적극 활용합니다.

## 주석
- 주요 섹션 구분을 위해 주석을 사용합니다.  
  예) `<!-- Header 영역 -->`
