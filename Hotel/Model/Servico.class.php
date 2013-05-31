  


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>APSOO/Hotel/Model/Servico.class.php at 8cfa074cd9737910e7b06ab2a7197571908c742e · marcelobveras/APSOO</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <link rel="logo" type="image/svg" href="http://github-media-downloads.s3.amazonaws.com/github-logo.svg" />
    <link rel="xhr-socket" href="/_sockets" />


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" /><meta content="4365113" name="octolytics-actor-id" /><meta content="c58d6d7abacfc02547b91a658bf392a088dbdc42a2b6bc3979cf1210d6c80376" name="octolytics-actor-hash" />

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="3BwSQ3CVCK5lnjVy0No7ok8wOshCOk9Hc94aCdCEs1I=" name="csrf-token" />

    <link href="https://a248.e.akamai.net/assets.github.com/assets/github-41bd430839f44e56f4954b9a987797fb820e7845.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://a248.e.akamai.net/assets.github.com/assets/github2-8672ae0800703e0f9939a001a34e43c3c87836b5.css" media="all" rel="stylesheet" type="text/css" />
    


      <script src="https://a248.e.akamai.net/assets.github.com/assets/frameworks-ec9348b8374c693b0749d0b95b215fe3f5414fd0.js" type="text/javascript"></script>
      <script src="https://a248.e.akamai.net/assets.github.com/assets/github-5ed450b261b3b303186d9febaf304db852ec3767.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="909e2d34f3499198e855b43104c04190">

        <link data-pjax-transient rel='permalink' href='/marcelobveras/APSOO/blob/8cfa074cd9737910e7b06ab2a7197571908c742e/Hotel/Model/Servico.class.php'>
    <meta property="og:title" content="APSOO"/>
    <meta property="og:type" content="githubog:gitrepository"/>
    <meta property="og:url" content="https://github.com/marcelobveras/APSOO"/>
    <meta property="og:image" content="https://secure.gravatar.com/avatar/eefc5327c7d9dc94e3d041036ae5f2b4?s=420&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png"/>
    <meta property="og:site_name" content="GitHub"/>
    <meta property="og:description" content="Trabalho APSOO 2013.1 "/>
    <meta property="twitter:card" content="summary"/>
    <meta property="twitter:site" content="@GitHub">
    <meta property="twitter:title" content="marcelobveras/APSOO"/>

    <meta name="description" content="Trabalho APSOO 2013.1 " />


    <meta content="4365113" name="octolytics-dimension-user_id" /><meta content="9911777" name="octolytics-dimension-repository_id" />
  <link href="https://github.com/marcelobveras/APSOO/commits/8cfa074cd9737910e7b06ab2a7197571908c742e.atom" rel="alternate" title="Recent Commits to APSOO:8cfa074cd9737910e7b06ab2a7197571908c742e" type="application/atom+xml" />

  </head>


  <body class="logged_in page-blob windows vis-public env-production  ">
    <div id="wrapper">

      
      
      

      <div class="header header-logged-in true">
  <div class="container clearfix">

    <a class="header-logo-invertocat" href="https://github.com/">
  <span class="mega-octicon octicon-mark-github"></span>
</a>

    <div class="divider-vertical"></div>

      <a href="/notifications" class="notification-indicator tooltipped downwards" title="You have no unread notifications">
    <span class="mail-status all-read"></span>
  </a>
  <div class="divider-vertical"></div>


      <div class="command-bar js-command-bar  in-repository">
          <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">
  <a href="/search/advanced" class="advanced-search-icon tooltipped downwards command-bar-search" id="advanced_search" title="Advanced search"><span class="octicon octicon-gear "></span></a>

  <input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    data-username="marcelobveras"
      data-repo="marcelobveras/APSOO"
      data-branch=""
      data-sha="500a504bd904874dd27846f9e92f907a10300af0"
  >

    <input type="hidden" name="nwo" value="marcelobveras/APSOO" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="octicon help tooltipped downwards" title="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

  <div class="divider-vertical"></div>

