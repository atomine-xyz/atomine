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
                'fs': "url('/resources/images/background.png')",
                'erik': "url('/resources/images/erik.png')"
            },
            backgroundPosition: {
                'main-left': 'top left',
            },
            transitionTimingFunction: {
                'in-crop': 'cubic-bezier(.09,.97,.72,.99)',
            },

            transitionProperty: {
                'underline': 'width',
            },

            lineHeight: {
                'def': '1.1',
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
                400: '#807e7e'
            },

            'dark': {
                100: '#1C1719',
                200: '#282325',
                300: '#282325',
            },

            'primary': '#A46CFF',

        },

        opacity: {
            '5' : '0.05',
            '20': '0.2',
            '25': '0.25',
            '50': '0.5',

        },

        backgroundPosition: {
            'erikpos': 'right 1rem bottom',
        }
    },

    plugins: [require('@tailwindcss/forms')],
};
