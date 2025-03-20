<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin-Add Customer</title>

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

    <main class="font-primary w-10/12 mx-auto">

        <div class="">
            
            <div class="flex justify-around items-center ">
                <h1 class="text-center mt-10 text-3xl text-slate-500 font-semibold">Add New Customer</h1>

                <div class="mt-7">
                    <a href="./AdminDashboard.php" class="btn mt-4 bg-slate-300">Back to Dashboard</a>
                </div>
            </div>
               
               <!-- Auto Generated User ID -->
               <div>
                    <h1 class="text-2xl text-center font-semibold text-slate-500 mt-5">USER ID : <span id="userID" class="text-blue-700">200</span></h1> 
                </div>

            <!-- Customer Registration Form -->
            <div class=" flex items-center justify-center pt-12">
                
                <fieldset class="fieldset bg-white border border-gray-300 p-6 rounded-lg shadow-lg w-8/12">
                   
                    <form action="" class="flex gap-8">
                        <!-- Left Side -->
                        <div class="w-1/2 space-y-4">
                            <div>
                                <label class="fieldset-label block text-base font-semibold text-gray-700">Full Name</label>
                                <input type="text" class="input w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Full Name" />
                            </div>
            
                            <div>
                                <label class="fieldset-label block text-base font-semibold text-gray-700">NID Number</label>
                                <input type="number" class="input w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="NID Number" />
                            </div>
            
                            <div>
                                <label class="fieldset-label block text-base font-semibold text-gray-700">Meter Number</label>
                                <input type="number" class="input w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Meter Number" />
                            </div>
            
                            <div>
                                <label class="fieldset-label block text-base font-semibold text-gray-700">Address</label>
                                <input type="text" class="input w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Address" />
                            </div>

                            <div>
                                <label class="fieldset-label block text-base font-semibold text-gray-700">City</label>
                                <input type="text" class="input w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="City" />
                            </div>
                        </div>
            
                        <!-- Right Side -->
                        <div class="w-1/2 space-y-4">

                            <div>
                                <label class="fieldset-label block text-base font-semibold text-gray-700">Meter Type</label>
                                <select class="select w-full" >
                                    <option selected>Domestic Meter</option>
                                    <option >Commercial Meter</option>
                                    <option >Industrial Meter Meter</option>
                                    <option >Agricultural Meter</option>
                                </select>
                            </div>


                            <div>
                                <label class="fieldset-label block text-base font-semibold text-gray-700">Bill Type</label>
                                <select class="select w-full" >
                                    <option selected>Normal User</option>
                                    <option >Industrial User</option>
                                </select>
                            </div>
                            
            
                            <div>
                                <label class="fieldset-label block text-base font-semibold text-gray-700">Email</label>
                                <input type="email" class="input w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Email" />
                            </div>
            
                            <div>
                                <label class="fieldset-label block text-base font-semibold text-gray-700">Phone Number</label>
                                <input type="number" class="input w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Phone Number" />
                            </div>
            
                            <div>
                                <label class="fieldset-label block text-base font-semibold text-gray-700">Secondary Phone Number</label>
                                <input type="number" class="input w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Secondary Phone Number" />
                            </div>
                        </div>
                    </form>
            
                    <!-- Submit Button -->
                    <div class="mt-6 text-center">
                        <button class="btn bg-blue-600 text-white px-6 py-2 rounded-md shadow-md hover:bg-blue-700 transition duration-300">Add User</button>
                    </div>
                </fieldset>
            </div>

            
            
        </div>

    </main>

   
    <script>

        function generateRandom4Digit() {
           return Math.floor(100000 + Math.random() * 900000);
        }

        document.getElementById('userID').innerText = generateRandom4Digit();

    </script>
  </body>
</html>
