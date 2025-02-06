---
extends: _layouts.post
title: "WordPress next, and beyond: breaking the technical enclosure"
author: Thomas di Luccio
authorTagline: Story maker
date: 2024-05-30
section: content
featuredImage: /assets/images/posts/2024-05-30.png
featuredImageAlt: "Midjourney prompt - \"WordPress next, and beyond: breaking the technical enclosure\", abstract, polygon, mathematical, eerie, pure, minimalist, joyful, hopeful, pop art, neon"
excerpt: |
    The tools we choose shape our possibilities. WordPress was the obvious choice for my blog—until it became a burden, pulling focus away from what mattered: writing. Now, it's time for change. A minimalist, resilient static blog will free me to create, not maintain. This is about reclaiming time, embracing better tools, and designing a future where tech empowers, not limits.
---

There is a hidden story to the tools we use and what they permit or forbid.

A few years ago, I felt the need for a blog. I used to blog heavily over a decade ago, when I was a freelance designer and copywriter.

But I had to quit everything abruptly while I was battling some disease for a couple of years. All that work disappeared, but I didn't care that much as, somehow, I was given the chance of a new beginning.

I continued my professional career as an employee and not an entrepreneur anymore. The need to hear my voice was less critical and more of a quiet hobby.

I did what most of us do in such situations. I went for WordPress, a not-too-crappy theme for which I might have even paid a few bucks, and cheap hosting. The recommended way to fetch WordPress is to download a zip file (scream), tweak it locally if you can, and then upload it to a server using `FTP` (more scream). You could use `sFTP` if you wish to make things less bad (still screaming).

This sounds like something that could happen in the age of the digital cave people. But it was not so long ago, and I fear it might still be widely happening in that community. Using `git` and `composer` is still heavily in the minority, and you could do it only thanks to a subpart of that community pushing hard to move forward.

This illustrates a more significant problem. The choices we make, or do not make, open some futures and close others. The obvious choice was to go for WordPress, the leading blogging solution.

Due to the greedy nature of that CMS, I ended up needing more hosting than I would need. But I told myself this larger-than-needed traditional hosting would let me host other side projects, which was as true as false. I certainly still host a fleet of dead projects.

It also led to many issues with the clumsy upgrade and backup processes. This obvious no-brainer five-minute decision ultimately led to a significant investment of time throughout the years, trouble, and even more money than this simple hobby should have required.

I should have been focusing on the stories I would have wanted to share. Meanwhile, the choices of tools for the blogging platform and the hosting solution drove my energy and attention elsewhere. They should have liberated me, freed me some well-needed time, and opened me more opportunities rather than closing many.

So, what should be done? I should spend all my time crafting content, not handling the system. I have to increase its reliability. Not only should I use Git and Composer, but I would also need a proper local development environment.

This could also be wrapped into a reusable setup that I could easily replicate for any future WordPress project I work on. How can I make my tools as future-proof as possible?

A few months back, I created [WordPress Next](https://github.com/thomasdiluccio/wordpress-next), a boilerplate for WordPress projects that comes with a Composer-based setup, [DDEV](https://ddev.readthedocs.io/en/stable/) for local development, and a customized configuration file to allow using environment variables, with even a fallback to a `.env` file if needed.

It was a clear leap forward in how that blog was maintained. Still, it was still not enough. This scaffolding allows to track the critical files such as the themes and some configuration, leaving the WordPress core file to the dependencies.

But all the uploaded files, nor the content, were not tracked and at risk during maintenance. When an upgrade went unexpectedly wrong, I even had to restore those from a custom backup. It was the ultimate drop.

I'm feeling this need to get back to creating stuff and exploring being some digital maker. I've found the first project I will work on. I will build myself a minimalist, resilient static blog based on a simple generator.

I could get some markdown in the entry and output some HTML. I could even plug its repository into a hosting such as [Upsun](https://upsun.com)*, which is a Git-based Platform-as-a-Service (PaaS). Every commit on the main branch will rebuild and deploy this static blog, and every branch created will create a dev environment. So much more Headspace! This is what I was longing for.

Now, let me roll up my sleeves. It's time to get started and learn a few things along the way. I even got back to playing with Figma. It has been so many years since I have used such a tool.

I'll always be a designer, but not in the sense of drawing square boxes on a screen. I love fixing problems and making them disappear while building empowering tools along the way, closing a distressing future and opening a brighter one.

To desirable futures,

Thomas

* I'm currently an employee of the company behind Upsun. I'm not paid to write that; the product is legitimately very good.