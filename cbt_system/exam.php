<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CBT Exam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: #f5f6fa;
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 40px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 16px #218838;
            padding: 32px 24px;
        }
        .exam-header {
            text-align: center;
            color: #218838;
            font-size: 2rem;
            margin-bottom: 24px;
            font-weight: 600;
        }
        .question {
            font-size: 1.1rem;
            color: #218838;
            margin-bottom: 18px;
        }
        .options {
            list-style: none;
            padding: 0;
            margin-bottom: 24px;
        }
        .options li {
            margin-bottom: 12px;
        }
        .options input[type="radio"] {
            accent-color: #218838;
            margin-right: 8px;
        }
        .nav-btns {
            display: flex;
            justify-content: space-between;
        }
        button {
            background: #218838;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 24px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:disabled {
            background: #9df3afff;
            color: #218838;
            cursor: not-allowed;
        }
        button:hover:not(:disabled) {
            background: #218838;
        }
        .question-no {
            color: #218838;
            font-size: 0.95rem;
            margin-bottom: 8px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="exam-header">CBT Exam</div>
        <div class="question-no" id="questionNo"></div>
        <div class="question" id="questionText"></div>
        <ul class="options" id="optionsList"></ul>
        <div class="nav-btns">
            <button id="prevBtn">Previous</button>
            <button id="nextBtn">Next</button>
        </div>
    </div>
    <script>
        // Sample questions
        const questions = [
            {
                text: "What does HTML stand for?",
                options: [
                    "Hyper Text Markup Language",
                    "Home Tool Markup Language",
                    "Hyperlinks and Text Markup Language",
                    "Hyper Tool Multi Language"
                ]
            },
            {
                text: "Which tag is used for inserting the largest heading in HTML?",
                options: [
                    "h6",
                    "heading",
                    "h1",
                    "head"
                ]
            },
            {
                text: "What is the correct HTML element for inserting a line break?",
                options: [
                    "break",
                    "br",
                    "lb",
                    "line"
                ]
            }
        ];

        let current = 0;
        let answers = Array(questions.length).fill(null);

        function renderQuestion(idx) {
            document.getElementById('questionNo').textContent = `Question ${idx + 1} of ${questions.length}`;
            document.getElementById('questionText').textContent = questions[idx].text;
            const optionsList = document.getElementById('optionsList');
            optionsList.innerHTML = '';
            questions[idx].options.forEach((opt, i) => {
                const li = document.createElement('li');
                li.innerHTML = `
                    <label>
                        <input type="radio" name="option" value="${i}" ${answers[idx] === i ? 'checked' : ''}>
                        ${opt}
                    </label>
                `;
                optionsList.appendChild(li);
            });
            document.getElementById('prevBtn').disabled = idx === 0;
            document.getElementById('nextBtn').textContent = idx === questions.length - 1 ? 'Finish' : 'Next';
        }

        document.getElementById('optionsList').addEventListener('change', function(e) {
            if (e.target.name === 'option') {
                answers[current] = parseInt(e.target.value);
            }
        });

        document.getElementById('prevBtn').addEventListener('click', function() {
            if (current > 0) {
                current--;
                renderQuestion(current);
            }
        });

        document.getElementById('nextBtn').addEventListener('click', function() {
            if (current < questions.length - 1) {
                current++;
                renderQuestion(current);
            } else {
                alert('Exam finished! Your answers: ' + JSON.stringify(answers));
                // You can redirect or submit answers here
            }
        });

        // Initial render
        renderQuestion(current);
    </script>
</body>
</html>