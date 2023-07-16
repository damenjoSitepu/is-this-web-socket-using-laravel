import './bootstrap';

const publicChannel = Echo.channel('public.senpai.1');
publicChannel.subscribed(() => {
    console.log("Subscribe me senpai!"); 
}).listen(".senpai-ah", (data) => {
    console.log(data);
});