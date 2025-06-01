function addDietaryInfo(event) {
    event.preventDefault();
  
    
  var name = document.getElementById('dietName').value;
  var note = document.getElementById('dietNote').value;
  var list = document.getElementById('dietList');

  var li = document.createElement('li');
  li.textContent = name + ': ' + note;
  list.appendChild(li);

  document.getElementById('dietName').value = '';
  document.getElementById('dietNote').value = '';
}