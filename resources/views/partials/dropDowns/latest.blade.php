<div class="text-center">
  <div
    x-data="
  {
    dropdownOpen: false
  }
  "
    @click.outside="dropdownOpen = false"
    class="relative mb-8 inline-block text-left"
  >
    <button
      @click="dropdownOpen = !dropdownOpen"
      class="bg-emerald-500 flex items-center rounded py-3 px-5 text-base font-semibold text-white max-sm:text-xs"
    >
      Latest
      <span class="pl-2">
        <svg width="12" height="7" viewBox="0 0 12 7" class="fill-current">
          <path
            d="M0.564864 0.879232C0.564864 0.808624 0.600168 0.720364 0.653125 0.667408C0.776689 0.543843 0.970861 0.543844 1.09443 0.649756L5.82517 5.09807C5.91343 5.18633 6.07229 5.18633 6.17821 5.09807L10.9089 0.649756C11.0325 0.526192 11.2267 0.543844 11.3502 0.667408C11.4738 0.790972 11.4562 0.985145 11.3326 1.10871L6.60185 5.55702C6.26647 5.85711 5.73691 5.85711 5.41917 5.55702L0.670776 1.10871C0.600168 1.0381 0.564864 0.967492 0.564864 0.879232Z"
          />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M1.4719 0.229332L6.00169 4.48868L10.5171 0.24288C10.9015 -0.133119 11.4504 -0.0312785 11.7497 0.267983C12.1344 0.652758 12.0332 1.2069 11.732 1.50812L11.7197 1.52041L6.97862 5.9781C6.43509 6.46442 5.57339 6.47872 5.03222 5.96853C5.03192 5.96825 5.03252 5.96881 5.03222 5.96853L0.271144 1.50833C0.123314 1.3605 -5.04223e-08 1.15353 -3.84322e-08 0.879226C-2.88721e-08 0.660517 0.0936127 0.428074 0.253705 0.267982C0.593641 -0.0719548 1.12269 -0.0699964 1.46204 0.220873L1.4719 0.229332ZM5.41917 5.55702C5.73691 5.85711 6.26647 5.85711 6.60185 5.55702L11.3326 1.10871C11.4562 0.985145 11.4738 0.790972 11.3502 0.667408C11.2267 0.543844 11.0325 0.526192 10.9089 0.649756L6.17821 5.09807C6.07229 5.18633 5.91343 5.18633 5.82517 5.09807L1.09443 0.649756C0.970861 0.543844 0.776689 0.543843 0.653125 0.667408C0.600168 0.720364 0.564864 0.808624 0.564864 0.879232C0.564864 0.967492 0.600168 1.0381 0.670776 1.10871L5.41917 5.55702Z"
          />
        </svg>
      </span>
    </button>
    <div
      :class="dropdownOpen ? 'top-full opacity-100 visible' : 'top-[110%] invisible opacity-0' "
      class="border-light shadow-card absolute left-0 z-40 mt-2 w-full rounded border-[.5px] bg-indigo-950 py-5 transition-all"
    >
      <a
        href="javascript:void(0)"
        class="text-white hover:bg-secondary hover:text-secondary block py-2 px-5 text-base font-semibold hover:bg-opacity-5"
      >
        Dashboard
      </a>
    </div>
  </div>
</div>
