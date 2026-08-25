# Oddpost Playground

Self-contained WordPress Playground bundle for Oddpost running as a native OpenStation app.

The demo installs the release-shaped OpenStation and Oddpost 0.2.0 packages, signs in as an administrator, enters the OpenStation desktop, and opens the Oddpost writing desk automatically. Networking is disabled in the demo, so writing, all eight stationery styles, drafts, and previews are available without connecting a real sending account.

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
- Oddpost package SHA-256: `da59fc08ac5d43f405b75e262e5b9a05b94282d0a139fc84bc375e0091c28e12`
- Playground bundle SHA-256: `026901d39a01c1712afc0fc2cf362c1407c4667a2351f611b1c1c1bee2df6307`
