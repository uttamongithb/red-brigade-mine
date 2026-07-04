# AI Context & Prompt Log

## 🤖 SYSTEM INSTRUCTIONS FOR ANY AI ASSISTANT 🤖
**READ THIS CAREFULLY:** If you are an AI assistant (Claude, GPT, Gemini, Cursor, etc.) reading this file, you are participating in a continuous workflow across multiple AI sessions. To ensure context is preserved, you **MUST** strictly adhere to the following rules during your interaction:
1. **Log Your Work**: At the end of your session or task, you MUST append the user's latest primary prompt(s) and a summary of your response/actions to this file (`context/prompt.md`).
2. **Update Status**: You MUST also update `context/status.md` with any new features added, bugs fixed, or environment changes made during your session. 
3. **No Context Loss**: Do not delete previous entries in this log unless explicitly told to do so by the user. Maintain a chronological list.

---

## Prompt History

### [2026-07-01] Session 1
**User Prompt:**
> why website is not looking as it should look

**AI Response & Action:**
Identified that `APP_ENV` was set to `production` in `.env`, which forced all local assets to load over HTTPS, breaking the CSS/JS. Changed `APP_ENV` to `local` and `APP_URL` to `http://localhost:8000`, cleared the cache, and restarted the server. The website styles successfully loaded.

---

### [2026-07-01] Session 2
**User Prompt:**
> give me admin panel email and password to test it

**AI Response & Action:**
Analyzed the database seeders and found `database/seeds/AdminUserSeeder.php`. Provided the user with the hardcoded credentials: Email: `newadmin@redbrigade.org`, Password: `Admin@12345`.

---

### [2026-07-01] Session 3
**User Prompt:**
> in admin panel in add team member when admin will add team member i want name, image description and i want one more where will be status and according to the status in the our team page will be visible in status will be active and alumini if admin select active then in active section that member will bevisible and if select alumini then alumini section that member will be visible so properly analyze it and then do it

**AI Response & Action:**
Discovered the database (`testimonial` table) and frontend (`ourteam.blade.php`) already supported dividing members by `status` (1 = Active, 0 = Alumni). Modified the backend Admin panel to expose this feature:
- Added a Status dropdown to `addtestimonial.blade.php` and `edittestimonial.blade.php`.
- Updated `ServiceController.php` to accept the `status` field on edit.
- Renamed the toggle label in `viewtestimonial.blade.php` from "Inactive" to "Alumni".

---

### [2026-07-01] Session 4
**User Prompt:**
> create context folder where will be two files prompt.md and status.md in prompt.md will be all the prompts and their responses and in status.md will be status of the website and i want after every prompt that prompt will be store that prompt and their response in prompt.md and also will be update the status.md everytime and i want in these it will also store that if i move to another ai tool and i will give to that ai to read context and then they should undertsand that they have also do it that they have to store the prompt and their response and update the status so that easily i can switch between different ai without loosing context properly analyze it and then do it

**AI Response & Action:**
Created the `context` directory containing `status.md` and `prompt.md`. Added explicit Meta-Instructions (System Prompts) at the top of both files commanding any future AI tool that reads them to continuously log prompts/responses in `prompt.md` and keep the project state updated in `status.md`. Documented the session history up to this point.

---

### [2026-07-01] Session 5
**User Prompt:**
> make education page properly i want some deifferent ui design of the education page but should be consistent of the whole website you can read changes.pdf for the content of the education page as you are experienced full stack and ui/ux devloper properly and perfectly make to this eduactionla page 

**AI Response & Action:**
Reviewed `changes.pdf` to identify the required content for the education page (Balmanch). Designed a completely new, premium UI layout for `resources/views/main/education.blade.php`. Integrated the global typography (Open Sans and Poppins) for brand consistency. Added a dedicated story highlight section for "Annu", as mentioned in the PDF. Upgraded the "Motive, Mission, Vision" section with modern cards, hover effects, and overhauled the dynamic image gallery grid. Updates were documented in both `status.md` and `prompt.md`.

---

### [2026-07-01] Session 6
**User Prompt:**
> i want some different section in education pages i dont like the section of the education page so properly analyze it and then do it 

**AI Response & Action:**
Overhauled the sections of `education.blade.php`. Replaced standard motive/mission sections with emotionally resonant content from `changes.pdf`. Added: (1) An immersive split-hero section, (2) 'The Tree, Not the Pot' metaphorical philosophy section, (3) A visual timeline of Annu's journey from rescued student to leader, (4) Hover-reveal dynamic cards for core interventions, (5) JS animated statistics counters, (6) A Masonry-style dynamic image gallery, and (7) A strong CTA banner. Updated `status.md` and `prompt.md` to reflect these major architectural and design changes.

---

### [2026-07-01] Session 7
**User Prompt:**
> in education page will be contet of the balmanch and they provide education for childs not necceserily they are survivor or anything so properly analyze it and update the content of the education page and properly take reference from the chnages.pdf if available otherwise take thereference from the internet and make it properly and perfectly

**AI Response & Action:**
Reviewed `changes.pdf` page 6 regarding Balmanch. Updated the Hero section and "The Philosophy" section of `resources/views/main/education.blade.php` to explicitly state that Balmanch serves a dual purpose: providing fundamental education for *all children from marginalised communities* (not necessarily survivors) while also acting as a rehabilitation hub for survivors. Kept the design consistent while making the text significantly clearer. Updated `status.md` and `prompt.md`.
