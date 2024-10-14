/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#D1FA94",
                secondary: "#272727",
                text: "#212122",
            },
            fontSize: {
                xs: "16px",
                base: "20px",
                xl: "24px",
                "2xl": "48px",
                "3xl": "128px",
                price:"40px",
                pricexl:"64px",
            },
        },
    },
    plugins: [],
};
