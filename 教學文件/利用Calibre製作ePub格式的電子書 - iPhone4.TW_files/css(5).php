@charset "UTF-8";
/* CSS Document */


.scrollToTop{
	width:40px; 
	height:160px;
	padding:10px; 
	text-align:center; 
	background: whiteSmoke;
	font-weight: bold;
	color: #444;
	text-decoration: none;
	position:fixed;
	top:80%;
	right:40px;
	display:none;
	background: url('/forums/gif/Arrow_Up3.png') no-repeat 0px 20px;
}
.scrollToTop:hover{
	text-decoration:none;
}


#forums {
	clear:both;
}

.forumhead {
	background: #617b20 url(images/buttons/newbtn_middle.png) repeat-x  ;
	_background-image: none;
	padding: 0;
	font:  bold 12px "Helvetica Neue", Helvetica, Arial, sans-serif;
	color:#ffffff;
	clear:both;
	margin-top: 8px;
	float: left;
	border: 1px solid #577415;
	width: 100%;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-topleft: 5px;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
}

#forums .L1 .forumhead a {
	font:   bold 12px "Helvetica Neue", Helvetica, Arial, sans-serif;
}

#forums .L1 .forumhead .forumdescription {
	display:none;
}

#forums .L1 .L2 {
	display:block;
	clear: both;
}

#forums a.username {
	color: #15315f;
}

#forums a.username:hover {
	color: #750000;
}

.forumbit_post .forumrow, .forumbit_nopost .forumhead, .forumbit_nopost .forumrow, .forumbit_post .forumhead, .forumbits .forumhead {
	-moz-box-shadow: -2px 2px 2px #c8c8c8;
	-webkit-box-shadow: -2px 2px 2px #c8c8c8;
	box-shadow: -2px 2px 2px #c8c8c8;
}

.forumbit_nopost .forumbit_nopost .forumrow, .forumbit_post .forumrow {
	background: rgb(255, 255, 255) url(images/gradients/grey-up.png) repeat-x left bottom;
	_background-image: none;
	display:block;
	width: 100%;
	float: left;
	min-height: 58px; /* 48px is the icon size */
	position:relative;
	border-bottom: 1px solid #d3dadb;
	border-left: 1px solid #d3dadb;
	border-right: 1px solid #d3dadb;
}

.forumbit_nopost .forumbit_nopost .forumrow .forumicon {
	position: absolute;
	left: 10px;
	top: 5px;
	width: 48px;
}

.forumbit_nopost .forumbit_nopost .forumrow .forumdata {
	display: inline-block;
	width:100%;
}

.forumbit_nopost .forumbit_nopost .forumrow .forumdata .datacontainer {
	margin-left: 68px;
}

.forumbit_nopost .forumbit_post .forumrow .forumdata .datacontainer {
	margin-left: 0;
}

/* forumbit nopost */
.forumbit_post .foruminfo .forumdata {
	padding: 4px 0;
	font-size: 12px;
}

.forumbit_nopost .forumhead .forumtitle {
	font-size: 13;
	min-width: 76%;
}

.forumbit_nopost .forumhead .forumtitle a {
	color: #ffffff;
	margin-left: 10px;
}

.forumbit_nopost .forumhead span, .forumbit_post .forumhead span {
	font-size: 12px;
}

.forumbit_nopost .forumhead span.forumlastpost, .forumbit_post .forumhead span.forumlastpost {
	width: 21%;
}

.forumbit_nopost .forumhead a.collapse img {
/* values are based on the image */
	position:absolute;
	top: -15px;
	right: -6px;
	display:block;
	width:13px;
	height:13px;
	overflow:hidden;
	float: right;
	clear: left;
}

.forumbit_nopost:hover .forumhead  a.collapsegadget {
	visibility:visible;
}

.forumbit_nopost .forumbit_nopost .forumrow .forumdata, .forumbit_post .forumrow .forumdata  {
	padding: 5px 10px;
	padding-left: 0;
	font-size: 12px;
}

.forumbit_nopost .forumbit_nopost .foruminfo .subforums {
	margin-left: 10px;
	position: relative;
	top: -10px;
}

/* forumbit post */
.forumbit_post {
	float: left;
	position:relative;
	width: 100%;
	display:block;
}

.forumbit_post .forumhead span {
	padding: 0;
}

.forumbit_post .forumhead .forumlastpost {
	top: 0;
	margin-top: 0;
}

.forumbit_post .foruminfo, .forumbit_post .forumlastpost, .forumbit_post .forumactionlinks, .forumbit_post .forumstats, .forumbit_post .forumstats_2{
	padding: 5px 0;
}

.forumbit_post .forumhead .forumtitle {
	width: 76%;
}

.forumbit_post .forumhead .forumtitle span {
padding: 0;
padding-left: 10px;
}

.forumbit_post .foruminfo {
	width: 57%;
	min-width: 30%;
	float: left;
	clear: right;
	min-height: 48px; 
}

.forumbit_post .foruminfo .forumicon{
	position: absolute;
	left: 10px;
	width: 48px;
}

.forumbit_post .foruminfo .forumdata, .forumbit_post .foruminfo .forumtitle, .forumbit_post .foruminfo .viewing {
	float: left;
	clear: right;
	color: #4e4e4e;
}

.forumbit_post .foruminfo .viewing {
        white-space:nowrap;
}

.forumbit_post .foruminfo .forumdata {
	padding: 0;
	width: 100%;
	_width: 99%;
}

.forumbit_post .foruminfo .forumdata .datacontainer {
	float: left;
	width: 88%;
	padding-left: 68px;
}

.forumbit_post .foruminfo .forumdata .forumtitle, .forumbit_nopost .forumbit_nopost .forumrow .forumtitle {

	font-size: 13px;
	margin-right: 10px;

}

.forumbit_post .foruminfo .forumdata .forumtitle a, .forumbit_nopost .forumbit_nopost .forumrow .forumtitle a {
	font-weight:bold;
}

