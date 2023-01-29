/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.{blade.php,html,js,css}"],
    theme: {
        extend: {
            colors: {
                brand: {
                    50: "#0fa9e6",
                    100: "#0fa9e6",
                    200: "#0fa9e6",
                    300: "#0fa9e6",
                    400: "#0fa9e6",
                    500: "#3fbaeb",
                    600: "#0c87b8",
                    700: "#0c87b8",
                    800: "#0c87b8",
                    900: "#0c87b8",
                },
            },
            fontFamily: {
                headline: "Poppins, sans-serif",
            },
        },
    },
    plugins: [],
};