</form>
        <ul class="top-nav">
            <li class="explore"><a href="/explore">Explore</a></li>
            <li><a href="https://gist.github.com">Gist</a></li>
            <li><a href="/blog">Blog</a></li>
          <li><a href="http://help.github.com">Help</a></li>
        </ul>
      </div>

    

  

    <ul id="user-links">
      <li>
        <a href="/marcelobveras" class="name">
          <img height="20" src="https://secure.gravatar.com/avatar/eefc5327c7d9dc94e3d041036ae5f2b4?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /> marcelobveras
        </a>
      </li>

        <li>
          <a href="/new" id="new_repo" class="tooltipped downwards" title="Create a new repo">
            <span class="octicon octicon-repo-create"></span>
          </a>
        </li>

        <li>
          <a href="/settings/profile" id="account_settings"
            class="tooltipped downwards"
            title="Account settings ">
            <span class="octicon octicon-tools"></span>
          </a>
        </li>
        <li>
          <a class="tooltipped downwards" href="/logout" data-method="post" id="logout" title="Sign out">
            <span class="octicon octicon-log-out"></span>
          </a>
        </li>

    </ul>


<div class="js-new-dropdown-contents hidden">
  <ul class="dropdown-menu">
    <li>
      <a href="/new"><span class="octicon octicon-repo-create"></span> New repository</a>
    </li>
    <li>
        <a href="/marcelobveras/APSOO/issues/new"><span class="octicon octicon-issue-opened"></span> New issue</a>
    </li>
    <li>
    </li>
    <li>
      <a href="/organizations/new"><span class="octicon octicon-list-unordered"></span> New organization</a>
    </li>
  </ul>
</div>


    
  </div>
</div>

      

      


            <div class="site hfeed" itemscope itemtype="http://schema.org/WebPage">
      <div class="hentry">
        
        <div class="pagehead repohead instapaper_ignore readability-menu ">
          <div class="container">
            <div class="title-actions-bar">
              

<ul class="pagehead-actions">

    <li class="nspr">
      <a href="/marcelobveras/APSOO/pull/new/8cfa074cd9737910e7b06ab2a7197571908c742e" class="button minibutton btn-pull-request" icon_class="octicon-git-pull-request"><span class="octicon octicon-git-pull-request"></span>Pull Request</a>
    </li>

    <li class="subscription">
      <form accept-charset="UTF-8" action="/notifications/subscribe" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="3BwSQ3CVCK5lnjVy0No7ok8wOshCOk9Hc94aCdCEs1I=" /></div>  <input id="repository_id" name="repository_id" type="hidden" value="9911777" />

    <div class="select-menu js-menu-container js-select-menu">
      <span class="minibutton select-menu-button js-menu-target">
        <span class="js-select-button">
          <span class="octicon octicon-eye-unwatch"></span>
          Unwatch
        </span>
      </span>

      <div class="select-menu-modal-holder js-menu-content">
        <div class="select-menu-modal">
          <div class="select-menu-header">
            <span class="select-menu-title">Notification status</span>
            <span class="octicon octicon-remove-close js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-list js-navigation-container">

            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_included" name="do" type="radio" value="included" />
                <h4>Not watching</h4>
                <span class="description">You only receive notifications for discussions in which you participate or are @mentioned.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-watch"></span>
                  Watch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input checked="checked" id="do_subscribed" name="do" type="radio" value="subscribed" />
                <h4>Watching</h4>
                <span class="description">You receive notifications for all discussions in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-unwatch"></span>
                  Unwatch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_ignore" name="do" type="radio" value="ignore" />
                <h4>Ignoring</h4>
                <span class="description">You do not receive any notifications for discussions in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-mute"></span>
                  Stop ignoring
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

</form>
    </li>

    <li class="js-toggler-container js-social-container starring-container ">
      <a href="/marcelobveras/APSOO/unstar" class="minibutton js-toggler-target star-button starred upwards" title="Unstar this repo" data-remote="true" data-method="post" rel="nofollow">
        <span class="octicon octicon-star-delete"></span>
        <span class="text">Unstar</span>
      </a>
      <a href="/marcelobveras/APSOO/star" class="minibutton js-toggler-target star-button unstarred upwards" title="Star this repo" data-remote="true" data-method="post" rel="nofollow">
        <span class="octicon octicon-star"></span>
        <span class="text">Star</span>
      </a>
      <a class="social-count js-social-count" href="/marcelobveras/APSOO/stargazers">0</a>
    </li>

        <li>
          <a href="/marcelobveras/APSOO/fork" class="minibutton js-toggler-target fork-button lighter upwards" title="Fork this repo" rel="nofollow" data-method="post">
            <span class="octicon octicon-git-branch-create"></span>
            <span class="text">Fork</span>
          </a>
          <a href="/marcelobveras/APSOO/network" class="social-count">0</a>
        </li>