.childsubforum .forumbit_post .foruminfo .forumdata .datacontainer .forumtitle a {
        padding-left:1.8em;
        background:url('images/styles/lifeElement/misc/child_forum.png') top left no-repeat;
}

.forumbit_post .foruminfo .forumdata .viewing {
	font-style: italic;
	margin-right:10px;
	margin-top: 3px;
	font-size: 11px;
}

.forumbit_post .forumactionlinks {
	width: 5%;
	display:block;
	float:left;
	clear:right;
}

.forumbit_post .forumactionlinks li {
	display: inline;
}

.forumbit_post .forumactionlink {
/* values based on icon size */
	display:block;
	width:18px;
	height:12px;
	overflow:hidden;
	float: right;
	clear: left;
	background:transparent none no-repeat;
	position: relative;
	margin: 3px 10px 0 0;
}

.forumactionlink a {
/* values based on icon size */
	display:block;
	padding-left:18px;
}

.forumactionlinks .rsslink {
	background-image:url(images/styles/lifeElement/misc/rss_40b.png);
}

.forumactionlinks .subslink {
	background-image:url(images/styles/lifeElement/misc/subscribed_40b.png);
}
.forumactionlinks .unsubslink {
	background-image:url(images/styles/lifeElement/misc/unsubscribed_40b.png);
}
.forumbit_post .forumdescription {
	display:block;
	clear:both;
	padding-right: 10px;
}

.forumbit_post .unsubscribe {
	display:block;
	right: 0;
	top: 2px;
}

.forumbit_post .forumstats, .forumbit_post .forumstats_2 {
	display: block;
	float: left;
	clear: right;
	width: 12%;
	margin-right: 2%;
}

.forumbit_post .forumstats li, .forumbit_post .forumstats_2 li{
	font-size: 12px;
	text-align: right;
	padding-right: 20px;
	display:block;
}


.forumbit_post .forumlastpost {
	display:block;
	float: left;
	clear: right;
}

.forumbit_post .forumrow .forumlastpost {
	width: 22%;
	font-size: 12px;
	padding-top: 5px;
}

.forumbit_post .forumlastpost .lastpostdate {
	font-size: 12px;
}

.lastpostlabel { 
	display: none; 
}

.moderators, .subforums {
	display: block;
	clear:both;
}

.moderators h4, .subforums h4 {
	font-weight: bold;
	padding-right: 5px;
}

.moderators h4, .moderators .commalist, .subforums h4, .subforums .commalist {
	float:left;
	clear:right;
}

/* Project Tools Forum Display */
.forumstats dt {
	display: inline;
	margin-right: 0;
}

.forumstats dl {
	color: #4d5153;
	font-size: 12px;
	display: block;
	text-align: right;
}

.forumstats dd {
	display: inline-block;
	padding-left: 10px;
	padding-right: 20px;
}

.forumstats dt:after {
	content:":";
}


/* CSS Document */

#forums {
width: 100%;
}

#welcomemessage {
	color:#4d5153;
	font-size:100%;
}

.forumhead + .childforum .L2:first-child .forumrow, .forumhead + .L2 .forumrow {
	background: rgb(255, 255, 255) url(images/gradients/grey-up.png) repeat-x left bottom;
	_background-image: none;
	border-top: 0;
}

/* forumbit nopost */
/* forumbit nopost -> forumhead */
.forumbit_nopost .forumhead .forumtitle, .forumbit_nopost .forumhead span, .forumbit_nopost .forumhead .collapse, .forumbit_post .forumhead h2 span {
	display:block;
	float: left;
	clear: right;
	font:   bold 12px "Helvetica Neue", Helvetica, Arial, sans-serif;
	padding: 4px 0;
	color: #ffffff;
}

.forumbit_nopost .forumhead h2, .forumbit_post .forumhead h2 {
	margin-left: 3px;
	margin-right: 3px;
}
.forumbit_nopost {
	clear:left;
}
.forumbit_nopost .forumrowdata {
	clear:both;
	display:block;
	width: 100%;
}

.forumbit_nopost .subforumdescription {
	padding: 5px 10px;
	font-weight: normal;
	color: #3e3e3e;
	background: #e9e9e9 none repeat-x  ;
}

#collapse_wgo_members_list {
	top: 12px;
}


/* CSS Document */

/*widget*/

.widget_content {
	color: #4d5153;
	-moz-border-radius:5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	background:rgb(255, 255, 255) url(images/gradients/gradient-black-down.png) repeat-x  ;
	border:1px solid #a8b6c6;
	_background-image: none;
	padding:10px 6px 10px 6px;
}

.widget_content a {
	color: #15315f;
}

.widget_content a:hover {
	color: #750000;
}

.widget_content .meta {
	font-size:11px;
}

.widget_content .meta.activitystream {
	word-wrap: break-word;
}

.widget_post_bit {
	border-top: 1px dotted #C9C9C9;
	clear:both;
	padding-bottom: 2px;
}

.cms_widget.activitystream .widget_post_bit,
ul.activitystream .widget_post_bit {
	min-height: 35px;
}

.widget_post_bit:first-child {
	border-top: 0;
}

.widget_post_header {
	font:  bold 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	padding: 5px 0;
	margin: 0;
}

.widget_post_header a {
	word-wrap: break-word;
	width: 100%;
	display: block;
}

.widget_post_content {
	padding: 1px 0;
	margin: 0;
	font-size: 12px;
	color: #4d5153;
}

.widget_post_userinfo {
	padding: 1px 0;
	margin: 0;
	position: relative;
}

.widget_post_useravatar {
	position: absolute;
	top: 5px;
	left:0;
}

.cms_widget .widget_post_useravatar img,
.block .widget_post_useravatar img {
	width: 30px;
	max-width: 30px !important;
	height: auto;
}

.widget_post_comment {
	margin-left: 40px;
	font-size: 11px;
}

.widget_post_comment_noavatar {
	margin-left: 0;
	font-size: 12px;
}

