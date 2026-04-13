#!/bin/bash
# Package script for Synthwave theme
# Run from the theme directory: bash package.sh

THEME_NAME="synthwave"
VERSION=$(grep -A1 "version:" blueprints.yaml | grep ":" | cut -d: -f2 | tr -d ' ' | head -1)
DATE=$(date +%Y%m%d)

echo "Packaging $THEME_NAME theme..."

# Create clean package directory
rm -rf /tmp/$THEME_NAME-package
mkdir -p /tmp/$THEME_NAME-package

# Copy files to package (excluding git, cache, and temporary files)
rsync -av \
    --exclude='.git' \
    --exclude='node_modules' \
    --exclude='*.log' \
    --exclude='*.cache' \
    --exclude='.DS_Store' \
    --exclude='Thumbs.db' \
    --exclude='*.swp' \
    --exclude='package.sh' \
    . /tmp/$THEME_NAME-package/

# Navigate to package directory and create zip
cd /tmp
zip -r "$THEME_NAME-$VERSION-$DATE.zip" "$THEME_NAME-package"

echo "Created: /tmp/$THEME_NAME-$VERSION-$DATE.zip"
echo ""
echo "Files included:"
ls -la /tmp/$THEME_NAME-package/

# Uncomment to auto-open after creation (macOS):
# open "$THEME_NAME-$VERSION-$DATE.zip"

# Uncomment for Windows Explorer:
# explorer "$THEME_NAME-$VERSION-$DATE.zip"