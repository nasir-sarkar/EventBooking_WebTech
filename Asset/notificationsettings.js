document.getElementById('saveButton').addEventListener('click', function() {
    const emailEnabled = document.getElementById('email').checked;
    const pushEnabled = document.getElementById('push').checked;

    alert(`Saved Preferences:\nEmail Notifications: ${emailEnabled ? 'Enabled' : 'Disabled'}\nPush Notifications: ${pushEnabled ? 'Enabled' : 'Disabled'}`);
});
