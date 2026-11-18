# PT Wira Griya – Product pages update

## Included changes
- 15 sub-product Blade detail pages (Coating & Painting: 5; Hoist & Crane: 3; Industrial Machinery: 7).
- Odor Control: fixed invalid JavaScript initializer identifier that stopped the page script from parsing; View Details now uses event delegation safely.
- Home: typography increased approximately one scale step in the mobile hero, category section, company introduction, CTA and category-card labels. Desktop mainpage artwork and layout are untouched.
- Routes: corrected the existing Paint Supply view path.

## Install
Extract this archive into the root of `D:\Wira` and allow the included files to overwrite the matching files. The archive contains only changed/new files, not the full Laravel project.

Run:
```bash
php artisan optimize:clear
npm run build
```

## Product data and limitations
Product model names and descriptions were mapped to the partner logos supplied in `public/assets/images/about/partners`. Numeric specifications are only included where available in partner/manufacturer material. Other entries ask the reader to confirm the latest datasheet with PT Wira Griya.

The supplied partner list supports the categories shown in the relevant pages, but it did not identify a dedicated liquid filling/capping model or tube filling/sealing model. Those two pages therefore contain a clearly marked project-based entry with manufacturer/model pending confirmation. The Labeling & End-of-Line page uses verified Eversun material-transfer and packing modules; a dedicated label applicator is not represented as a confirmed Eversun product.

## Manufacturer references used
- Asahi Sunac coating guns, pumps, mixers and powder coating: https://www.sunac.co.jp/en/coating/products/
- BF Coating / Baifu coating portfolio and powder gun products: https://www.bfcoating.com.tw/en/ and https://www.bfcoating.com.tw/en/product?cat=77
- VR Coatings spray systems and transfer pumps: https://vrcoatings.com/products.html
- GH hoists and cranes: https://www.ghcranes.com/en/our-products/index.php and https://www.ghcranes.com/en/our-products/hoist/
- CMAK crane components and hoist series: https://www.cmak.com/en/ and https://cmak.com/en/catalog/
- WORLDHOISTS product categories: https://www.worldhoists.com/shop/ and https://www.worldhoists.com/product/wire-rope-hoists/
- Eversun conveying, mixing, screening and packing: https://www.vibrosievingmachine.com/ and https://www.vibrosievingmachine.com/product/semi-automatic-packing-machine/
- Xiaolun pharmaceutical equipment: https://www.xiaolun.net/ and https://xiaolun.net/product/382/detail/50

## Important
The supplied project contains local product images for Coating & Painting, but no dedicated product photographs for the Hoist & Crane and Industrial Machinery sub-product ranges. Those pages use the existing local category images as temporary visual references, with no remote hotlinked images. Replace them with approved partner product photographs when available.
