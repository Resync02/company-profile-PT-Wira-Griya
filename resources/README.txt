PT WIRA GRIYA — ABOUT US MODAL UPDATE

Files included:
- resources/js/app.js
- resources/views/pages/about.blade.php

Changes:
1. Certifications & Legal Documents content is centered horizontally and vertically in the available modal area. The existing background remains full-cover.
2. Testimonials background keeps a minimum height of max(100%, 620px), so page 2 remains covered even when only two cards are visible. On smaller screens, the wrapper can grow with the testimonial content.
3. Customer logos are ordered by industry group (healthcare/pharmacy, automotive, painting/coating, industrial/engineering, energy/utilities/transport, infrastructure, and consumer/building products), without adding visible category sections.
4. The full set of 59 existing customer WebP assets is referenced from public/assets/images/about/customer.
5. Partner logos are ordered by coating/painting, hoist/crane, and industrial machinery/automation.
6. Customer and partner logo rows use centered wrapping, so incomplete rows sit in the middle instead of leaving unused space on the right.

Important:
- Keep the existing background image at public/assets/images/about/bg.webp.
- Keep the existing WebP logo assets in public/assets/images/about/customer and public/assets/images/about/partners.
- This patch only contains the two updated source files; it does not replace image assets or .env.

Validation performed:
- Node.js syntax check passed for resources/js/app.js.
- PHP syntax check passed for resources/views/pages/about.blade.php.
- All 59 customer logo filenames and all 10 partner logo filenames match the WebP assets in the prior WebP optimization package.
- Full Laravel/Vite production build and browser visual testing were not run in this environment.
