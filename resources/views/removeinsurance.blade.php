<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insurance Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-500 to-purple-600 min-h-screen flex items-center justify-center">

  <!-- Form Container -->
  <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full transform transition duration-500 hover:scale-105">
    <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Insurance Selection</h1>
    
    <!-- Form -->
    <form action="/removeinsurancepost" method="POST" class="space-y-6" >
       @csrf
  
       <!-- Dropdown for Insurance Options -->
      <div>
        <label for="insurance-type" class="block text-gray-700 font-medium mb-2">Select Insurance Type</label>
        <select id="insurance-type" name="insurance-type" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="health-insurance">Health Insurance</option>
          <option value="travel-insurance">Travel Insurance</option>
          <option value="car-insurance">Car Insurance (Based on Mileage)</option>
          <option value="property-health-insurance">Property and Health Insurance</option>
        </select>
      </div>
      <!-- Input for Company Name -->
      <div>
        <label for="namee" class="block text-gray-700 font-medium mb-2">Enter  Name</label>
        <input type="text" id="name" name="name" placeholder="Entery name" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>


      <!-- Submit Button -->
      <div>
        <button type="submit" class="w-full bg-blue-500 text-white font-bold py-3 rounded-lg hover:bg-blue-600 transition duration-300">
          Submit
        </button>
      </div>
    </form>
  </div>

  <!-- Animation -->
  <div class="absolute top-0 left-0 w-40 h-40 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
  <div class="absolute bottom-0 right-0 w-40 h-40 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>