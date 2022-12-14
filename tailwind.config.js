/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
        fontFamily: {
            chewy: ["Chewy", "cursive"],
            roboto: ["Roboto", "sans-serif"],
        },
    },
    plugins: [
        require("flowbite/plugin"),
        require("tailwind-scrollbar")({ nocompatible: true }),
    ],
};
