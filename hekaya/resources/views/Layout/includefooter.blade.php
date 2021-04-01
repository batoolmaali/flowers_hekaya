 <!-- Required Jquery -->
    <script src="{{ asset('assets\js\jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets\js\scripts.js') }}"></script>
    <script src="{{ asset('assets\js\vue.js') }}"></script>
    <script src="{{ asset('assets\js\vue.js') }}"></script>
   
    <script src="{{ asset('assets\js\slick.min.js') }}"></script>
    <script src=" {{asset('assets\js\levels-scripts.js') }}"></script>
  <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

  <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-firestore.js"></script>
<script>
    // TODO: Replace the following with your app's Firebase project configuration
    var firebaseConfig = {
      apiKey: "AIzaSyBInM_AcxjoEdciAN08hgL-sRbuPOHqh60",
  authDomain: "alashbal-9cd24.firebaseapp.com",
  databaseURL: "https://alashbal-9cd24.firebaseio.com",
  projectId: "alashbal-9cd24",
  storageBucket: "alashbal-9cd24.appspot.com",
  messagingSenderId: "821128013054",
  appId: "1:821128013054:web:4009a871a55967da39f1af",
  measurementId: "G-PWZHBPSRYZ" 
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
  </script>
  
  <script>
    $('#hidden-div').draggable({
  });
</script>
<script>
    $('#Ehidden-div').draggable({
  });
</script>