# javascript 컨벤션

## 변수 및 상수 선언
- `const`와 `let`만 사용하며, `var`는 금지  
- 상수는 대문자 스네이크케이스로 작성 (`MAX_COUNT`)

## 함수 선언 및 네이밍
- 함수명과 변수명은 카멜케이스 사용 (`getUserName`)  
- 화살표 함수(Arrow Function)를 기본으로 사용

## 코드 스타일
- 들여쓰기: 스페이스 2칸  
- 중괄호 항상 사용  
- 한 줄에 한 명령문 작성  
- 세미콜론 명시적 작성

## 주석
- 복잡하거나 의도가 분명하지 않은 부분에 주석 작성  
- 함수 위에 JSDoc 스타일 주석 작성

```js
/**
 * 두 수를 더하는 함수
 * @param {number} a 첫 번째 숫자
 * @param {number} b 두 번째 숫자
 * @returns {number} 합계
 */
const add = (a, b) => a + b;
```

## 비동기 처리
- `async/await` 적극 활용  
- Promise 체인 대신 가독성 좋은 async 함수 사용

## 기타
- 네이밍은 의미 있고 명확하게 작성  
- 불필요한 중복 코드 지양  
- ES6+ 문법 우선 사용