.widget_post_comment .widget_post_content {
	overflow: hidden;
}

.widget_views {
	padding: 1px 0;
	margin: 0;
	text-align: right;
}


/* CSS Document */
/* this might need to get renamed */
/* wgo */
.wgo_block {
	display:block;
	margin-top: 15px;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-topleft: 5px;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
	-moz-box-shadow: -2px 2px 2px #c8c8c8;
	-webkit-box-shadow: -2px 2px 2px #c8c8c8;
	box-shadow: -2px 2px 2px #c8c8c8;
	margin-bottom: 10px;
}

.wgo_block .blockbody {
	border: 1px solid #d3dadb;
	background: rgb(255, 255, 255) url(images/gradients/gradient-greytowhite.png) repeat-x  ;
	_background-image: none;
}

.wgo_block .blockhead {
	font-size:12px;
	font-weight:bold;
	color: #fff;
	background: #475567 url(images/buttons/newbtn_middle.png) repeat-x  ;
	_background-image: none;
	border: 1px solid #18202c;
}

.wgo_block .time {
	color: #3e3e3e;
}

.wgo_block .section {
	display:block;
	padding: 0 0 0.5em;
	font:    12px ;
	color: #3e3e3e;
	clear:both;
	width: 100%;
}

.wgo_block .blocksubhead {
	padding-left: 10px;
	font: 13px;
	color: #3e3e3e;
	background: transparent;
	padding-bottom: 5px;
}

.wgo_block .section:first-child .blocksubhead {
	border-top: 0;
}

.wgo_block .section .blocksubhead img {
	padding-right: 5px;
}

.wgo_block .section div, .wgo_block .section ol {
	padding-left: 20px;
}

.wgo_block .section div p {
	padding-bottom: 5px;
}

.wgo_block .section div ol {
	padding-left: 0;
}

.wgo_block .section dl dt {
	display:inline;
}

.wgo_block .section dl dt:after {
	content:":";
}

.wgo_block .section dl dd {
	display: inline;
	margin-right:5px;
}

.wgo_block .section dl.icon_legends dt {
	float: left;
	clear: right;
	margin-right: 5px;
}

.wgo_block .section dl.icon_legends dt:after {
	content: "";
}

.wgo_block .section dl.icon_legends dd {
	margin-bottom: 5px;
	display:block;
}

#wgo_onlineusers .commalist li {
	margin-left: 1px; 
}

#wgo_birthdays .commalist li { 
	margin-left: 1px; 
}

.forum_info {
	margin-bottom: 5px;
	float: left;
	width: 100%;
	clear:both;
	position: relative;
	top: -10px;
	color: #3e3e3e;
	font:    12px ;
}

.forum_info .blockhead {
	font-size:12px;
	font-weight:bold;
	color: #fff;
	background: #475567 url(images/buttons/newbtn_middle.png) repeat-x  ;
	_background-image: none;
	border: 1px solid #18202c;
	margin-top: 5px;
	-moz-box-shadow: -2px 0 2px #c8c8c8;
	-webkit-box-shadow: -2px 0 2px #c8c8c8;
	box-shadow: -2px 0 2px #c8c8c8;
}

.forum_info a.collapse {
	position: absolute;
	top: 6.88px;
}

.forum_info .blockbody {
	border-bottom: 1px solid #d3dadb;
	border-left: 1px solid #d3dadb;
	border-right: 1px solid #d3dadb;
	background: rgb(255, 255, 255) url(images/gradients/gradient-greytowhite.png) repeat-x  ;
	_background-image: none;
	-moz-box-shadow: -2px 2px 2px #c8c8c8;
	-webkit-box-shadow: -2px 2px 2px #c8c8c8;
	box-shadow: -2px 2px 2px #c8c8c8;
}

.forum_info_subblock, .info_subblock {
	padding: 5px 10px;
}

.forum_info_form .options_input_wrapper {
	float: right;
	display: inline-block;
}

.forum_info_form .options_input_block {
	float: left;
	display:inline-block;
	padding: 10px 10px;
}

.forum_info_form .options_input_block .description {
	display: none;
}

.forum_info_form .options_input_block label {
	display:block;
}

.forum_info_form .options_input_block .checkradio li {
	display:inline-block;
	margin-right: 10px;
}

.forum_info_form .options_input_block .button {
	position: relative;
	margin-top: 15.99px;
}

.forum_info .options_block_container, .thread_info .options_block_container {
	width: 100%;
	float: left;
	display:block;
	position: relative;
	top: 0;
	padding-top:0;
	margin-top: 0;
}

.forum_info .options_block, .thread_info .options_block, .forum_info .options_block2, .thread_info .options_block2 {
	width: 49%;
	padding-right: 0.5%;
	float: left;
	clear: right;
	position: relative;
}


.forum_info .options_block .options_correct, .thread_info .options_block .options_correct, 
.forum_info .options_block2 .options_correct, .thread_info .options_block2 .options_correct {
margin-right:-1.1%;
}

.forum_info .options_block2 {
	margin-left: 1%;
}

.thread_info .options_block2 {
	margin-right: 1%;
}

dl.icon_legends dt {
	float: left;
	clear: right;
	margin-right: 5px;
}

dl.icon_legends dt:after {
	content: "";
}

dl.icon_legends dd {
	margin-bottom: 5px;
	display:block;
}

.info_subblock ul li {
	margin-bottom: 2px;
}

.bbcodeblock ul li a, .rules_link a {
	font-weight:bold;
}


.thread_info {
	margin-bottom: 5px;
	float: left;
	width: 100%;
	clear:both;
	position: relative;
	top: -10px;
	margin-bottom: 0;
	color: #3e3e3e;
	font:    12px ;
}

.thread_info a {
	font-weight:;
}

.thread_info h4 {
	font-size:12px;
	font-weight:bold;
	color: #fff;
	background: #475567 url(images/buttons/newbtn_middle.png) repeat-x  ;
	_background-image: none;
	border: 1px solid #18202c;
	margin-top: 5px;
	-moz-box-shadow: -2px 2px 2px #c8c8c8;
	-webkit-box-shadow: -2px 2px 2px #c8c8c8;
	box-shadow: -2px 2px 2px #c8c8c8;
}

