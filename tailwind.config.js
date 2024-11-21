import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.css",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            fontFamily: {
                montserrat: ['"Montserrat"', "sans-serif"],
            },
            colors: {
                dark: "#252B42",
                dark_green: "#23856D",
                light_green: "#2DC071",
                blue: "#23A6F0",
                yellow: "#F3CD03",
                orange: "#E77C40",
                font_extralight: "#ECECEC",
                font_light: "#BDBDBD",
                font_dark: "#737373",
                bg_light: "#FAFAFA",
            }
        },
    },
    plugins: [
        require('flowbite/plugin'),
    ],
};
