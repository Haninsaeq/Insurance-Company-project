<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom animation for the form container */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .fade-in {
      animation: fadeIn 1s ease-in-out;
    }
  </style>
</head>
<body class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center">
  <div class="bg-white shadow-lg rounded-lg p-8 max-w-lg w-full fade-in">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Get in Touch</h1>
    <p class="text-gray-600 text-center mb-6">We'd love to hear from you! Fill out the form below and we'll get back to you as soon as possible.</p>
    <form action="/usercontact" method="POST" class="space-y-6">
        @csrf
      <!-- Name Input -->
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" id="name" name="name" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm transition duration-300 ease-in-out transform hover:scale-105">
      </div>
      <!-- Email Input -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm transition duration-300 ease-in-out transform hover:scale-105">
      </div>
      <!-- Message Input -->
      <div>
        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
        <textarea id="message" name="message" rows="4" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm transition duration-300 ease-in-out transform hover:scale-105"></textarea>
      </div>
      <!-- Submit Button -->
      <div>
        <button type="submit"
          class="w-full bg-gradient-to-r from-purple-500 to-pink-500 text-white py-2 px-4 rounded-md shadow-lg hover:shadow-xl hover:from-pink-500 hover:to-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition duration-300 ease-in-out transform hover:scale-105">
          Send Message
        </button>
      </div>
    </form>
    <!-- Link to Check Responses -->
    <div class="mt-6 text-center">
      <a href="/userresponses" class="text-purple-500 hover:text-pink-500 hover:underline transition duration-300 ease-in-out transform hover:scale-105">
        Check for Responses
      </a>
    </div>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>