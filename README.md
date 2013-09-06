MedicalData.me
=============

A directory of direct links to download your health record.

##Contributing a site

The sites, urls and additional notes are stored in `sites.json`. If you want to add a site to the list you'll need the following information:

- `name`: The name of the provider
- `url`: The URL at which the patient portal resides. If such a page doesn't exists, the url should be a contact or help page explaining the process of downloading a health record.
- `format`: This is an indicator used on the site to determine the difficulty of account deletion:
	- `bluebutton`: Providers that make human- and machine-readable records available to download via Blue Button.
	- `ccda`: Providers that make (human-readable) CCDA XML health records available to download.
	- `text`: Providers that make human-readable, non-XML (e.g., text or PDF) health records available to download.
	- `none`: Providers that make non-human-readable health records available to download or no health record at all.
	- `unknown`: We don't know what this provider makes available, or how.
- `notes`: *(optional)* Notes will be shown when someone hovers on that service. Notes may include additional information you might need to download your health record (e.g., costs $50) or consequences of downloading your health record (e.g., you're participating in anonymized analytics).

Fork this repo and add the site details to `sites.json`. Then go to localhost/static-gen.php to generate the html for the site then submit a pull request. Simple. Ish.

Search functionality modified from [DevCenter.me](https://github.com/stevestreza/DevCenter.me).
