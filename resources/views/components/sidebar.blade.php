<style>
 /* Default menu item */
.menu-item {
  padding: 0.675rem;
  margin: 0 1rem;
  display: flex;
  align-items: center;
  border-radius: 0.5rem;
  font-size: 0.875rem;
  color: #6b7280;
  transition: color 0.3s, background-color 0.3s;
}

.menu-item:hover {
  background-color: #f3f4f6;
  color: #1f2937;
}

/* Icon styling */
.menu-icon {
  margin-right: 0.5rem;
  height: 2rem;
  width: 2rem;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 0.5rem;
  background-color: #ffffff;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

/* Active menu item */
.menu-item.active {
  background-color: #ffffff;
  font-weight: 600;
  color: #374151;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.menu-icon.active {
  background: linear-gradient(to top left, #7e3af2, #ec4899);
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.15);
}

/* Submenu item */
.submenu-item {
  font-size: 0.875rem;
  color: #6b7280;
  transition: color 0.3s;
}

.py-2:hover {
  color: #2563eb;
  background-color: #f3f4f6;
  color: #1f2937;
}
.py-2.active {
  background-color: #ffffff;
  font-weight: 600;
  color: #374151;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  margin-top: 10px;
  padding-left: 20px;
  border-radius: 0.5rem;
}
.rotate-180 {
    transform: rotate(180deg);
}


</style>
<!-- sidenav  -->
<aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
    <div class="h-19.5">
      <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
      <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
        <img src="./assets/img/logo-ct.png" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
        <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">BI SAP</span>
      </a>
    </div>
    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">
            <!-- dashboard -->
            <li class="mt-0.5 w-full">
                <a class="menu-item {{ request()->is('/')?'active':'' }}" href="/">
                    <div class="menu-icon {{ request()->is('/')?'active':'' }}">
                        <i class="fas fa-home" style="{{ request()->is('/')?'color: white;':'color: black;' }}"></i>
                    </div>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <!-- kesiswaan -->
            <li class="mt-0.5 w-full">
                <a class="menu-item {{ request()->is('siswa')?'active':'' }}" onclick="toggleSubmenu('submenu1', 'arrowIcon1')">
                    <div class="menu-icon {{ request()->is('siswa')?'active':'' }}">
                        <i class="fas fa-user-graduate" style="{{ request()->is('siswa')?'color: white;':'color: black;' }}"></i>
                    </div>
                    <span class="menu-text">Kesiswaan</span>
                    <i id="arrowIcon1" class="ml-auto fas fa-chevron-down transition-transform duration-300"></i>
                </a>
                <ul id="submenu1" class="{{ request()->is('siswa')?'':'hidden' }} flex-col pl-12">
                    <li class="py-2 {{ request()->is('siswa')?'active':'' }}"><a href="/siswa" class="submenu-item">Data Siswa</a></li>
                    <li class="py-2"><a href="./pages/table2.html" class="submenu-item">Siswa Keluar</a></li>
                </ul>
            </li>
            
        </ul>
    </div>
</aside>

  <!-- end sidenav -->