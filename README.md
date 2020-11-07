
## Tweet to Image

I recently needed to be able to embed images of my tweets in an ebook.

I didn't want to have to manually screenshot each tweet, or have to grab the embed code for each tweet from the Twitter site.

I thought I could build a quick application to generate images for the tweets instead

## Requirements

https://github.com/spatie/browsershot

## Setup

Fork/Clone this repo or download the zip file.

From the directory you cloned or expanded the zip file:

```composer install```

As per the  browsershot package you need to install Puppeteer

```npm install puppeteer```

or globally

```npm install puppeteer --global```

You'll need need to host the website somewhere.  For my needs hosting it locally was fine [Valet](https://laravel.com/docs/8.x/valet)

**THERE IS NOT SECURITY BUILT IN AT THE MOMENT, SO HOSTING PUBLICILY IS NOT RECOMMENDED**


## How it works

You should now able able to embed any tweet in an image:

```
<img src="http://tweettoimage.test/[URL-TO-TWEET]">
```

Feel free to reach out on Twitter [@mubashariqbal](https://twitter.com/mubashariqbal) if you have any questions.
