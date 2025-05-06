function addDietaryInfo(event) {
    event.preventDefault();
  
    const name = document.getElementById('dietName').value;
    const note = document.getElementById('dietNote').value;
    const list = document.getElementById('dietList');
  
    const li = document.createElement('li');
    li.textContent = `${name}: ${note}`;
    list.appendChild(li);
  
    document.getElementById('dietName').value = '';
    document.getElementById('dietNote').value = '';
  }
  