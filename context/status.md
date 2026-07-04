# Website Status: Red Brigade Lucknow

## Meta-Instruction for AI Assistants
**IMPORTANT AI INSTRUCTION:** As part of your continuous operation on this codebase, you MUST update this `status.md` file whenever you make structural, database, or major logical changes to the application. Your role is to ensure this document always reflects the *current, up-to-date state* of the project so that context is never lost.

## Project Overview
- **Framework**: Laravel 5.x Application
- **Database**: MySQL (Remote database credentials configured in `.env`)
- **Key Functionality**: Admin-managed CMS for an NGO (Red Brigade Lucknow), handling blogs, news/events, gallery, team members, strategies, skills, and donations.

## Recent Updates & Current State
1. **Local Development Fix**: 
   - `APP_ENV` is set to `local` and `APP_URL` is set to `http://localhost:8000` in `.env`.
   - This prevents the application from forcing HTTPS URLs for local stylesheets, allowing CSS and JavaScript assets to load correctly.
2. **Team Members Status Feature**:
   - The admin panel forms (`addtestimonial.blade.php` and `edittestimonial.blade.php`) now include a "Status" dropdown.
   - The admin can designate members as "Active" (`status = 1`) or "Alumni" (`status = 0`).
   - The frontend `ourteam.blade.php` correctly separates these members based on the assigned status.
   - The backend `ServiceController.php` is fully configured to process and save this status.
3. **Admin Credentials**:
   - Primary admin access is managed via database seeding (`AdminUserSeeder.php`).
   - Default known admin: `newadmin@redbrigade.org` (can be reset via `php artisan db:seed --class=AdminUserSeeder`).

4. **Education Page Section Overhaul (Balmanch)**:
   - Replaced standard sections with highly engaging visual metaphors extracted from `changes.pdf` (e.g., "The Tree, Not the Pot").
   - Introduced a vertical timeline to chronicle 'Annu's Journey' from student to Balmanch coordinator.
   - Clarified the scope of Balmanch in the hero and philosophy sections to explicitly mention that it provides education for *all marginalised children*, not just survivors of abuse.
   - Replaced static grid with hover-reveal cards for dynamic interventions, added JS animated stats counters, and a masonry layout for the dynamic image gallery.
   - Integrated a strong CTA banner at the bottom for donations.

## Open Issues / Ongoing Work
- The application is running successfully locally. The Education page has been redesigned and its content accurately reflects the inclusive nature of Balmanch.
