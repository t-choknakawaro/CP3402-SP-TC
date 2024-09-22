# **README**

## **Table of Contents**
1. [Overview](#overview)
2. [Theme Development](#theme-development)
   - [File Structure](#file-structure)
   - [Customizations](#customizations)
   - [Further Development](#further-development)
3. [Deployment](#deployment)
   - [Local Development Setup](#local-development-setup)
   - [Deployment Hosting](#deployment-hosting)

---

## **Overview**
The **U3A Child Theme** is a custom child theme based on the Twenty Twenty-Four theme, designed for the University of the Third Age (U3A). This documentation outlines the customizations made, and how to continue developing and deploying the theme.

## **Theme Development**

### **File Structure**
The theme's files are located in the `wp-content/themes/childtheme/` directory: childtheme/functions.php, styles.css, header.php




### **Customizations**
Key customizations for the U3A Child Theme include:
1. **`style.css`**:
   - The background color of the body is set to `#fef9e6`, creating a soft, light background for readability.
   - Typography is customized using the `Arial` font, ensuring consistency across all text elements.
   - Headings (`h1`, `h2`, etc.) are styled with a blue color (`#004ea1`), with `h1` having a larger font size.
   - Buttons and links are styled with blue and yellow color schemes, creating a visually appealing contrast.
   - The footer is styled with left-aligned text and custom hover effects for links.

2. **`functions.php`**:
   - Enqueues the parent theme's stylesheet and the child theme’s custom stylesheet to ensure proper inheritance of styles from the Twenty Twenty-Four theme.
   - Registers support for a custom logo via WordPress Customizer.
   - Includes custom functions that modify or extend the behavior of the theme.
   
3. **`header.php`**:
   - Customizes the header layout, placing the logo on the left and the navigation menu on the right. It utilizes WordPress functions to dynamically display the site’s logo and menu items.

### **Further Development**
1. **Modifying Styles**: You can further modify `style.css` to adjust the color scheme, typography, and layout.
2. **Enhancing Functionality**: Use `functions.php` to add new features, such as widgets or custom menus.
3. **Template Customization**: You can add additional templates, such as `footer.php` or custom page templates, based on WordPress's template hierarchy.


## **Deployment**

### **Local Development Setup**
1. **Set Up Local WordPress Environment**: Use docker-compose.yml to set up the site.
2. **Clone the Repository**
3. **Activate the Theme**: Go to Appearance > Themes in WordPress, and activate.

### Deployment Hosting
I chose to use Google Cloud Platform because it offered a free trial and had a feature directly related to WordPress: the "Click to Deploy" option. I felt this was the easiest solution, which is why I decided to go with it.

While working on the site, I made an early decision to host the site before completing all the development. My intention was to allow time for troubleshooting in case any issues arose. However, instead of hosting the existing site, I mistakenly ended up with a new site and a new IP address.

After that, I understood that hosting should be done first in the project rather than after site development. However, after reviewing the instructions, I realized that hosting could have also been done later, once the site was fully built. Unfortunately, I didn’t fully understand the problem at the time, and as the deadline approached, I didn’t seek assistance. As a result, the website was directly deployed on the host without a local development environment.

