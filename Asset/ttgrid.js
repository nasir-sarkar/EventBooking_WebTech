function filterTicketResults() {
  var input = document.getElementById('searchInput').value.toLowerCase();
  var checkboxes = document.getElementsByClassName('ticket-category');
  var selectedCategories = [];

  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      selectedCategories.push(checkboxes[i].value);
    }
  }

  var items = document.getElementById('resultsList').getElementsByTagName('li');

  for (var i = 0; i < items.length; i++) {
    var title = items[i].textContent.toLowerCase();
    var type = items[i].getAttribute('data-type');

    var matchesSearch = title.indexOf(input) !== -1;
    var matchesCategory = (selectedCategories.length === 0 || selectedCategories.indexOf(type) !== -1);

    if (matchesSearch && matchesCategory) {
      items[i].style.display = '';
    } else {
      items[i].style.display = 'none';
    }
  }
}
