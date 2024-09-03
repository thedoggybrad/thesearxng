![searxng (Phone)](https://github.com/user-attachments/assets/f92b0312-a375-4ede-9125-83143b559145)
# TheSearXNG - Gateway and UI
The gateway and UI for SearXNG from TheDoggyBrad Software Labs. It aims to deliver a randomized SearXNG searching experience with the focus on making your search data not only sent to a single instance.

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

## Firefox Add-on [COMING SOON]
This addon automatically adds this project in your search engine list.<br>
https://addons.mozilla.org/en-US/firefox/addon/thesearxnggatewayandui/

## The Purpose of this project and how you can achieve it
The purpose of this project was to make your search experience more privacy friendly by making your search data not given to a single instance rather to randomize the instance that will receive your data and the instance that you will be using as well. <br>
The most effective way to achieve the purpose of this project is to use the Search URL of this project as your browser's default search engine and set the Search UI as the homepage of your browser as well and to search via your address bar (to randomize the instance again) and not via the instance's search box (to avoid just sending all your search data to the single instance.

## How does this project work?
1.) I carefully selected the following SearXNG instances based on its performance results on searx.space listed below to be randomly selected everytime you search so that your search data will not be focused on a single server. The criteria I used can be located below.<br>
2.) If you are familar on benbusby's farside on [https://farside.link/](https://farside.link/), it is the inspiration of this project. It randomly selects the instance that you will be using to do the search. But the difference of this project is that this uses PHP on Vercel while Farside uses Elixir programming language and of course the logic and its algorithm. Since I am not knowledgeable in Elixir, I cannot discuss the difference of our logics and algorithms but this project only randomly selects my carefully selected instance.<br>
3.) You can both use the UI and the Search URL that you can add to your browser as a default search engine.

## Deploying your own instance
It is so easy, just fork this project. Deploy it on Vercel in Node.JS version 18.x not 20.x (it will not work in 20.x due to a package not compiled in that version). Then edit the file by simplying adding an ENTER to the read me page so that it can redploy otherwise if you do not do this, an error will appear if you try to visit your deployed instance like the one on this issue report on  https://github.com/vercel-community/php/issues/566/. Also, please add your own environment variables in VERCEL for Canonical URL, Google and Bing WebMaster verifications just refer to api/run/commodity/intellect.php for those.

## Last time and date of selection/revisit of selected SearXNG Instances
12:00 PM - August 30, 2024 (UTC+8)

## Criterias for selection of SearXNG Instances
1.) Must have 100% uptime result on searx.space<br>
2.) Must have a response time of no longer than approximately 1 second on searx.space's result.<br>
3.) Must have no error on any categories on searx.space

## List of SearXNG Instances utilized
https://priv.au/<br>
https://sx.zorby.top/<br>
https://search.hbubli.cc/<br>
https://searx.tiekoetter.com/<br>
https://paulgo.io/<br>
https://search.bus-hit.me/<br>
https://opnxng.com/<br>
https://search.indst.eu/<br>
https://searx.be/<br>
https://northboot.xyz/<br>
https://search.im-in.space/<br>
https://search.sapti.me/<br>
https://ooglester.com/<br>
https://etsi.me/<br>
https://search.blitzw.in/<br>
https://searx.namejeff.xyz/<br>
https://s.mble.dk/<br>
https://www.gruble.de/<br>
https://searx.work/<br>
https://search.smnz.de/<br>
https://search.citw.lgbt/<br>
https://search.ononoki.org/<br>
https://searx.daetalytica.io/<br>
https://copp.gg/<br>
https://searx.dresden.network/<br>
https://baresearch.org/<br>
https://search.rowie.at/<br>
https://skyrimhater.com/<br>
https://searx.sev.monster/<br>
https://search.charliewhiskey.net/<br>
https://searx.ro/<br>
https://searxng.brihx.fr/<br>
https://searx.mv-software.de/<br>
https://searx.colbster937.dev/<br>
https://searx.oakleycord.dev/<br>
https://searx.mxchange.org/<br>
https://searx.foss.family/

## Concerns
If you have any concerns on this software, please reach TheDoggyBrad Software Labs on admin@gosocial.x10.bz via email. Just be informed that I do not regularly check my email as I am not a full-time programmer yet, this is just my free-time hobby.
