const quiz = [
  {
    question:'次のうち漫才で同じボケを2回することを指す言葉はどれ？',
    answers: [
      '天丼', 
      'カツ丼', 
      '海鮮丼', 
      '親子丼'
    ],
    correct:'天丼'
  }, {
    question:'次のうち一番面積が大きい県はどれ？',
    answers: [
      '福島県', 
      '鹿児島県', 
      '北海道', 
      '岩手県'
    ],
    correct:'岩手県'
  }, {
    question:'世界で一番高い山はエベレストですが、エベレストと命名した人物は次のうちどれ？',
    answers: [
      'ギルバート・ワウ', 
      'アンドリュー・スコット・ウォー', 
      'シャーロット・ワハブ', 
      'ジョージ・エベレスト'
    ],
    correct:'アンドリュー・スコット・ウォー'
  }, {
    question:'商店街などの福引などで用いられることの多い、六角形もしくは八角形の箱にハンドルのついた抽選器具、通称「ガラガラ」。さて、この正式名称は次のうちどれ？',
    answers: [ 
      '金井式回転抽選器', 
      '新井式回転抽選器', 
      '矢野式回転抽選器',
      '東京式回転抽選器'
    ],
    correct:'新井式回転抽選器'
  }
];

const quizLength = quiz.length;
let quizIndex = 0;
let score = 0;

const $button = document.getElementsByTagName('button');
const buttonLength = $button.length;

// クイズの問題分、選択肢を定義
const setupQuiz = () => {
  document.getElementById('js-question').textContent = quiz[quizIndex].question;
  let buttonIndex = 0;
  let buttonLength = $button.length;
  while(buttonIndex < buttonLength){
    $button[buttonIndex].textContent = quiz[quizIndex].answers[buttonIndex];
    buttonIndex++;
  }
}

setupQuiz();

const clickHandler = (e) => {
  if(quiz[quizIndex].correct === e.target.textContent) {
    window.alert('正解！');
    score++;
  } else {
    window.alert('不正解！');
  }

  quizIndex++;

  if(quizIndex < quizLength){
    // 問題数がある場合の処理
      setupQuiz();
  } else {
    // 問題数がない（最終問題だった）場合の処理
    window.alert('終了！あなたの正解数は' + score + '/' + quizLength + 'です！');
  }
};

// 正誤判定
let handlerIndex = 0;
while(handlerIndex < buttonLength) {
  $button[handlerIndex].addEventListener('click', (e) => {
    clickHandler(e);
  });
  handlerIndex++;
}

