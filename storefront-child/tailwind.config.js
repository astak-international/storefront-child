/** @type {import('tailwindcss').Config} */
module.exports = {
  important: true,
  content: ["./**/*.{php, css}"],
  theme: {
    fontFamily: {
      crimson: ["Crimson Text"],
      karla: ["karla"],
    },
    extend: {
      colors: {
        // DEFAULT COLORS ON THE LOGO
        // 'blue-light': "#1b2b43",
        // 'blue': "#172539",
        // 'blue-dark': "#0a101a",
        // 'yellow': "#f3dc83",
        // 'yellow-dark': "#ab7734",

        // COLOR COMBO #1
        // 'blue': '#ECF2FF',
        // 'purple': '#E3DFFD',
        // 'purple-dark': '#D5D1FA',
        // 'yellow': '#FFF4D2',

        // COLOR COMBO #2
        // 'blue': '#ECF9FF',
        // 'purple': '#FFFBEB',
        // 'purple-dark': '#FFE7CC',
        // 'yellow': '#F8CBA6',

        // COLOR COMBO #3
        "blue-darker": "#1b2b43",
        "blue-dark": "#0081C9",
        blue: "#5BC0F8",
        "blue-light": "#86E5FF",
        "blue-lighter": "#f0faff",
        yellow: "#FFC93C",

        // COLOR COMBO #4
        // 'blue': '#ADA2FF',
        // 'purple': '#C0DEFF',
        // 'purple-dark': '#FFE5F1',
        // 'yellow': '#FFF8E1',

        // COLOR COMBO #5
        // 'blue-dark': '#7FBCD1',
        // 'blue': '#A5F1E9',
        // 'blue-light': '#E1FFEE',
        // 'yellow': '#FFEEAF',
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
