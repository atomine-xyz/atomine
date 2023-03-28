const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Manrope', 'Figtree', ...defaultTheme.fontFamily.sans],
                mono: ['Jetbrains mono', ...defaultTheme.fontFamily.mono],
            },

            backgroundImage: {
                'fullscreen': "url('/resources/images/background.png')",
                'linear-main': "linear-gradient(135deg, rgba(202,0,157,0.3) 0%, rgba(28,23,25,1) 40%)",
                'linear-second': "linear-gradient(265.26deg, rgba(202, 0, 157, 0.25) 0%, rgba(210, 19, 19, 0.25) 100%);",
            },
            backgroundPosition: {
                'main-left': 'top left',
            }
        },

        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'upvote': '#14FF00',
            'downvote': '#14FF00',

            'light': {
                100: '#ffffff',
                200: '#EBDFDF',
                300: '#B5B5B5',
            },

            'dark': {
                100: '#B5B5B5',
                200: '#222523',
                300: '#222222',
                400: '#1C1719',
                500: '#161314',
            }

        },

        opacity: {
            '5' : '0.05',
            '20': '0.2',
            '25': '0.25',
            '50': '0.5',

        }
    },

    plugins: [require('@tailwindcss/forms')],
};
