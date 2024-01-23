/** @type {import('tailwindcss').Config} */
export default {
  content: ['./index.html', './src/**/*.{js,ts,jsx,tsx,vue}'],
  theme: {
    extend: {
      strokeWidth: {
        3: '3px',
      },
      scale: {
        101: '1.01',
        102: '1.02',
      },
    },
  },
  plugins: [],
};
