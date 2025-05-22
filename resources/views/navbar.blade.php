 <header class="bg-[#0B1460] flex items-center justify-between px-4 sm:px-6 md:px-10 py-3">
    <div class="flex items-center space-x-2 min-w-[840px]">
      <img alt="TixMeUp logo with hand gesture icon in white on blue background" class="w-8 h-8" height="32" src="{{ asset('img/logo.png') }}" width="32"/>
      <span class="text-white font-semibold text-lg select-none">TixMeUp</span>
    </div>
    <div class="hidden sm:flex flex-1 max-w-[480px] mx-6">
      <div class="relative w-full">
        <input class="w-full rounded-full bg-[#00108b] placeholder-white text-white pl-10 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-white" placeholder="Search by artist or event" type="text"/>
        <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-white text-sm"></i>
      </div>
    </div>
    <div class="flex items-center space-x-3 min-w-[180px] justify-end">
      <button aria-label="My Tickets" class="ml-4 flex items-center space-x-1 bg-[#1E2A78] hover:bg-[#2a3a9e] text-white text-sm font-semibold py-1.5 px-4 rounded-md">
    <span>
     My Tickets
    </span>
    <i class="fas fa-chevron-down text-xs">
    </i>
   </button>
    </div>
  </header>
