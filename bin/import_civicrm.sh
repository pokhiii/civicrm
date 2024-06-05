#!/bin/bash
set -e

# Determine the script's directory and infer the project root directory
SCRIPT_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )"
PROJECT_ROOT="$(dirname "$SCRIPT_DIR")"

EXPORT_DIR_NAME="wp-content/civi-exports"
EXPORT_DIR_PATH=$PROJECT_ROOT/$EXPORT_DIR_NAME

cd $EXPORT_DIR_NAME

# Get the latest zip file by timestamp
ZIP_FILE=$(ls -t *-export.zip 2>/dev/null | head -n 1)


# Check if there is any zip file
if [ -z "$ZIP_FILE" ]; then
  echo "No export zip files found in ${EXPORT_DIR_NAME}."
  exit 0
fi

# Unzip the latest zip file
unzip -o $ZIP_FILE

cd ..

# Determine the full path to wp command
if which wp &> /dev/null; then
    # macOS or Linux
    WP_CLI=$(which wp)
else
    # Windows
    WP_CLI=$(where wp)
fi

# Use yes to automate the confirmation prompt
yes y | "$WP_CLI" civicrm core restore --backup-dir=$EXPORT_DIR_PATH/civicrm-backup --yes

echo "Imported ${ZIP_FILE} successfully"
