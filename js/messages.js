let messagesContainer = document.getElementById("messages-kate");
messagesContainer.addEventListener("load", displayMessages, false);

let sendBtn = document.getElementById("messages-btn");
sendBtn.addEventListener("click", addNewMessage, false);

let messagesSent = [
    "Hey! Are you attending the event on Friday?",
    "Absolutely, lets meet up at Millican Hall at 4pm."
];

let messagesReceived = [
    "Yes I am! Would you like to go together?",
    "Can't wait see you there!"
];

function clearElement(el) {
    while(el.hasChildNodes())
        el.removeChild(el.lastChild);
}

function displayMessages() {
    console.log("we in here")
    clearElement(messagesContainer);
    let leastMessages = Math.min(messagesReceived.length, messagesSent.length)
    let j = 0; // 2
    for (let i = 0; i < leastMessages; i++) {
        addMessage(messagesSent[i], "sent");
        addMessage(messagesReceived[i], "received");
        j++;
    }

    if (messagesReceived.length < messagesSent.length) {
        console.log("s - j is: " + j);
        for (let i = j; i < messagesSent.length; i++)
            addMessage(messagesSent[i], "sent");
    }
    else if (messagesReceived.length > messagesSent.length) {
        console.log("r - j is: " + j);
        for (let i = j; i < messagesReceived.length; i++)
            addMessage(messagesReceived[i], "received");
    }
}

function addNewMessage(e) {
    e.preventDefault();
    let newMessage = document.getElementById("messages-input").value;
    console.log("new message: " + newMessage);
    messagesSent.push(newMessage);
    displayMessages();
}

function addMessage(message, messageType) {
    let messageDiv = document.createElement("div");
    messageDiv.setAttribute("class", "messages--container");

    let messageParent = document.createElement("p");
    let messageText = document.createTextNode(message);
    messageParent.appendChild(messageText);
    messageParent.setAttribute("class", `messages--message ${messageType}`);

    messageDiv.appendChild(messageParent);
    messagesContainer.appendChild(messageDiv);
    console.log("message added: " + message)
}




{/* <div class="messages--container">
        <p class="messages--message received">Yes I am! Would you like to go together?</p>
    </div>

    <div class="messages--container">
        <p class="messages--message sent">Absolutely, lets meet up at Millican Hall at 4pm.</p>
        <p>seen</p>
    </div> */}