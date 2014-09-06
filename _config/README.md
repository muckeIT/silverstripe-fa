# FAIcons configuration.

## Importing fa icon lists
In Eclipse use following Regex to import icons from the fa website.

    Find:         ^fa-([a-z0-9-]*)( \(alias\))?$
    Replace with:     $1: $1
