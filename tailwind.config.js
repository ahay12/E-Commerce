/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  daisyui: {
    theme: ["light"],
    // extend: {},
  },
  plugins: [require("daisyui")],
};
