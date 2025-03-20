<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Billing Details</title>

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
                <img src="../../Images/logo.png" alt="" class="w-16">
                <h1 class="text-4xl font-semibold text-slate-500">Daffodil Power Distribution</h1>
            </div>
        </div>
    </header>


    <main class="w-10/12 mx-auto">
      
        <div class="flex justify-around items-center mt-10">
            <h1 class="text-2xl text-slate-500 font-semibold mt-10">Billing Details</h1>
            <a href="./UserDashboard.html" class="btn mt-5">Back to Dashboard</a>
        </div>

      <div class="mt-10 bg-slate-100 p-8 rounded-xl shadow-lg">

        <div class="overflow-x-auto">
            <table class="table">
              <!-- head -->
              <thead>
                <tr>
                  <th>Bill ID</th>
                  <th>Month</th>
                  <th>Units</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Pay Now</th>
                </tr>
              </thead>


              <tbody>
                <!-- row 1 -->
                <tr>
                  <td>0123</td>
                  <td>February</td>
                  <td>48</td>
                  <td>1300</td>
                  <td>Paid</td>
                  <td><a href="./payBill.html" class="btn"> pay</a></td>
                </tr>

                <tr>
                    <td>0123</td>
                    <td>February</td>
                    <td>48</td>
                    <td>1300</td>
                    <td>Unpaid</td>
                    <td><a href="./payBill.html" class="btn"> pay</a></td>
                  </tr>


                  <tr>
                    <td>0123</td>
                    <td>February</td>
                    <td>48</td>
                    <td>1300</td>
                    <td>Paid</td>
                    <td><a href="./payBill.html" class="btn"> pay</a></td>
                  </tr>

              </tbody>
            </table>
        </div>

       
    </div>

  
    </main>

    



    <script src="./scripts/login.js"></script>
  </body>
</html>
