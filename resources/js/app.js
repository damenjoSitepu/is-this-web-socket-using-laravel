import './bootstrap';

import axios from 'axios';

const messageForm = document.getElementById("onSubmitMessage");
const messageInput = document.getElementById("messageInput");

messageForm.addEventListener("submit", function (event) {
    event.preventDefault();
    /** Calling API */
    axios.post("/message-me-senpai", {
        message: messageInput.value
    });
})

const publicChannel = Echo.channel('public.message-me-senpai.1');
publicChannel.subscribed(() => {
    console.log("Subscribe me senpai!"); 
}).listen(".message-me-senpai", (data) => {
    console.log(data);
});