/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./*.{html.php}",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

module.exports = {
  content: ["./**/*.{html,php}"],
  prefix: "tw-",
  important: true,
  corePlugins: {
      preflight: false,
  }
}