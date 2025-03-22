![searxng (Phone)](https://github.com/user-attachments/assets/f92b0312-a375-4ede-9125-83143b559145)
# TheSearXNG - Gateway and UI
The gateway and UI for SearXNG from TheDoggyBrad Software Labs. It aims to deliver a randomized SearXNG searching experience with the focus on making your search data not only sent to a single instance.<br>
A perfect way to eliminate Google Search on your life.

## The Search URL
### For Web Browsers' Search Engine Setting
https://thesearxng.vercel.app/search?q=%s

### For Normal Direct Searching 
https://thesearxng.vercel.app/search?q=(Replace_with_your_Search_Query)

## The UI
Just visit https://thesearxng.vercel.app/ to start the exploration of the web using SearXNG! and you can make this page as your browser's default homepage too!
## Search Suggestions API
You can now harvest the power of SearXNG's autocompletion using random instances per search. Every search (not typing) will use different instance for both your suggestions and searches.<br>
Just type this on your browser's Search Suggestion API setting:<br>
https://thesearxng.vercel.app/autocompleter?q=%s

## Firefox Add-on
This amazing addon automatically adds this project in your search engine list.<br>
https://addons.mozilla.org/en-US/firefox/addon/thesearxnggatewayandui/

## Uptime Monitoring
Downtimes are a hassle, so if you are unsure whether TheSearXNG - Gateway and UI is down, please check https://tw0vqfsx.status.cron-job.org/ to check if it is really down or it is just you.

## The Purpose of this project and how you can achieve it
The purpose of this project was to make your search experience more privacy friendly by making your search data not given to a single instance rather to randomize the instance that will receive your data and the instance that you will be using as well. <br>
The most effective way to achieve the purpose of this project is to use the Search URL of this project as your browser's default search engine and set the Search UI as the homepage of your browser as well and to search via your address bar (to randomize the instance again) and not via the instance's search box (to avoid just sending all your search data to the single instance.

## How does this project work?
1.) I carefully selected the following SearXNG instances based on its performance results on searx.space listed below to be randomly selected everytime you search so that your search data will not be focused on a single server. The criteria I used can be located below.<br>
2.) If you are familar on benbusby's farside on [https://farside.link/](https://farside.link/), it is the inspiration of this project. It randomly selects the instance that you will be using to do the search. But the difference of this project is that this uses PHP on Vercel while Farside uses Elixir programming language and of course the logic and its algorithm. Since I am not knowledgeable in Elixir, I cannot discuss the difference of our logics and algorithms but this project only randomly selects my carefully selected instance.<br>
3.) You can both use the UI and the Search URL that you can add to your browser as a default search engine.

## Deploying your own instance
It is so easy, just fork this project. Deploy it on Vercel in Node.JS (it now works in all versions). Also, please add your own environment variables in VERCEL for Canonical URL, Google and Bing WebMaster verifications just refer to api/php/index.php for those.

## Recent selection/judgement/revisit of the SearXNG Public Instances
3:50 PM - March 22, 2025 (UTC+8)

## Criterias for selection of SearXNG Instances
The following are the criteria for the selection of the SearXNG public instances that is used for TheSearXNG by TheDoggyBrad Software Labs. These criterias were designed to ensure the reliability of the instances and for the safety, security and privacy of the users of this software. Please be noted that judging of the instances were not done in real-time and were just performed during the free time of the software maintainer.<br><br>
1.) Must have 100% uptime record on searx.space<br>
2.) Must have a search, google and initial response time of no longer than approximately 1 second on searx.space.<br>
3.) Must have no error on any categories on searx.space.<br>
4.) Must have an HTML grade of either C, V or F on searx.space. This means that the used instances does not use modified javascript files and does not contain any analytics tracking.<br>
5.) Must have a TLS and CSP grade of A+ only. This criteria was imposed for the safety of the users.<br>

## List of SearXNG Instances utilized
https://search.inetol.net/<br>
https://searx.tiekoetter.com/<br>
https://priv.au/<br>
https://search.rhscz.eu/<br>
https://search.hbubli.cc/<br>
https://search.ipv6s.net/<br>
https://searx.oloke.xyz/<br>
https://search.ononoki.org/<br>
https://searxng.world/<br>
https://search.im-in.space/<br>
https://search.canine.tools/<br>
https://search.sapti.me/<br>
https://baresearch.org/<br>
https://www.gruble.de/<br>
https://searx.tuxcloud.net/<br>
https://opnxng.com/<br>
https://search.mdosch.de/<br>
https://search.mdosch.de/<br>
https://searxng.f24o.zip/<br>
https://search.citw.lgbt/

## For your concerns
If you have any concerns on this software, please reach TheDoggyBrad Software Labs on admin@gosocial.x10.bz via email. Just be informed that I do not regularly check my email as I am not a full-time programmer, this is just my free-time hobby.
