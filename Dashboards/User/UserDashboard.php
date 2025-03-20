<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Dashboard</title>

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

    <main class="font-primary w-10/12 mx-auto">
        
        <!-- User Informations -->
        <div>

          <h1 class="text-2xl text-slate-500 mt-10">Personal Information</h1>

          <div class=" w-8/12 mx-auto grid grid-cols-2  mt-10 p-8  rounded-lg bg-slate-100">
          
            <div>
              <h1 class="text-xl mb-3 font-semibold text-slate-600"> Meter No: 3452323</h1>
              <h1 class="text-xl mb-3 font-semibold text-slate-600">Name : Rafi Shariar</h1>
              <h1 class="text-xl mb-3 font-semibold text-slate-600">Address : Mirpur-1</h1>
              <h1 class="text-xl mb-3 font-semibold text-slate-600">City : Dhaka</h1>
            </div>
            <div>
              <h1 class="text-xl mb-3 font-semibold text-slate-600">Phone : 01932341232</h1>
              <h1 class="text-xl mb-3 font-semibold text-slate-600">Email : Rafi@gmail.com</h1>
              <h1 class="text-xl mb-3 font-semibold text-slate-600">Meter Type : Residential</h1>
              <h1 class="text-xl mb-3 font-semibold text-slate-600">Bill Type : normal</h1>
            </div>

            <div class="mt-10">
              <a class="btn bg-white" href="./updateInfo.php">Update Info</a>
            </div>
    
    
            </div>

        </div>

        <!-- User Carts -->
        <div class="mb-20">

          <div class="grid md:grid-cols-3 gap-5 p-14 border rounded-2xl mt-10 pb-8">

            <!-- cart 1-->
             <a href="./payBill.php">
                <div class="card card-border bg-base-300 shadow-xl">
                    <div class="card-body flex flex-col items-center justify-center text-center">
                       <img src="../../Images/money.png" alt="" class="w-24">
                      <h2 class="card-title text-center">Pay Bill</h2>  
                    </div>
                  </div>
             </a>
           

              <!-- cart 2 -->


            <a href="./billDetails.php">
                <div class="card card-border bg-base-300 shadow-xl">
                    <div class="card-body flex flex-col items-center justify-center text-center">
                       <img src="../../Images/invoice.png" alt="" class="w-32">
                      <h2 class="card-title text-center">Bill Details</h2>  
                    </div>
                  </div>

            </a>

            

              <!-- cart 3-->

            <a href="./ReportIssue.php">
                <div class="card card-border bg-base-300 shadow-xl">
                    <div class="card-body flex flex-col items-center justify-center text-center">
                       <img src="../../Images/warning.png" alt="" class="w-24">
                      <h2 class="card-title text-center">Report Issue</h2>  
                    </div>
                  </div>
            </a>
            
           
        </div>

        </div>



        <div class="flex justify-center mb-30">
          <a href="../../index.php" class="btn bg-red-500 text-white ">Logout</a>
        </div>


        
       

    </main>


  </body>
</html>