.thread_info h5 {
	display: none;
}

.thread_info .blockbody {
	border-bottom: 1px solid #d3dadb;
	border-left: 1px solid #d3dadb;
	border-right: 1px solid #d3dadb;
	background: rgb(255, 255, 255) url(images/gradients/gradient-greytowhite.png) repeat-x  ;
	_background-image: none;
	-moz-box-shadow: -2px 2px 2px #c8c8c8;
	-webkit-box-shadow: -2px 2px 2px #c8c8c8;
	box-shadow: -2px 2px 2px #c8c8c8;
}

.thread_info .inner_block, .info_subblock {
	padding: 4px 10px;
}

ul.icon_list li {
	display:block;
	width: 100%;
	margin-bottom: 5px;
}

.inner_block .commalist {
	margin-top: 5px;
}

#thread_info_block_1 {
	width:34.9%;
	float:left;
}

#thread_info_block_1 > * {
	margin-right:2px;
}

#thread_info_block_2 {
	width:65%;
	float:right;
}

#forumrules {
	border: 0;
	background: transparent;
}

/* Similar Threads */
.similar_threads {
	clear:both;
}

.similar_threads li {
	padding:5px 10px 5px 10px;
}

ol.similar_threads li h6 a {
	font:    12px ;
}

.similar_threads .starter_forum {
	font-size:12px;
}

.similar_threads .titleblock {float:left}
.similar_threads .dateblock {float:right; text-align:right}



a.tagcloudlink:link, a.tagcloudlink:visited {
	text-decoration:none;
}

a.tagcloudlink:hover,
a.tagcloudlink:active {
	text-decoration:underline;
}

a.level1 {
	font-size: 9px;
}

a.level2 {
	font-size: 12px;
}

a.level3 {
	font-size: 15px;
}

a.level4 {
	font-size: 18px;
}

a.level5 {
	font-size: 21px;
}

#tag_searchbox {
	text-align: center; padding: 6px;
}

#tag_search {
	margin-top:10px;
}


/* CSS Document */

/**
* Custom CSS by Forumthemes.com
*/

/************************************************************************/
*{ -moz-box-shadow: none !important; -webkit-box-shadow: none !important; }

#forums *, #wgo *, #forumbits * {
	-moz-border-radius: 0 !important;
	-webkit-border-radius: 0 !important;
}
.wgo_block {
	margin:0;
}
#fb_headerbox {
	padding-right:5px;
}
.cvb_facebook {
padding-top:2px;
}
.navbar {
	-moz-border-radius-bottomleft: 0 !important;
	-moz-border-radius-bottomright: 0 !important;
	-webkit-border-bottom-left-radius: 0 !important;
	-webkit-border-bottom-right-radius: 0 !important;
}
.announcements {
	margin-top:10px;
}
.highlight {
	background-image:none;
}
.navlinksBox {
	text-align: center;
	color: #5d5d5d;
	font-size: 11px;
        font-weight:700;
        margin-top: 8px;
        margin-bottom: 0;
        width:100%;
        clear:both;
}
.navlinksBoxWrap {
	padding: 10px 0;
}
.bodyWrap {
	background:#fff;
	margin:0 2px;	
}
.body_wrapper {
	padding:10px 0;
	margin:0;
}
.above_body {
	padding:0;
	margin:0;
}
.threadbit .sticky, .threadbit .nonthread, .threadbit .nonsticky, .threadbit .deleted, .threadbit .discussionrow, .threadbit .ignored {
	border-top:0;
}
.popupbody li > a,
.popupbody li > label {
	padding:8px 10px;
}
.formsubmit label {
	color:#3E3E3E;
}
.memberBox .toplinks ul.isuser .popupbody li {
	color:#3E3E3E;
}
.loginLeft #fb_loginbtn {position:relative;top:4px;}
.toplinks #fb_loginbtn {position:relative;top:2px;}
.popupbody li > a,
.popupbody li > label {
	padding:8px 10px;
}
#memberlist #searchstats {color:#fff;}

.popupbody li > a,
.popupbody li > label {
	background:#fff;
}
.block .searchlisthead, .block .searchlisthead a {
color:#fff;
}
.forumdescription {
padding-top:3px;
}
/* Misc Resets
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
img {
	border:0;
}
.verticalAlign {
	vertical-align:middle;
}
.clearfix:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
.clearfix {
	display: inline-block;
}
html[xmlns] .clearfix {
	display: block;
}
* html .clearfix {
	height: 1%;
}
.lastPostIMG {
	position:relative;
	top:2px;
}

/* Page Wrapper
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/

body {
	width:1340px;
	min-width:1340px;
	max-width:1340px;
	margin-left: auto;
	margin-right: auto;
	background: #E6EAEF url(http://static.iphone4.tw/forums/images/styles/lifeElement/style/pageBG.gif) repeat-x left top;
	
} /* 網頁整體置中，在這裡改 additional.css*/


#pageWrapper, .pageWrap {
	width:1310px;
	margin: auto  auto;
}
.pageTop, .pageWrap {
	padding:0 4px;
}
.pageWrap {
	position:relative;
}

/* Top Bar
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#topBar {
  background-image: url(images/spriteme2.png);
  background-position: 0px -10px;
	height:47px;
}
.searchBox {
  background-image: url(images/spriteme1.png);
  background-position: -10px -103px;
background-repeat: no-repeat;
float:left;
	height:31px;
	padding-left:33px;
	position:absolute;
	top:5px;
	left:2px;
z-index:3000;
}
.searchBox ul {
	list-style:none;
	padding:0;
	margin:0;
}
.searchBox li {
	float:left;
	margin:0;
	padding-right:7px;
}
.searchInputBox {
  background-image: url(images/spriteme1.png);
  background-position: -10px -10px;
	width:186px;
	height:31px;
	float:left;
}
.searchInput {
	background:transparent;
	border:0;
	color: #959595;
	padding:0 8px;
	width:170px;
	height:31px;
	line-height:31px;
	margin:0;
}
.registerButton {
	position:absolute;
	top:7px;
	right:5px;
}

/* Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.above_body {
	background:none;
}
.doc_header {
   /*background:url(images/styles/lifeElement/style/headerBG_left.jpg) no-repeat top left;*/
   height:114px;
   position:relative;
}
#logo {
	position:absolute;
	top:0;
	left:0;
}

