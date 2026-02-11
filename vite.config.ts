import {defineConfig} from 'vite'
import {resolve} from 'path';
import FullReload from 'vite-plugin-full-reload'
// @ts-ignore
import hotfilePlugin from "vite-hotfile-plugin";
import react from "@vitejs/plugin-react";

export default defineConfig({
  server: {
    cors: {
      origin: "*"
    }
  },
  plugins: [
    FullReload([
      'resources/views/**/*.php'
    ]),
    hotfilePlugin({
      publicDirectory: 'public', // relative path to the hot file (default)
      hotFileName: 'hot', // name of the hot file (default)
      logging: false, // console log (default)
    }),
    react()
  ],
  resolve: {
    alias: {
      '@': resolve(__dirname, 'resources/js/'),
    },
  },
  build: {
    rollupOptions: {
      input: resolve(__dirname, './resources/js/app.html'),
      output: {
        entryFileNames: 'assets/js/[name]-[hash].js',
        chunkFileNames: 'assets/js/[name]-[hash].js',
        assetFileNames: ({names}) => {
          if (/\.(css|s[ac]ss)$/.test(names[0] ?? '')) {
            return 'assets/css/[name]-[hash][extname]'
          }
          // Остальные ассеты (например, изображения)
          return 'assets/static/[name]-[hash][extname]'
        }
      }
    },
    outDir: resolve(__dirname, 'dist'),
  }
})