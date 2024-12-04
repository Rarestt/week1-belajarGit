<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div id="resultContainer" class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-bold text-center mb-8 text-blue-600">Quiz Results</h1>
            
            <!-- Student Information -->
            <div class="border-b pb-4 mb-6">
                <h2 class="text-xl font-semibold mb-2">Student Information</h2>
                <p class="text-gray-700">Name: <span id="studentName" class="font-medium"></span></p>
                <p class="text-gray-700">Student ID: <span id="studentNIM" class="font-medium"></span></p>
            </div>

            <!-- Score Summary -->
            <div class="border-b pb-4 mb-6">
                <h2 class="text-xl font-semibold mb-4">Score Summary</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <p class="text-gray-600">Total Score</p>
                        <p id="totalScore" class="text-2xl font-bold text-blue-600"></p>
                        <p id="scorePercentage" class="text-sm text-gray-500"></p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <p class="text-gray-600">Correct Answers</p>
                        <p id="correctAnswers" class="text-2xl font-bold text-green-600"></p>
                        <p id="questionsAttempted" class="text-sm text-gray-500"></p>
                    </div>
                </div>
            </div>

            <!-- Question Breakdown -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Question Breakdown</h2>
                <div id="questionBreakdown" class="space-y-3">
                    <!-- Questions will be inserted here by JavaScript -->
                </div>
            </div>

            <!-- Navigation -->
            <div class="mt-8 flex justify-center space-x-4 font-semibold">
                <button onclick="window.location.href='index.php'" 
                        class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 
                               transition duration-300">
                    Back to Home
                </button>
            </div>
        </div>
    </div>

    <script src="results.js"></script>
</body>
</html>