#logo-banner728x112 {
	position: relative;
	left: 381px;
	top: 0px;
}

#logo-banner728x90 {
	position: relative;
	left: 381px;
	top: 16px;
}


#memberBox {

	padding:11px 0 0 4px;

	float:right;
	color:#333f4d;
}
#memberBox h3 {
	padding:0 0 4px 0;
	margin:0;
	color:#333f4d;
	font-size:15px;
	font-weight:700;
	text-transform:uppercase;
}
.memberBox {
  background-image: url(images/spriteme2.png);
  background-position: 0px -77px;
	height:94px;	
}
.memberBoxLeft {
  background-image: url(images/spriteme1.png);
  background-position: -10px -154px;
  background-repeat:no-repeat;
height:95px;
}
.memberBoxRight {
  background-image: url(images/spriteme1.png);
  background-position: 246px -268px;
  background-repeat:no-repeat;
	padding:10px 14px;	
height:95px;
}
#memberBox ul {
	list-style:none;
	padding:0;
	margin:0;
}
#memberBox li {
	float:left;
}
.memberBox {
	float:left;
}
.memberBox ul {
	list-style:none;
	padding:0;
	margin:0;
}
.memberBox li {
	float:left;
}


.LoginBox {
	width: 740px;
	position: absolute;
	top: 5px;
	left: 380px;
	height:35px;
}

.LoginBox a{
	color:white;
	text-decoration: none;
}

.LoginBox a:hover{
	color:red;
	text-decoration: none;
}


.LoginBox ul{
	list-style-position: outside;
	list-style-type: none;
}

.LoginBox li{
	color: white;
	font-size: 16px;
	list-style-position: outside;
	list-style-type: none;
	float: left;
	padding-top: 5px;
	padding-right: 5px;
}


.loginBoxInput2 {
	background: url(images/login-bg.jpg) no-repeat;
	padding-left: 5px;
	top: -5px;
	position: relative;
	height: 30px;
	padding-top: 3px;
}

.loginBoxInput {
  background-image: url(images/spriteme1.png);
  background-position: -10px -61px;
	width:116px;
	height:22px;
}
.loginInput {
	background:transparent;
	border:0;
	color: #a7a7a7;
	height:22px;
	line-height:22px;
	width:100px; 
	font-size:12px;
	margin:0;
	padding:0 5px;
}
.cb_cookieuser_navbar{
	position: relative;
	top: 2px;
}
.inputPad .loginBoxInput {

}
.inputPad {
	padding-right:6px;
}
#memberBox label {
	padding:0;
	padding:0;
}
.memberBottom {
	height:16px;
	position:relative;
}
.rememberMe {
	position:absolute;
	top:5px;
	left:3px;
}
.submitButton {
	position:absolute;
	top:6px;
	right:0;
}

/* Welcome Box
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#welcomeBox {
	background:#131a23 url(images/styles/lifeElement/style/welcomeBoxBG.gif) repeat-x left top;
	border:1px solid #040404;
	padding:18px 20px;
}
.welcomeBoxBottom {
	background: url(images/styles/lifeElement/style/welcomeBoxBottomBG.gif) repeat-x left top;
	height:7px;
	font-size:0;
	margin-bottom:5px;
}
.welcomeBoxBL {
	background:url(images/styles/lifeElement/style/welcomeBoxBL.gif) no-repeat top left;
	height:7px;
}
.welcomeBoxBR {
	background:url(images/styles/lifeElement/style/welcomeBoxBR.gif) no-repeat top right;
	height:7px;
}
#welcomeBox h2 {
	padding:0 0 8px 0;
	margin:0;
	font-size:15px;
	font-weight:700;
	color:#fff;
	text-transform:uppercase;	
}
#welcomeBox p {
	padding:0;
	margin:0;
	color:#bcc0c4;
	line-height:18px;
}
#welcomeBox a:link, #welcomeBox a:visited {
	color:#4c85b2;
	font-weight:700;
}
#welcomeBox a:hover {
	color:#ef9507;
}

/* Content
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#contentMain {
	background:#fff url(images/styles/lifeElement/style/contentTopBG.gif) repeat-x top left;
	margin-bottom:7px;
}
.contentWrap {
	background:url(images/styles/lifeElement/style/contentBottomBG.gif) repeat-x bottom left;
}
.contentLeft {
	background:url(images/styles/lifeElement/style/contentLeft.gif) repeat-y top left;
}
.contentRight {
	background:url(images/styles/lifeElement/style/contentRight.gif) repeat-y top right;
}
.contentTL {
	background:url(images/styles/lifeElement/style/contentTL.gif) no-repeat top left;
}
.contentTR {
	background:url(images/styles/lifeElement/style/contentTR.gif) no-repeat top right;
}
.contentBL {
	background:url(images/styles/lifeElement/style/contentBL.gif) no-repeat bottom left;
}
.contentBR {
	background:url(images/styles/lifeElement/style/contentBR.gif) no-repeat bottom right;
}
.contentBodyWrap {
	padding:23px 17px;
}

/* Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#footerNav {
	background:url(images/styles/lifeElement/style/footerNavBG.gif) repeat-x bottom left;
}
.footerNavLeft {
	background:url(images/styles/lifeElement/style/footerNavLeft.gif) no-repeat bottom left;
}
.footerNavRight {
	background:url(images/styles/lifeElement/style/footerNavRight.gif) no-repeat bottom right;

	padding:5px 23px 13px 0;

}
#footerNav ul {
	list-style:none;
	padding:0;
	margin:0;
}
#footerNav li {
	float:left;
	height:32px;
	line-height:32px;
	font-weight:700;
	font-size:15px;
	padding:0 21px;
}
#footerNav a:link, #footerNav a:visited {
	color:#333f4d;
}
#footerNav a:hover {
	color:#890000;
}
#footerLogo {
	float:right;
}
#footerMain {
	padding:15px 21px;
}
#footerMain .copyright {
	color:#435162;
}
#footerMain .copyright a:link, #footerMain .copyright a:visited {
	color:#435162;
	font-weight:700;
}
#footerMain .copyright a:hover {
	color:#ed8a06;
}
a:link.backTop, a:visited.backTop {
  background-image: url(images/spriteme1.png);
  background-position: 75px -671px;
	float:right;
	color:#435162;
	font-weight:700;
	padding-right:16px;
	text-transform:uppercase;
}
a:hover.backTop {
	color:#ed8a06;
}

/* Navbar
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.navbar {
  background-image: url(images/spriteme2.png);
  background-position: 0px -191px;
	position:relative;
	height:79px;
	font:   12px "Trebuchet MS", Verdana, sans-serif;
	color:#005393;
	width:100%;
	padding:0;
	margin:0;
}
.navLeft {
  background-image: url(images/spriteme1.png);
  background-position: -10px -382px;
	height:79px;
}
.navRight {
  background-image: url(images/spriteme1.png);
  background-position: 872px -481px;
	height:79px;
	padding:0 6px;
}
#navtabs li.selected ul.floatcontainer {
	margin-top:5px;
}
#navtabs li.selected ul.floatcontainer a:link, #navtabs li.selected ul.floatcontainer a:visited {
	line-height:27px;
	height:27px;
}
.navbar a { color:#005393; }
.navbar a:hover { color:#1e3648; }

.navtabs ul li:first-child {
	text-indent: 0;
	margin-left:15px;
}
.navtabs {
	padding-left:0;
}
.navtabs ul {
	position:absolute;
	top:44px;
	left:0px;
	width:100%;
/* This is to fix RTL menu issue under Opera */
        direction:ltr;
}
.navtabs li {
	float:left;
	padding-right:2px;
	background:url(images/styles/lifeElement/style/navSplit.gif) no-repeat top right;
}
.navtabs li li {
	background:none;
}

