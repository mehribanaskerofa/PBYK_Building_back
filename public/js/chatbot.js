console.log('chatbot');
function appendMessage(message) {
    const chatbox = document.getElementById('chatbox');
    const messageElement = document.createElement('div');
    messageElement.innerText = message;
    chatbox.appendChild(messageElement);
}

function sendMessage() {
    console.log('route');
    const userInput = document.getElementById('userInput').value;
    const csrfToken = document.getElementById('userInput').getAttribute('data-token');
    appendMessage('Siz: ' + userInput);

    fetch('chatbot', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({
            message: userInput
        })
    })
        .then(response => response.json())
        .then(data => {
            appendMessage('Chatbot: ' + data.message);
        });
    // Kullanıcı girdisini temizleyin
    document.getElementById('userInput').value = '';
}
