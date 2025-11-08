<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Instructions</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        .instruction-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            text-align: left;
        }

        .instruction-container h2 {
            color: #1877f2; /* A shade of blue, common for login/app themes */
            margin-top: 0;
            margin-bottom: 24px;
            font-size: 28px;
            text-align: center;
        }

        .instructions p {
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
        }

        .instructions ol {
            padding-left: 20px;
            margin: 0;
        }

        .instructions li {
            margin-bottom: 15px;
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }

        .instructions li strong {
            color: #333;
        }

        .start-btn {
            background-color: #28a745; /* Green for 'start' action */
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            margin-top: 30px;
            transition: background-color 0.3s ease;
        }

        .start-btn:hover {
            background-color: #218838;
        }

        @media (max-width: 600px) {
            .instruction-container {
                padding: 20px;
            }

            .instruction-container h2 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>

    <div class="instruction-container">
        <h2>CBT Examination Instructions</h2>
        <div class="instructions">
            <p>Please read the following instructions carefully before you begin the examination:</p>
            <ol>
                <li>The examination consists of <strong>50 multiple-choice questions</strong>.</li>
                <li>The total duration for the examination is <strong>60 minutes</strong>.</li>
                <li>Each question carries one mark. There is no negative marking for wrong answers.</li>
                <li>Click on the radio button corresponding to the option you think is correct.</li>
                <li>You can navigate between questions using the "Next" and "Previous" buttons.</li>
                <li>A timer at the top of the page will show the remaining time.</li>
                <li>Your exam will be automatically submitted when the time is up.</li>
                <li>Do not close the browser window or refresh the page during the exam, as this will end your attempt.</li>
                <li>Click the "Submit Exam" button on the last page to finish your test manually.</li>
                <li>Ensure you have a stable internet connection before starting.</li>
            </ol>
        </div>
        
        <!-- This form will take the user to the exam page -->
        <form action="exam.php" method="post">
            <button type="submit" class="start-btn">Start Exam</button>
        </form>
    </div>

</body>
</html>