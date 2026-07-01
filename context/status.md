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

## Open Issues / Ongoing Work
- None at the moment. The application is running successfully on the local environment and the team members feature is fully functional.
