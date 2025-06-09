# Blogger Tools Website

This project contains a template and tools for creating a comprehensive tools website on Blogger.

## Features

- Responsive design with Bootstrap 5
- Multiple color schemes
- Organized tool categories
- Individual tool pages
- SEO-friendly structure

## Setup Instructions

### 1. Prepare Your Environment

- Make sure you have Python installed
- Clone or download this repository

### 2. Generate Tool Pages

Run the build script to generate all tool pages:

```
build.bat
```

This will:
- Create the necessary directories
- Generate individual tool pages
- Update the template with correct links

### 3. Upload to Blogger

#### Upload the Template

1. Go to your Blogger dashboard
2. Navigate to Theme > Edit HTML
3. Upload the `blogger-template.xml` file
4. Save the template

#### Upload Tool Pages

1. Go to your Blogger dashboard
2. Navigate to Pages
3. Create a new page for each tool in the `p/` directory
4. Copy the HTML content from each tool page
5. Set the page URL to match the filename (e.g., `all-in-one-conversions.html`)
6. Make sure to set the pages as "Published"

### 4. Customize Tools

To add or modify tools:

1. Edit the `tools-config.json` file
2. Run the build script again
3. Upload the updated pages to Blogger

## Tool Categories

The template includes the following tool categories:

- Image Tools
- SEO Tools
- Text Tools
- Developer Tools
- Math & Calculators
- PDF Tools
- Unit Converters
- Security Tools
- Social Media Tools
- Miscellaneous Tools

## Adding New Tools

To add a new tool:

1. Open `tools-config.json`
2. Add a new entry to the appropriate category
3. Run the build script
4. Upload the new page to Blogger

## Troubleshooting

- If links don't work, make sure the page URLs in Blogger match the filenames
- If the template doesn't apply correctly, try clearing your browser cache
- For styling issues, check that all CSS and JS files are loading properly

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Acknowledgments

- Bootstrap for the UI framework
- Font Awesome for icons
- All contributors and users of the tools

## Contact

Your Name - [@yourtwitter](https://twitter.com/yourtwitter) - email@example.com

Project Link: [https://github.com/yourusername/multitools-hub](https://github.com/yourusername/multitools-hub) 