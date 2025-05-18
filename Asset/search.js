function filterResults() 
{
  const query = document.getElementById('search-bar').value.toLowerCase();
  const selectedCategories = [...document.querySelectorAll('.category:checked')].map(cb => cb.value);
  const items = document.querySelectorAll('.item');
  
  let eventFound = false; 

  for (let i = 0; i < items.length; i++) 
  {
    const item = items[i];
    const title = item.dataset.title.toLowerCase();
    const category = item.dataset.category;
    const matchesQuery = title.includes(query);
    const matchesCategory = !selectedCategories.length || selectedCategories.includes(category);

    if (matchesQuery && matchesCategory) 
    {
      item.style.display = 'block';
      eventFound = true; 
    } 
    else 
    {
      item.style.display = 'none';
    }
  }

  if (!eventFound) 
  {
    window.location.href = '../View/404.html'; 
  }

  const serverError = false; 
  if (serverError) 
  {
    window.location.href = '../View/500.html';
  }
}
