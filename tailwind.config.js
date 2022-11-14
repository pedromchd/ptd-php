/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./includes/*.php"],
  darkMode: "class",
  theme: {
    extend: {},
  },
  plugins: [
    require("@tailwindcss/forms"),
    require("@tailwindcss/line-clamp"),
    require("@tailwindcss/typography")
  ],
}
