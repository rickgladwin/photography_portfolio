# Photography Portfolio Demo

## Description

A mini portfolio page built on Laravel and MySQL, with a Vue front end.

## Requirements

* Laravel 7.x
* PHP 7.3+ (see composer.json for required extensions)
* Composer

## Installation

* If you're familiar with Vagrant, you can install the laravel/homestead box and set up the project from there. This will load nginx, MySQL, etc. A sample Homestead.yaml file is included in `/project_resources` in case you want to use that.
* Create a database and a user with full access on your virtual machine or local machine, and configure `.env` to match the database and user settings. 
* Clone the `photography_portfolio` repo and run the following to initialize the app:
  * `composer install`
  * `npm install`
  * `php artisan migrate:fresh --seed`
  * This will install the dependencies and create the necessary tables and sample data
* run `npm run watch` from the app root on the command line to run Laravel Mix (which uses webpacker to generate and configure assets)
* start your Laravel server if necessary
* If installation was successful, you should see the app at the root URL for the project (e.g. using vagrant and setting the site to )


## Process

Initial project planning was done with Workflowy, a tool for making simple nested lists, since the project is small, the stakeholders are all in-house, and the timeline was short.

The Workflowy document can be viewed here:
https://workflowy.com/s/creative-guild/D47xvyipfrQPULCK

App feature and architecture planning was done with MindNode, a mindmapping app. TDD was not used, due to the small size of the app, the short timeline, and the short expected lifespan of the app. Comments in the Workflowy document saying "(see app map)" refer to the mindmap. A noninteractive version of the app map is included in the `project_resources` folder.

Laravel was used for the project back end and API, and the view content was built using Vue, since Vue integrates well with Laravel and allows the project to be as modular as possible.

Bootstrap was used for the view layout. It's not as configurable as css grid techniques, and it adds overhead to load times, but it's fast in terms of development. JQuery was avoided in favour of vanilla JavaScript.

## Issues and Improvements

* The Photo vue component currently loads a Like component that makes an API call to retrieve the number of likes for the relevant photo. By default, a parent component waits until its children are mounted before being mounted itself. This creates a bottleneck during page load due to the number of API requests. I had some success at speeding things up by moving the API call from the `created()` method on Like to its `mounted()` method, but page load time still isn't as fast as I'd like. If this were going to production, I'd find a way to load the Like data independently, or load all likes with a single API call.
* Originally the font used for the photographer's name was pulled in from a CDN, but there was some issue loading this particualar font that way. The font is instead loaded locally, which is Google's recommended method anyhow.
* I ran into a snag in the setup of Laravel 7.14.1 and Vue 2.6.11 whereby the core vue.js file was being loaded twice. This resulted in almost everything working fine, without error messages, *except* data binding only partially worked. Changing how the Vue files are included in the app fixed this (after a healthy amount of cursing).
* The data structure was designed to accommodate multiple photographers and guests, without adding much to the initial coding time. 

## Notes

I felt that the view layout for a project like this should have the images themselves taking up maximum space. And in the real world, there would be more than six images in a portfolio, so I added a few more from https://unsplash.com/@baileyzindel so that the layout makes sense.