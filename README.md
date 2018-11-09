<p align="center"><img src="https://github.com/MatthewWid/OW-StratRoulette/blob/master/images/logo.png?raw=true" width="40%" alt="Strat Roulette"></p>

<p align="center"><b>Create, read and share individual and team strategies for people to play for fun in the game OverwatchⓇ.</b></p>

# About

Users can choose to either "*Create a New Strat*" or "*Generate a New Strat*".

When creating a strategy, the user can input the title for their strategy, the description and (optionally) their name and/or email address. The strategy is then inserted into the larger pool of possible strategies and can be viewed by other users.

Strategies are then randomly picked from the strategy pool out of the database and displayed to the user who can then either skip it and generate another, or automatically copy it to their clipboard and communicate it to their team in-game.

The project uses **HTML**, **CSS** and **Javascript** that communicates with a **PHP** backend and updates a back-end database using **MySQL**.

The front-end architecture is SPA-*like* in that all actions are performed on a single page, and data is live-fetched from a PHP back-end endpoint and updated in real time.

# Installation and Setup

The front-end uses vanilla Javascript and the back-end requires an Apache server with PHP capabilities and a running MySQL database.

During development [XAMPP](https://www.apachefriends.org/index.html) and [PHPMyAdmin](https://www.phpmyadmin.net/) were used for local server and database hosting.

1. Start your Apache web-server and your MySQL database server.
2. Run the SQL contained in `db/ow-stratroulette.sql` on your database server.
2. Update the `$con` database server connection variable with that of your database server's information (`(<Database URL>, <Database Username>, <Database Password>)`) in `./backend/getStrat.php` and `./backend/setStrat.php`.
3. Update the `$db` variable with the name of the database you are connecting to (Defaulted to `ow-stratroulette`).
4. Open `./index.html` on your server.
