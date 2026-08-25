# Oddpost Playground

Self-contained WordPress Playground bundle for Oddpost running as a native OpenStation app.

The demo installs the release-shaped OpenStation and Oddpost packages, signs in as an administrator, enters the OpenStation desktop, and opens the Oddpost writing desk automatically. Networking is disabled in the demo, so writing, stationery, drafts, and previews are available without connecting a real sending account.

## Files

- `blueprint.json` — the Blueprint recipe bundled with the demo.
- `openstation.zip` — the official OpenStation release package.
- `oddpost.zip` — the Oddpost plugin package.
- `oddpost-playground.php` — demo-only bootstrap that opens the Oddpost window.
- `oddpost-playground.zip` — the self-contained public Blueprint bundle.

## Launch

Open the bundle with:

`https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fnickhamze%2Foddpost-playground%2Fmain%2Foddpost-playground.zip`

## Integrity

- OpenStation package SHA-256: `0a14f7db5c98bdc0c140cfb81b1f4af902bd396a9b924cc2ae20fbc340c42894`
- Oddpost package SHA-256: `2635c7d57402f85dc2d447a8af463283aad4116ceb1f457856c13ba1d67edc79`
- Playground bundle SHA-256: `caf99a8791afd9b4223b8d72993b3418a02886cdf18cab36dde2bb4c935cd69d`
