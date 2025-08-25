// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCrWHnGKeZZEJwLLE0SQ0NM8hxQ-Ny10D4",
  authDomain: "woranaritest.firebaseapp.com",
  projectId: "woranaritest",
  storageBucket: "woranaritest.firebasestorage.app",
  messagingSenderId: "521467898585",
  appId: "1:521467898585:web:3531310c1708371d1cecc8",
  measurementId: "G-3H4385G80M"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);