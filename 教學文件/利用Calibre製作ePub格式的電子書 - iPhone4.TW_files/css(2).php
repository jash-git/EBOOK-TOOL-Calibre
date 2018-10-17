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

/* Don't use left and right stylevar here */

#content_container {
	width:100%;
	float:left;
	margin-right: -185px;
	padding: 10px 0;
}
#content_container.contentright {
	float:right;
	margin-right:0;
	margin-left:-185px;
}

#content_container #content {
	/*margin-right:185px;*/
	margin-right:220px;
}
#content_container.contentright #content {
	margin-right:0;
	margin-left:185px;
}

/*-----------------------------------*/
/* SIDEBAR */
/* Don't use left and right stylevar here */
#sidebar_container {
	float:right;
	width:165px;
	padding: 17px 0;
	margin-bottom:3em;
}

#sidebar_container.sidebarleft {
	float:left;
}

#sidebar_container a {
	color: #15315f;
}

#sidebar_container a:hover {
	color: #750000;
}

#sidebar_button {
	display:block;
	margin-top: 40px;
	float:right;
	margin-right:-28px;
	_margin: 40px 0 0 0;
	_display: inline-block;
}
#sidebar_button {
	_display: inline;
}
#sidebar_container.sidebarleft #sidebar_button {
	float:left;
	margin-left:-28px;
}

#sidebar_container .block {
	margin-bottom:4px;
	padding:6px;
	border-top-right: 5px;
	border-top-left: 5px;
	border-top-right: 5px;
	border-top-left: 5px;
}

#sidebar_container .blockbody {
	padding: 0;
	color: #4d5153;
	border:1px solid #a8b6c6;
	-moz-border-radius:5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	background:rgb(255, 255, 255);
}

#sidebar_container .blockrow {
	border-top: 1px solid rgb(255, 255, 255);
	-moz-border-radius:5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	background:rgb(255, 255, 255) url(images/gradients/gradient-black-down.png) repeat-x  ;
	padding:10px 6px 10px 6px;
}

#sidebar_container .underblock {
	height:9px;
	background:transparent url(images/gradients/bottom-shadow.png) repeat-x left bottom;
}

#sidebar_container .blocksubhead {
	padding:10px 6px 10px 6px;
}

#sidebar_container .blocksubhead {
	background:transparent none;
	font-size:13px;
	height:16.76px;
	color: #424242;
	padding: 5px 6px;
	border:none;
	outline:none;
	font-weight:bold;
}

#sidebar_container .blocksubhead span.blocktitle {
	width: auto;
	display:block;
	white-space:nowrap;
	float:left;
	overflow:hidden;
	padding-left:3px;
}

#sidebar_container .blocksubhead img {
	vertical-align:middle;
	float: left;
}

#sidebar_container .blocksubhead img.inlineimg {
	float: none;
	position: relative;
	top: -2px;
}

#sidebar_container .blocksubhead a.username {
	padding-right:20px;
}

#sidebar_container .formcontrols .blockrow label {
	width:auto;
}

#sidebar_container .advanced.blockfoot {
	padding:6px;
	border-bottom:none;
	font-size:88%;
	font-weight:bold;
	background: transparent;
}
#sidebar_container .searchblock .advanced a {
	line-height:2;
}

#sidebar_container .searchblock .advanced .button {
	float:right;
}


#sidebar_container > ul {
	background:#d7dde4 url(images/misc/blog/top-highlight.png) repeat-x left top;
	border:1px solid #a8b6c6;
	-moz-border-radius:5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;

	-moz-box-shadow:-2px 2px 2px #c8c8c8;
	-webkit-box-shadow:-2px 2px 2px #c8c8c8;
	box-shadow:-2px 2px 2px #c8c8c8;

	float:left;
	width:99%;
}
#sidebar_container a.collapse {
	position:static;
}

#sidebar_container.sidebar_closed {
	width:0px;
}

#sidebar.sidebar_hidden {
	display:none;
}

#content_container.sidebar_nomargin_left, #content_container #content.sidebar_nomargin_left {
	margin-left:0px;
}

#content_container.sidebar_nomargin_right, #content_container #content.sidebar_nomargin_right {
	margin-right:0px;
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