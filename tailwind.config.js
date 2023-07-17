import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens: {
            'md': '680px',
            'lg': '920px',
            'xl': '1024px',
            '2xl': '1320px'
        },
        fontFamily: {
            sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            serif: ['Inter', ...defaultTheme.fontFamily.serif],
            mono: ['Jetbrains mono', ...defaultTheme.fontFamily.mono],
        },
        extend: {
            colors: {
                'dark': {
                    100: '#171717',
                    200: '#121313',
                    300: '#0D0D0D',
                    400: '#000000',
                },
                'light': {
                    100: '#FFFFFF',
                    200: '#D9D9D9',
                    300: '#717D75',
                    400: '#605656',
                    500: '#504646',
                },

                'primary': '#0090FF',
                'gr-first': '#6299E2',
                'gr-second': '#165DBB',
            },
            backgroundImage: {
                'model-1': "url('/resources/images/model-1.png')",
            }
        },
    },

    plugins: [forms, typography],
};
