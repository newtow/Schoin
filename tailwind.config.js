module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {
        fontFamily:{
          'monts':['"Montserrat"','sans-serif']
        },
        backgroundImage: {
          'banner': "url('../../public/assets/img/BG.png')",
        },
      },
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }