import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { resolve } from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/scss/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@": resolve(__dirname, "src"),
            jquery: "jquery/src/jquery",
        },
    },
    optimizeDeps: {
        include: ["jquery", "slick-carousel", "magnific-popup"],
    },
});
