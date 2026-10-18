# cmndrpaul Portfolio

Static portfolio built with Astro, Tailwind CSS, and Alpine.js. It deploys as static HTML and assets from `dist/`; PHP and a database are not required.

## Local development

```sh
npm install
npm run dev
```

## Production build

```sh
npm run build
npm run preview
```

The build generates the home page, project archive, and certificates page. Featured projects and certificate/honor galleries are intentionally empty until portfolio-owned content is added. Resume buttons open the hosted Google Drive PDF. Chat and CV request forms are not part of the site.

## Deploy to Vercel

Vercel is configured to use the Astro framework, run `npm run build`, and deploy `dist/`.
