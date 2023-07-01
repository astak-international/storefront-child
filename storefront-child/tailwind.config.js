/** @type {import('tailwindcss').Config} */
module.exports = {
  important: true,
  content: ["./**/*.{php, css}"],
  theme: {
    fontFamily: {
      primary: ["Crimson Text"],
      secondary: ["Montserrat"],
    },
    extend: {
      colors: {
        "blue-darker": "#1b2b43",
        "blue-dark": "#0081C9",
        blue: "#5BC0F8",
        "blue-light": "#86E5FF",
        "blue-lighter": "#f0faff",
        gray: "#ABACBA",
        yellow: "#FFC93C",
      },
    },
    borderWidth: {
      DEFAULT: "1px",
      0: "0",
      2: "2px",
      3: "3px",
      4: "4px",
      6: "6px",
      8: "8px",
      10: "32px",
    },
    letterSpacing: {
      tightest: "-.075em",
      tighter: "-.05em",
      tight: "-.025em",
      normal: "0",
      wide: ".025em",
      wider: ".05em",
      widest: ".1em",
      widest: ".25em",
      "very-wide": ".4em",
    },
  },
  darkMode: "class",
  plugins: [require("daisyui")],
  daisyui: {
    themes: [
      {
        light: {
          ...require("daisyui/src/colors/themes")["[data-theme=light]"],
          primary: "#5BC0F8",
          secondary: "#1b2b43",
          accent: "#0081C9",
          neutral: "#f0faff",
          "base-100": "#ffffff",
          ".btn": { color: "#1b2b43" },
        },
      },
    ],
  },
};
