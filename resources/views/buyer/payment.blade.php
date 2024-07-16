<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STK Push Query</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4 text-center text-gray-800">STK Push Query</h1>
        <div id="result" class="text-center">
            <div id="loading" class="flex justify-center items-center mb-4">
                <svg class="animate-spin h-8 w-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </div>
            <p id="status" class="text-gray-600">Checking transaction status...</p>
        </div>
    </div>

    <script>
    let pollInterval;

    const updateUI = (content, showLoading = true) => {
        const resultElement = document.getElementById('result');
        resultElement.innerHTML = content;
        
        if (showLoading) {
            resultElement.innerHTML += `
                <div id="loading" class="flex justify-center items-center mt-4">
                    <svg class="animate-spin h-8 w-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
            `;
        }
    };

    const queryStkPush = async () => {
        try {
            const response = await axios.post('/query-stk-push');
            const data = response.data;
            console.log( "Data from the response", data);

            let resultHtml = '';
            let shouldStopPolling = false;
            let statusColor = 'blue';

            switch (data.resultCode) {
                case '0':
                    resultHtml = `<h2 class="text-xl font-semibold text-green-600 mb-2">Transaction Successful</h2>`;
                    shouldStopPolling = true;
                    statusColor = 'green';
                    break;
                case '1032':
                    resultHtml = `<h2 class="text-xl font-semibold text-red-600 mb-2">Transaction Cancelled</h2>`;
                    shouldStopPolling = true;
                    statusColor = 'red';
                    break;
                case '1037':
                    resultHtml = `<h2 class="text-xl font-semibold text-yellow-600 mb-2">Transaction Timeout</h2>`;
                    shouldStopPolling = true;
                    statusColor = 'yellow';
                    break;
                default:
                    resultHtml = `<h2 class="text-xl font-semibold text-blue-600 mb-2">Transaction Status</h2>`;
                    break;
            }

            resultHtml += `
                <p class="text-gray-700 mb-2">${data.message}</p>

            `;

            updateUI(resultHtml, !shouldStopPolling);

            if (shouldStopPolling) {
                clearInterval(pollInterval);
            }
        } catch (error) {
            console.error('Error querying STK push:', error);
            updateUI(`
                <h2 class="text-xl font-semibold text-red-600 mb-2">Error</h2>
                <p class="text-gray-700">An error occurred while querying the transaction status.</p>
            `, false);
            clearInterval(pollInterval);
        }
    };

    // Start polling every 5 seconds
    pollInterval = setInterval(queryStkPush, 5000);

    // Initial call
    queryStkPush();
    </script>
</body>
</html>