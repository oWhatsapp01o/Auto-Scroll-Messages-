<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
messages {
  height: 200px;
  overflow-y: auto;
}	
</style>
</head>
<body>
<div id="messages">
  <div class="message">
    Hello world
  </div>
  <div class="message">
    Hello world
  </div>
  <div class="message">
    Hello world
  </div>
  <div class="message">
    Hello world
  </div>
  <div class="message">
    Hello world
  </div>
  <div class="message">
    Hello world
  </div>
  <div class="message">
    Hello world
  </div>
  <div class="message">
    Hello world
  </div>
  <div class="message">
    Hello world
  </div>
  <div class="message">
    Hello world
  </div>
  <div class="message">
    Hello world
  </div>
  <div class="message">
    Hello world
  </div>
  <div class="message">
    Hello world
  </div>
</div>
</body>
</html>
<script type="text/javascript">
	const messages = document.getElementById('messages');

function appendMessage() {
	const message = document.getElementsByClassName('message')[0];
  const newMessage = message.cloneNode(true);
  messages.appendChild(newMessage);
}

function getMessages() {
	// Prior to getting your messages.
  shouldScroll = messages.scrollTop + messages.clientHeight === messages.scrollHeight;
  /*
   * Get your messages, we'll just simulate it by appending a new one syncronously.
   */
  appendMessage();
  // After getting your messages.
  if (!shouldScroll) {
    scrollToBottom();
  }
}

function scrollToBottom() {
  messages.scrollTop = messages.scrollHeight;
}

scrollToBottom();

setInterval(getMessages, 100);

</script>
