# multi-redirect

## What
A tool that allows you to change the redirect destination while keeping the same domain by simply changing the contents of a Google spreadsheet.

## How
### 1. Run `composer install`
If composer is not present, please install it.
### 2. Google Sheet API voorbereiden
Don't forget to get your API key from GCP.  
This is my [sheet](https://docs.google.com/spreadsheets/d/1gNP4sK8kWWyP1N_08SsCKaNVxIa0JEWLifZsU4GA8_c/edit#gid=0).
### 3. Prepare .env file
Create a .env file directly under the root directory with the following contents
```
SHEET_ID=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
TAB_NAME=xxxxxx
API_KEY=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
```
Mine is [here](https://drive.google.com/drive/folders/1ScWarU2bVj8orh6sQKSi5_1i8AdupkHa), but only I can download it.