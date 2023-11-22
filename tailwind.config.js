/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        "./resources/**/*.js",
        './resources/**/*.css',
        "./node_modules/tw-elements/dist/js/**/*.js"
    ],
    darkMode: 'class',
    theme: {
        container: {
            center: true,
            padding: '16px'
        },
        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px'
        },
        colors: {
            primary: '#1977cc',
            secondary: '#60aef3',
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.gray,
            emerald: colors.emerald,
            indigo: colors.indigo,
            yellow: colors.yellow,
        }
    },
    plugins: [
        require("tw-elements/dist/plugin.cjs")
    ],
};
