# Story maker > Toward desirable futures

Welcome to **Story Maker > Toward desirable futures**, a blog about building things, storytelling, and designing desirable futures.

## ✨ About
This blog is powered by **[Jigsaw](https://jigsaw.tighten.com/)**, a static site generator for Laravel, and styled with **[Tailwind CSS](https://tailwindcss.com)**. It is designed to be:

- **Lightweight & Fast** 🚀 — No database, no backend overhead.
- **Reliable & Maintainable** 🔧 — All content is stored as Markdown and version-controlled in this repository.
- **Automated Deployment** ⚡ — Each commit triggers a rebuild and redeployment of the blog.

Previously, the blog was running on WordPress, which proved difficult to maintain and migrate between hosts. This new setup offers a **low-tech, low-resource, and highly reliable** solution.

It also uses **[DDEV](https://ddev.readthedocs.io/)** for local development.

## 🚀 Deployment
Every time a new blog post is added (via Markdown) and committed to the repository, the site is automatically rebuilt and deployed. This process ensures that new content is published seamlessly with minimal effort.

```
npm run production
php vendor/bin/jigsaw build
```

Note the following mounts should be writable:
```
build_local
build_production
build_images
```

Enjoy the stories! ✍️
