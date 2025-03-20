<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Electric Billing System - Login</title>

    <!-- Tailwind + Daisy UI Setup -->
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@5"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Custom Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome / Icon Setup -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />

    <!-- Common Style -->
    <style>
      .font-primary {
        font-family: "Poppins", sans-serif;
      }
    </style>
  </head>
  <body class="font-primary">
    <header>
      <div class="p-5 border-b border-blue-600 shadow-lg">
        <div class="flex justify-center items-center gap-8">
          <img src="./Images/logo.png" alt="" class="w-16" />
          <h1 class="text-4xl font-semibold text-slate-500">
            Daffodil Power Distribution
          </h1>
        </div>
      </div>
    </header>

    <div class="min-h-screen flex items-center justify-center">
      <div class="w-10/12 mx-auto flex justify-evenly items-center">
        <!-- Login Form -->
        <div id="loginForm" class="">
          <fieldset
            class="fieldset w-xs bg-base-200 border border-base-300 p-4 rounded-box"
          >
            <h1 class="text-2xl font-semibold mb-4">Login</h1>
            <label class="fieldset-label">User Name</label>
            <input type="email" class="input" placeholder="Username" />

            <label class="fieldset-label">Password</label>
            <input type="password" class="input" placeholder="Password" />

            <label class="fieldset-label">Login As</label>
            <select class="select" id="loginas">
              <option>Admin</option>
              <option selected>User</option>
            </select>

            <button class="btn btn-neutral mt-4 bg-blue-400" id="LoginBtn">Login</button>

            <label class="fieldset-label mt-4"
              >Don't have an account? Register now..</label
            >

            <a
              href="./Dashboards/User/RegisterUser.php"
              class="btn btn-neutral mt-4 bg-slate-400"
              id="RegistratonBtn"
              >Register</a
            >
          </fieldset>
        </div>

        <!-- Banner Image -->
        <div class="">
          <img
            src="./Images/Home.jpg"
            alt=""
            class="w-xl opacity-70 rounded-2xl"
          />
        </div>
      </div>
    </div>

    <img src="./Dashboards/AdminDashboard.php" alt="" />
   

    <!-- Script -->
    <script>
      document.getElementById("LoginBtn").addEventListener("click", (e) => {
        e.preventDefault();

        const loginAs = document.getElementById("loginas").value;
        console.log(loginAs);

        if (loginAs == "User") {
          window.location.href = "./Dashboards/User/UserDashboard.php";
        } else {
          window.location.href = "./Dashboards/AdminDashboard.php";
        }
      });
    </script>
  </body>
</html>
