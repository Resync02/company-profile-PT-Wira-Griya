WIRA ABOUT US – TESTIMONIAL LOGO ALIGNMENT PATCH

File changed:
- resources/views/pages/about.blade.php

Changes:
- Center each company logo horizontally and vertically in its logo area.
- Increase desktop logo area to 92px and image height to 82px, max width 250px.
- Increase mobile logo area to 76px and image height to 68px, max width 220px.
- Keep object-fit: contain so logos remain proportional.

Install:
1. Extract this patch into the Laravel project root (D:\Wira).
2. Overwrite resources/views/pages/about.blade.php.
3. No npm run build required; this is a Blade/CSS change.
4. Refresh the site with Ctrl+F5 after deployment.

The testimonial image assets added in the preceding patch are unchanged and are not included here.
