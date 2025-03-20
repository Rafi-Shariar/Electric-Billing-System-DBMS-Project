<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Electric Billing System - Register</title>

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
                <img src="../Images/logo.png" alt="" class="w-16">
                <h1 class="text-4xl font-semibold text-slate-500">Daffodil Power Distribution</h1>
            </div>
        </div>
    </header>



    <div class="min-h-screen flex items-center justify-center ">
      <div class="w-10/12 mx-auto flex justify-evenly items-center">

        <!-- Registraton Form -->
        <div class="" id="registrationForm">
          <fieldset
            class="fieldset w-xs bg-base-200 border border-base-300 p-4 rounded-box"
          >
            <h1 class="text-2xl font-semibold mb-4">Create Account</h1>
            <label class="fieldset-label">Meter Number</label>
            <input type="email" class="input" placeholder="Meter Number" />

            <label class="fieldset-label">NID Number</label>
            <input type="name" class="input" placeholder="NID Number" />

            <label class="fieldset-label">User Name</label>
            <input type="text" class="input" placeholder="User Name" />

            <label class="fieldset-label">Password</label>
            <input type="password" class="input" placeholder="User Name" />

            <button class="btn btn-neutral mt-4 bg-blue-400">
              <a href="" id="createBtn">Create</a>
            </button>

     
            <a href="../../index.php" id="createBtn" class="btn btn-neutral mt-4 bg-slate-500">Back</a>
  

            
          </fieldset>
        </div>

        <!-- Banner Image -->
        <div class="">
          <img
            src="../../Images/Home.jpg"
            alt=""
            class="w-xl opacity-70 rounded-2xl"
          />
        </div>
      </div>
    </div>


    



    <script src="./scripts/login.js"></script>
  </body>
</html>
