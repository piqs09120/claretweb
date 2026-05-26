import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './node_modules/flowbite/**/*.js',
    ],

    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                heading: ['"Playfair Display"', ...defaultTheme.fontFamily.serif],
                sans: ['"Source Sans 3"', ...defaultTheme.fontFamily.sans],
                roboto: ['"Source Sans 3"', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#FFFFFF',
                    50: '#FDFDFC',
                    100: '#F5F5F5',
                    200: '#E5E5E5',
                    300: '#D4D4D4',
                    400: '#A3A3A3',
                    500: '#E12A36',
                    600: '#B91C1C',
                    700: '#991B1B',
                    800: '#7F1D1D',
                    900: '#450A0A',
                },
                secondary: {
                    DEFAULT: '#F9FAFB',
                    50: '#FDFDFC',
                    100: '#F5F5F5',
                    200: '#E5E5E5',
                    300: '#D4D4D4',
                    400: '#C8A96A',
                    500: '#B08D55',
                    600: '#967441',
                    700: '#7C5E32',
                    800: '#644A26',
                    900: '#4F391C',
                },
                accent: {
                    DEFAULT: '#B91C1C',
                    50: '#FEF2F2',
                    100: '#FEE2E2',
                    200: '#FECACA',
                    300: '#FCA5A5',
                    400: '#C8A96A',
                    500: '#E12A36',
                    600: '#B91C1C',
                    700: '#991B1B',
                    800: '#7F1D1D',
                    900: '#450A0A',
                },
                nature: {
                    DEFAULT: '#E2F8D0',
                    light: '#F4FBF0',
                    main: '#61A039',
                    dark: '#4F842E',
                    50: '#F4FBF0',
                    100: '#E2F8D0',
                    200: '#D1F0B8',
                    300: '#C3E3A8',
                    400: '#AED58D',
                    500: '#9BC772',
                    600: '#88B85A',
                    700: '#75A942',
                    800: '#61A039',
                    900: '#447C20',
                },
                neutral: {
                    50: '#F5F5F5',
                    100: '#EBEBEB',
                    200: '#D6D6D6',
                    300: '#C2C2C2',
                    400: '#A0A0A0',
                    500: '#858585',
                    600: '#666666',
                    700: '#4D4D4D',
                    800: '#1F2A2F',
                    900: '#0A181E',
                    950: '#020F14',
                },
                success: '#61A039',
                error: '#DC2626',
                warning: '#F59E0B',
                info: '#60B6D8',
                textmain: '#020F14',
                subtext: '#223B44',
            },
            boxShadow: {
                'card': '0 10px 40px -10px rgba(0,0,0,0.08)',
                'premium': '0 20px 40px -10px rgba(0,0,0,0.1)',
                'glow': '0 0 20px rgba(97, 160, 57, 0.4)',
            },
            keyframes: {
                fadeInUp: {
                    '0%': { opacity: '0', transform: 'translateY(30px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                slideUp: {
                    '0%': { transform: 'translateY(100%)' },
                    '100%': { transform: 'translateY(0)' },
                },
                floating: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-10px)' },
                }
            },
            animation: {
                'fade-in-up': 'fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards',
                'fade-in': 'fadeIn 1s ease-out forwards',
                'slide-up': 'slideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards',
                'float': 'floating 4s ease-in-out infinite',
            }
        },
    },

    plugins: [
        forms, 
        typography,
        require('flowbite/plugin')
    ],
};
