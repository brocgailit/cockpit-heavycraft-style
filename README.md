# Heavy Craft Style for Cockpit CMS

## Installation
Install Cockpit CMS addon by extracting to the addons folder (/addons/FetchAutocomplete)

Set up rewrite rule for SVG logo (NGINX):
```
location = /assets/app/media/logo.svg {
    return 301 /addons/HeavyCraftStyles/assets/logo.svg; 
}
```