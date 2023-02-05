import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

const host = "seanwash.com.test";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            valetTls: host,
            refresh: true,
        }),
    ],
});
