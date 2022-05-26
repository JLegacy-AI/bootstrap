import firebase from 'firebase';
  
const firebaseConfig = {
    apiKey: "AIzaSyCEND51S7uRwNKYSs7qfMPX_wm5hMkRL4k",
    authDomain: "parkingaeroportfr-96c99.firebaseapp.com",
    projectId: "parkingaeroportfr-96c99",
    storageBucket: "parkingaeroportfr-96c99.appspot.com",
    messagingSenderId: "52637099214",
    appId: "1:52637099214:web:c1ca17549d5911a6a65c9f"
};
  
firebase.initializeApp(firebaseConfig);
var auth = firebase.auth();
export { auth , firebase };

// export const ConnectWithGoogle = () => {
//     const auth = getAuth();
//     auth.languageCode = 'fr';
//     const provider = new GoogleAuthProvider();    
//     signInWithPopup(auth, provider)
//     .then((result) => {
//         // This gives you a Google Access Token. You can use it to access the Google API.
//         const credential = GoogleAuthProvider.credentialFromResult(result);
//         const token = credential.accessToken;
//         // The signed-in user info.
//         const user = result.user;

//         console.log(token);
//         console.log(user);
//         // ...
//     }).catch((error) => {
//         console.log(error);
//         // Handle Errors here.
//         const errorCode = error.code;
//         const errorMessage = error.message;
//         // The email of the user's account used.
//         const email = error.email;
//         // The AuthCredential type that was used.
//         const credential = GoogleAuthProvider.credentialFromError(error);
//     // ...
//     });
// };

// export const ConnectWithFacebook = () => {
//     const auth = getAuth();
//     auth.languageCode = 'fr';
//     const provider = new FacebookAuthProvider();
//     signInWithPopup(auth, provider)
//     .then((result) => {
//         // The signed-in user info.
//         const user = result.user;

//         // This gives you a Facebook Access Token. You can use it to access the Facebook API.
//         const credential = FacebookAuthProvider.credentialFromResult(result);
//         const token = credential.accessToken;

//         console.log(token);
//         console.log(user);

//         // ...
//     })
//     .catch((error) => {
//         console.log(error);
//         // Handle Errors here.
//         const errorCode = error.code;
//         const errorMessage = error.message;
//         // The email of the user's account used.
//         const email = error.email;
//         // The AuthCredential type that was used.
//         const credential = FacebookAuthProvider.credentialFromError(error);
//         // ...
//     });
// };
