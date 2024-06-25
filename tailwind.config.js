/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      'header.php',
      'footer.php',
      'index.php',
      '404.php'
    //   './template-parts/related-post.php',
    ],
    theme: {
      extend: {
        colors: {
        },
        screens: {
          '3xl': '1920px',
        },
      },
      plugins: [],
    },
  }