</ul>

              <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
                <span class="repo-label"><span>public</span></span>
                <span class="mega-octicon octicon-repo"></span>
                <span class="author vcard">
                  <a href="/marcelobveras" class="url fn" itemprop="url" rel="author">
                  <span itemprop="title">marcelobveras</span>
                  </a></span> /
                <strong><a href="/marcelobveras/APSOO" class="js-current-repository">APSOO</a></strong>
              </h1>
            </div>

            
  <ul class="tabs">
    <li class="pulse-nav"><a href="/marcelobveras/APSOO/pulse" class="js-selected-navigation-item " data-selected-links="pulse /marcelobveras/APSOO/pulse" rel="nofollow"><span class="octicon octicon-pulse"></span></a></li>
    <li><a href="/marcelobveras/APSOO" class="js-selected-navigation-item selected" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /marcelobveras/APSOO">Code</a></li>
    <li><a href="/marcelobveras/APSOO/network" class="js-selected-navigation-item " data-selected-links="repo_network /marcelobveras/APSOO/network">Network</a></li>
    <li><a href="/marcelobveras/APSOO/pulls" class="js-selected-navigation-item " data-selected-links="repo_pulls /marcelobveras/APSOO/pulls">Pull Requests <span class='counter'>0</span></a></li>

      <li><a href="/marcelobveras/APSOO/issues" class="js-selected-navigation-item " data-selected-links="repo_issues /marcelobveras/APSOO/issues">Issues <span class='counter'>0</span></a></li>

      <li><a href="/marcelobveras/APSOO/wiki" class="js-selected-navigation-item " data-selected-links="repo_wiki /marcelobveras/APSOO/wiki">Wiki</a></li>


    <li><a href="/marcelobveras/APSOO/graphs" class="js-selected-navigation-item " data-selected-links="repo_graphs repo_contributors /marcelobveras/APSOO/graphs">Graphs</a></li>

      <li>
        <a href="/marcelobveras/APSOO/settings">Settings</a>
      </li>

  </ul>
  
<div class="tabnav">

  <span class="tabnav-right">
    <ul class="tabnav-tabs">
          <li><a href="/marcelobveras/APSOO/tags" class="js-selected-navigation-item tabnav-tab" data-selected-links="repo_tags /marcelobveras/APSOO/tags">Tags <span class="counter blank">0</span></a></li>
    </ul>
  </span>

  <div class="tabnav-widget scope">


    <div class="select-menu js-menu-container js-select-menu js-branch-menu">
      <a class="minibutton select-menu-button js-menu-target" data-hotkey="w" data-ref="">
        <span class="octicon octicon-tree"></span>
        <i>tree:</i>
        <span class="js-select-button">8cfa074cd9</span>
      </a>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">

        <div class="select-menu-modal">
          <div class="select-menu-header">
            <span class="select-menu-title">Switch branches/tags</span>
            <span class="octicon octicon-remove-close js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-filters">
            <div class="select-menu-text-filter">
              <input type="text" id="commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Find or create a branch…">
            </div>
            <div class="select-menu-tabs">
              <ul>
                <li class="select-menu-tab">
                  <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
                </li>
                <li class="select-menu-tab">
                  <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
                </li>
              </ul>
            </div><!-- /.select-menu-tabs -->
          </div><!-- /.select-menu-filters -->

          <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket css-truncate" data-tab-filter="branches">

            <div data-filterable-for="commitish-filter-field" data-filterable-type="substring">

                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/marcelobveras/APSOO/blob/Backup/Hotel/Model/Servico.class.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="Backup" rel="nofollow" title="Backup">Backup</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/marcelobveras/APSOO/blob/Tdis/Hotel/Model/Servico.class.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="Tdis" rel="nofollow" title="Tdis">Tdis</a>
                </div> <!-- /.select-menu-item -->
                <div class="select-menu-item js-navigation-item ">
                  <span class="select-menu-item-icon octicon octicon-check"></span>
                  <a href="/marcelobveras/APSOO/blob/master/Hotel/Model/Servico.class.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="master" rel="nofollow" title="master">master</a>
                </div> <!-- /.select-menu-item -->
            </div>

              <form accept-charset="UTF-8" action="/marcelobveras/APSOO/branches" class="js-create-branch select-menu-item select-menu-new-item-form js-navigation-item js-new-item-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="3BwSQ3CVCK5lnjVy0No7ok8wOshCOk9Hc94aCdCEs1I=" /></div>

                <span class="octicon octicon-git-branch-create select-menu-item-icon"></span>
                <div class="select-menu-item-text">
                  <h4>Create branch: <span class="js-new-item-name"></span></h4>
                  <span class="description">from ‘8cfa074cd9737910e7b06ab2a7197571908c742e’</span>
                </div>
                <input type="hidden" name="name" id="name" class="js-new-item-value">
                <input type="hidden" name="branch" id="branch" value="8cfa074cd9737910e7b06ab2a7197571908c742e" />
                <input type="hidden" name="path" id="branch" value="Hotel/Model/Servico.class.php" />
              </form> <!-- /.select-menu-item -->

          </div> <!-- /.select-menu-list -->


          <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket css-truncate" data-tab-filter="tags">
            <div data-filterable-for="commitish-filter-field" data-filterable-type="substring">

            </div>

            <div class="select-menu-no-results">Nothing to show</div>

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

  </div> <!-- /.scope -->

  <ul class="tabnav-tabs">
    <li><a href="/marcelobveras/APSOO" class="selected js-selected-navigation-item tabnav-tab" data-selected-links="repo_source /marcelobveras/APSOO">Files</a></li>
    <li><a href="/marcelobveras/APSOO/commits/" class="js-selected-navigation-item tabnav-tab" data-selected-links="repo_commits /marcelobveras/APSOO/commits/">Commits</a></li>
    <li><a href="/marcelobveras/APSOO/branches" class="js-selected-navigation-item tabnav-tab" data-selected-links="repo_branches /marcelobveras/APSOO/branches" rel="nofollow">Branches <span class="counter ">3</span></a></li>
  </ul>

