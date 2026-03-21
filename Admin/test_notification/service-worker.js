self.addEventListener('push', function(event) {

let data = {};

if (event.data) {
    data = event.data.json();
}

const title = data.title || "Notification";
const options = {
    body: data.message || "You have a new message",
    icon: "https://cdn-icons-png.flaticon.com/512/1827/1827392.png",
    badge: "https://cdn-icons-png.flaticon.com/512/1827/1827392.png"
};

event.waitUntil(
    self.registration.showNotification(title, options)
);

});


/* When user clicks notification */
self.addEventListener('notificationclick', function(event) {

event.notification.close();

event.waitUntil(
    clients.openWindow("/admin/test_notification/admin.php")
);

});