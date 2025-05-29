let waitlist = [
  { name: "Alice", email: "alice@example.com" },
  { name: "Bob", email: "bob@example.com" },
  { name: "Charlie", email: "charlie@example.com" }
];

function notifyNext() {
  const msg = document.getElementById('message');

  if (waitlist.length > 0) {
    const user = waitlist.shift();
    msg.innerHTML = `Spot opened! Notified ${user.name} (${user.email})`;
  } else {
    msg.innerHTML = "Waitlist is empty.";
  }
}
