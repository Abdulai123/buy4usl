@include('header')
@php
    $user = auth()->user();
@endphp
<section id="referral-dashboard" class="py-16 bg-gradient-to-b from-blue-50 to-white text-gray-600">
  <div class="container mx-auto px-6 lg:px-12">

      <!-- Title Section -->
      <div class="text-center max-w-4xl mx-auto mb-16">
          <h2 class="text-5xl font-bold text-gray-800 tracking-tight">Your Referral Dashboard</h2>
          <p class="mt-4 text-lg text-gray-500">Manage referrals, track earnings, and share your code with ease.</p>
      </div>

      <!-- Referral Code Section -->
      <div class="relative mb-16 p-8 bg-gradient-to-r from-indigo-50 to-indigo-100 rounded-lg shadow-md">
          <h3 class="text-2xl font-semibold text-center">Share Your Referral Code</h3>
          <p class="mt-4 text-center">Invite others and earn <span class="font-bold">up to 25%</span> of their order fees!</p>

          <div class="mt-8 flex justify-center gap-4">
              <input 
                  type="text" 
                  id="referral_code" 
                  class="w-full max-w-md px-4 py-3 text-lg rounded-lg text-gray-800 bg-white focus:ring-4 focus:ring-blue-300 outline-none" 
                  value="{{ $user->referral_code }}" readonly />
              <button 
                  id="copy_button" 
                  class="px-6 py-3 bg-white text-blue-600 font-medium rounded-lg hover:bg-blue-50 transition focus:ring focus:ring-blue-300">
                  Copy Code
              </button>
          </div>

          <p id="copy_success" class="text-center mt-4 text-green-500 hidden">Code copied successfully!</p>

          <div class="absolute -top-5 -right-5 w-16 h-16 rounded-full bg-yellow-400 opacity-40 blur-3xl"></div>
          <div class="absolute -bottom-5 -left-5 w-16 h-16 rounded-full bg-pink-400 opacity-40 blur-3xl"></div>
      </div>

      <script>
        document.getElementById("copy_button").addEventListener("click", function() {
            const codeInput = document.getElementById("referral_code");
            navigator.clipboard.writeText(codeInput.value).then(() => {
                const successMessage = document.getElementById("copy_success");
                successMessage.classList.remove("hidden");

                setTimeout(() => {
                    successMessage.classList.add("hidden");
                }, 2000);
            }).catch(err => {
                console.error("Failed to copy text: ", err);
            });
        });
    </script>

      <!-- Referrals Table -->
      <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <table class="min-w-full text-center text-gray-600">
              <thead class="bg-gray-200 text-gray-800">
                  <tr>
                      <th class="py-4 px-6">#ID</th>
                      <th class="py-4 px-6">Referrer</th>
                      <th class="py-4 px-6">Balance</th>
                      <th class="py-4 px-6">Date</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($referrals as $referral)
                      <tr class="border-t border-gray-100 hover:bg-gray-50">
                          <td class="py-4 px-6">{{ $referral->id }}</td>
                          <td class="py-4 px-6">{{ $referral->referrer->username ?? 'N/A' }}</td>
                          <td class="py-4 px-6">NLe {{ number_format($referral->balance, 2) }}</td>
                          <td class="py-4 px-6">{{ $referral->created_at->format('M d, Y') }}</td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
</section>

<section id="referrals" class="py-16 bg-gradient-to-b from-white to-blue-50">
  <div class="container mx-auto px-6 lg:px-12">

      <!-- Title Section -->
      <div class="text-center max-w-3xl mx-auto mb-12">
          <h2 class="text-4xl font-extrabold text-gray-800">Start Earning with Referrals</h2>
          <p class="mt-4 text-lg text-gray-600">With <span class="text-blue-600 font-semibold">Buy4uSL</span>, you can earn <span class="text-green-600 font-bold">up to 25%</span> of referral fees. Invite, refer, and grow your income today!</p>
      </div>

      <!-- Steps Section -->
      <div class="grid gap-10 md:grid-cols-3">
          <!-- Step 1 -->
          <div class="p-8 bg-white shadow-lg rounded-lg text-center transform transition hover:scale-105">
              <div class="w-16 h-16 mx-auto bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center">
                  <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path d="M9 14l-5-5m0 0l5-5m-5 5h16" />
                  </svg>
              </div>
              <h3 class="mt-6 text-xl font-semibold">Get Your Code</h3>
              <p class="mt-2 text-gray-600">Sign up or log in to access your unique referral code.</p>
          </div>

          <!-- Step 2 -->
          <div class="p-8 bg-white shadow-lg rounded-lg text-center transform transition hover:scale-105">
              <div class="w-16 h-16 mx-auto bg-red-100 text-red-600 rounded-full flex items-center justify-center">
                  <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path d="M15 10l4.5 4.5L15 19m0-9h-3a4 4 0 01-4-4V4" />
                  </svg>
              </div>
              <h3 class="mt-6 text-xl font-semibold">Share the Code</h3>
              <p class="mt-2 text-gray-600">Spread the word via social media, friends, or family.</p>
          </div>

          <!-- Step 3 -->
          <div class="p-8 bg-white shadow-lg rounded-lg text-center transform transition hover:scale-105">
              <div class="w-16 h-16 mx-auto bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                  <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path d="M3 16l4 4m0 0l4-4m-4 4V4" />
                  </svg>
              </div>
              <h3 class="mt-6 text-xl font-semibold">Track Your Rewards</h3>
              <p class="mt-2 text-gray-600">Monitor your earnings and referral activity in real-time.</p>
          </div>
      </div>

  </div>
</section>




@include('footer')