</div>

  
  
  


            
          </div>
        </div><!-- /.repohead -->

        <div id="js-repo-pjax-container" class="container context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:079bbd4af1001ad351bba59a1a4d7b5c -->
<!-- blob contrib frag key: views10/v8/blob_contributors:v21:079bbd4af1001ad351bba59a1a4d7b5c -->


<div id="slider">
    <div class="frame-meta">

      <p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

        <div class="breadcrumb">
          <span class='bold'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/marcelobveras/APSOO/tree/8cfa074cd9737910e7b06ab2a7197571908c742e" class="js-slide-to" data-branch="8cfa074cd9737910e7b06ab2a7197571908c742e" data-direction="back" itemscope="url" rel="nofollow"><span itemprop="title">APSOO</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/marcelobveras/APSOO/tree/8cfa074cd9737910e7b06ab2a7197571908c742e/Hotel" class="js-slide-to" data-branch="8cfa074cd9737910e7b06ab2a7197571908c742e" data-direction="back" itemscope="url" rel="nofollow"><span itemprop="title">Hotel</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/marcelobveras/APSOO/tree/8cfa074cd9737910e7b06ab2a7197571908c742e/Hotel/Model" class="js-slide-to" data-branch="8cfa074cd9737910e7b06ab2a7197571908c742e" data-direction="back" itemscope="url" rel="nofollow"><span itemprop="title">Model</span></a></span><span class="separator"> / </span><strong class="final-path">Servico.class.php</strong> <span class="js-zeroclipboard zeroclipboard-button" data-clipboard-text="Hotel/Model/Servico.class.php" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
        </div>

      <a href="/marcelobveras/APSOO/find/8cfa074cd9737910e7b06ab2a7197571908c742e" class="js-slide-to" data-hotkey="t" style="display:none">Show File Finder</a>


        <div class="commit commit-loader file-history-tease js-deferred-content" data-url="/marcelobveras/APSOO/contributors/8cfa074cd9737910e7b06ab2a7197571908c742e/Hotel/Model/Servico.class.php">
          Fetching contributors…

          <div class="participation">
            <p class="loader-loading"><img alt="Octocat-spinner-32-eaf2f5" height="16" src="https://a248.e.akamai.net/assets.github.com/images/spinners/octocat-spinner-32-EAF2F5.gif?1334862346" width="16" /></p>
            <p class="loader-error">Cannot retrieve contributors at this time</p>
          </div>
        </div>

    </div><!-- ./.frame-meta -->

    <div class="frames">
      <div class="frame" data-permalink-url="/marcelobveras/APSOO/blob/8cfa074cd9737910e7b06ab2a7197571908c742e/Hotel/Model/Servico.class.php" data-title="APSOO/Hotel/Model/Servico.class.php at 8cfa074cd9737910e7b06ab2a7197571908c742e · marcelobveras/APSOO · GitHub" data-type="blob">

        <div id="files" class="bubble">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><b class="octicon octicon-file-text"></b></span>
                <span class="mode" title="File Mode">file</span>
                  <span>92 lines (78 sloc)</span>
                <span>2.311 kb</span>
              </div>
              <div class="actions">
                <div class="button-group">
                      <a class="minibutton js-entice" href=""
                         data-entice="You must be signed in and on a branch to make or propose changes">Edit</a>
                  <a href="/marcelobveras/APSOO/raw/8cfa074cd9737910e7b06ab2a7197571908c742e/Hotel/Model/Servico.class.php" class="button minibutton " id="raw-url">Raw</a>
                    <a href="/marcelobveras/APSOO/blame/8cfa074cd9737910e7b06ab2a7197571908c742e/Hotel/Model/Servico.class.php" class="button minibutton ">Blame</a>
                  <a href="/marcelobveras/APSOO/commits/8cfa074cd9737910e7b06ab2a7197571908c742e/Hotel/Model/Servico.class.php" class="button minibutton " rel="nofollow">History</a>
                </div><!-- /.button-group -->
              </div><!-- /.actions -->

            </div>
                <div class="blob-wrapper data type-php js-blob-data">
      <table class="file-code file-diff">
        <tr class="file-code-line">
          <td class="blob-line-nums">
            <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>

          </td>
          <td class="blob-line-code">
                  <div class="highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="k">require_once</span> <span class="nv">$_SERVER</span><span class="p">[</span><span class="s2">&quot;DOCUMENT_ROOT&quot;</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;/Hotel/Model/PDOConnectionFactory.class.php&#39;</span><span class="p">;</span></div><div class='line' id='LC3'><span class="k">require_once</span> <span class="nv">$_SERVER</span><span class="p">[</span><span class="s2">&quot;DOCUMENT_ROOT&quot;</span><span class="p">]</span><span class="o">.</span><span class="s1">&#39;/Hotel/Model/model.interface.php&#39;</span><span class="p">;</span></div><div class='line' id='LC4'><span class="k">class</span> <span class="nc">Servico</span> <span class="k">implements</span> <span class="nx">model</span> <span class="p">{</span></div><div class='line' id='LC5'>	<span class="k">private</span> <span class="nv">$connection</span><span class="p">;</span></div><div class='line' id='LC6'>	<span class="k">private</span> <span class="nv">$id</span><span class="p">;</span></div><div class='line' id='LC7'>	<span class="k">private</span> <span class="nv">$nome</span><span class="p">;</span></div><div class='line' id='LC8'>	<span class="k">private</span> <span class="nv">$descricao</span><span class="p">;</span></div><div class='line' id='LC9'>	<span class="k">private</span> <span class="nv">$preco</span><span class="p">;</span></div><div class='line' id='LC10'><br/></div><div class='line' id='LC11'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">Servico</span><span class="p">(){</span></div><div class='line' id='LC12'>		<span class="nv">$con</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">PDOConnectionFactory</span><span class="p">();</span></div><div class='line' id='LC13'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connection</span> <span class="o">=</span> <span class="nv">$con</span><span class="o">-&gt;</span><span class="na">getConnection</span><span class="p">();</span></div><div class='line' id='LC14'>	<span class="p">}</span></div><div class='line' id='LC15'><br/></div><div class='line' id='LC16'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">getId</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC17'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">id</span><span class="p">;</span></div><div class='line' id='LC18'>	<span class="p">}</span></div><div class='line' id='LC19'><br/></div><div class='line' id='LC20'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">getNome</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC21'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">nome</span><span class="p">;</span></div><div class='line' id='LC22'>	<span class="p">}</span></div><div class='line' id='LC23'><br/></div><div class='line' id='LC24'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">getDescricao</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC25'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">descricao</span><span class="p">;</span></div><div class='line' id='LC26'>	<span class="p">}</span></div><div class='line' id='LC27'><br/></div><div class='line' id='LC28'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">getPreco</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC29'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">preco</span><span class="p">;</span></div><div class='line' id='LC30'>	<span class="p">}</span></div><div class='line' id='LC31'><br/></div><div class='line' id='LC32'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">setNome</span><span class="p">(</span><span class="nv">$nome</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC33'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">nome</span> <span class="o">=</span> <span class="nv">$nome</span><span class="p">;</span></div><div class='line' id='LC34'>	<span class="p">}</span></div><div class='line' id='LC35'><br/></div><div class='line' id='LC36'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">setDescricao</span><span class="p">(</span><span class="nv">$descricao</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC37'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">descricao</span> <span class="o">=</span> <span class="nv">$descricao</span><span class="p">;</span></div><div class='line' id='LC38'>	<span class="p">}</span></div><div class='line' id='LC39'><br/></div><div class='line' id='LC40'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">setPreco</span><span class="p">(</span><span class="nv">$preco</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC41'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">preco</span> <span class="o">=</span> <span class="nv">$preco</span><span class="p">;</span></div><div class='line' id='LC42'>	<span class="p">}</span></div><div class='line' id='LC43'><br/></div><div class='line' id='LC44'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">setId</span><span class="p">(</span><span class="nv">$id</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC45'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">id</span> <span class="o">=</span> <span class="nv">$id</span><span class="p">;</span></div><div class='line' id='LC46'>	<span class="p">}</span></div><div class='line' id='LC47'><br/></div><div class='line' id='LC48'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">save</span><span class="p">(){</span></div><div class='line' id='LC49'>		<span class="nv">$stmt</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connection</span><span class="o">-&gt;</span><span class="na">prepare</span><span class="p">(</span><span class="s2">&quot;INSERT INTO servico (nome, descricao, preco)</span></div><div class='line' id='LC50'><span class="s2">			VALUES (?,?,?)&quot;</span><span class="p">)</span> <span class="k">or</span> <span class="k">die</span><span class="p">(</span><span class="nb">mysql_error</span><span class="p">());</span></div><div class='line' id='LC51'><br/></div><div class='line' id='LC52'>		<span class="nv">$stmt</span><span class="o">-&gt;</span><span class="na">bindValue</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getNome</span><span class="p">());</span></div><div class='line' id='LC53'>		<span class="nv">$stmt</span><span class="o">-&gt;</span><span class="na">bindValue</span><span class="p">(</span><span class="mi">2</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getDescricao</span><span class="p">());</span></div><div class='line' id='LC54'>		<span class="nv">$stmt</span><span class="o">-&gt;</span><span class="na">bindValue</span><span class="p">(</span><span class="mi">3</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getPreco</span><span class="p">());</span></div><div class='line' id='LC55'><br/></div><div class='line' id='LC56'>		<span class="k">return</span> <span class="nv">$stmt</span><span class="o">-&gt;</span><span class="na">execute</span><span class="p">();</span></div><div class='line' id='LC57'>	<span class="p">}</span></div><div class='line' id='LC58'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">delete</span><span class="p">(){</span></div><div class='line' id='LC59'>		<span class="nv">$stmt</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connection</span><span class="o">-&gt;</span><span class="na">prepare</span><span class="p">(</span><span class="s2">&quot;DELETE FROM servico WHERE id = ?&quot;</span><span class="p">)</span> <span class="k">or</span> <span class="k">die</span><span class="p">(</span><span class="nb">mysql_error</span><span class="p">());</span></div><div class='line' id='LC60'>		<span class="nv">$stmt</span><span class="o">-&gt;</span><span class="na">bindValue</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getId</span><span class="p">());</span></div><div class='line' id='LC61'>		<span class="k">return</span> <span class="nv">$stmt</span><span class="o">-&gt;</span><span class="na">execute</span><span class="p">();</span></div><div class='line' id='LC62'>	<span class="p">}</span></div><div class='line' id='LC63'><br/></div><div class='line' id='LC64'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">SelectById</span><span class="p">(</span><span class="nv">$Id</span><span class="p">){</span></div><div class='line' id='LC65'>		<span class="nv">$stmt</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connection</span><span class="o">-&gt;</span><span class="na">prepare</span><span class="p">(</span><span class="s2">&quot;SELECT * FROM servico WHERE id = ?&quot;</span><span class="p">)</span> <span class="k">or</span> <span class="k">die</span><span class="p">(</span><span class="nb">mysql_error</span><span class="p">());</span></div><div class='line' id='LC66'>		<span class="nv">$stmt</span><span class="o">-&gt;</span><span class="na">bindValue</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="nv">$Id</span><span class="p">);</span></div><div class='line' id='LC67'>		<span class="nv">$stmt</span><span class="o">-&gt;</span><span class="na">execute</span><span class="p">();</span></div><div class='line' id='LC68'>		<span class="nv">$row</span> <span class="o">=</span> <span class="nv">$stmt</span><span class="o">-&gt;</span><span class="na">fetch</span><span class="p">();</span></div><div class='line' id='LC69'>		<span class="c1">//var_dump($row);</span></div><div class='line' id='LC70'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setId</span><span class="p">(</span><span class="nv">$row</span><span class="p">[</span><span class="s1">&#39;id&#39;</span><span class="p">]);</span></div><div class='line' id='LC71'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setNome</span><span class="p">(</span><span class="nv">$row</span><span class="p">[</span><span class="s1">&#39;nome&#39;</span><span class="p">]);</span></div><div class='line' id='LC72'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setDescricao</span><span class="p">(</span><span class="nv">$row</span><span class="p">[</span><span class="s1">&#39;descricao&#39;</span><span class="p">]);</span></div><div class='line' id='LC73'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setPreco</span><span class="p">(</span><span class="nv">$row</span><span class="p">[</span><span class="s1">&#39;preco&#39;</span><span class="p">]);</span></div><div class='line' id='LC74'>		<span class="k">return</span> <span class="nv">$row</span><span class="p">;</span></div><div class='line' id='LC75'>	<span class="p">}</span></div><div class='line' id='LC76'><br/></div><div class='line' id='LC77'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">ListAll</span><span class="p">(){</span></div><div class='line' id='LC78'>		<span class="nv">$all</span><span class="p">;</span></div><div class='line' id='LC79'>		<span class="nv">$ind</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC80'>		<span class="nv">$stmt</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connection</span><span class="o">-&gt;</span><span class="na">prepare</span><span class="p">(</span><span class="s2">&quot;SELECT * FROM servico&quot;</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="nx">PDO</span><span class="o">::</span><span class="na">ATTR_CURSOR</span> <span class="o">=&gt;</span> <span class="nx">PDO</span><span class="o">::</span><span class="na">CURSOR_SCROLL</span><span class="p">))</span> <span class="k">or</span> <span class="k">die</span><span class="p">(</span><span class="nb">mysql_error</span><span class="p">());</span></div><div class='line' id='LC81'>		<span class="nv">$stmt</span><span class="o">-&gt;</span><span class="na">execute</span><span class="p">();</span></div><div class='line' id='LC82'>		<span class="k">while</span> <span class="p">(</span><span class="nv">$row</span> <span class="o">=</span> <span class="nv">$stmt</span><span class="o">-&gt;</span><span class="na">fetch</span><span class="p">(</span><span class="nx">PDO</span><span class="o">::</span><span class="na">FETCH_NUM</span><span class="p">,</span> <span class="nx">PDO</span><span class="o">::</span><span class="na">FETCH_ORI_NEXT</span><span class="p">))</span></div><div class='line' id='LC83'>		<span class="p">{</span></div><div class='line' id='LC84'>			<span class="nv">$all</span><span class="p">[</span><span class="nv">$ind</span><span class="p">][</span><span class="s1">&#39;id&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$row</span><span class="p">[</span><span class="mi">0</span><span class="p">];</span></div><div class='line' id='LC85'>			<span class="nv">$all</span><span class="p">[</span><span class="nv">$ind</span><span class="p">][</span><span class="s1">&#39;nome&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$row</span><span class="p">[</span><span class="mi">1</span><span class="p">];</span></div><div class='line' id='LC86'>			<span class="nv">$all</span><span class="p">[</span><span class="nv">$ind</span><span class="p">][</span><span class="s1">&#39;desc&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$row</span><span class="p">[</span><span class="mi">2</span><span class="p">];</span></div><div class='line' id='LC87'>			<span class="nv">$all</span><span class="p">[</span><span class="nv">$ind</span><span class="p">][</span><span class="s1">&#39;preco&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$row</span><span class="p">[</span><span class="mi">3</span><span class="p">];</span></div><div class='line' id='LC88'>			<span class="nv">$ind</span><span class="o">++</span><span class="p">;</span></div><div class='line' id='LC89'>		<span class="p">}</span></div><div class='line' id='LC90'>		<span class="k">return</span> <span class="nv">$all</span><span class="p">;</span></div><div class='line' id='LC91'>	<span class="p">}</span></div><div class='line' id='LC92'><span class="p">}</span></div></pre></div>
          </td>
        </tr>
      </table>
  </div>

          </div>
        </div>

        <a href="#jump-to-line" rel="facebox" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
        <div id="jump-to-line" style="display:none">
          <h2>Jump to Line</h2>
          <form accept-charset="UTF-8" class="js-jump-to-line-form">
            <input class="textfield js-jump-to-line-field" type="text">
            <div class="full-button">
              <button type="submit" class="button">Go</button>
            </div>
          </form>
        </div>

      </div>
    </div>
</div>

<div id="js-frame-loading-template" class="frame frame-loading large-loading-area" style="display:none;">
  <img class="js-frame-loading-spinner" src="https://a248.e.akamai.net/assets.github.com/images/spinners/octocat-spinner-128.gif?1347543529" height="64" width="64">
</div>


        </div>
      </div>
      <div class="modal-backdrop"></div>
    </div>

      <div id="footer-push"></div><!-- hack for sticky footer -->
    </div><!-- end of wrapper - hack for sticky footer -->

      <!-- footer -->
      <div id="footer">
  <div class="container clearfix">

      <dl class="footer_nav">
        <dt>GitHub</dt>
        <dd><a href="/about">About us</a></dd>
        <dd><a href="/blog">Blog</a></dd>
        <dd><a href="/contact">Contact &amp; support</a></dd>
        <dd><a href="http://enterprise.github.com/">GitHub Enterprise</a></dd>
        <dd><a href="http://status.github.com/">Site status</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Applications</dt>
        <dd><a href="http://mac.github.com/">GitHub for Mac</a></dd>
        <dd><a href="http://windows.github.com/">GitHub for Windows</a></dd>
        <dd><a href="http://eclipse.github.com/">GitHub for Eclipse</a></dd>
        <dd><a href="http://mobile.github.com/">GitHub mobile apps</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Services</dt>
        <dd><a href="http://get.gaug.es/">Gauges: Web analytics</a></dd>
        <dd><a href="http://speakerdeck.com">Speaker Deck: Presentations</a></dd>
        <dd><a href="https://gist.github.com">Gist: Code snippets</a></dd>
        <dd><a href="http://jobs.github.com/">Job board</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Documentation</dt>
        <dd><a href="http://help.github.com/">GitHub Help</a></dd>
        <dd><a href="http://developer.github.com/">Developer API</a></dd>
        <dd><a href="http://github.github.com/github-flavored-markdown/">GitHub Flavored Markdown</a></dd>
        <dd><a href="http://pages.github.com/">GitHub Pages</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>More</dt>
        <dd><a href="http://training.github.com/">Training</a></dd>
        <dd><a href="/edu">Students &amp; teachers</a></dd>
        <dd><a href="http://shop.github.com">The Shop</a></dd>
        <dd><a href="/plans">Plans &amp; pricing</a></dd>
        <dd><a href="http://octodex.github.com/">The Octodex</a></dd>
      </dl>

      <hr class="footer-divider">


    <p class="right">&copy; 2013 <span title="0.10210s from fe13.rs.github.com">GitHub</span>, Inc. All rights reserved.</p>
    <a class="left" href="/">
      <span class="mega-octicon octicon-mark-github"></span>
    </a>
    <ul id="legal">
        <li><a href="/site/terms">Terms of Service</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
    </ul>

  </div><!-- /.container -->

</div><!-- /.#footer -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
          <div class="suggester-container">
              <div class="suggester fullscreen-suggester js-navigation-container" id="fullscreen_suggester"
                 data-url="/marcelobveras/APSOO/suggestions/commit">
              </div>
          </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped leftwards" title="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped leftwards"
      title="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      Something went wrong with that request. Please try again.
      <a href="#" class="octicon octicon-remove-close ajax-error-dismiss"></a>
    </div>

    
    <span id='server_response_time' data-time='0.10256' data-host='fe13'></span>
    
  </body>
</html>

