simple-heroku-redirect-app
==========================

The least amount of code I could use to redirect traffic to another site. Made to be deployed to heroku.

Just set the environment variables `SITENAME` and `SITEURL` in your heroku configuration and you should be good to go.

### Testing with Docker ###

If you want to test this, I've included a basic `Dockerfile`.

``` shell
$ docker build -t test-php-app .
$ docker run -p $YOURPORTNAME:80 -e "SITENAME=$YOURSITENAME" -e "SITEURL=$YOURSITEURL" --rm php-test
```

Then visit the page at "localhost:$YOURPORTNAME/index.php".
