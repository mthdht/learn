/** @type {import('tailwindcss').Config} */
export default {
  content: ['./index.html', './src/**/*.{js,ts,jsx,tsx,vue}'],
  theme: {
    container: {
      center: true,
    },
    extend: {
      strokeWidth: {
        3: '3px',
      },
      scale: {
        101: '1.01',
        102: '1.02',
      },
      spacing: {
        18: '4.5rem',
      },
    },
  },
  plugins: [],
};
