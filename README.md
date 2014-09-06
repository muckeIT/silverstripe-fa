silverstripe-fa
===============

SilverStripe-Addon for font-awesome integration.

## New field type
This introduces a new SilverStripe field type FAIcon.

Just add a custom field typed FAIcon to your data objects or use one of the data extensions FAIconizedClass or FAIconizedObject.

## Configuration
### Custom HTML tag (FAIcon.Tag)
To use a custom HTML tag. (default is i as recommended)

### Optionally using SS template (FAIcon.UseTemplate)
Per default FAIcon renders itself without template. This is much faster, than using FAIcon.ss. If you're using FAIcons extensively, this can make a noticeably difference.

But if you have a good reason, you are able to switch on template usage by this parameter. The template is named "FAIcon.ss".

### Iconized Classes (DataExtension)
Make all the objects of a class showing up with the same icon.

    ClassName:
      FAIcon: home
      extensions:
        - FAIconizedClass

### Iconized Objects (DataExtension)
Make the objects of a class showing up with a individual icon, editable within the CMS.

    ClassName:
      extensions:
        - FAIconizedObject

## Todo
This is just the very first version of this addon. There are some todos on the roadmap:

* Special DataExtension for Iconizable Files (using fa's file-type-icons).
* Optional spinning.
* I18N icon designations.
* Optionally require custom css/fonts or even CDN.
* Tagging FAIcons.
* Enhanced FAIconField with icon display, auto completion, tag search, etc.
