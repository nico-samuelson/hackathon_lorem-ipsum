<!-- Sidenav -->
<nav
  id="sidenav-4"
  class="group fixed left-0 top-0 z-[1035] h-screen w-60 -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] md:data-[te-sidenav-slim='true']:hidden md:data-[te-sidenav-slim-collapsed='true']:w-[77px] data-[te-sidenav-slim='true']:w-[77px] md:data-[te-sidenav-hidden='false']:translate-x-0 md:dark:bg-zinc-800 [&[data-te-sidenav-slim-collapsed='true'][data-te-sidenav-slim='false']]:hidden md:[&[data-te-sidenav-slim-collapsed='true'][data-te-sidenav-slim='true']]:[display:unset]"
  data-te-sidenav-init
  data-te-sidenav-link-ref
  data-te-sidenav-hidden="false"
  data-te-sidenav-mode="side"
  data-te-sidenav-slim="true"
  data-te-sidenav-content="#slim-content"
  data-te-sidenav-slim-collapsed="true">
  <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
    
    @if(!session('isInspektur'))
      <li class="relative">
        <a
          class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
          href={{ route('member.dashboard') }}
          data-te-sidenav-link-ref>
          <span
            class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
            <i class="fa-solid fa-gauge-high"></i>
          </span>
          <span
            class="group-[&[data-te-sidenav-slim-collapsed='true']]:data-[te-sidenav-slim='false']:hidden"
            data-te-sidenav-slim="false"
            >Dashboard</span
          >
        </a>
      </li>

      <li class="relative">
        <a
          class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10" 
          href={{ route('member.kambing') }}
          data-te-sidenav-link-ref>
          <span
            class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><path fill="currentColor" d="m273 459l7.79-20l6.21 20l5.79-23.33l-4.25-48c-7.76 7.94-17.54 17.85-29.74 30.27zm38.5-380.86a115.06 115.06 0 0 0-21.13-19.6c-17.315-11.88-35.418-18.913-55.08-22.14c-18.751-3.067-37.99-2.743-56.33.12A203.86 203.86 0 0 0 133 49.42a184.2 184.2 0 0 0-29.62 15.36c-12.304 8.597-10.431 6.828.95 1.82a179.6 179.6 0 0 1 30.9-10c50.427-4.832 98.41-7.579 134.17 27.17a80 80 0 0 1 12.28 16c4.714 8.06 7.805 16.877 9.66 25.59l45.69 2.84c-5.032-17.752-15.256-37.574-25.53-50.06zm50.05 26.63c-8.531-13.217-18.495-25.428-29.66-34.88a78.24 78.24 0 0 0-15.79-10.38c2.67 2.68 5.22 5.45 7.61 8.32a138.13 138.13 0 0 1 9.13 12.11l.1.14l.09.14c9.772 15.14 17.164 33.862 20.78 49.15l22.19 1.3a253.49 253.49 0 0 0-14.43-25.91zm29.89 43l70 179.4l-11.82 28.37l-65.77-37.94l-8 13.86l67.56 39l-4.327 5.754L394.12 372l-65.33-31.47a42.41 42.41 0 0 0-9.29-1.43c-5.71 0-9.52 2.06-12.71 6.62c-2.53 3.61-78.5 80.52-147.64 150.28H16V243.73l92.85 3.85l96.61-33.26l10.13-11a214.71 214.71 0 0 1 38 24.27a18.57 18.57 0 0 0 11.61 3.93c13.792-1.574 22.025-9.12 32.83-17.83c-3.267-21.244-6.724-43.71-9.56-62.1c-6.463-2.155-12.926-4.308-19.39-6.46l4.39-4.78zm-37.25 65.02c-4.024-14.705-20.114-19.427-30.58-18.14c-3.073.432-6.167 1.427-8.77 2.68c.868 3.09 2.17 7.87 3.79 10.35c6.527 9.211 17.348 13.898 27.64 12.51c3.967-.672 8.94-3.676 7.92-7.4zm61.63 105.47l19 20l11.6-11l-19-20zM475 172.99s-40.54-27.8-57-1.2l11.25 28.83zM294 382.05l13.4 22.28l-.4-35.64c-3.29 3.45-7.53 7.82-12.95 13.36zm-30.6-167c5.858 1.872 17.61-6.048 17.33-8.01l-6.67-43.33l-28-9.31c-17.65-2.861-58.224-4.989-67.27 9.28c39.596 39.732 39.526 16.87 84.61 51.37zm127.08 172.89c-15.313-7.704-30.838-14.996-46.28-22.44c5.153 29.387 10.895 58.672 15.75 88.11l25.26 37.33l-2.6-34L400 469.61v-28.67l10.19-41.95l6.67-11.05z"/></svg>
          </span>
          <span
            class="group-[&[data-te-sidenav-slim-collapsed='true']]:data-[te-sidenav-slim='false']:hidden"
            data-te-sidenav-slim="false"
            >Kambing</span
          >
        </a>
      </li>

      <li class="relative">
        <a
          class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
          href={{ route('member.kontrak') }}
          data-te-sidenav-link-ref>
          <span
            class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
            <i class="fa-solid fa-file"></i>
          </span>
          <span
            class="group-[&[data-te-sidenav-slim-collapsed='true']]:data-[te-sidenav-slim='false']:hidden"
            data-te-sidenav-slim="false"
            >Kontrak</span
          >
        </a>
      </li>
    @else
      <li class="relative">
        <a
          class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
          href={{ route('dashboard') }}
          data-te-sidenav-link-ref>
          <span
            class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
            <i class="fa-solid fa-gauge-high"></i>
          </span>
          <span
            class="group-[&[data-te-sidenav-slim-collapsed='true']]:data-[te-sidenav-slim='false']:hidden"
            data-te-sidenav-slim="false"
            >Dashboard</span
          >
        </a>
      </li>

      <li class="relative">
        <a
          class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
          data-te-sidenav-link-ref>
          <span
            class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><path fill="currentColor" d="m273 459l7.79-20l6.21 20l5.79-23.33l-4.25-48c-7.76 7.94-17.54 17.85-29.74 30.27zm38.5-380.86a115.06 115.06 0 0 0-21.13-19.6c-17.315-11.88-35.418-18.913-55.08-22.14c-18.751-3.067-37.99-2.743-56.33.12A203.86 203.86 0 0 0 133 49.42a184.2 184.2 0 0 0-29.62 15.36c-12.304 8.597-10.431 6.828.95 1.82a179.6 179.6 0 0 1 30.9-10c50.427-4.832 98.41-7.579 134.17 27.17a80 80 0 0 1 12.28 16c4.714 8.06 7.805 16.877 9.66 25.59l45.69 2.84c-5.032-17.752-15.256-37.574-25.53-50.06zm50.05 26.63c-8.531-13.217-18.495-25.428-29.66-34.88a78.24 78.24 0 0 0-15.79-10.38c2.67 2.68 5.22 5.45 7.61 8.32a138.13 138.13 0 0 1 9.13 12.11l.1.14l.09.14c9.772 15.14 17.164 33.862 20.78 49.15l22.19 1.3a253.49 253.49 0 0 0-14.43-25.91zm29.89 43l70 179.4l-11.82 28.37l-65.77-37.94l-8 13.86l67.56 39l-4.327 5.754L394.12 372l-65.33-31.47a42.41 42.41 0 0 0-9.29-1.43c-5.71 0-9.52 2.06-12.71 6.62c-2.53 3.61-78.5 80.52-147.64 150.28H16V243.73l92.85 3.85l96.61-33.26l10.13-11a214.71 214.71 0 0 1 38 24.27a18.57 18.57 0 0 0 11.61 3.93c13.792-1.574 22.025-9.12 32.83-17.83c-3.267-21.244-6.724-43.71-9.56-62.1c-6.463-2.155-12.926-4.308-19.39-6.46l4.39-4.78zm-37.25 65.02c-4.024-14.705-20.114-19.427-30.58-18.14c-3.073.432-6.167 1.427-8.77 2.68c.868 3.09 2.17 7.87 3.79 10.35c6.527 9.211 17.348 13.898 27.64 12.51c3.967-.672 8.94-3.676 7.92-7.4zm61.63 105.47l19 20l11.6-11l-19-20zM475 172.99s-40.54-27.8-57-1.2l11.25 28.83zM294 382.05l13.4 22.28l-.4-35.64c-3.29 3.45-7.53 7.82-12.95 13.36zm-30.6-167c5.858 1.872 17.61-6.048 17.33-8.01l-6.67-43.33l-28-9.31c-17.65-2.861-58.224-4.989-67.27 9.28c39.596 39.732 39.526 16.87 84.61 51.37zm127.08 172.89c-15.313-7.704-30.838-14.996-46.28-22.44c5.153 29.387 10.895 58.672 15.75 88.11l25.26 37.33l-2.6-34L400 469.61v-28.67l10.19-41.95l6.67-11.05z"/></svg>   
          </span>
          <span
            class="group-[&[data-te-sidenav-slim-collapsed='true']]:data-[te-sidenav-slim='false']:hidden"
            data-te-sidenav-slim="false"
            >Kambing</span
          >
          <span
            class="absolute right-0 ml-auto mr-[0.5rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
            data-te-sidenav-rotate-icon-ref>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="h-5 w-5">
              <path
                fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                clip-rule="evenodd" />
            </svg>
          </span>
        </a>
        <ul
          class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
          data-te-sidenav-collapse-ref>
          <li class="relative">
            <a
              class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
              data-te-sidenav-link-ref
              href="{{ route('add-kambing-view') }}"
              >Pengisian Data</a
            >
          </li>
          <li class="relative">
            <a
              class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
              data-te-sidenav-link-ref
              href="{{ route('inspeksi-kambing-view') }}"
              >Inspeksi Kambing</a
            >
          </li>
          <li class="relative">
            <a
              class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
              data-te-sidenav-link-ref
              href="{{ route('riwayat-kambing') }}"
              >Riwayat Kambing</a
            >
          </li>
          <li class="relative">
            <a
              class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
              data-te-sidenav-link-ref
              href="{{ route('all-kambing') }}"
              >Semua Kambing</a
            >
          </li>
        </ul>
      </li>

      <li class="relative">
        <a
          class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
          data-te-sidenav-link-ref
          href={{ route('admin.pendaftaran') }}>
          <span
            class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
            <i class="fa-solid fa-user"></i>
          </span>
          <span
            class="group-[&[data-te-sidenav-slim-collapsed='true']]:data-[te-sidenav-slim='false']:hidden"
            data-te-sidenav-slim="false"
            >Pendaftaran</span
          >
        </a>
      </li>

      <li class="relative">
        <a
          class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ Request::is('member/dashboard') ? 'active' : '' }}"
          href={{ route('list-produk') }}
          data-te-sidenav-link-ref>
          <span
            class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
            <i class="fa-solid fa-book"></i>
          </span>
          <span
            class="group-[&[data-te-sidenav-slim-collapsed='true']]:data-[te-sidenav-slim='false']:hidden"
            data-te-sidenav-slim="false"
            >Katalog</span
          >
        </a>
      </li>

      <li class="relative">
        <a
          class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 {{ Request::is('member/dashboard') ? 'active' : '' }}"
          href={{ route('add-produk-view') }}
          data-te-sidenav-link-ref>
          <span
            class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
            <i class="fa-solid fa-square-plus"></i>
          </span>
          <span
            class="group-[&[data-te-sidenav-slim-collapsed='true']]:data-[te-sidenav-slim='false']:hidden"
            data-te-sidenav-slim="false"
            >Tambah Produk</span
          >
        </a>
      </li> 

      <li class="relative">
        <a
          class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
          href={{ route('logout') }}
          data-te-sidenav-link-ref>
          <span
            class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
            <i class="fa-solid fa-right-from-bracket"></i>
          </span>
          <span
            class="group-[&[data-te-sidenav-slim-collapsed='true']]:data-[te-sidenav-slim='false']:hidden"
            data-te-sidenav-slim="false"
            >Logout</span
          >
        </a>
      </li>
    @endif
  </ul>
    
</nav>
<!-- Sidenav -->

<div id="slim-content" class="flex !pl-[77px] sm:pl-0">
  <button
      class="inline-block md:hidden rounded bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
      data-te-sidenav-toggle-ref
      data-te-target="#sidenav-4"
      aria-controls="#sidenav-4"
      aria-expanded="false"
      aria-haspopup="true"
      style="background-color: transparent !important; box-shadow: 0 0 0 0 !important;"
      id="slim-toggler">
      <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="#4f3411"
          class="h-5 w-5">
          <path
            fill-rule="evenodd"
            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
            clip-rule="evenodd" />
        </svg>
      </span>
    </button>
</div>