.navtabs ul li {
	border-right: 0;
	position: relative;
}
.navtabs li a {
	height:44px;
	line-height:44px;
}
.navtabs li a.navtab {
	display:block;
	min-width:60px;
	width:auto !important;
	width:60px;
	_min-width:75px;
	_width:auto !important;
	_width:75px;
	text-align:center;
	color:#005393;
	font:  bold 15px arial, helvetica, sans-serif;
	text-decoration:none;
	line-height:41px;
	height:41px;
	padding:2px 15px 0 15px;
}
.navtabs li a.navtab:hover {
	background:#1f2b3a url(images/styles/lifeElement/style/navBG_hover.gif) repeat center top;
	color:#1e3648;
}
.navtabs li.selected {
	color:#1e3648;
	height:44px;
}
.navtabs li.selected a.navtab {
	color:#1e3648;
	position:relative;
	top:-px;
	padding-top:px;
	z-index:10;
}
.navtabs li.selected li a,
.navbar_advanced_search li a {
	text-decoration:none;
	font:   12px "Trebuchet MS", Verdana, sans-serif;
	line-height:27px;
}
.navtabs li.selected li {
	padding:0 5px;
}
.navtabs li.selected li li {
	padding:0 2px;
}
.navtabs li.selected li a {
	color:#d5d9ff;
	font-weight:400;
	padding:2px 5px;
}

.navbar_advanced_search li {
	height:27px;
	display:block;
	clear:both;
}

.navbar_advanced_search li a {
	color:#005393;
}

.navbar_advanced_search li a:hover {
	color:#1e3648;
	text-decoration:none;
}

.navtabs li.selected li a:hover {
	color:#fff;
	text-decoration:none;
}

.navtabs li.selected .popupbody li > a {
	padding:0pxpx 10px;
	text-indent: 0;
	color: rgb(0, 0, 0);
}

.navtabs li.selected li a.popupctrl {
	-moz-border-radius:3px;
	-webkit-border-radius:3px;	
	border:solid 1px transparent;
	_border: none;
	background:transparent url(images/styles/lifeElement/misc/arrow.png) no-repeat right center;
	padding-right:15px;
        _background-image:url('images/styles/lifeElement/misc/arrow.gif');
	color:#d5d9ff;
}

.navtabs li.selected li:hover a.popupctrl.active,
.navtabs li.selected li a.popupctrl.active,
.navtabs li.selected li a:hover.popupctrl {
	color:#fff;
}

/* Breadcrumb
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.breadcrumb {
	height:38px;
	position:relative;
	color:#4b5a6c;
	font-weight:700;
	margin-bottom:6px;
	
} /* 頁面上方導航列 */
.bcLeft {
  background-image: url(images/spriteme1.png);
  background-position: -10px -570px;
background-repeat:no-repeat;
	height:38px;
}
.bcRight {
  background-image: url(images/spriteme1.png);
  background-position: 866px -618px;
background-repeat:no-repeat;
	height:38px;
	padding:0px 16px 0px 16px;
}
.bcBody {
  background-image: url(images/spriteme2.png);
  background-position: 0px -280px;
	height:32px;
	padding-top:6px;
}
.breadcrumb .navbit > a, .breadcrumb .lastnavbit span {
	border:1px solid transparent;
}
.breadcrumb .navbit a:link, .breadcrumb .navbit a:visited {
	font-weight:400;
	color:#4b5a6c;
}
.breadcrumb .navbit a:hover {
	background:#4b5a6c;
	color:#fff;
	border:1px solid transparent;
}

