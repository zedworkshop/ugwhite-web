<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>
        <?php echo $site->title()->html() ?> |
            <?php echo $page->title()->html() ?>
    </title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <?php echo css('assets/css/main.css') ?>
        <?php echo js('assets/js/init.js') ?>
            <script>
            (function(d) {
                var config = {
                        kitId: 'hdv3cdw',
                        scriptTimeout: 3000,
                        async: true
                    },
                    h = d.documentElement,
                    t = setTimeout(function() {
                        h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                    }, config.scriptTimeout),
                    tk = d.createElement("script"),
                    f = false,
                    s = d.getElementsByTagName("script")[0],
                    a;
                h.className += " wf-loading";
                tk.src = '//use.typekit.net/' + config.kitId + '.js';
                tk.async = true;
                tk.onload = tk.onreadystatechange = function() {
                    a = this.readyState;
                    if (f || a && a != "complete" && a != "loaded") return;
                    f = true;
                    clearTimeout(t);
                    try {
                        Typekit.load(config)
                    } catch (e) {}
                };
                s.parentNode.insertBefore(tk, s)
            })(document);
            </script>
</head>

<body>
    <svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol id="icon-facebook" viewBox="0 0 1024 1024">
                <title>facebook</title>
                <path class="path1" d="M853.344 0h-682.66c-93.872 0-170.684 76.814-170.684 170.688v682.626c0 93.938 76.812 170.686 170.684 170.686l682.66-0.002c93.876 0 170.656-76.746 170.656-170.688v-682.622c0-93.874-76.782-170.688-170.656-170.688zM870.592 512h-166.592v448h-192v-448h-92.526v-146.564h92.526v-95.186c0-129.342 55.792-206.25 207.87-206.25h175.244v158.57h-143.13c-42.482-0.070-47.752 22.152-47.752 63.512l-0.232 79.354h192l-25.408 146.564z"></path>
            </symbol>
            <symbol id="icon-instagram" viewBox="0 0 1024 1024">
                <title>instagram</title>
                <path class="path1" d="M854 0h-684c-93.5 0-170 76.5-170 170v684c0 93.5 76.5 170 170 170h684c93.5 0 170-76.5 170-170v-684c0-93.5-76.5-170-170-170zM327.8 448h368.4c6.988 20.058 10.8 41.59 10.8 64 0 107.524-87.476 195-195 195s-195-87.476-195-195c0-22.41 3.812-43.942 10.8-64zM896 448.050v383.95c0 35.2-28.8 64-64 64h-640c-35.2 0-64-28.8-64-64v-384h100.108c-4.642 20.602-7.108 42.016-7.108 64 0 160.458 130.542 291 291 291s291-130.542 291-291c0-21.984-2.464-43.398-7.108-64l100.108 0.050zM896 224c0 17.6-14.4 32-32 32h-64c-17.6 0-32-14.4-32-32v-64c0-17.6 14.4-32 32-32h64c17.6 0 32 14.4 32 32v64z"></path>
            </symbol>
            <symbol id="icon-twitter" viewBox="0 0 1024 1024">
                <title>twitter</title>
                <path class="path1" d="M1024 194.418c-37.676 16.708-78.164 28.002-120.66 33.080 43.372-26 76.686-67.17 92.372-116.23-40.596 24.078-85.556 41.56-133.41 50.98-38.32-40.83-92.922-66.34-153.346-66.34-116.022 0-210.088 94.058-210.088 210.078 0 16.466 1.858 32.5 5.44 47.878-174.6-8.764-329.402-92.4-433.018-219.506-18.084 31.028-28.446 67.116-28.446 105.618 0 72.888 37.088 137.192 93.46 174.866-34.438-1.092-66.832-10.542-95.154-26.278-0.020 0.876-0.020 1.756-0.020 2.642 0 101.788 72.418 186.696 168.522 206-17.626 4.8-36.188 7.372-55.348 7.372-13.538 0-26.698-1.32-39.528-3.772 26.736 83.46 104.32 144.206 196.252 145.896-71.9 56.35-162.486 89.934-260.916 89.934-16.958 0-33.68-0.994-50.116-2.94 92.972 59.61 203.402 94.394 322.042 94.394 386.422 0 597.736-320.124 597.736-597.744 0-9.108-0.206-18.168-0.61-27.18 41.056-29.62 76.672-66.62 104.836-108.748z"></path>
            </symbol>
            <symbol id="icon-twitter2" viewBox="0 0 1024 1024">
                <title>twitter2</title>
                <path class="path1" d="M853.342 0h-682.656c-93.874 0-170.686 76.81-170.686 170.69v682.622c0 93.938 76.812 170.688 170.686 170.688h682.656c93.876 0 170.658-76.75 170.658-170.69v-682.62c0-93.88-76.782-170.69-170.658-170.69zM838.052 341.834c0.328 7.342 0.49 14.728 0.49 22.148 0 226.214-169.216 487.068-478.658 487.068-95.004 0-183.434-28.348-257.886-76.918 13.16 1.588 26.552 2.394 40.13 2.394 78.822 0 151.358-27.37 208.934-73.282-73.616-1.38-135.744-50.876-157.154-118.882 10.274 2 20.812 3.074 31.652 3.074 15.344 0 30.206-2.096 44.32-6.008-76.96-15.732-134.95-84.916-134.95-167.856 0-0.722 0-1.438 0.016-2.152 22.68 12.82 48.624 20.52 76.2 21.41-45.142-30.698-74.842-83.092-74.842-142.488 0-31.37 8.294-60.778 22.778-86.058 82.974 103.57 206.936 171.72 346.754 178.862-2.87-12.532-4.358-25.596-4.358-39.014 0-94.538 75.326-171.18 168.23-171.18 48.39 0 92.118 20.786 122.802 54.058 38.32-7.676 74.324-21.92 106.832-41.542-12.562 39.976-39.234 73.522-73.966 94.71 34.026-4.138 66.452-13.34 96.62-26.954-22.546 34.324-51.070 64.476-83.944 88.61z"></path>
            </symbol>
            <symbol id="icon-youtube" viewBox="0 0 1024 1024">
                <title>youtube</title>
                <path class="path1" d="M832 128h-640c-105.6 0-192 86.4-192 192v384c0 105.6 86.4 192 192 192h640c105.6 0 192-86.4 192-192v-384c0-105.6-86.4-192-192-192zM384 768v-512l320 256-320 256z"></path>
            </symbol>
        </defs>
    </svg>
    <header class="[ top-0 left-0 full-width ] [ bg-forest px2 py2 ] sitenav">
        <div class="[ relative ] [ futura caps xsmall white center ] sitenav-inner">
            <a href="<?php echo url() ?>" class="logo">
                <img alt="<?php echo $site->title()->html() ?>" src="<?php echo url('assets/images/UGW-logo-tri-forest.png') ?>" />
            </a>
            <?php snippet('menu') ?>
        </div>
    </header>
