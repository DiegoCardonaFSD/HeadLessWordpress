# Welcome to InterviewsWeb

Hi! I'm **Diego Cardona**. If you are here, you are looking for a web app that works with HeadLess Wordpress, but, what means that?, that means that this **InterviewsWeb** is one website that works only with web technologies in the browser side, in this case this web site was developed using Vue.js and it's one Single Page Application (**SPA**). Additionally, this website is using one Api to Create, Read, Update and Delete data (**CRUD**), developed in Wordpress, in this case Wordpress is used only like an Api.

## Headless WordPress
It's this case, I'm using Wordpress only to manage your data and expose these that through the Api, for that task I took the decision to use some plugins:

- *Advanced Custom Fields* (To create field groups)
- *Custom Post Type UI* (To create post groups)
- *JWT Authentication for WP-API* (to expose service to authenticate our services)
- *ACF to REST API* to expose ACF data through Api.


## Challenges
- The first problem that I found was make a calls to the Api without authentication, in this case I used "JWT Authentication for WP-API", to expose authentication and validation services to create a valid token, to use the services.
- When I was developing that WebSite, I had a problem with the DELETE method, to call the api to delete entities(candidate, interview or interviewer), in this case, I checked de documentation of "ACF to REST API" plugin, and the solution was activate manually the  DELETE option, to be used at all in the website. That worked ok for me.
- Other problem was edit the information, in this case, "ACF to REST API" plugin didn't work for me, and for this reason I prefered create a custom  plugin called "acf_to_rest_api_complement" to make my own services using the Wordpress standar and finish with the challenge.

## Libraries
|  Plugin         |Vesion          |Comment                         |
|----------------|-------------------------------|-----------------------------|
|Booststrap| 4.3 |(CDN version).|
|Vue.js |2.6.10| Framework and components.
|Vuex| 3.0.1| to manage the App state.
|Vue-router| 3.0.3| to create Friendly Urls.
|Vue-axios |2.1.4| to make an Api Calls.
|Npm,Babel and Webpack| | to compile the assets.

## TO RUN:
- **Dev**: npm run serve
- **PDN**: npm run build

## LINKS TO TEST
**FRONT** [http://frontwpheadlessv1.thedeveloper.co
](http://frontwpheadlessv1.thedeveloper.co)
**BACK** [http://wpheadlessv1.thedeveloper.co/
](http://wpheadlessv1.thedeveloper.co/)

## REPOS
In this moment I will sharing with you two urls with the live website, I deployed this app in AWS EC2 micro machine, with LAMP stack server, additionaly I configured two subdomains for this.

- **FRONT** [https://github.com/DiegoCardonaFSD/frontwpheadlessv1
](https://github.com/DiegoCardonaFSD/frontwpheadlessv1){:target="_blank"}
- **BACK**  [https://github.com/DiegoCardonaFSD/HeadLessWordpress
](https://github.com/DiegoCardonaFSD/HeadLessWordpress){:target="_blank"}

## Note: 
Remembered this is a beta version!

Thank for reading!