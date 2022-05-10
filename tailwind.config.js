const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        
    ],

    theme: {
        extend: {
            colors:{
                'blue-button' : '#2F6977',
            },
            backgroundImage:{
                'Login-Background' : "url('/img/dan-dimmock-3mt71MKGjQ0-unsplash.jpg')",
                
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin'),
    ],
};
