<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrelimExam</title>
    <link rel="stylesheet" type="text/css" href="newstyle.css">
	
	<!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Oswald:wght@300&family=Shantell+Sans:wght@300&family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Acme&family=Oswald:wght@300&family=Shantell+Sans:wght@300&family=Zilla+Slab:wght@300&display=swap');

        .font-family-acme {
            font-family: acme;
        }
    </style>
</head>
<body class="font-family-acme bg-gradient-to-t from-[#54b2bbe7] to- [#34336b] h-screen"></body>
<h1 class="text-center absolute -mt-10 ml-72 text-3xl font-semibold leading-7 text-blue-500">Add Student Information</h3>
<div class="mt-10 sm:mt-36">
  <div class="md:grid md:grid-cols-7 md:gap-7">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        

      </div>
    </div>
    <div class="-mt-20 md:col-span-4 md:mt-20">   
      <form action="insert.php" method="POST">
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="bg-blue-200 px-4 py-5 sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="firstN" class="block text-lg font-medium text-gray-700">First name</label>
                <input type="text" name="firstN" id="firstN" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-rose-500 focus:ring-indigo-500 sm:text-lg">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="lastN" class="block text-lg font-medium text-gray-700">Last name</label>
                <input type="text" name="lastN" id="lastN" autocomplete="family-name" class="mt-1 block w-full rounded-md border-rose-300 shadow-sm focus:border-rose-500 focus:ring-rose-500 sm:text-lg">
              </div>

              <div class="col-span-4 sm:col-span-1">
                <label for="sex" class="block text-lg font-medium text-gray-700">Sex</label>
                <select id="sex" name="sex" autocomplete="sex" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                  <option>Female</option>
                  <option>Male</option>
                </select>
              </div>

              <div class="col-span-3">
                <label for="add" class="block text-lg font-medium text-gray-700">Address</label>
                <input type="text" name="add" id="add" autocomplete="add" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg">
              </div>

              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <label for="contact" class="block text-lg font-medium text-gray-700">Contact Number</label>
                <input type="text" name="contact" id="contact" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg">
              </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <button type="button" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-lg font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" onClick="location.href='student.php'">&nbsp;&nbsp;Listing</button>
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-lg font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

           
          </div>
          </div>
        </div>
      </div>
    </div>    <!-- row -->

  <div class="overlay toggle-menu"></div>
</div>        <!-- container-fluid -->
</div>          <!-- content-wrapper -->