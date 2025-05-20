var queue = ["Alice", "Bob", "Charlie", "Elsa"];

function displayQueue() {
  var list = document.getElementById("queue");
  list.innerHTML = "";

  for (var i = 0; i < queue.length; i++) {
    var item = document.createElement("li");
    item.textContent = queue[i];
    list.appendChild(item);
  }
}

function checkPosition() {
  var name = document.getElementById("queueName").value;
  var pos = queue.indexOf(name);

  if (pos >= 0) {
    document.getElementById("positionResult").innerHTML = "Your position is: " + (pos + 1);
  } else {
    document.getElementById("positionResult").innerHTML = "Name not found in waitlist.";
  }
}

displayQueue();
