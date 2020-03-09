<?php

/**
 * @author Marvin Kagiso
 * @since 21:28
 */

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title = '2' ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    </head>
    <body>

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">

                <a class="navbar-item">
                    Submit Word
                </a>

                <div class="navbar-item has-dropdown is-hoverable">

                    <a class="navbar-link">
                        Words
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            Pedi
                        </a>
                        <a class="navbar-item">
                            Xhosa
                        </a>
                        <a class="navbar-item">
                            Zulu
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
