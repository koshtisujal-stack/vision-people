importScripts('https://www.gstatic.com/firebasejs/9.23.0/firebase-app-compat.js');
importScripts('https://www.gstatic.com/firebasejs/9.23.0/firebase-messaging-compat.js');

firebase.initializeApp({
  apiKey: "AIzaSyDSayskhU4EAexwRFBTY0-vgexDI69Ygs",
  authDomain: "suju-5d220.firebaseapp.com",
  projectId: "suju-5d220",
  messagingSenderId: "216054181280",
  appId: "1:216051418280:web:0a763e4ad3258a20966e9d"
});

const messaging = firebase.messaging();

messaging.onBackgroundMessage(function(payload) {
  console.log('[SW] Background message ', payload);

  self.registration.showNotification(
    payload.notification.title,
    {
      body: payload.notification.body,
      icon: "/assets/images/logo-icon.png"
    }
  );
});