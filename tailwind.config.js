/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "*.php", "*.js"],
  theme: {
    extend: {
      container: {
        padding: {
          DEFAULT: "1.5rem",
        },
        center: true,
      },
    },
  },
  plugins: [require("@tailwindcss/typography")],
};
