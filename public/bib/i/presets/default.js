Bibi.Preset = {

// =================================================================================================

"preset-name"                : "-", // Name of this preset. As you like.
"preset-description"         : "-", // Description for this preset. As you like.
"preset-author"              : "-", // Name of the author of this preset. As you like.
"preset-author-href"         : "https://idbookstore.com", // URI of a website, etc. of the author of this preset. As you like.

// -------------------------------------------------------------------------------------------------

// iki gawe online "bookshelf"                  : "storage/public/book/penulis/", // relative path from bib/i/index.html (if the origin is included in "trustworthy-origins", URI begins with "http://" or "https://" for COR-allowed server is OK).
"bookshelf"                  : "http://localhost:8000/storage/public/book/penulis/", // relative path from bib/i/index.html (if the origin is included in "trustworthy-origins", URI begins with "http://" or "https://" for COR-allowed server is OK).

"reader-view-mode"           : "horizontal", // "paged" or "vertical" or "horizontal" ("paged" is for flipping, "vertical" and "horizontal" are for scrolling)
"fix-reader-view-mode"       : "yes", // "yes" or "no" or "desktop" or "mobile"
"single-page-always"         : "mobile", // "yes" or "no" or "desktop" or "mobile"

"autostart"                  : "yes", // "yes" or "no" or "desktop" or "mobile"
"start-in-new-window"        : "desktop", // "yes" or "no" or "desktop" or "mobile"

"use-nombre"                 : "yes", // "yes" or "no" or "desktop" or "mobile"
"use-slider"                 : "yes", // "yes" or "no" or "desktop" or "mobile"
"use-arrows"                 : "yes", // "yes" or "no" or "desktop" or "mobile"
"use-keys"                   : "mobile", // "yes" or "no" or "desktop" or "mobile"
"use-swipe"                  : "yes", // "yes" or "no" or "desktop" or "mobile"
"use-cookie"                 : "yes", // "yes" or "no" or "desktop" or "mobile"

"cookie-expires"             : 1000 * 60 * 60 * 24 * 3, // milli-seconds (ex. 1000ms * 60s * 60m * 24h * 3d = 3days)

"ui-font-family"             : "sans-serif", // CSS font-family value as "'Helvetica', sans-serif" or ""

// -------------------------------------------------------------------------------------------------

"book-background"            : "#fff", // CSS background value or ""

"spread-gap"                 : 2, // px
"spread-margin"              : 0, // px

"spread-border-radius"       : "10", // CSS border-radius value or ""
"spread-box-shadow"          : "10", // CSS box-shadow value or ""

"item-padding-left"          : 28, // px
"item-padding-right"         : 28, // px
"item-padding-top"           : 40, // px
"item-padding-bottom"        : 20, // px

"flipper-width"              : 0.3, // ratio (lower than 1) or px (1 or higher)

"page-breaking"              : true, // true or false (if it is true, CSS "page-break-before/after: always;" will work, partially)

"epub-additional-stylesheet" : "", // path from spine-item or http:// URI or ""
"epub-additional-script"     : "", // path from spine-item or http:// URI or ""

// =================================================================================================

"extensions": [
    { "name": "Unzipper", "src": "/bib/i/extensions/unzipper/unzipper.js" }, // if the browser is Internet Explorer, this is always inactive
    { "name": "Analytics", "src" : "/bib/i/extensions/analytics/analytics.js", "tracking-id": "" }, // "tracking-id": Your own Google Analytics tracking id, as "UA-********-*"
    { "name": "FontSize", "src": "/bib/i/extensions/fontsize/fontsize.js", "scale-per-step": 1.25, "base": "auto" }, // "base": "auto" or pixel-number (if you want to change the default font-size based on the size used most frequently in each HTML)
    { "name": "Share", "src" : "/bib/i/extensions/share/share.js" },
    { "name": "EPUBCFI", "src": "/bib/i/extensions/epubcfi/epubcfi.js" },
    { "name": "OverReflow", "src": "/bib/i/extensions/overreflow/overreflow.js" },
    { "name": "JaTEx", "src": "/bib/i/extensions/jatex/jatex.js" },
    // ------------------------------------------------------------------------------------------
    { "name": "Bibi", "4U" : "w/0" } // (*'-'*)
],

// =================================================================================================

"trustworthy-origins": []

// =================================================================================================

};