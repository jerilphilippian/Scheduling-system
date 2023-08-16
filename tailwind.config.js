/** @type {import('tailwindcss').Config} */
export default {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
  content: [
        "./src/**/*.{html,js}",
        "./node_modules/flowbite/**/*.js",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php',
        './vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php',
    ],
  theme: {
    extend: {
        keyframes: {
            wiggle: {
              '0%, 100%': { transform: 'rotate(-8deg)' },
              '50%': { transform: 'rotate(8deg)' },
            }
          },
          animation: {
            wiggle: 'wiggle 1s ease-in-out infinite',
          }
    },
  },
  plugins: [],
}

