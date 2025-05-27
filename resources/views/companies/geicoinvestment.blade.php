<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Company Performance Chart & Investment</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-blue-300 font-sans">

  <div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-center text-indigo-600 mb-6">Company Growth Chart (2020 - Now)</h1>
    
    <div class="bg-white p-4 rounded-lg shadow-lg mb-10 mx-60">
      <canvas id="growthChart" class="w-full h-64"></canvas>
    </div>

    <!-- Investment Section -->
    @if(!empty(Session::get('emaill')))
        <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4 text-indigo-700">Invest in Company Arrows</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
            <label class="block mb-2 text-gray-700 font-medium">Current Price per Arrow:</label>
            <p class="w-full px-4 py-2 border rounded">{{$comp->price}}$</p>
            </div>

            <div>
            <label class="block mb-2 text-gray-700 font-medium">Number of Arrows:</label>
            <p class="w-full px-4 py-2 border rounded">{{$comp->numberofarrows}}</p>
            </div>

            <div>
            <label class="block mb-2 text-gray-700 font-medium">Total Investment:</label>
            <p class="w-full px-4 py-2 border rounded"></p>
            </div>
        </div>
        </div>
     
    @else
                
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <form action="/investments/Geicoinvestment/buy" method="POST">
              @csrf
                <h2 class="text-2xl font-semibold mb-4 text-indigo-700">Invest in arrow</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block mb-2 text-gray-700 font-medium">How many arrows Arrow:</label>
                    <input id="pricePerArrow" type="number" name="number" class="w-full px-4 py-2 bg-gray-100 border rounded text-green-600 font-bold" />
                </div>
                 <input type="text" hidden name="email"  value="{{Session::get('email')}}">


                <div>
                    <label class="block mb-2 text-gray-700 font-medium">pay:</label>
                    <button type="submit" class="bg-red-600 p-5 text-white hover:bg-red-900">Pay Now</button>
                </div>
                     <input type="text" value="Geico" hidden>
                </div>
                 </div>
            </form>
            
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg m-6">
            <form action="/investments/Geicoinvestment/delete" method="POST">
              @csrf
                <h2 class="text-2xl font-semibold mb-4 text-indigo-700">Sell your arrows </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block mb-2 text-gray-700 font-medium">How many arrows Arrow:</label>
                    <input id="pricePerArrow" type="number" name="number"  class="w-full px-4 py-2 bg-gray-100 border rounded text-green-600 font-bold" />
                </div>
                <input type="text" hidden name="email"  value="{{Session::get('email')}}">
                <div>
                    <label class="block mb-2 text-gray-700 font-medium">sell:</label>
                    <button type="submit" class="bg-red-600 p-5 text-white hover:bg-red-900">Pay Now</button>
                </div>

                </div>
                 </div>
            </form>
            
        </div>
        
    @endif
  </div>

  <script>
    const companyData = [
      { year: 2020, value: 120 },
      { year: 2021, value: 150 },
      { year: 2022, value: 130 },
      { year: 2023, value: 170 },
      { year: 2024, value: 160 },
      { year: 2025, value: 200 },
      { year: 01, value: 200 },
      { year: 02, value: 180 },
      { year: 03, value: 160 },
      { year: 04, value: 190 },
    ];

    const labels = companyData.map(item => item.year);
    const values = companyData.map(item => item.value);
    const currentPrice = values[values.length - 1]; // Latest year value

    const ctx = document.getElementById('growthChart').getContext('2d');
    const growthChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: labels,
        datasets: [{
          label: 'Annual Revenue (in M)',
          data: values,
          borderColor: '#4f46e5',
          backgroundColor: 'rgba(79, 70, 229, 0.1)',
          borderWidth: 3,
          tension: 0.3,
          fill: true,
          pointBackgroundColor: values.map((val, i) => {
            if (i === 0) return '#999';
            return val > values[i - 1] ? '#16a34a' : '#dc2626';
          }),
          pointRadius: 6,
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            labels: {
              color: '#374151',
              font: {
                size: 14,
              }
            }
          },
          tooltip: {
            callbacks: {
              label: (context) => `Value: ${context.parsed.y}`
            }
          }
        },
        scales: {
          y: {
            beginAtZero: false,
            ticks: {
              color: '#6b7280',
            },
            grid: {
              color: '#e5e7eb',
            }
          },
          x: {
            ticks: {
              color: '#6b7280',
            },
            grid: {
              color: '#f3f4f6',
            }
          }
        }
      }
    });

    // Set initial investment values
    document.getElementById('pricePerArrow').value = `$${currentPrice.toFixed(2)}`;

    const arrowCountInput = document.getElementById('arrowCount');
    const totalCostInput = document.getElementById('totalCost');

    function updateTotal() {
      const count = parseInt(arrowCountInput.value) || 0;
      const total = currentPrice * count;
      totalCostInput.value = `$${total.toFixed(2)}`;
    }

    // Live update on input
    arrowCountInput.addEventListener('input', updateTotal);

    // Initial total
    updateTotal();
  </script>

</body>
</html>

