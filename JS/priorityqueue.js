var sampleQueue = ["Alice", "Bob", "Charlie", "Elsa"];

function checkPosition() {
  var name = document.getElementById("queueName").value;
  var pos = sampleQueue.indexOf(name);
  
  if (pos >= 0) {
    document.getElementById("positionResult").innerHTML = "Your position is: " + (pos + 1);
  } else {
    document.getElementById("positionResult").innerHTML = "Name not found in waitlist.";
  }
}

function displayQueue() {
  var queueElement = document.getElementById('queue');
  queueElement.innerHTML = '';
  
  for (var i = 0; i < sampleQueue.length; i++) {
    var listItem = document.createElement('li');
    listItem.textContent = sampleQueue[i];
    queueElement.appendChild(listItem);
  }
}

displayQueue();