#breadcrumb .searchBoxMain {
	position:absolute;
	top:13px;
	right:6px;
	float:right;
}
#breadcrumb .searchText {
	line-height:26px;
}
#breadcrumb .searchBoxMain ul {
	list-style:none;
	padding:0;
	margin:0;
}
#breadcrumb .searchBoxMain li {
	float:left;
	margin:0;
	padding:0 7px 0 0;
	color:#393939;
}
#breadcrumb .searchInputBox {
  background-image: url(images/spriteme1.png);
  background-position: -10px -10px;
	width:149px;
	height:26px;
	float:left;
}
#breadcrumb .searchInput {
	background:transparent;
	border:0;
	color: #6a848f;
	padding:0 5px;
	width:139px;
	height:26px;
	line-height:26px;
	margin:0;
}

/* tcat Bars (Title Bars for Forum Home, Forum Display & Postbit)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.tcatBar {
	background: url(images/styles/lifeElement/style/tcatBG.gif) repeat-x left top;
	float: left;
	width: 100%;
	color: #1e3648;
	height:37px;
	clear:both;
	margin-top: 8px;
	border:0;
	position:relative;
}
.tcatLeft {
	background: url(images/styles/lifeElement/style/tcatLeft.gif) no-repeat left top;
	height:37px;
}
.tcatRight {
	background: url(images/styles/lifeElement/style/tcatRight.gif) no-repeat right top;
	height:37px;
}
.tcatBar .forumtitle {
	font-weight:700;

}
.tcatBar .tcatDesc {
	font-size:12px;
	font-weight:400;
}
.tcatBar h2 {
	padding-left:16px;
	font:   bold 15px arial, helvetica, sans-serif;
	line-height:37px;
	float:left;
}
.tcatBar a:link, .tcatBar a:visited {
	color:#1e3648;
}
.tcatBar a:hover {

}
.tcatBar .tcatCollapse {
	position:absolute;
	top:10px;
	right:10px;
}
/* tcat Thread List Controls - Forumdisplay */
.tcat_threadlist_controls {
	float:right;
	padding-right:8px;
}
.forumdisplaypopups, #forumdisplaypopups {
	clear:both;
}
.tcat_threadlist_controls h6 {
	height:37px;
	line-height:37px;
	padding:0;
	display:block;
	font-size:10pt;
}
.forumdisplaypopups a.popupctrl, .forumdisplaypopups.popupgroup .popupmenu a.popupctrl,
.postlist_popups h6 a.popupctrl, .postlist_popups.popupgroup .popupmenu h6 a.popupctrl {
	background:none;
	display:block;
	_display:37px;
	height:37px;
	line-height:37px;
	font-family:arial, helvetica, sans-serif;
	font-weight:bold;
	font-size:12px;
	font-weight:700;
	color:#1e3648;
	padding:0 10px;
	border: 0;
	float: left;
	clear: right;
}
.forumdisplaypopups a:hover.popupctrl, .forumdisplaypopups.popupgroup .popupmenu a:hover.popupctrl,
.postlist_popups h6 a:hover.popupctrl, .postlist_popups.popupgroup .popupmenu h6 a:hover.popupctrl {
	border: 0;
	color:#1e3648;
	text-decoration:underline;
}
#postlist_popups a, .postlist_popups a {
	color: #1e3648;
	_border: none;
}
#postlist_popups a:hover, .postlist_popups a:hover {
	color: #1e3648;
	text-decoration:underline;
}
#postlist_popups .popupmenu:hover a.popupctrl, #postlist_popups .popupmenu:hover .popupctrl a.popupctrl.active, .postlist_popups .popupmenu:hover a.popupctrl, .postlist_popups .popupmenu:hover .popupctrl a.popupctrl.active {
	border: 0;
}

#postlist_popups ul li {
	color: #3E3E3E;
}
#postlist_popups ul li a, .postlist_popups ul li a {
	color: #3E3E3E;
	_border: none;
}

#postlist_popups ul li a:hover, .postlist_popups ul li a:hover {
	color: #3E3E3E;
	text-decoration:underline;
}

#forumdisplaypopups ul a, .forumdisplaypopups ul a {
	color:#3E3E3E;
}

/* Thead Bars (Forum Home, Forum Display & Postbit)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.thead_bar .theadrow {
	background:#333f4d url(images/styles/lifeElement/style/theadBG.gif) repeat-x left top;
	display:block;
	width: 100%;
	float: left;
	position:relative;
	font:  normal 12px arial, helvetica, sans-serif;
	border:1px solid #3b4a5b;
	color:#d5d9ff;
	line-height:24px;
}
.thead_bar .padding {
	padding-left:12px;
}
.thead_bar .forumhead span.forumlastpost {
	width: 23%;
}
.thead_bar .theadrow .forumdata  {
	float: left;
}
.thead_bar {
	float: left;
	position:relative;
	width: 100%;
	display:block;
}
.thead_bar .forumhead .forumtitle {
	width: 76%;
}
.thead_bar .foruminfo {
	width: 53%;
	min-width: 30%;
	float: left;
	clear: right;
}
.thead_bar .foruminfo .forumdata {
	padding: 0;
	width: 100%;
	_width: 99%;
}
.thead_bar .forumstats, .thead_bar .forumstats_2 {
	display: block;
	float: left;
	clear: right;
	width: 16%;
	margin-right: 2%;
}
.thead_bar .foruminfo .forumdata .datacontainer {
	float: left;
	width: 86%;
	padding:0;
	padding-left: 68px;
}
.thead_bar .forumactionlinks {
	width: 5%;
	display:block;
	float:left;
	clear:right;
}
.thead_bar .forumactionlink {
	display:block;
	width:18px;
	overflow:hidden;
	float: right;
	clear: left;
	background:transparent none no-repeat;
	position: relative;
}
.thead_bar .forumstats li, .thead_bar .forumstats_2 li{
	font-size: 12pxpx;
	text-align: right;
	padding-right: 20px;
	display:block;
}
.thead_bar .forumlastpost {
	display:block;
	float: left;
	clear: right;
}
.thead_bar .theadrow .forumlastpost {
	width: 22%;
}
.forumbitBody {
	padding-right:2px;
	z-index:1;
	clear:both;
}
#post {
	z-index:1;
}
.threadlist {
	margin-top:0;
}
#threadlist .threadlisthead {
	background:#333f4d url(images/styles/lifeElement/style/theadBG.gif) repeat-x left top;
	display:block;
	width: 100%;
	float: left;
	position:relative;
	border:1px solid #3b4a5b;
	color:#d5d9ff;
	padding:4px 0px 4px 0px;
	font:  normal 12px arial, helvetica, sans-serif;
	margin: 0;
}
#threadlist .threadlisthead a, #threadlist .threadlisthead a:hover {
	color:#d5d9ff;
}
.postbit .posthead, .postbitlegacy .posthead, .eventbit .eventhead {
	background:#e9e9e9;
	clear:both;
	display:block;
	float: left;
	width: 100%;
	color: #4f5c6e;
	margin: -1px -1px 0;
	font:  normal 12px arial, helvetica, sans-serif;
	padding:4px 0px 4px 0px;
	border:1px solid #d3dadb;
}/*這是文章塊與文章塊之間的分隔*/
#posts .posthead a:link, #posts .posthead a:visited {
	color:#d5d9ff;
}
#posts .posthead a:hover {
	color:#d5d9ff;
}
#posts .posthead .time, #posts .nodecontrols {
	color:#d5d9ff;
}

