<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Report Dashboard</title>

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
  <body class="font-primary ">

    <header>

        <div class="p-5 border-b border-blue-600 shadow-lg">
            <div class="flex justify-center items-center gap-8">
                <img src="../../Images/logo.png" alt="" class="w-16">
                <h1 class="text-4xl font-semibold text-slate-500">Daffodil Power Distribution</h1>
            </div>
        </div>
    </header>

    <main class="font-primary w-10/12 mx-auto mt-10">
        
       <h1 class="text-2xl text-center text-slate-600">If you have any <span class="font-semibold text-orange-700">issue or Complain</span>, Then report to us.</h1>

       <div class="mt-10">

          <div class="mb-10">
          <label class="fieldset-label text-slate-700 mb-1">Issue Type</label>
          <select class="select" id="">
            <option selected>Billing Issue</option>
            <option>Meter Issue</option>
            <option>Connection Issue</option>
            <option>Payment Issue</option>
            <option>Service Issue</option>
            <option>Others</option>
          </select>
          </div>

          <div>
          <textarea placeholder="Write your problem briefly" class="textarea h-[200px] w-[500px]"></textarea>
          </div>

          <div class="mt-5 flex gap-10" >
            <button class="btn bg-blue-500 text-white hover:bg-blue-300">Submit</button>
            <a class="btn  bg-red-500 text-white hover:bg-red-300" href="./UserDashboard.php">Cancle</a>
          </div>

            
       </div>

    </main>


  </body>
</html>
