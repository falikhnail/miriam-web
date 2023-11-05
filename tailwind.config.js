module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
    ],
    theme: {
        container: {
            center: true,
            padding: '16px'
        },
        screen: {
            sm: '640px',
            md: '768px',
            lg: '1024px'
        },
    },
    plugins: [],
};