/* Postbit CSS (Center Userinfo, Userinfo boxed stats wrap)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#postlist .userinfo {
	padding-top:10px;
} 
.username_container {
	padding:2px 0;
} /* additional.css 改使用者資訊 使用者名稱大小 */

.username_container .username strong {
	font-size:14px;
} /* additional.css 改使用者資訊 使用者名稱大小 */
.usertitle, .rank {
	text-align:center;
}
.usercenter {
	padding-top:5px;
	text-align:center;
}
.post_field {
	background:#fff none   ;
	color:#4d5153;
	border:1px solid #bcb6ad;
	padding:3px 3px 3px 10px;
	margin-top: 2px;
	text-align:left;
}
.post_field strong {
	color:#890000;
}
.post_field dt {
	color:#890000;
	font-weight:700;
}
.postbit, .postbitlegacy, .eventbit {
	margin-bottom: 0;
}
.bbcode_container .bbcode_quote_container {
	background:none;
}

.forum_info_block, .forum_info_form {
	background:none;
}
.postfoot {
	border-top: 1px solid #d3dadb;
}
.postfootWrap {
	border-right: 1px solid #d3dadb;
}
#thread_info a.collapse {
	position: absolute;
	top: 9px;
}

/*************************************************/
/* TOP MEMBER BAR*/
.toplinks .notifications a.popupctrl {	
       -webkit-border-radius: 5px;
-moz-border-radius: 5px;
       border-radius: 5px;
       color:#fff;
}

.toplinks .notifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl.active, .toplinks ul.isuser li a:hover {
	-moz-border-radius: 5px !important;
	-webkit-border-radius: 5px !important;
}

#toplinks, .toplinks {
	text-align:left;
	line-height:20px;
	top:6px;
	right:0;
}

/* Bottom Bar
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.bottomBar {
  background: url(http://attach.iphone4.tw/images/styles/lifeElement/style/bottomBarBG.gif) repeat-x left bottom;
  height:4px;
  font-size:0;
  clear:both;
}

/* CMS & Blog CSS
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
h1.header, h2.header { 
	text-transform:capitalize; 
}

/* Forum Home
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.forumrow .forumtitle a:link, .forumrow .forumtitle a:visited {
	color:#15315f;
	font:   16px arial, helvetica, sans-serif;
}
.forumrow .forumtitle a:hover{
	color:#750000;
}
.forumrow .lastposttitle a:link, .forumrow .lastposttitle a:visited {
	color:#750000;
	font-weight:700;
}
.forumrow .lastposttitle a:hover{
	color:#15315f;
}
#forums .lastpostby a.username {
	color:#1d79a5;
}
#forums .lastpostby a.username:hover {
	color:#15315f;
}
.forumdescription {
	color:;
}
#notices .restore {
	background:#ffefb6 none   ;
	border:1px solid #ebd27b;
	color:#3c3a22;
	line-height:16px;
	padding:8px 10px 8px 10px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

/* Advanced Search
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#searchtypeswitcher {
	border-bottom:4px solid #18202c;
}
#searchtypeswitcher li a {
	background-color:#475567;
	color:#FFF;
}

#searchtypeswitcher li.selected a {
	background-color:#18202c;
}

#searchtypeswitcher li a:hover {
	background-color:#18202c;
}

/* vBulletin Groups
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
li.sgicon .maincol, #sidebar li.sgicon .maincol,#thumbnails li {
	background: #fff none   ;
}
#sidebar li.sgicon .maincol .textcontrol {
	color: #424242;
}
#content .grouplist .blockrow > li, #content .grouplist .blockrow > ol, #content .grouplist .blockrow > div {
	background: #f5f5f5 none   ;
	border: 1px solid #d3dadb;
}
#pictures .blockbody .blockrow, #group_discussion_inlinemod_form .blockbody .blockrow {
	border: 1px solid #d3dadb;
}
.toolsmenu {
	background: #d7dde4 url(images/misc/blog/top-highlight.png) repeat-x left top;
	_background-image: none;
	border: 1px solid #a8b6c6;
}
.toolsmenu div {
	border-top:none;
	color: #424242;
}
.toolsmenu h1 a {
	color: #424242;
}
.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .nopopupgroup li a {
	color: #424242;
}

.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover .popupctrl a.popupctrl.active {
	color: #424242;
}
dl.blogbit, tr.blogbit,
dl.blogcatbit, tr.blogcatbit {
	background: #fff none   ;
}