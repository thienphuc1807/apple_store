import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                apple_color: "#d2d2d7",
                apple_text: "#1D1D1F",
                actual_price: "#0066CC",
                old_price: "#86868B",
                apple_backgroundColor: "#515154",
                apple_color_hover: "#626265",
                border: "#EBEBEB",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                card_shadow: "0px 1px 8px rgba(0,0,0,0.04)",
                card_hover_shadow: "1px 1px 28px 0px rgb(0 0 0 / 12%)",
            },
        },
    },
    plugins: [],
};
