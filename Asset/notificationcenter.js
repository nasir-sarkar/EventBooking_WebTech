function toggleNotifications() {
    const notificationsContainer = document.getElementById('notifications');
    
    if (notificationsContainer.style.display === 'block') {
        notificationsContainer.style.display = 'none';
    } else {
        notificationsContainer.style.display = 'block';
    }
}

function clearNotifications() {
    const notificationsContainer = document.getElementById('notifications');
    notificationsContainer.style.display = 'none';  
    document.getElementById('unread-count').textContent = '0';  
    alert("All notifications cleared.");
}
