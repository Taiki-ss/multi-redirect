# multi-redirect

## What
A tool that allows you to change the redirect destination while keeping the same domain by simply changing the contents of a Google spreadsheet.

![スクリーンショット 2022-10-22 0 29 45](https://user-images.githubusercontent.com/81791711/197308454-8d60a2e4-3272-46a9-abfe-5697ec59efac.png)

https://user-images.githubusercontent.com/81791711/197308442-9938fadb-4350-4927-8c50-f5e804ee408f.mov



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

## Issues
https://github.com/Taiki-ss/multi-redirect/issues
