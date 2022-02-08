module.exports = {
    content: [
        "./public/css/tailwindcss/*.css",
        "./app/Views/admin-page/admin-dashboard.php",
        "./app/Views/admin-page/partial-layouts/admin-template.php",
        "./app/Views/admin-page/*.php",
    ],
    theme: {
        extend: {
            colors: {
                "black-swan": "#36393f",
                "ship-gray": "#3a3e44",
                "cerulean-blue": "#4752c4",
            },
        },
    },
    plugins: [require("@tailwindcss/forms"), require("@tailwindcss/line-clamp")],
};