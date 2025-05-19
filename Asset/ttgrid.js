function filterTicketResults() {
  const input = document.getElementById('searchInput').value.toLowerCase();
  const checkboxes = document.querySelectorAll('.ticket-category');
  const selectedCategories = [];

  checkboxes.forEach(checkbox => {
    if (checkbox.checked) {
      selectedCategories.push(checkbox.value);
    }
  });

  const items = document.querySelectorAll('#resultsList li');

  items.forEach(item => {
    const title = item.textContent.toLowerCase();
    const type = item.getAttribute('data-type');

    const matchesSearch = title.includes(input);
    const matchesCategory = selectedCategories.length === 0 || selectedCategories.includes(type);

    if (matchesSearch && matchesCategory) {
      item.style.display = '';
    } else {
      item.style.display = 'none';
    }
  });
}
