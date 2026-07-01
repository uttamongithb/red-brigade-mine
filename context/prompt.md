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
