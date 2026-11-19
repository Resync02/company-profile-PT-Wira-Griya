PT WIRA GRIYA — CUSTOMER & PARTNER LOGO LAYOUT FIX (V2)

FILES INCLUDED
- resources/js/app.js
- resources/views/pages/about.blade.php
- rebuild-frontend.ps1

WHAT CHANGED
Customer logos:
- Exactly 4 cards per row on tablet/desktop; 2 per row on mobile.
- Each row is rendered separately with centered alignment, so a final row containing 1–3 logos is centered automatically.
- Existing customer logo list, category order, pagination and interactions are retained.

Partner logos:
- Exactly 3 cards per row on tablet/desktop; 2 per row on mobile.
- Larger cards and artwork are used to make the partner modal feel fuller.
- Incomplete final rows are centered automatically.
- Existing partner list and slider controls are retained.

ASSET PATHS
- Customer: public/assets/images/about/customer
- Partner: public/assets/images/about/partners
Blade template data attributes and JavaScript now use the same paths.

IMPORTANT — REBUILD REQUIRED
Replacing resources/js/app.js alone does not update the compiled Vite bundle served by Laravel.
After extracting this patch into the project root, run from PowerShell:

  npm run build

Or run: .\rebuild-frontend.ps1
Then hard-refresh the local site with Ctrl+Shift+R. For Vercel, commit and push both source files; the Docker build runs npm run build during deployment.

VERIFICATION MARKER
After opening the Customer or Partner modal, inspect #about-modal-body in DevTools. Its data-logo-layout-version will be customer-4col-v2 or partner-3col-v2.
