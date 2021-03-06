<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Firebase CRUD</title>

  <!-- BOOTSWATCH -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css">

  <!-- ANIMATE CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

</head>

<body class="bg-light">

  <!-- ADD TASK -->
  <div class="container p-4">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">

            <h1 class="h4">Add Task</h1>

            <form id="task-form">
              <div class="form-group">
                <input type="text" id="task-title" class="form-control" class="Task Title" placeholder="Task Title"
                  autofocus>
              </div>
              <div class="form-group">
                <textarea id="task-description" rows="3" class="form-control" placeholder="Task Description"></textarea>
              </div>

              <button class="btn btn-primary" id="btn-task-form">
                Save
              </button>

            </form>
          </div>
        </div>
      </div>
      <!-- Tasks List -->
      <div class="col-md-6" id="tasks-container"></div>
    </div>
  </div>

 <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
     <script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-firestore.js"></script>
<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCDEzyWqoLjdj7_ezXCe5ODZMj5UBBnbKY",
    authDomain: "taller-e3ade.firebaseapp.com",
    databaseURL: "https://taller-e3ade.firebaseio.com",
    projectId: "taller-e3ade",
    storageBucket: "taller-e3ade.appspot.com",
    messagingSenderId: "956363359296",
    appId: "1:956363359296:web:a7dd72b209e499eb03cba5"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>
  <!-- CUSTOM CODE -->
  <script src="index.js"></script>
</body>

</html>