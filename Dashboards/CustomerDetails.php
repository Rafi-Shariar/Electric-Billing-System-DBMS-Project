<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin-Customer Details</title>

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
                <img src="../Images/logo.png" alt="" class="w-16">
                <h1 class="text-4xl font-semibold text-slate-500">Daffodil Power Distribution</h1>
            </div>
        </div>
    </header>

     <main class="w-10/12 mx-auto mt-6">

      <h1 class="text-2xl font-semibold text-slate-600">Customer Details</h1>
      
      <!-- Search Box -->
      <div class="mt-8 flex justify-around">

         <div class="w-xl">
        <label class="input">
          <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none" stroke="currentColor"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></g></svg>
          <input type="search" required placeholder="Meter Number"/>
        </label>
         </div>

        <div class="w-xl">
          <select class="select" >
              <option selected>Month</option>
              <option >January</option>
              <option >February</option>
              <option >March</option>
              <option >April</option>
              <option >May</option>
              <option >June</option>
              <option >July</option>
              <option >August</option>
              <option >September</option>
              <option >October</option>
              <option >november</option>
              <option >December</option>
          </select>
        </div>

        <div >
           <button class="btn bg-blue-400 text-white">Search</button>
        </div>



      </div>


      <!-- Customer Detaisl --> 
      <div class="mt-12">

        <h1 class="text-2xl text-slate-400 font-semibold">Customer Information</h1>
        
        <!-- Table -->
        <div>
          <div class="overflow-x-auto">
            <table class="table mt-8">
              <!-- head -->
              <thead>
                <tr>
                 
                  <th>Meter Number</th>
                  <th>Month</th>
                  <th>Used Units</th>
                  <th>Total Bill</th>
                  <th>Status</th>
                </tr>
              </thead>

              <tbody>
                <!-- row 1 -->
                <tr>
                  
                  <td>2341231</td>
                  <td>January</td>
                  <td>123</td>
                  <td>1045.43</td>
                  <td>Unpaid</td>
                </tr>
               
              </tbody>
            </table>
          </div>
        </div>

      </div>

      <div class="flex justify-center">
        <a href="./AdminDashboard.php"><button class="btn mt-24 ">Back to Dashboard</button></a>
        
      </div>
    
    </main>


  </body>
  </body>
</html>
