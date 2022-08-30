/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                overpass: "Overpass",
            },
            colors: {
                primary: "#ff1616",
                secondary: "#81ecec",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
