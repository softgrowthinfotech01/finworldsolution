<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="manifest" href="/admin/test_notification/manifest.json">
</head>

<body>

<h1>Admin Dashboard</h1>
<p>Waiting for new users...</p>

<button id="installBtn" style="display:none;">Install Admin App</button>

<script>

// check browser support
if ('serviceWorker' in navigator && 'PushManager' in window) {

navigator.serviceWorker.register('/admin/test_notification/service-worker.js', {
scope: '/admin/test_notification/'
})
.then(function(registration){

// ask permission
return Notification.requestPermission().then(function(permission){

if(permission !== "granted"){
throw new Error("Permission not granted");
}

return registration;

});

})
.then(function(registration){

return registration.pushManager.getSubscription().then(function(existing){

if(existing){
return existing;
}

return registration.pushManager.subscribe({
userVisibleOnly: true,
applicationServerKey: urlBase64ToUint8Array('BLi370oF3fEV8LrI3th2oq6Wmpwqh0ca5HCbWUrKg77keyku6vdkXgWADMXgxLzjYCwSTFs_yhPlOpZsh9-KXzM')
});

});

})
.then(function(subscription){

const formData = new FormData();

const p256dh = btoa(String.fromCharCode.apply(null,
new Uint8Array(subscription.getKey('p256dh'))));

const auth = btoa(String.fromCharCode.apply(null,
new Uint8Array(subscription.getKey('auth'))));

formData.append("endpoint", subscription.endpoint);
formData.append("p256dh", p256dh);
formData.append("auth", auth);

fetch("/admin/test_notification/save_subscription.php",{
method: "POST",
body: formData
});

})
.catch(function(error){
console.error("Push setup error:", error);
});

}

// helper function
function urlBase64ToUint8Array(base64String) {

const padding = '='.repeat((4 - base64String.length % 4) % 4);
const base64 = (base64String + padding)
.replace(/-/g, '+')
.replace(/_/g, '/');

const rawData = window.atob(base64);
const outputArray = new Uint8Array(rawData.length);

for (let i = 0; i < rawData.length; ++i) {
outputArray[i] = rawData.charCodeAt(i);
}

return outputArray;
}


let deferredPrompt;

window.addEventListener('beforeinstallprompt', (e) => {

e.preventDefault();
deferredPrompt = e;

const installBtn = document.getElementById("installBtn");
installBtn.style.display = "block";

installBtn.addEventListener("click", () => {

deferredPrompt.prompt();

});

});
</script>

</body>
</html>